## Facebook Login

Tomasz Okoński

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.2&appId=351134035507396&autoLogAppEvents=1">
		  window.fbAsyncInit = function() {
			FB.init({
			  appId      : '647911782340559',
			  cookie     : true,
			  xfbml      : true,
			  version    : 'v3.2'
			});
			  
			FB.AppEvents.logPageView();   
			  
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "https://connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		   
			FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
			});
</script>
<div class="fb-login-button" data-size="medium" data-button-type="login_with" data-auto-logout-link="false" data-use-continue-as="false"></div>