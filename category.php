


<!doctype html>
<html lang="en">
  <head>
	<base href="/"/>
    
	
    
	<base href="/"/>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2NP03VW57J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2NP03VW57J'); 
</script>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="icon" type="image/png" href="/favicon.png"/>

<!-- JQ, FAS -->
<script type="text/javascript" src="includes/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="includes/fontawesome-free-5.14.0-web/css/all.min.css">
<script type="text/javascript" src="includes/jcookie.js"></script>

<!-- Bootstrap CSS -->
<link href="includes/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="includes/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>

<link href="template/theme.css" rel="stylesheet">


<meta name="author" content="Gil Zussman" />

<script>
	$(document).ready(function() {
		var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
		var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		  return new bootstrap.Tooltip(tooltipTriggerEl)
		})
	});
</script>	<meta name="description" content="Free online speedcubing algorithm and reconstruction database, covers every algorithm for 2x2 - 6x6 including F2L, OLL, PLL, COLL, ZBLL, WV and much more" />
	<meta name="keywords" content="rubiks, speedcube, algdb, cubing, speedcubing, algorithm, alg, 3x3, 4x4, 5x5, 6x6, 2x2, OLL, COLL, PLL, Parity, WV, ZBLL, CLL, EG1" />
	
	<script type="text/javascript" src="includes/roofpig_and_three.min.js"></script>
	<style>
		.roofpig { 
			background-color: #ddd !important;
			border: none !important;
		}
		.roofpig-button {
						
			font-size: 20px !important;
			height: 29px !important;

		}
		
		
		.pigtrigger {
			cursor: pointer;
		}
		
		.list-group-item.selected {
			background-color: #eee;
		}
		
		/* bookmarks */
		.bookmark {
			cursor: pointer;
			color: gray;
		}

		.bookmark:hover {
			color: black;
		}

		.bookmark.selected {
			color: yellow;
		}
	</style>

    
	<script type="text/javascript" src="category.js?d=7"></script>
	<script>
		//
		// roofpig
		//
		$(document).ready(function() {
			$(".pigtrigger").click(function(e) {
				e.preventDefault();
				let target = $(this).attr("data-target");
				$(target).empty();
				CubeAnimation.create_in_dom(target, "colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg="+$(this).find("span").text()+"|flags=canvas|flags=showalg|speed=800", "class='roofpig'");
				
				$(this).parent().children().removeClass("selected");
				$(this).addClass("selected");
			});
		}); 
	
	</script>
	
	
    <link href="template/category.css" rel="stylesheet">
	<title>OLL - Speed Cube Database</title>
  </head>
  <body>
		<header>
		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="assets/logo.png" style="width: 40px; height: 40px;" />SpeedCubeDB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a style="background-color: inherit;" class="nav-link active dropdown-toggle" href="#" id="algsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Algorithms
          </a>
          <ul class="dropdown-menu" aria-labelledby="algsDropdown">
            <li><a class="dropdown-item" href="/a/3x3">3x3</a></li>
            <li><a class="dropdown-item" href="/a/2x2">2x2</a></li>
            <li><a class="dropdown-item" href="/a/4x4">4x4</a></li>
            <li><a class="dropdown-item" href="/a/5x5">5x5</a></li>
            <li><a class="dropdown-item" href="/b/SQ1">Square1</a></li>
            <li><a class="dropdown-item" href="/a/Megaminx">Megaminx</a></li>
          </ul>
        </li>
        <li class="nav-item ">
          <a href="/t" style="background-color: inherit;" class="nav-link active" href="#">Practice</a>
        </li>		
        <li class="nav-item">
          <a href="/r/index" style="background-color: inherit;" class="nav-link active" href="#">Reconstructions</a>
        </li>		
			<li style="background-color: inherit;" class="nav-item">			<a id="googlelogin" href='https://accounts.google.com/o/oauth2/auth?response_type=code&access_type=online&client_id=56005720278-hgk8iclpv6jogpih0d5slqjtgmoldquo.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Fwww.speedcubedb.com%2Fsso.php&state&scope=email%20profile&approval_prompt=auto'><img src="assets/btn_google_signin_dark_normal_web.png" alt="Sign in via Google" /></a>
			</li>
						
        
      </ul>
	  <button id="darkmodebtn" class="nav-item float-right me-3 btn btn-dark border-light"><i class="fa fa-moon" aria-hidden="true"></i></button>
	  <a class="nav-item float-right btn btn-info" href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=YXDSNHGD65YHU&amp;currency_code=USD&amp;source=url">Donate</a>
    
    </div>
  </div>
  
  <script>
  
  function setDarkmode()
  {
    if (getCookie("darkmode") == "true")
	{
		$("body").addClass("darkmode");
		$("table.table").addClass("table-dark");
	}
	else
	{
		$("body").removeClass("darkmode");
		$("table.table").removeClass("table-dark");
	}
  }
  
  $(document).ready(function() {
		// handle darkmode
		setDarkmode();

		$("#darkmodebtn").click(function(){	
			let darkmodeOn = $("body").hasClass("darkmode");
			setCookie("darkmode",darkmodeOn == false ? "true" : "false",500000,'/',  'speedcubedb.com');

			setDarkmode();
		});
  });
  </script>
