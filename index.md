## Facebook Login

Autor: Tomasz Okoński

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2&appId=351134035507396&autoLogAppEvents=1">
		  window.fbAsyncInit = function() {
			FB.init({
			  appId      : '351134035507396',
			  cookie     : true,
			  xfbml      : true,
			  version    : 'v3.2'
			});
			  
			    FB.getLoginStatus(function(response) {
				  statusChangeCallback(response);
				}); 
			  
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "https://connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		   
        function checkLoginState() {
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        }
		   
   function statusChangeCallback(response) {
                console.log('statusChangeCallback');
                console.log(response);
                // The response object is returned with a status field that lets the
                // app know the current login status of the person.
                // Full docs on the response object can be found in the documentation
                // for FB.getLoginStatus().
                if (response.status === 'connected') {
                    // Logged into your app and Facebook.
                    console.log('Welcome!  Fetching your information.... ');
                    FB.api('/me', function (response) {
                        console.log('Successful login for: ' + response.name);
                        document.getElementById('status').innerHTML =
                          'Thanks for logging in, ' + response.name + '!';
                    });
                } else {
                    // The person is not logged into your app or we are unable to tell.
                    document.getElementById('status').innerHTML = 'Please log ' +
                      'into this app.';
                }
            }   
</script>
<fb:login-button scope="public_profile" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>