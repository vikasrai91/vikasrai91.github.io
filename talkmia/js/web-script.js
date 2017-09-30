var global_username = 'eddyy';
var global_password = 'eddyy';
var global_application_key = 'c72d96c2-899e-46de-ac29-7705fc6f9fd0';

var callDetailsArray = [];

function loader(flag) {
	if (flag) {
		$('#loader-element').removeClass('hide');
		return;
	}
	$('#loader-element').addClass('hide');
}

/*** Login user and save session in localStorage ***/
var runLogin = function(){
	loader(true);
	var signInObj = {};
	signInObj.username = global_username;
	signInObj.password = global_password;

	//Use Sinch SDK to authenticate a user
	sinchClient.start(signInObj, function() {
		global_username = signInObj.username;
		//Store session & manage in some way (optional)
		localStorage[sessionName] = JSON.stringify(sinchClient.getSession());
		loader();
	}).fail(loader);
}

/*** Set up sinchClient ***/

sinchClient = new SinchClient({
	applicationKey: global_application_key,
	capabilities: {calling: true},
	startActiveConnection: true, /* NOTE: This is required if application is to receive calls / instant messages. */ 
	//Note: For additional loging, please uncomment the three rows below
	onLogMessage: function(message) {
		console.log(message);
	},
});


/*** Name of session, can be anything. ***/

var sessionName = 'sinchSessionWEB-' + sinchClient.applicationKey;


/*** Check for valid session. NOTE: Deactivated by default to allow multiple browser-tabs with different users. ***/

var sessionObj = JSON.parse(localStorage[sessionName] || '{}');
if(false && sessionObj.userId) { 
	sinchClient.start(sessionObj)
		.then(function() {
			global_username = sessionObj.userId;
			//Store session & manage in some way (optional)
			localStorage[sessionName] = JSON.stringify(sinchClient.getSession());
		})
		.fail(function() {
			//No valid session, take suitable action, such as prompting for username/password, then start sinchClient again with login object
			runLogin();
		});
}
else {
	runLogin();
}

/*** Define listener for managing calls ***/

var callListeners = {
	onCallProgressing: function(call) {
		$('audio#ringback').prop("currentTime", 0);
		$('audio#ringback').trigger("play");

		//Report call stats
		$('div#callLog').append('<div id="stats">Ringing...</div>');
	},
	onCallEstablished: function(call) {
		$('audio#incoming').attr('src', call.incomingStreamURL);
		$('audio#ringback').trigger("pause");
		$('audio#ringtone').trigger("pause");

		//Report call stats
		var callDetails = call.getDetails();
		$('div#callLog').append('<div id="stats">Answered at: '+(callDetails.establishedTime)+'</div>');
	},
	onCallEnded: function(call) {
		$('audio#ringback').trigger("pause");
		$('audio#ringtone').trigger("pause");
		$('audio#incoming').attr('src', '');

		$('a.call-btns').removeClass('incall');
		$('a.call-btns').removeClass('callwaiting');

		//Report call stats
		var callDetails = call.getDetails();
		callDetailsArray.push(call);
		$('div#callLog').append('<div id="stats">Ended: '+callDetails.endedTime+'</div>');
		$('div#callLog').append('<div id="stats">Duration (s): '+callDetails.duration+'</div>');
		$('div#callLog').append('<div id="stats">End cause: '+call.getEndCause()+'</div>');
		if(call.error) {
			$('div#callLog').append('<div id="stats">Failure message: '+call.error.message+'</div>');
		}
	}
}

/*** Set up callClient and define how to handle incoming calls ***/

var callClient = sinchClient.getCallClient();
callClient.initStream().then(function() { // Directly init streams, in order to force user to accept use of media sources at a time we choose
	$('div.frame').not('#chromeFileWarning').show();
}); 
var call;

callClient.addEventListener({
  onIncomingCall: function(incomingCall) {
	//Play some groovy tunes 
	$('audio#ringtone').prop("currentTime", 0);
	$('audio#ringtone').trigger("play");

	//Print statistics
	$('div#callLog').append('<div id="title">Incoming call from ' + incomingCall.fromId + '</div>');
	$('div#callLog').append('<div id="stats">Ringing...</div>');
	$('a.call-btns').addClass('incall');

	//Manage the call object
    call = incomingCall;
    call.addEventListener(callListeners);
	$('a.call-btns').addClass('callwaiting');
  }
});

/*** Make a new data call ***/

$('a#call').click(function(event) {
	event.preventDefault();
	if ($.trim($('input#called-number').val()) == '') {
		alert('Please enter a valid number.');
		return false;
	}
	var calledNumber = $('input#called-number').attr('data-code') + $('input#called-number').val();

	if(!$(this).hasClass("incall") && !$(this).hasClass("callwaiting")) {
		
		$('a.call-btns').addClass('incall');

		$('div#callLog').append('<div id="title">Calling ' + calledNumber +'</div>');

		console.log('Placing call to: ' + calledNumber);
		call = callClient.callPhoneNumber(calledNumber);

		call.addEventListener(callListeners);
	}
});

/*** Hang up a call ***/

$('a#hangup').click(function(event) {
	event.preventDefault();

	if($(this).hasClass("incall")) {
				
		console.info('Will request hangup..');

		call && call.hangup();
	}
});

$("#squarespaceModa4").on("hidden.bs.modal", function(){
    $("#call").attr("class", 'call-btns');
    $("#hangup").attr("class", 'call-btns');
    $("#called-number").val('');
    $("#callLog").html('');
});