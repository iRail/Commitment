<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Ik neem de nachtbus! Omdat nacht-, feest- en avondlijnen moeten blijven">
  <title>Ik neem de nachtbus</title>

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/screen.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="js/libs/modernizr-2.5.3.min.js"></script>

  <?php require 'dbconfig.php' ?>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<div class="above">
</div>
  <header>
	<div id="left" class="box">
		<div class="boxtop">Bereik:</div>
			<?php
			$result = mysql_query("SELECT * FROM users", $link);
			$num_rows = mysql_num_rows($result);
			?>
		<div class="boxbottom"><span style="color: #6fafff; font-weight: 900; font-size: 24px"><?php echo $num_rows; ?></span><br> pers.</div>
	</div>
	<div id="right" class="box">
		<div class="boxtop">Deel online:</div>
		<div class="boxbottom">
		<a target="_blank" href="http://www.facebook.com/dialog/feed?
app_id=273909402684521&link=http://ikneemdenachtbus.be&picture=http://ikneemdenachtbus.be/img/logo.png&name=Ik%20neem%20de%20nachtbus!&caption=Omdat%20nacht-,%20feest-%20en%20avondlijnen%20moeten%20blijven&description=Petitie%20tegen%20de%20afschaffing%20van%20de%20nachtlijnen%20en%20voor%20meer%20en%20duidelijke%20informatie.&message=Teken%20nu%20de%20petitie%20voor%20het%20behoud%20van%20de%20nacht-%20en%20avondlijnen!&redirect_uri=http://ikneemdenachtbus.be" title="Deel deze webpagina op Facebook">facebook</a>
		<br>
		<a href="http://twitter.com/?status=Ik%20neem%20de%20nachtbus!%20Omdat%20nacht-,%20feest-%20en%20avondlijnen%20moeten%20blijven:%20http%3A%2F%2Fikneemdenachtbus.be%20%23ikneemdenachtbus" target="_blank" title="Deel deze webpagina op Twitter">twitter</a></div>
	</div>
  </header>
	<!-- content -->
  <div role="main" class="content">
		<div class="contentbox-bar"><h1>Teken de petitie</h1></div>
		<div class="contentbox">
				<div class="signed">Je tekende de petitie!<br><br>Deel ze met je vrienden:</div>
				<div class="sharebuttons">
					<a class="sharebutton" id="fb" target="_blank" href="http://www.facebook.com/dialog/feed?
	app_id=273909402684521&link=http://ikneemdenachtbus.be&picture=http://ikneemdenachtbus.be/img/logo.png&name=Ik%20neem%20de%20nachtbus!&caption=Omdat%20nacht-,%20feest-%20en%20avondlijnen%20moeten%20blijven&description=Petitie%20tegen%20de%20afschaffing%20van%20de%20nachtlijnen%20en%20voor%20meer%20en%20duidelijke%20informatie.&message=Ik%20tekende%20net%20de%20petitie%20voor%20het%20behoud%20van%20de%20nacht-%20en%20avondlijnen!&redirect_uri=http://ikneemdenachtbus.be" title="Deel deze webpagina op Facebook">facebook</a>
					<a class="sharebutton" id="twitter" href="http://twitter.com/?status=Ik%20tekende%20net%20de%20nachtbus%20petitie%20omdat%20nacht-,%20feest-%20en%20avondlijnen%20moeten%20blijven:%20http%3A%2F%2Fikneemdenachtbus.be%20%23ikneemdenachtbus" target="_blank" title="Deel deze webpagina op Twitter">twitter</a>
				</div>
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
