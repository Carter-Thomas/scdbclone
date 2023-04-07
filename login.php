	
	<html>
	<head>
		<title>Speed Cube Database - Sign In</title>
		<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="description" content="Free online speedcubing algorithm and reconstruction database, covers every algorithm for 2x2 - 6x6 including F2L, OLL, PLL, COLL, ZBLL, WV and much more" />
<meta name="keywords" content="rubiks, speedcube, algdb, cubing, speedcubing, algorithm, alg, 3x3, 4x4, 5x5, 6x6, 2x2, OLL, COLL, PLL, Parity, WV, ZBLL, CLL, EG1" />
<meta name="author" content="Gil Zussman" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&display=swap" rel="stylesheet">
<script type="text/javascript" src="includes/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="includes/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="includes/jquery-ui-1.12.1/jquery-ui.min.css">
<link rel="stylesheet" href="speedcubedb.css?d=3">
<link rel="stylesheet" href="includes/fontawesome-free-5.14.0-web/css/all.min.css">
<link rel="shortcut icon" type="image/jpg" href="/favicon.png" />
<script type="text/javascript" src="includes/jcookie.js"></script>
<script src="includes/tilt.jquery.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-175803107-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-175803107-1');
</script>		<link rel="stylesheet" href="login.css">
		<script type="text/javascript" src="login.js"></script>
	</head>
	<body>
		<div id="pageheader">
			<div id="pageheadercontainer">
				<div class="logocontainer">
	<a href="/">
	<img src="logo.png" class="logo" />
		<div class="logotext">Speed Cube DB</div>
	</a>
</div>
<button id="darkmodebutton"><i class="fa fa-moon" aria-hidden="true"></i></button>	
				
				
				
<div id="usercontrols">
	<a href="login.php">
	
		<a id="googlelogin" href='https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=56005720278-hgk8iclpv6jogpih0d5slqjtgmoldquo.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Fwww.speedcubedb.com%2Fsso.php&state&scope=email%20profile&approval_prompt=auto'><img src="btn_google_signin_dark_normal_web.png" alt="Sign in via Google" /></a>
	</a>
		

<script>
					
	$("#googlelogin").on("hover mousehover focus", function(){
		if (typeof(Storage) !== "undefined") {	
				window.localStorage.setItem("comeback",location.href);
		}
	});
</script>
	
</div>
<div class="donatebutton"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=YXDSNHGD65YHU&currency_code=USD&source=url">Donate</a></div>

				
			
				<div style="clear: both;"></div>
			</div>
		</div>
		<div id="logincontainer">
			<div id="logindiv">
				<form method="post" autocomplete="off">
					<div class="formfield">
					<h2>Sign In</h2>
					<h3>To Contribute</h3>
					</div>
					<div class="formfield">
						<input type="text" name="username" placeholder="username" autocomplete="false" pattern="[ _a-zA-Z-0-9]+" title="Enter your username - only letters and/or numbers" />
					</div>
					<div class="formfield">
						<input type="password" name="password" placeholder="Password" autocomplete="false" pattern="[ _a-zA-Z-0-9]+" title="Enter your password - only letters and/or numbers" />
					</div>
					<div class="formfield">
						<input type="submit" value="Sign In" />
					</div>
					
									</form>
			</div>
		</div>
										
	</body>
</html>