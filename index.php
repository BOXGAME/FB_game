<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<title>Social.io</title>
</head>

<body>

<h1 id="fb-welcome"></h1>


<?php
	$NazwaStrony="Social.io"; 
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
<br>
<center><h1>COMMING SOON TO FB ANDROID AND WEB_GL</h1></center>

</body>
</html>
