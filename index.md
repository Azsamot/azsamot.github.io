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
			  
			FB.AppEvents.logPageView();   
			  
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "https://connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		   
		  function statusChangeCallback(response) {
			  alert("chuj");
			if (response.status === 'connected') {
				alert("dupa");
			  testAPI();
			} else {
				alert("chuj1212");
			  document.getElementById('status').innerHTML = 'Nie jesteś zalogowany';
			}
		  }		   
		   
		  function checkLoginState() {
			  FB.getLoginStatus(function(response) {
				  alert("chu2131231j");
				statusChangeCallback(response);
			  });
			}
		  function testAPI(){
			FB.api('/me', function(response) {
				alert("wqerqwreq");
				document.getElementById('status').innerHTML = 'Zalogowano jako '+response.name;
			});			  
		  }
</script>
<fb:login-button scope="public_profile" onlogin="checkLoginState();">
</fb:login-button>

<div id="status">
</div>