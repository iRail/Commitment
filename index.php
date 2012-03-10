<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ik neem de nachtbus</title>
  <meta name="description" content="">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/screen.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="js/libs/modernizr-2.5.3.min.js"></script>

<?php 
	//include './config/facebookcnf.php';
?>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<div class="above">
</div>
  <header>
	<p>De Lijn - Nachtbussen</p> <!--Change <this text into config later-->
	<div id="left" class="box">
		<div class="boxtop">Bereik:</div>
		<div class="boxbottom"><span style="color: #6fafff; font-weight: 900; font-size: 24px">4000</span><br> pers.</div>
	</div>
	<div id="right" class="box">
		<div class="boxtop">Deel online:</div>
		<div class="boxbottom"><a target="_blank" href="http://www.facebook.com/sharer.php?u=http://ikneemdenachtbus.be" title="Deel deze webpagina op Facebook">facebook</a><br><br><a href="http://twitter.com/?status=Ik%20neem%20de%20nachtbus!%20Omdat%20nacht-,%20feest-%20en%20avondlijnen%20moeten%20blijven:%20http%3A%2F%2Fikneemdenachtbus.be%20%23ikneemdenachtbus" target="_blank" title="Deel deze webpagina op Twitter">twitter</a></div>
	</div>
  </header>
	<!-- content -->
  <div role="main" class="content">
		<div class="contentbox-bar"><h1>Informatie</h1></div>
		<div class="contentbox">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="contentbox-bar"><h1>Vind je lijn</h1></div>
		<div class="contentbox">
			<h2 style="text-align: center; color: #f1e300; font-weight: 900;">iRail API goes here</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		</div>
		<div class="contentbox-bar"><h1>Teken de petitie</h1></div>
		<div class="contentbox">
			<p>twitter</p>
			<p>facebook</p>
				<?php if ($facebook->getSession()) { ?>
				<form action="./config/fbsign.php" method="post">
				<fieldset class="field_name">
				<label>First Name</label>
				<input class="name" name="first_name" type="text" value="<?php if ($facebook->getSession()) {echo $me['first_name'];}else{echo'First Name';} ?>" />
				</fieldset>
				<fieldset class="field_name">
				<label>Last Name</label>
				<input class="name" name="last_name" type="text" value="<?php if ($facebook->getSession()) {echo $me['last_name'];}else{echo'Last Name';} ?>" />
				</fieldset>
				<fieldset>
				<label>Email Address</label>
				<input name="email" type="text" value="<?php if ($facebook->getSession()) {echo $me['email'];}else{echo'email address';} ?>" />
				</fieldset>
				<fieldset>
				<input name="submit" type="submit" value="submit" />
				</fieldset>
				</form>
				<?php } else {
				  ?>
				<p>Sign up with Facebook <fb:login-button perms="email,user_checkins,user_location,publish_stream,user_birthday,offline_access"> Connect</fb:login-button> It only takes a few seconds</p>
				<div id="fb-root"></div>
				      <script src="http://connect.facebook.net/nl_BE/all.js"></script>
				      <script>
					 FB.init({ 
					    appId:'273909402684521', cookie:true, 
					    status:true, xfbml:true 
					 });
						 FB.Event.subscribe('auth.login', function(response) {
					window.location.reload(); //will reload your page you are on
				      });
				      </script> 
				 <?php }
				?> 
	
		</div>
  </div>
  <footer>
&copy; 2012 iRail vzw/asbl - Some Rights Reserved - <a href="http://github.com/iRail/Commitment">Source code</a>
  </footer>


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>

</body>
</html>
