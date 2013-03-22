/************** LINKEDIN **********************/

//"user-token": '<?js= id ?>'

function onLinkedInAuth() {
/*IN.API.Profile("me")
    // AJAX call to pass back id to your server
    .result( function(me) {
	var id = me.values[0].id;
	var login = "linkedin";

	$.post(‘/users/ajax’, {
		user_token: id,
		login_type: login
	},
	function(error) {

		if(error.length != 0) {
			$(‘#r’).after(‘
			‘ + error + ‘
			‘);
		} else {
			//$(‘#’ + fieldName + ‘-exists’).remove();
		}
	});
    });
*/
}


/***************** FACEBOOK *********************/
  // Load the SDK Asynchronously
  /*
   (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));

   window.fbAsyncInit = function() {
    FB.init({
      appId      : '341471399307182', // App ID
      channelUrl : 'localhost/parfait/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
    
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
                // connected
                //status: 'connected',
                //authResponse: {
                //      accessToken: '...',
                //      expiresIn:'...',
                //      signedRequest:'...',
                //      userID:'...'
                //}
        } else if (response.status === 'not_authorized') {
        // not_authorized
        login();
        } else {
        login();
        // not_logged_in
        }
    });

  };
  
  function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            // connected
                testAPI();
        } else {
            // cancelled
        }
    });
  }

   function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        console.log('Good to see you, ' + response.name + '.');
    });
   }

*/
/******************** TWITTER *********************/
function login_twitter() {
window.alert("Twitter");
}