</nav>		</header>
		<div style="margin-top: 70px;"></div>
		
		<!-- Breadcrumbs -->
		<div class="container">
			<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active"><a href="a/3x3">3x3</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="a/3x3/OLL">OLL</a></li>
				</ol>
			</nav>		
		<!-- /Breadcrumbs -->


		<!-- Header -->
		<div class="container row">
			<div class="col">
				<h2>OLL</h2>
				
				<label for="formFileMultiple">Cross Color:</label>
				<select id="crossorientation">
					<option value="z2" selected>White</option>
					<option value="" >Yellow</option>
					<option value="x'" >Green</option>
					<option value="x" >Blue</option>
					<option value="z" >Red</option>
					<option value="z'" >Orange</option>
				</select>
			</div>
			<div class="col text-end">
				<a class="btn btn-secondary" target="_blank" href="cattopdf.php?cat=OLL">
				<i class="fas fa-3x fa-file-pdf"></i><br/>
				Print Sheet
				</a>
			</div>
		</div>		
		<!-- /Header -->


			<div class="container">
			
				<!-- Sub-Categories -->
				
				<ul class="nav nav-tabs mt-2" id="subcategorytabs">
				<li class="nav-item"><a class='nav-link active' href='#' data-val='All'><div class='subcatname'>All</div><div class='subcatcases'>57 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='All Corners Oriented'><div class='subcatname'>All Corners Oriented</div><div class='subcatcases'>2 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='Awkward Shapes'><div class='subcatname'>Awkward Shapes</div><div class='subcatcases'>4 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='C Shapes'><div class='subcatname'>C Shapes</div><div class='subcatcases'>2 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='COLL'><div class='subcatname'>COLL</div><div class='subcatcases'>7 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='Dot Case'><div class='subcatname'>Dot Case</div><div class='subcatcases'>8 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='Fish Shapes'><div class='subcatname'>Fish Shapes</div><div class='subcatcases'>4 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='Knight Move Shapes'><div class='subcatname'>Knight Move Shapes</div><div class='subcatcases'>4 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='L Shapes'><div class='subcatname'>L Shapes</div><div class='subcatcases'>6 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='Lightning Shapes'><div class='subcatname'>Lightning Shapes</div><div class='subcatcases'>6 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='Line Shapes'><div class='subcatname'>Line Shapes</div><div class='subcatcases'>4 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='P Shapes'><div class='subcatname'>P Shapes</div><div class='subcatcases'>4 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='Square Shapes'><div class='subcatname'>Square Shapes</div><div class='subcatcases'>2 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='T Shapes'><div class='subcatname'>T Shapes</div><div class='subcatcases'>2 cases</div></a></li><li class="nav-item"><a class='nav-link' href='#' data-val='W Shapes'><div class='subcatname'>W Shapes</div><div class='subcatcases'>2 cases</div></a></li>				</ul>
				
				<!-- /Sub-Categories -->
				
				<!-- Algorithms -->
				<div class="container">
										
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_1"><img src='template/renderers/jcube.php?n=3&us=llllyllll&bs=lylbbbbbb&fs=lylgggggg&ls=yyyrrrrrr&rs=yyyoooooo&d=0' /><h3>OLL 1</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-22'><span>R U2 R2 F R F' U2 R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2+R2+F+R+F%27+U2+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-22'><span>y R U' R2 D' r U' r' D R2 U R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U%27+R2+D%27+r+U%27+r%27+D+R2+U+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-22'><span>R U2' R2' F R F' U2' R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2%27+R2%27+F+R+F%27+U2%27+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-22'><span>M R U R' U R U' R' U r U2' r' U' M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+R+U+R%27+U+R+U%27+R%27+U+r+U2%27+r%27+U%27+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_1/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-22" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U2 R2 F R F' U2 R' F R F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=654s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_2"><img src='template/renderers/jcube.php?n=3&us=llllyllll&bs=yylbbbbbb&fs=lyygggggg&ls=yyyrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 2</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-23'><span>y' R U' R2' D' r U r' D R2 U R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R+U%27+R2%27+D%27+r+U+r%27+D+R2+U+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-23'><span>F R U R' U' S R U R' U' f'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U+R%27+U%27+S+R+U+R%27+U%27+f%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-23'><span>y r U r' U2 R U2 R' U2 r U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+r+U+r%27+U2+R+U2+R%27+U2+r+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-23'><span>R' U2 r U' r' U2 r U r' U2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U2+r+U%27+r%27+U2+r+U+r%27+U2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_2/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-23" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y' R U' R2' D' r U r' D R2 U R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=665s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_3"><img src='template/renderers/jcube.php?n=3&us=llllylyll&bs=lyyrrrrrr&fs=lyyoooooo&ls=lylgggggg&rs=lyybbbbbb&d=0' /><h3>OLL 3</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-24'><span>y R' F2 R2 U2 R' F R U2 R2 F2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+F2+R2+U2+R%27+F+R+U2+R2+F2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-24'><span>r' R2 U R' U r U2 r' U M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+R2+U+R%27+U+r+U2+r%27+U+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-24'><span>y' f R U R' U' f' U' F R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+f+R+U+R%27+U%27+f%27+U%27+F+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-24'><span>M R U R' U r U2 r' U M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+R+U+R%27+U+r+U2+r%27+U+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_3/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-24" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R' F2 R2 U2 R' F R U2 R2 F2 R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=680s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_4"><img src='template/renderers/jcube.php?n=3&us=llllyllly&bs=yylrrrrrr&fs=yyloooooo&ls=yylgggggg&rs=lylbbbbbb&d=0' /><h3>OLL 4</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-25'><span>y' R' F2 R2 U2 R' F' R U2 R2 F2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R%27+F2+R2+U2+R%27+F%27+R+U2+R2+F2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-25'><span>y' f R U R' U' f' U F R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+f+R+U+R%27+U%27+f%27+U+F+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-25'><span>M U' r U2 r' U' R U' R' M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+U%27+r+U2+r%27+U%27+R+U%27+R%27+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-25'><span>l L2' U' L U' l' U2 l U' M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=l+L2%27+U%27+L+U%27+l%27+U2+l+U%27+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_4/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-25" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y' R' F2 R2 U2 R' F' R U2 R2 F2 R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=690s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Square Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_5"><img src='template/renderers/jcube.php?n=3&us=llllyylyy&bs=lyybbbbbb&fs=lllgggggg&ls=lyyrrrrrr&rs=llyoooooo&d=0' /><h3>OLL 5</h3></a>									<h5>Square Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-26'><span>r' U2 R U R' U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+U2+R+U+R%27+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-26'><span>y2 l' U2 L U L' U l</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l%27+U2+L+U+L%27+U+l" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-26'><span>y2 R' F2 r U r' F R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F2+r+U+r%27+F+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-26'><span>r' U2' R U R' U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+U2%27+R+U+R%27+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_5/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-26" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r' U2 R U R' U r|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=173s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Square Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_6"><img src='template/renderers/jcube.php?n=3&us=lyylyylll&bs=lllbbbbbb&fs=yylgggggg&ls=yylrrrrrr&rs=ylloooooo&d=0' /><h3>OLL 6</h3></a>									<h5>Square Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-27'><span>r U2 R' U' R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U2+R%27+U%27+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-27'><span>r U2' R' U' R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U2%27+R%27+U%27+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-27'><span>y2 l U2 L' U' L U' l'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l+U2+L%27+U%27+L+U%27+l%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-27'><span>y' x' D R2 U' R' U R' D' x</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+x%27+D+R2+U%27+R%27+U+R%27+D%27+x" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_6/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-27" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r U2 R' U' R U' r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=181s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Lightning Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_7"><img src='template/renderers/jcube.php?n=3&us=lylyylyll&bs=llybbbbbb&fs=lyygggggg&ls=lllrrrrrr&rs=lyyoooooo&d=0' /><h3>OLL 7</h3></a>									<h5>Lightning Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-28'><span>r U R' U R U2 r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U+R+U2+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-28'><span>r U R' U R U2' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U+R+U2%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-28'><span>y2 l U L' U L U2 l'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l+U+L%27+U+L+U2+l%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-28'><span>F R' F' R U2 R U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R%27+F%27+R+U2+R+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_7/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-28" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r U R' U R U2 r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=315s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Lightning Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_8"><img src='template/renderers/jcube.php?n=3&us=lyllyylly&bs=yllgggggg&fs=yylbbbbbb&ls=yyloooooo&rs=lllrrrrrr&d=0' /><h3>OLL 8</h3></a>									<h5>Lightning Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-29'><span>y2 r' U' R U' R' U2 r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+r%27+U%27+R+U%27+R%27+U2+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-29'><span>l' U' L U' L' U2 l</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=l%27+U%27+L+U%27+L%27+U2+l" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-29'><span>R U2 R' U2 R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2+R%27+U2+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-29'><span>R' F' r U' r' F2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+F%27+r+U%27+r%27+F2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_8/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-29" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 r' U' R U' R' U2 r|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=325s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Fish Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_9"><img src='template/renderers/jcube.php?n=3&us=llyyyllyl&bs=lyloooooo&fs=yllrrrrrr&ls=yllbbbbbb&rs=yylgggggg&d=0' /><h3>OLL 9</h3></a>									<h5>Fish Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-30'><span>y R U R' U' R' F R2 U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U+R%27+U%27+R%27+F+R2+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-30'><span>R U2' R' U' S' R U' R' S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2%27+R%27+U%27+S%27+R+U%27+R%27+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-30'><span>y2 F' U' F r U' r' U r U r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F%27+U%27+F+r+U%27+r%27+U+r+U+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-30'><span>y' L' U' L U' L F' L' F L' U2 L</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+L%27+U%27+L+U%27+L+F%27+L%27+F+L%27+U2+L" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_9/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-30" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R U R' U' R' F R2 U R' U' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=237s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Fish Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_10"><img src='template/renderers/jcube.php?n=3&us=llyyyllyl&bs=lyybbbbbb&fs=llygggggg&ls=llyrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 10</h3></a>									<h5>Fish Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-31'><span>R U R' U R' F R F' R U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R%27+F+R+F%27+R+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-31'><span>y F U F' R' F R U' R' F' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F+U+F%27+R%27+F+R+U%27+R%27+F%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-31'><span>y M' R' U2 R U R' U R U M</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+M%27+R%27+U2+R+U+R%27+U+R+U+M" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-31'><span>R U R' U R' F R F' R U2' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R%27+F+R+F%27+R+U2%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_10/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-31" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U R' U R' F R F' R U2 R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=250s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Lightning Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_11"><img src='template/renderers/jcube.php?n=3&us=llllyyyyl&bs=lyybbbbbb&fs=llygggggg&ls=lylrrrrrr&rs=llyoooooo&d=0' /><h3>OLL 11</h3></a>									<h5>Lightning Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-32'><span>r' R2 U R' U R U2 R' U M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+R2+U+R%27+U+R+U2+R%27+U+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-32'><span>M R U R' U R U2 R' U M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+R+U+R%27+U+R+U2+R%27+U+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-32'><span>y2 S' U2 R U R' U R U2 R' S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+S%27+U2+R+U+R%27+U+R+U2+R%27+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-32'><span>S R U R' U R U2 R' U2 S'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=S+R+U+R%27+U+R+U2+R%27+U2+S%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_11/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-32" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r' R2 U R' U R U2 R' U M'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=338s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Lightning Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_12"><img src='template/renderers/jcube.php?n=3&us=llylyylyl&bs=lylbbbbbb&fs=yllgggggg&ls=yylrrrrrr&rs=ylloooooo&d=0' /><h3>OLL 12</h3></a>									<h5>Lightning Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-33'><span>y' M' R' U' R U' R' U2 R U' M</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+M%27+R%27+U%27+R+U%27+R%27+U2+R+U%27+M" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-33'><span>F R U R' U' F' U F R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U+R%27+U%27+F%27+U+F+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-33'><span>y' S R' U' R U' R' U2' R U2 S'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+S+R%27+U%27+R+U%27+R%27+U2%27+R+U2+S%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-33'><span>y' r R2 U' R U' R' U2 R U' R r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+r+R2+U%27+R+U%27+R%27+U2+R+U%27+R+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_12/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-33" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y' M' R' U' R U' R' U2 R U' M|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=349s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Knight Move Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_13"><img src='template/renderers/jcube.php?n=3&us=lllyyyyll&bs=lyybbbbbb&fs=lyygggggg&ls=lllrrrrrr&rs=llyoooooo&d=0' /><h3>OLL 13</h3></a>									<h5>Knight Move Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-34'><span>F U R U2 R' U' R U R' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+U+R+U2+R%27+U%27+R+U+R%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-34'><span>F U R U' R2 F' R U R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+U+R+U%27+R2+F%27+R+U+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-34'><span>r U' r' U' r U r' F' U F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U%27+r%27+U%27+r+U+r%27+F%27+U+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-34'><span>r U' r' U' r U r' y L' U L</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U%27+r%27+U%27+r+U+r%27+y+L%27+U+L" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_13/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-34" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=F U R U2 R' U' R U R' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=474s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Knight Move Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_14"><img src='template/renderers/jcube.php?n=3&us=lllyyylly&bs=yylbbbbbb&fs=yylgggggg&ls=yllrrrrrr&rs=llloooooo&d=0' /><h3>OLL 14</h3></a>									<h5>Knight Move Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-35'><span>R' F R U R' F' R F U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+F+R+U+R%27+F%27+R+F+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-35'><span>r U R' U' r' F R2 U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U%27+r%27+F+R2+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-35'><span>y2 r' U r U r' U' r y R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+r%27+U+r+U+r%27+U%27+r+y+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-35'><span>F' U' L' U L2 F L' U' L' U L</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F%27+U%27+L%27+U+L2+F+L%27+U%27+L%27+U+L" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_14/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-35" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R' F R U R' F' R F U' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=486s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Knight Move Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_15"><img src='template/renderers/jcube.php?n=3&us=lllyyylly&bs=lyybbbbbb&fs=lylgggggg&ls=llyrrrrrr&rs=llyoooooo&d=0' /><h3>OLL 15</h3></a>									<h5>Knight Move Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-36'><span>y2 l' U' l L' U' L U l' U l</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l%27+U%27+l+L%27+U%27+L+U+l%27+U+l" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-36'><span>r' U' r R' U' R U r' U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+U%27+r+R%27+U%27+R+U+r%27+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-36'><span>r' U' M' U' R U r' U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+U%27+M%27+U%27+R+U+r%27+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-36'><span>y2 R' F' R L' U' L U R' F R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F%27+R+L%27+U%27+L+U+R%27+F+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_15/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-36" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 l' U' l L' U' L U l' U l|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=501s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Knight Move Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_16"><img src='template/renderers/jcube.php?n=3&us=llyyyylll&bs=lylbbbbbb&fs=yylgggggg&ls=yllrrrrrr&rs=ylloooooo&d=0' /><h3>OLL 16</h3></a>									<h5>Knight Move Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-37'><span>r U r' R U R' U' r U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+r%27+R+U+R%27+U%27+r+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-37'><span>r U M U R' U' r U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+M+U+R%27+U%27+r+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-37'><span>y2 l U l' L U L' U' l U' l'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l+U+l%27+L+U+L%27+U%27+l+U%27+l%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-37'><span>L F L' R U R' U' L F' L'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=L+F+L%27+R+U+R%27+U%27+L+F%27+L%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_16/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-37" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r U r' R U R' U' r U' r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=515s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_17"><img src='template/renderers/jcube.php?n=3&us=ylllyllly&bs=yylbbbbbb&fs=lylgggggg&ls=lyyrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 17</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-38'><span>R U R' U R' F R F' U2 R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R%27+F+R+F%27+U2+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-38'><span>y2 F R' F' R U S' R U' R' S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F+R%27+F%27+R+U+S%27+R+U%27+R%27+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-38'><span>y' F' r U r' U' S r' F r S'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+F%27+r+U+r%27+U%27+S+r%27+F+r+S%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-38'><span>y2 F R' F' R2 r' U R U' R' U' M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F+R%27+F%27+R2+r%27+U+R+U%27+R%27+U%27+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_17/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-38" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U R' U R' F R F' U2 R' F R F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=705s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_18"><img src='template/renderers/jcube.php?n=3&us=ylylyllll&bs=lylbbbbbb&fs=yyygggggg&ls=lylrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 18</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-39'><span>y R U2 R2 F R F' U2 M' U R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U2+R2+F+R+F%27+U2+M%27+U+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-39'><span>R D r' U' r D' R' U' R2 F R F' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+D+r%27+U%27+r+D%27+R%27+U%27+R2+F+R+F%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-39'><span>y F S' R U' R' S R U2' R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F+S%27+R+U%27+R%27+S+R+U2%27+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-39'><span>y' r' U' R U M' U' R2 F R F' U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+r%27+U%27+R+U+M%27+U%27+R2+F+R+F%27+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_18/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-39" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R U2 R2 F R F' U2 M' U R U' r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=719s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_19"><img src='template/renderers/jcube.php?n=3&us=ylylyllll&bs=lylbbbbbb&fs=lylgggggg&ls=lyyrrrrrr&rs=yyloooooo&d=0' /><h3>OLL 19</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-40'><span>y S' R U R' S U' R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+S%27+R+U+R%27+S+U%27+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-40'><span>M U R U R' U' M' R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+U+R+U+R%27+U%27+M%27+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-40'><span>y2 r U2 R' U' R U' r2 U2 R U R' U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+r+U2+R%27+U%27+R+U%27+r2+U2+R+U+R%27+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-40'><span>r' R U R U R' U' r R2 F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+R+U+R+U+R%27+U%27+r+R2+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_19/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-40" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y S' R U R' S U' R' F R F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=737s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Dot Case" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_20"><img src='template/renderers/jcube.php?n=3&us=ylylylyly&bs=lylbbbbbb&fs=lylgggggg&ls=lylrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 20</h3></a>									<h5>Dot Case</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-41'><span>S' R U R' S U' M' U R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=S%27+R+U+R%27+S+U%27+M%27+U+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-41'><span>r U R' U' M2 U R U' R' U' M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U%27+M2+U+R+U%27+R%27+U%27+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-41'><span>S R' U' R U R U R U' R' S'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=S+R%27+U%27+R+U+R+U+R+U%27+R%27+S%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-41'><span>M U R U R' U' M2 U R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+U+R+U+R%27+U%27+M2+U+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_20/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-41" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=S' R U R' S U' M' U R U' r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=750s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="COLL" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_21"><img src='template/renderers/jcube.php?n=3&us=lylyyylyl&bs=llloooooo&fs=lllrrrrrr&ls=ylybbbbbb&rs=ylygggggg&d=0' /><h3>OLL 21</h3></a>									<h5>COLL</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-42'><span>R U R' U R U' R' U R U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R+U%27+R%27+U+R+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-42'><span>y R U2 R' U' R U R' U' R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U2+R%27+U%27+R+U+R%27+U%27+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-42'><span>y F R U R' U' R U R' U' R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F+R+U+R%27+U%27+R+U+R%27+U%27+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-42'><span>y R' U2 R U R' U' R U R' U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+U2+R+U+R%27+U%27+R+U+R%27+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_21/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-42" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U R' U R U' R' U R U2 R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=11s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="COLL" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_22"><img src='template/renderers/jcube.php?n=3&us=lylyyylyl&bs=yllbbbbbb&fs=llygggggg&ls=ylyrrrrrr&rs=llloooooo&d=0' /><h3>OLL 22</h3></a>									<h5>COLL</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-43'><span>R U2 R2 U' R2 U' R2 U2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2+R2+U%27+R2+U%27+R2+U2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-43'><span>R' U2 R2 U R2 U R2 U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U2+R2+U+R2+U+R2+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-43'><span>R U2' R2' U' R2 U' R2' U2' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2%27+R2%27+U%27+R2+U%27+R2%27+U2%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-43'><span>f R U R' U' S' R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=f+R+U+R%27+U%27+S%27+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_22/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-43" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U2 R2 U' R2 U' R2 U2 R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=25s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="COLL" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_23"><img src='template/renderers/jcube.php?n=3&us=yyyyyylyl&bs=lllbbbbbb&fs=ylygggggg&ls=lllrrrrrr&rs=llloooooo&d=0' /><h3>OLL 23</h3></a>									<h5>COLL</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-44'><span>R2 D R' U2 R D' R' U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R2+D+R%27+U2+R+D%27+R%27+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-44'><span>y2 R2 D' R U2 R' D R U2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R2+D%27+R+U2+R%27+D+R+U2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-44'><span>R U R' U R U2 R2 U' R U' R' U2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R+U2+R2+U%27+R+U%27+R%27+U2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-44'><span>y R U R' U' R U' R' U2 R U' R' U2 R U R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U+R%27+U%27+R+U%27+R%27+U2+R+U%27+R%27+U2+R+U+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_23/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-44" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R2 D R' U2 R D' R' U2 R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=39s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="COLL" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_24"><img src='template/renderers/jcube.php?n=3&us=lyyyyylyy&bs=llybbbbbb&fs=yllgggggg&ls=lllrrrrrr&rs=llloooooo&d=0' /><h3>OLL 24</h3></a>									<h5>COLL</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-45'><span>r U R' U' r' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U%27+r%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-45'><span>y R U R D R' U' R D' R2</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U+R+D+R%27+U%27+R+D%27+R2" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-45'><span>y' R' U' R' D' R U R' D R2</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R%27+U%27+R%27+D%27+R+U+R%27+D+R2" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-45'><span>y2 R' F' r U R U' r' F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F%27+r+U+R+U%27+r%27+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_24/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-45" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r U R' U' r' F R F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=52s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="COLL" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_25"><img src='template/renderers/jcube.php?n=3&us=yylyyylyy&bs=llloooooo&fs=yllrrrrrr&ls=lllbbbbbb&rs=llygggggg&d=0' /><h3>OLL 25</h3></a>									<h5>COLL</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-46'><span>y F' r U R' U' r' F R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F%27+r+U+R%27+U%27+r%27+F+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-46'><span>F R' F' r U R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R%27+F%27+r+U+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-46'><span>y R2 D R' U R D' R' U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R2+D+R%27+U+R+D%27+R%27+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-46'><span>y' x' R U' R' D R U R' D' x</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+x%27+R+U%27+R%27+D+R+U+R%27+D%27+x" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_25/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-46" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y F' r U R' U' r' F R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=63s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="COLL" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_26"><img src='template/renderers/jcube.php?n=3&us=yylyyylyl&bs=ylloooooo&fs=yllrrrrrr&ls=lllbbbbbb&rs=yllgggggg&d=0' /><h3>OLL 26</h3></a>									<h5>COLL</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-47'><span>y R U2 R' U' R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U2+R%27+U%27+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-47'><span>R' U' R U' R' U2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U%27+R+U%27+R%27+U2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-47'><span>y2 L' U' L U' L' U2 L</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+L%27+U%27+L+U%27+L%27+U2+L" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-47'><span>y R U2' R' U' R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U2%27+R%27+U%27+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_26/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-47" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R U2 R' U' R U' R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=74s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="COLL" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_27"><img src='template/renderers/jcube.php?n=3&us=lylyyyyyl&bs=llybbbbbb&fs=llygggggg&ls=lllrrrrrr&rs=llyoooooo&d=0' /><h3>OLL 27</h3></a>									<h5>COLL</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-48'><span>R U R' U R U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-48'><span>y' R' U2 R U R' U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R%27+U2+R+U+R%27+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-48'><span>y2 L U L' U L U2 L'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+L+U+L%27+U+L+U2+L%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-48'><span>R U R' U R U2' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R+U2%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_27/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-48" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U R' U R U2 R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=84s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="All Corners Oriented" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_28"><img src='template/renderers/jcube.php?n=3&us=yyyyylyly&bs=lllbbbbbb&fs=lylgggggg&ls=lllrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 28</h3></a>									<h5>All Corners Oriented</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-49'><span>r U R' U' M U R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U%27+M+U+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-49'><span>y2 M' U M U2 M' U M</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+M%27+U+M+U2+M%27+U+M" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-49'><span>R' F R S R' F' R S'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+F+R+S+R%27+F%27+R+S%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-49'><span>r U R' U' r' R U R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U%27+r%27+R+U+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_28/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-49" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r U R' U' M U R U' R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=97s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Awkward Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_29"><img src='template/renderers/jcube.php?n=3&us=ylyyyllyl&bs=lylbbbbbb&fs=lllgggggg&ls=llyrrrrrr&rs=yyloooooo&d=0' /><h3>OLL 29</h3></a>									<h5>Awkward Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-50'><span>y R U R' U' R U' R' F' U' F R U R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U+R%27+U%27+R+U%27+R%27+F%27+U%27+F+R+U+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-50'><span>r2 D' r U r' D r2 U' r' U' r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r2+D%27+r+U+r%27+D+r2+U%27+r%27+U%27+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-50'><span>y S' R U R' U' R' F R F' U S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+S%27+R+U+R%27+U%27+R%27+F+R+F%27+U+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-50'><span>M U R U R' U' R' F R F' M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+U+R+U+R%27+U%27+R%27+F+R+F%27+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_29/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-50" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R U R' U' R U' R' F' U' F R U R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=589s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Awkward Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_30"><img src='template/renderers/jcube.php?n=3&us=ylylyylyl&bs=lylgggggg&fs=lllbbbbbb&ls=lyyoooooo&rs=yllrrrrrr&d=0' /><h3>OLL 30</h3></a>									<h5>Awkward Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-51'><span>y' r' D' r U' r' D r2 U' r' U r U r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+r%27+D%27+r+U%27+r%27+D+r2+U%27+r%27+U+r+U+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-51'><span>y2 F R' F R2 U' R' U' R U R' F2</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F+R%27+F+R2+U%27+R%27+U%27+R+U+R%27+F2" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-51'><span>y2 F U R U2 R' U' R U2 R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F+U+R+U2+R%27+U%27+R+U2+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-51'><span>y S' R' U' R f R' U R U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+S%27+R%27+U%27+R+f+R%27+U+R+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_30/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-51" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y' r' D' r U' r' D r2 U' r' U r U r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=605s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="P Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_31"><img src='template/renderers/jcube.php?n=3&us=lyylyylly&bs=llybbbbbb&fs=yylgggggg&ls=lylrrrrrr&rs=llloooooo&d=0' /><h3>OLL 31</h3></a>									<h5>P Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-52'><span>R' U' F U R U' R' F' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U%27+F+U+R+U%27+R%27+F%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-52'><span>y S R U R' U' f' U' F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+S+R+U+R%27+U%27+f%27+U%27+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-52'><span>y2 S' r' F' r U r U' r' f</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+S%27+r%27+F%27+r+U+r+U%27+r%27+f" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-52'><span>y' R' U r' D' r U' r' D r U' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R%27+U+r%27+D%27+r+U%27+r%27+D+r+U%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_31/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-52" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R' U' F U R U' R' F' R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=195s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="P Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_32"><img src='template/renderers/jcube.php?n=3&us=llylyylyy&bs=lyybbbbbb&fs=yllgggggg&ls=lylrrrrrr&rs=llloooooo&d=0' /><h3>OLL 32</h3></a>									<h5>P Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-53'><span>S R U R' U' R' F R f'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=S+R+U+R%27+U%27+R%27+F+R+f%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-53'><span>y2 L U F' U' L' U L F L'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+L+U+F%27+U%27+L%27+U+L+F+L%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-53'><span>R U B' U' R' U R B R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+B%27+U%27+R%27+U+R+B+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-53'><span>y' R' F R F' U' r U' r' U r U r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R%27+F+R+F%27+U%27+r+U%27+r%27+U+r+U+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_32/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-53" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=S R U R' U' R' F R f'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=208s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="T Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_33"><img src='template/renderers/jcube.php?n=3&us=llyyyylly&bs=lyybbbbbb&fs=yylgggggg&ls=lllrrrrrr&rs=llloooooo&d=0' /><h3>OLL 33</h3></a>									<h5>T Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-54'><span>R U R' U' R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U%27+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-54'><span>y2 L' U' L U L F' L' F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+L%27+U%27+L+U+L+F%27+L%27+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-54'><span>y2 r' F' r U r U' r' F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+r%27+F%27+r+U+r+U%27+r%27+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-54'><span>F R U' R' U R U R' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U%27+R%27+U+R+U+R%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_33/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-54" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U R' U' R' F R F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=120s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="C Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_34"><img src='template/renderers/jcube.php?n=3&us=ylyyyylll&bs=lylgggggg&fs=lylbbbbbb&ls=llyoooooo&rs=yllrrrrrr&d=0' /><h3>OLL 34</h3></a>									<h5>C Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-55'><span>y f R f' U' r' U' R U M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+f+R+f%27+U%27+r%27+U%27+R+U+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-55'><span>y2 R U R2 U' R' F R U R U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R+U+R2+U%27+R%27+F+R+U+R+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-55'><span>F R U R' U' R' F' r U R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U+R%27+U%27+R%27+F%27+r+U+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-55'><span>y2 R U R' U' B' R' F R F' B</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R+U+R%27+U%27+B%27+R%27+F+R+F%27+B" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_34/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-55" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y f R f' U' r' U' R U M'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=288s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Fish Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_35"><img src='template/renderers/jcube.php?n=3&us=ylllyylyy&bs=lylbbbbbb&fs=yllgggggg&ls=lylrrrrrr&rs=llyoooooo&d=0' /><h3>OLL 35</h3></a>									<h5>Fish Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-56'><span>R U2 R2 F R F' R U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2+R2+F+R+F%27+R+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-56'><span>R U2' R2' F R F' R U2' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2%27+R2%27+F+R+F%27+R+U2%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-56'><span>y2 R2' F R F' R U2' R' U R U2 R' U' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R2%27+F+R+F%27+R+U2%27+R%27+U+R+U2+R%27+U%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-56'><span>y L' U2 L2 F' L' F L' U2 L</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+L%27+U2+L2+F%27+L%27+F+L%27+U2+L" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_35/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-56" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U2 R2 F R F' R U2 R'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=264s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="W Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_36"><img src='template/renderers/jcube.php?n=3&us=yllyyllyy&bs=lylgggggg&fs=yllbbbbbb&ls=llloooooo&rs=lyyrrrrrr&d=0' /><h3>OLL 36</h3></a>									<h5>W Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-57'><span>y2 L' U' L U' L' U L U L F' L' F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+L%27+U%27+L+U%27+L%27+U+L+U+L+F%27+L%27+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-57'><span>y R U R2 F' U' F U R2 U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U+R2+F%27+U%27+F+U+R2+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-57'><span>y2 R U R' F' R U R' U' R' F R U' R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R+U+R%27+F%27+R+U+R%27+U%27+R%27+F+R+U%27+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-57'><span>y2 R' F' U' F2 U R U' R' F' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F%27+U%27+F2+U+R+U%27+R%27+F%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_36/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-57" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 L' U' L U' L' U L U L F' L' F|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=145s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Fish Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_37"><img src='template/renderers/jcube.php?n=3&us=yylyyllly&bs=lllbbbbbb&fs=yylgggggg&ls=lllrrrrrr&rs=lyyoooooo&d=0' /><h3>OLL 37</h3></a>									<h5>Fish Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-58'><span>F R U' R' U' R U R' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U%27+R%27+U%27+R+U+R%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-58'><span>F R' F' R U R U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R%27+F%27+R+U+R+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-58'><span>y F' r U r' U' r' F r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F%27+r+U+r%27+U%27+r%27+F+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-58'><span>y F' L F L' U' L' U L</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F%27+L+F+L%27+U%27+L%27+U+L" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_37/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-58" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=F R U' R' U' R U R' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=277s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="W Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_38"><img src='template/renderers/jcube.php?n=3&us=lyyyylyll&bs=llybbbbbb&fs=lylgggggg&ls=lllrrrrrr&rs=yyloooooo&d=0' /><h3>OLL 38</h3></a>									<h5>W Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-59'><span>R U R' U R U' R' U' R' F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R+U%27+R%27+U%27+R%27+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-59'><span>y F R U' R' S U' R U R' f'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F+R+U%27+R%27+S+U%27+R+U+R%27+f%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-59'><span>y2 r' F' r U F U2 F' U' r' F' r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+r%27+F%27+r+U+F+U2+F%27+U%27+r%27+F%27+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-59'><span>y2 L U L' U L U' L' U' L' B L B'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+L+U+L%27+U+L+U%27+L%27+U%27+L%27+B+L+B%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_38/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-59" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U R' U R U' R' U' R' F R F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=158s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Lightning Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_39"><img src='template/renderers/jcube.php?n=3&us=yyllyllyy&bs=ylloooooo&fs=lllrrrrrr&ls=lyybbbbbb&rs=lylgggggg&d=0' /><h3>OLL 39</h3></a>									<h5>Lightning Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-60'><span>y' f' r U r' U' r' F r S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+f%27+r+U+r%27+U%27+r%27+F+r+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-60'><span>y L F' L' U' L U F U' L'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+L+F%27+L%27+U%27+L+U+F+U%27+L%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-60'><span>y' R U R' F' U' F U R U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R+U+R%27+F%27+U%27+F+U+R+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-60'><span>y' R B' R' U' R U B U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R+B%27+R%27+U%27+R+U+B+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_39/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-60" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y' f' r U r' U' r' F r S|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=360s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Lightning Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_40"><img src='template/renderers/jcube.php?n=3&us=lyylylyyl&bs=llloooooo&fs=llyrrrrrr&ls=yylbbbbbb&rs=lylgggggg&d=0' /><h3>OLL 40</h3></a>									<h5>Lightning Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-61'><span>y R' F R U R' U' F' U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+F+R+U+R%27+U%27+F%27+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-61'><span>y' f R' F' R U R U' R' S'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+f+R%27+F%27+R+U+R+U%27+R%27+S%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-61'><span>R r D r' U r D' r' U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+r+D+r%27+U+r+D%27+r%27+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-61'><span>M F' r U r' U' r' F r U M'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=M+F%27+r+U+r%27+U%27+r%27+F+r+U+M%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_40/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-61" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R' F R U R' U' F' U R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=377s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Awkward Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_41"><img src='template/renderers/jcube.php?n=3&us=ylylyylyl&bs=lylgggggg&fs=ylybbbbbb&ls=lyloooooo&rs=lllrrrrrr&d=0' /><h3>OLL 41</h3></a>									<h5>Awkward Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-62'><span>y2 R U R' U R U2 R' F R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R+U+R%27+U+R+U2+R%27+F+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-62'><span>y2 F U R2 D R' U' R D' R2 F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F+U+R2+D+R%27+U%27+R+D%27+R2+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-62'><span>y' S U' R' F' U' F U R S'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+S+U%27+R%27+F%27+U%27+F+U+R+S%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-62'><span>y2 R' F' U' F R S' R' U R S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F%27+U%27+F+R+S%27+R%27+U+R+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_41/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-62" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 R U R' U R U2 R' F R U R' U' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=622s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Awkward Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_42"><img src='template/renderers/jcube.php?n=3&us=ylyyyllyl&bs=lylbbbbbb&fs=ylygggggg&ls=lllrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 42</h3></a>									<h5>Awkward Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-63'><span>R' U' R U' R' U2 R F R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U%27+R+U%27+R%27+U2+R+F+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-63'><span>y F S' R U R' U' F' U S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F+S%27+R+U+R%27+U%27+F%27+U+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-63'><span>y R' U' F2 u' R U R' D R2 B</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+U%27+F2+u%27+R+U+R%27+D+R2+B" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-63'><span>y R' F R F' R' F R F' R U R' U' R U R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+F+R+F%27+R%27+F+R+F%27+R+U+R%27+U%27+R+U+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_42/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-63" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R' U' R U' R' U2 R F R U R' U' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=639s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="P Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_43"><img src='template/renderers/jcube.php?n=3&us=yllyylyyl&bs=lylbbbbbb&fs=lllgggggg&ls=lllrrrrrr&rs=yyyoooooo&d=0' /><h3>OLL 43</h3></a>									<h5>P Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-64'><span>y R' U' F' U F R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+U%27+F%27+U+F+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-64'><span>y2 F' U' L' U L F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F%27+U%27+L%27+U+L+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-64'><span>f' L' U' L U f</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=f%27+L%27+U%27+L+U+f" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-64'><span>y' r' F' U' F U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+r%27+F%27+U%27+F+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_43/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-64" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R' U' F' U F R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=219s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="P Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_44"><img src='template/renderers/jcube.php?n=3&us=llylyylyy&bs=lylbbbbbb&fs=lllgggggg&ls=yyyrrrrrr&rs=llloooooo&d=0' /><h3>OLL 44</h3></a>									<h5>P Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-65'><span>y2 F U R U' R' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F+U+R+U%27+R%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-65'><span>f R U R' U' f'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=f+R+U+R%27+U%27+f%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-65'><span>y R U B U' B' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U+B+U%27+B%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-65'><span>y' F R U' R' F' L' U L</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+F+R+U%27+R%27+F%27+L%27+U+L" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_44/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-65" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 F U R U' R' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=227s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="T Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_45"><img src='template/renderers/jcube.php?n=3&us=llyyyylly&bs=lylbbbbbb&fs=lylgggggg&ls=ylyrrrrrr&rs=llloooooo&d=0' /><h3>OLL 45</h3></a>									<h5>T Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-66'><span>F R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-66'><span>y R' F' U' F U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+F%27+U%27+F+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-66'><span>y' r' U' F' U F r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+r%27+U%27+F%27+U+F+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-66'><span>y' R B U B' U' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R+B+U+B%27+U%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_45/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-66" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=F R U R' U' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=132s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="C Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_46"><img src='template/renderers/jcube.php?n=3&us=yyllylyyl&bs=lllbbbbbb&fs=lllgggggg&ls=lylrrrrrr&rs=yyyoooooo&d=0' /><h3>OLL 46</h3></a>									<h5>C Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-67'><span>R' U' R' F R F' U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U%27+R%27+F+R+F%27+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-67'><span>y2 r' U' F R' F' R U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+r%27+U%27+F+R%27+F%27+R+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-67'><span>y2 L U L F' L' F U' L'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+L+U+L+F%27+L%27+F+U%27+L%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-67'><span>R2 D r' U' r D' R2' F' U F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R2+D+r%27+U%27+r+D%27+R2%27+F%27+U+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_46/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-67" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R' U' R' F R F' U R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=300s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="L Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_47"><img src='template/renderers/jcube.php?n=3&us=lyllyylll&bs=llybbbbbb&fs=yylgggggg&ls=lylrrrrrr&rs=ylyoooooo&d=0' /><h3>OLL 47</h3></a>									<h5>L Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-68'><span>F' L' U' L U L' U' L U F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F%27+L%27+U%27+L+U+L%27+U%27+L+U+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-68'><span>y' F R' F' R U2 R U' R' U R U2 R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+F+R%27+F%27+R+U2+R+U%27+R%27+U+R+U2+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-68'><span>R' U' R' F R F' R' F R F' U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U%27+R%27+F+R+F%27+R%27+F+R+F%27+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-68'><span>y2 f' U' L' U L U' L' U L f</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+f%27+U%27+L%27+U+L+U%27+L%27+U+L+f" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_47/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-68" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=F' L' U' L U L' U' L U F|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=390s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="L Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_48"><img src='template/renderers/jcube.php?n=3&us=lylyyllll&bs=yllbbbbbb&fs=lyygggggg&ls=ylyrrrrrr&rs=lyloooooo&d=0' /><h3>OLL 48</h3></a>									<h5>L Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-69'><span>F R U R' U' R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U+R%27+U%27+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-69'><span>y2 f U R U' R' U R U' R' f'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+f+U+R+U%27+R%27+U+R+U%27+R%27+f%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-69'><span>F R' F' U2' R U R' U R2 U2' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R%27+F%27+U2%27+R+U+R%27+U+R2+U2%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-69'><span>y2 R U R' U R U2 R' U' F R U R' U' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R+U+R%27+U+R+U2+R%27+U%27+F+R+U+R%27+U%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_48/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-69" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=F R U R' U' R U R' U' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=405s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="L Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_49"><img src='template/renderers/jcube.php?n=3&us=lllyyllyl&bs=lyygggggg&fs=yllbbbbbb&ls=llloooooo&rs=yyyrrrrrr&d=0' /><h3>OLL 49</h3></a>									<h5>L Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-70'><span>y2 r U' r2 U r2 U r2 U' r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+r+U%27+r2+U+r2+U+r2+U%27+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-70'><span>l U' l2 U l2 U l2 U' l</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=l+U%27+l2+U+l2+U+l2+U%27+l" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-70'><span>R B' R2 F R2 B R2 F' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+B%27+R2+F+R2+B+R2+F%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-70'><span>y F U R U' R' F' R' U' R U' R' U2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F+U+R+U%27+R%27+F%27+R%27+U%27+R+U%27+R%27+U2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_49/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-70" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 r U' r2 U r2 U r2 U' r|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=417s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="L Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_50"><img src='template/renderers/jcube.php?n=3&us=llllyylyl&bs=yylbbbbbb&fs=llygggggg&ls=yyyrrrrrr&rs=llloooooo&d=0' /><h3>OLL 50</h3></a>									<h5>L Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-71'><span>r' U r2 U' r2 U' r2 U r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+U+r2+U%27+r2+U%27+r2+U+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-71'><span>y2 R' F R2 B' R2 F' R2 B R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F+R2+B%27+R2+F%27+R2+B+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-71'><span>y2 l' U l2 U' l2 U' l2 U l'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l%27+U+l2+U%27+l2+U%27+l2+U+l%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-71'><span>y2 R' F R2 B' R2' F' R2 B R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F+R2+B%27+R2%27+F%27+R2+B+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_50/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-71" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r' U r2 U' r2 U' r2 U r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=429s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Line Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_51"><img src='template/renderers/jcube.php?n=3&us=lllyyylll&bs=yylbbbbbb&fs=lyygggggg&ls=ylyrrrrrr&rs=llloooooo&d=0' /><h3>OLL 51</h3></a>									<h5>Line Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-72'><span>y2 F U R U' R' U R U' R' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+F+U+R+U%27+R%27+U+R+U%27+R%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-72'><span>f R U R' U' R U R' U' f'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=f+R+U+R%27+U%27+R+U+R%27+U%27+f%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-72'><span>y' R' U' R' F R F' R U' R' U2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R%27+U%27+R%27+F+R+F%27+R+U%27+R%27+U2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-72'><span>y' R' U' F' U F U' F' U F R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+R%27+U%27+F%27+U+F+U%27+F%27+U+F+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_51/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-72" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 F U R U' R' U R U' R' F'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=529s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Line Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_52"><img src='template/renderers/jcube.php?n=3&us=lyllyllyl&bs=llyoooooo&fs=yllrrrrrr&ls=lylbbbbbb&rs=yyygggggg&d=0' /><h3>OLL 52</h3></a>									<h5>Line Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-73'><span>y2 R' F' U' F U' R U R' U R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+R%27+F%27+U%27+F+U%27+R+U+R%27+U+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-73'><span>R U R' U R U' B U' B' R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R+U%27+B+U%27+B%27+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-73'><span>R U R' U R d' R U' R' F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U+R+d%27+R+U%27+R%27+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-73'><span>R' U' R U' R' U F' U F R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+U%27+R+U%27+R%27+U+F%27+U+F+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_52/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-73" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y2 R' F' U' F U' R U R' U R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=540s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="L Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_53"><img src='template/renderers/jcube.php?n=3&us=llllyylyl&bs=lylbbbbbb&fs=lllgggggg&ls=yyyrrrrrr&rs=ylyoooooo&d=0' /><h3>OLL 53</h3></a>									<h5>L Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-74'><span>y r' U2 R U R' U' R U R' U r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+r%27+U2+R+U+R%27+U%27+R+U+R%27+U+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-74'><span>y2 l' U' L U' L' U L U' L' U2 l</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l%27+U%27+L+U%27+L%27+U+L+U%27+L%27+U2+l" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-74'><span>r' U' R U' R' U R U' R' U2 r</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r%27+U%27+R+U%27+R%27+U+R+U%27+R%27+U2+r" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-74'><span>y' l' U2 L U L' U' L U L' U l</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+l%27+U2+L+U+L%27+U%27+L+U+L%27+U+l" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_53/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-74" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y r' U2 R U R' U' R U R' U r|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=443s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="L Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_54"><img src='template/renderers/jcube.php?n=3&us=lyllyylll&bs=lllbbbbbb&fs=lylgggggg&ls=yyyrrrrrr&rs=ylyoooooo&d=0' /><h3>OLL 54</h3></a>									<h5>L Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-75'><span>r U R' U R U' R' U R U2 r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+R%27+U+R+U%27+R%27+U+R+U2+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-75'><span>y' r U2 R' U' R U R' U' R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+r+U2+R%27+U%27+R+U+R%27+U%27+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-75'><span>y2 l U L' U L U' L' U L U2 l'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y2+l+U+L%27+U+L+U%27+L%27+U+L+U2+l%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-75'><span>y' L F' L' F U2 L2 y' L F L' F</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y%27+L+F%27+L%27+F+U2+L2+y%27+L+F+L%27+F" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_54/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-75" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r U R' U R U' R' U R U2 r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=458s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Line Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_55"><img src='template/renderers/jcube.php?n=3&us=lyllyllyl&bs=lllbbbbbb&fs=lllgggggg&ls=yyyrrrrrr&rs=yyyoooooo&d=0' /><h3>OLL 55</h3></a>									<h5>Line Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-76'><span>y R' F U R U' R2 F' R2 U R' U' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+F+U+R+U%27+R2+F%27+R2+U+R%27+U%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-76'><span>y R' F R U R U' R2 F' R2 U' R' U R U R'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R%27+F+R+U+R+U%27+R2+F%27+R2+U%27+R%27+U+R+U+R%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-76'><span>y F U' R2 D R' U2 R D' R2 U F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+F+U%27+R2+D+R%27+U2+R+D%27+R2+U+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-76'><span>R U2 R2 U' R U' R' U2 F R F'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U2+R2+U%27+R+U%27+R%27+U2+F+R+F%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_55/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-76" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=y R' F U R U' R2 F' R2 U R' U' R|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=556s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="Line Shapes" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_56"><img src='template/renderers/jcube.php?n=3&us=lllyyylll&bs=lylbbbbbb&fs=lylgggggg&ls=ylyrrrrrr&rs=ylyoooooo&d=0' /><h3>OLL 56</h3></a>									<h5>Line Shapes</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-77'><span>r U r' U R U' R' M' U R U2 r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+r%27+U+R+U%27+R%27+M%27+U+R+U2+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-77'><span>r U r' U R U' R' U R U' R' r U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=r+U+r%27+U+R+U%27+R%27+U+R+U%27+R%27+r+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-77'><span>F R U R' U' R F' r U R' U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=F+R+U+R%27+U%27+R+F%27+r+U+R%27+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-77'><span>R' F' R U' r' F r M' U' r' F2 R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R%27+F%27+R+U%27+r%27+F+r+M%27+U%27+r%27+F2+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_56/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-77" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=r U r' U R U' R' M' U R U2 r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=573s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
												
							<div class="row mt-2 pt-3 mb-2 pb-3 singlealg border-bottom" data-subgroup="All Corners Oriented" >
								
								<!-- Algorithm info -->
								<div class="col-md-3 col-sm-3 text-center my-auto">
									
									
									<!-- Image -->
									<a style="color: inherit; text-decoration: none;" href="a/3x3/OLL/OLL_57"><img src='template/renderers/jcube.php?n=3&us=ylyyyyyly&bs=lylbbbbbb&fs=lylgggggg&ls=lllrrrrrr&rs=llloooooo&d=0' /><h3>OLL 57</h3></a>									<h5>All Corners Oriented</h5>
								</div>
								<!-- /Algorithm info -->
								
								<!-- Algorithm Alternatives -->
								<div class="col-6">
								
								
									<!-- orientations/slots -->
																		<!-- orientations/slots -->
									
									<!-- Alternatives -->
									<div data-ori='0'><ul class='list-group'><li class='list-group-item pigtrigger selected' data-target='#pig-78'><span>R U R' U' M' U R U' r'</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=R+U+R%27+U%27+M%27+U+R+U%27+r%27" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-78'><span>y R U R' S' R U' R' S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U+R%27+S%27+R+U%27+R%27+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-78'><span>y R U' R' S' R U R' S</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+R+U%27+R%27+S%27+R+U+R%27+S" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class='list-group-item pigtrigger' data-target='#pig-78'><span>y S R' F R S' R' F' R</span><a href="https://cubedb.net/?stage=OLL&type=alg&rank=3&scramble=z2&crosscolor=White&alg=y+S+R%27+F+R+S%27+R%27+F%27+R" target='_blank'> <i class='fa fa-link' aria-hidden='true'></i></a></li><li class="list-group-item"><a href="a/3x3/OLL/OLL_57/0">	<i class="fa fa-chevron-circle-down" aria-hidden="true"></i>More Algorithms</a></li></ul></div>							
								</div>
								<!-- /Algorithm Alternatives -->
								
								<!-- /Algorithm Visualizer -->
																		
										
								<div class="col-3 text-center my-auto">
								
									<div class="roofpig text-center my-auto" id="pig-78" style="width: 150px; height: 150px;" data-config="colored=U- u|colors=F:g B:b U:y D:w R:o L:r|alg=R U R' U' M' U R U' r'|flags=canvas|flags=showalg|speed=800"></div>
								</div>
								
																	
								<!-- /Algorithm Visualizer -->
								
								<!-- Algorithm videos -->
								
								<div class="col-12">
									<ul class="list-group list-group-horizontal-sm">														<li class="list-group-item text-center">
															<a href="https://www.youtube.com/watch?v=vU6HsK3hvQs&start=109s" target="_blank">
															<div class="contributor"><i class="fab fa-youtube" style="color: red; margin-right: 2px;"></i>JPerm</div>
															<img class="img-thumbnail" style="width: 200px" src="https://img.youtube.com/vi/vU6HsK3hvQs/0.jpg" />
															</a>
														</li>
											</ul>								</div>
								<!-- /Algorithm videos -->
							</div>
						
										
				</div>
				<!-- /Algorithms -->
			</div>

		</div>
		
<div style="margin-top: 70px;"></div>
<footer class="bg-dark text-center text-lg-start fixed-bottom text-white">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    Created By Gil Zussman - <a href="mailto:gil@speedcubedb.com">gil@speedcubedb.com</a> | <a href="privacypolicy.php">Privacy Policy</a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&amp;business=YXDSNHGD65YHU&amp;currency_code=USD&amp;source=url">Donate</a>
    
  </div>
</footer>  </body>
</html>