<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>FB EATER</title>
</head>

<body>

<h1 id="fb-welcome"></h1>


<?php
	$NazwaStrony="FB EATER"; 
	echo "<center><h1>$NazwaStrony<br>game developed by boxgame studio</h1></center>";
	
	

		echo<<<END
	
		
END;
?>
	
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '570619062966909',
      xfbml      : true,
      version    : 'v2.7'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<br>
<div class="fb-login-button" data-max-rows="100" data-size="xlarge" data-show-faces="false" data-auto-logout-link="false"></div>
<img src="http://devtut.pl/gameimg/promo_fb_eater.png" alt="FB EATER">
<br>
<center><h1>COMMING SOON (2016) TO FB, ANDROID, AND WEB_GL.</h1></center>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.7&appId=570619062966909";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
