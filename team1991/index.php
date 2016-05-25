<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<meta name="theme-color" content="#FF9800">
	<title>Team 1991</title>
	
	<!-- Materialize Main styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	
	<!-- Menu -->
	<link rel="stylesheet" type="text/css" href="assets/menu/menu.min.css"/>
</head>

<body>
	<noscript id="deferred-styles">
		<!-- Material Icons -->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
		
		<!-- Custom styles -->
		<link rel="stylesheet" type="text/css" href="assets/application.min.css"/>
	</noscript>
    <script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
          webkitRequestAnimationFrame || msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
    </script>
	
	<header class="menu z-depth-1" style="display: block;">
		<div class="center-column">
			<div class="header-items">
				<a class="logo-region" href="/">
					<div class="logotype"></div>
				</a>
				<div class="nav-items">
					<a class="nav-link" href="/"><span>Home</span></a>
					<a class="nav-link" href="/about/"><span>About</span></a>
					<a class="nav-link" href="/photos/"><span>Photos</span></a>
					<a class="nav-link" href="/awards/"><span>Awards</span></a>
					<a class="nav-link" href="/first/"><span><i>F.I.R.S.T.</i></span></a>
					<a class="nav-link" href="/sponsors/"><span>Sponsors</span></a>
				</div>

				<div class="hamburger">
					<div class="dash a"></div>
					<div class="dash b"></div>
					<div class="dash c"></div>
				</div>
			</div>
		</div>
		<div class="dropdown-menu-wrapper count6">
			<div class="dropdown-menu">
				<a class="nav-link" href="/">Home</a>
				<a class="nav-link" href="/about/">About</a>
				<a class="nav-link" href="/photos/">Photos</a>
				<a class="nav-link" href="/awards/">Awards</a>
				<a class="nav-link" href="/first/"><i>F.I.R.S.T.</i></a>
				<a class="nav-link" href="/sponsors/">Sponsors</a>
			</div>
		</div>
	</header>
	<div class="header-space"></div>
	
	<main>
		<div class="slider">
			<ul class="slides" style="background-color: black;">
				<li>
					<img src="assets/images/slider/team.jpg" style="opacity: 0.6;">
					<div class="caption center-align">
					<h3>This is FRC Team 1991!</h3>
					<h5 class="light grey-text text-lighten-3">We are the dragons.</h5>
					</div>
				</li>
				<li>
					<img src="assets/images/slider/stlouis.jpg" style="opacity: 0.6;">
					<div class="caption left-align">
						<h3>St. Louis Championship 2016!!!</h3>
						<h5 class="light grey-text text-lighten-3">We got picked to go.</h5>
					</div>
				</li>
				<li>
					<img src="assets/images/slider/stlouis_arc.jpg" style="opacity: 0.6;">
					<div class="caption right-align">
						<h3>St. Louis Gateway Arch</h3>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="container">
			
			<div class="col m12">
				<!-- Team -->
				<div class="card">
					<div class="card-content header-content">
						<span class="card-title"><h1>Team 1991</h1></span>
					</div>
				</div>
				
				<!-- Chairmans -->
				<div class="card">
					<div class="card-content">
						<div class="header-content">
							<span class="card-title"><h4>Chairman's Submission 2016</h4></span>
						</div>
						<video id="my-video" class="video-js responsive-video" controls preload="auto" poster="assets/media/poster.jpg" data-setup="{}">
							<source src="assets/media/chairmans_2016.webm" type='video/webm'>
							<source src="assets/media/chairmans_2016.mp4" type='video/mp4'>
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a web browser that
								<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
				</div>
			</div>
			
			<div class="row">
				<!-- PHOTOS -->
				<div class="col l6">
					<div class="card">
						<div class="card-image feature-img waves-effect waves-block waves-light">
							<img class="activator" src="assets/images/feature/photos.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Photos<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-action">
							<a href="/photos/"><span class="orange-text text-accent-4">View Photos</span></a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Photos<i class="material-icons right">close</i></span>
							<p>See what all the excitement is about.</p>
						</div>
					</div>
				</div>
				
				<!-- AWARDS -->
				<div class="col l6">
					<div class="card">
						<div class="card-image feature-img waves-effect waves-block waves-light">
							<img class="activator" src="assets/images/feature/awards.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Awards<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-action">
							<a href="/awards/"><span class="orange-text text-accent-4">View Awards</span></a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Awards<i class="material-icons right">close</i></span>
							<p>See what our team has accomplished in the past years.</p>
						</div>
					</div>
				</div>
				
				<!-- FIRST -->
				<div class="col l6">
					<div class="card">
						<div class="card-image feature-img waves-effect waves-block waves-light">
							<img class="activator" src="assets/images/feature/first.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4"><i>F.I.R.S.T.</i><i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-action">
							<a href="/first/"><span class="orange-text text-accent-4">About <i>F.I.R.S.T.</i></span></a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4"><i>F.I.R.S.T.</i><i class="material-icons right">close</i></span>
							<p>Find out what <i>F.I.R.S.T.</i> is all about.</p>
						</div>
					</div>
				</div>
				
				<!-- Sponsors -->
				<div class="col l6">
					<div class="card">
						<div class="card-image feature-img waves-effect waves-block waves-light">
							<img class="activator" src="assets/images/sponsors/solidworks.jpg">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Sponsors<i class="material-icons right">more_vert</i></span>
						</div>
						<div class="card-action">
							<a href="/sponsors/"><span class="orange-text text-accent-4">Our sponsors</span></a>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">Sponsors<i class="material-icons right">close</i></span>
							<p>We are still competing thanks to our proud sponsors. Our team would not exist without the help we get.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
	<footer class="page-footer grey lighten-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="grey-text darken-1">Team 1991</h5>
					<p class="grey-text">FRC Team 1991 The Dragons</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="grey-text darken-1">Links</h5>
					<ul>
						<li><a class="grey-text" href="https://www.github.com/patkub/team1991-website/" target="_blank"><i class="fa fa-github left"></i>Github</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="footer-copyright">
			<div class="container black-text">
				&copy; <?php echo date("Y") ?> <a class="black-text" href="http://www.antuple.net/" target="_blank">Antuple</a>
				<a class="black-text right">Patrick Kubiak</a>
			</div>
		</div>
	</footer>
</body>

<!-- jQuery -->
<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>

<!-- Materialize compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>

<!-- Menu -->
<script src="assets/menu/menu.min.js"></script>

<!-- Video.js -->
<link href="http://vjs.zencdn.net/5.9.2/video-js.min.css" rel="stylesheet">

<!-- Video.js IE8 -->
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>

<script>
$(document).ready(function () {
    $('.slider').slider({
		full_width: true,
		time_constant: 10,
		height: 500
	});
});
</script>

</html>
