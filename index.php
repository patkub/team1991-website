<!DOCTYPE html>

<?php
require_once 'recaptchalib.php';
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
?>

<html lang="en">

<head>
    <meta charset="utf-8">
	<meta http-equiv="Cache-Control" content="public max-age=3600"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="FRC Team 1991">
    <meta name="author" content="Patrick Kubiak">
    <title>Team 1991</title>
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<link rel="icon" href="favicon.png" type="image/png">
</head>

<body data-spy="scroll">
<?php if ($detect->isMobile()) { ?>
	<script>
    var loadCSSFiles = function() {
		var links = ["assets/bootstrap/bootstrap.min.css",
				     "assets/font-awesome/css/font-awesome.min.css",
					 "assets/css/animate.min.css",
					 "assets/squad/style.min.css",
					 "assets/squad/default.min.css",
					 "assets/photoswipe/photoswipe.min.css",
					 "assets/photoswipe/default-skin/default-skin.min.css",
					 "assets/css/style.min.css",
					 "assets/css/awards.min.css",
					 "assets/css/nocaptcha.min.css"],
			headElement = document.getElementsByTagName("head")[0],
			linkElement, i;
		for (i = 0; i < links.length; i++) {
			linkElement = document.createElement("link");
			linkElement.rel = "stylesheet";
			linkElement.href = links[i];
			headElement.appendChild(linkElement);
		}
	};

	var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
	if (raf) {
		raf(loadCSSFiles);
	}
	else {
		window.addEventListener("load", loadCSSFiles);
	}
    </script>	
<?php } else { ?>
	<script>
    var loadCSSFiles = function() {
		var links = ["assets/bootstrap/bootstrap.min.css",
				     "assets/font-awesome/css/font-awesome.min.css",
					 "assets/css/animate.min.css",
					 "assets/squad/style.min.css",
					 "assets/squad/default.min.css",
					 "assets/photoswipe/photoswipe.min.css",
					 "assets/photoswipe/default-skin/default-skin.min.css",
					 "assets/css/style.min.css",
					 "assets/css/awards.min.css"],
			headElement = document.getElementsByTagName("head")[0],
			linkElement, i;
		for (i = 0; i < links.length; i++) {
			linkElement = document.createElement("link");
			linkElement.rel = "stylesheet";
			linkElement.href = links[i];
			headElement.appendChild(linkElement);
		}
	};

	var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
	if (raf) {
		raf(loadCSSFiles);
	}
	else {
		window.addEventListener("load", loadCSSFiles);
	}
    </script>	
<?php } ?>
	<div class="container">
		<ul id="gn-menu" class="gn-menu-main">
			<li class="gn-trigger">
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
				<nav class="gn-menu-wrapper">
					<div class="gn-scroller">
						<ul class="gn-menu">
							<!--
							<li class="gn-search-item">
								<input placeholder="Search" type="search" class="gn-search">
								<a class="gn-icon gn-icon-search"><span>Search</span></a>
							</li>
							-->
							<li><a href="#intro" class="gn-icon gn-icon-download">Home</a></li>
							<li><a href="#about" class="gn-icon gn-icon-help">About</a></li>
							<li><a href="#photos" class="gn-icon gn-icon-download">Photos</a></li>
							<li><a href="#awards" class="gn-icon gn-icon-download">Awards</a></li>
							<li><a href="#first" class="gn-icon gn-icon-help"><i>F.I.R.S.T.</i></a></li>
							<li><a href="#sponsors" class="gn-icon gn-icon-cog">Sponsors</a></li>
							<li><a href="#contact" class="gn-icon gn-icon-archive">Contact</a></li>
						</ul>
					</div><!-- /gn-scroller -->
				</nav>
			</li>
			<li><a href="#intro" class="scroll">Team 1991</a></li>
			<li><ul class="company-social">
				<li class="social-facebook"><a href="https://www.facebook.com/FirstRoboticsTeam1991" target="_blank"><i class="fa fa-facebook"></i></a></li>
				<li class="social-twitter"><a href="https://twitter.com/frcteam1991" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<!-- <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
				<li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li> -->
			</ul></li>
		</ul>
	</div>

	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="slogan">
			<h1>This is Team 1991 The Dragons</h1>
			<p>we build and break robots</p>
			<a href="#about" class="btn btn-skin scroll">Learn more</a>
		</div>	
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-left">
		<div class="heading-about marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="section-heading">
					<h2 class="text-center">About us</h2>
					<p>
					Team 1991, the Dragons, is a student run high school team which was founded in 2007 by a group
					of students, teachers and mentors who wanted to represent their school's engineering focus in a
					competitive environment.
					<br><br>
					Participation in the team gives students an opportunity to learn about engineering and technology
					through hands on experience. Since the team operates like a business, students acquire many
					professional skills, such as managing a budget, making presentations and planning our build
					season. As an extracurricular program, the team allows students to apply concepts learned in
					school as well as develop new skills thanks to various workshops taught by our mentors. In the
					past years, the students were able to take advantage of the SolidWorks, LabView, Welding and
					Electronics classes taught by our mentors.
					<br><br>
					Each year, the team participates in the <i>F.I.R.S.T.</i> Robotics Competition which <i>F.I.R.S.T.</i> calls as the "Varsity
					Sport for the Mind&trade;". The teams are given only six weeks to design, construct and program a
					robot which will compete against other teams in regional and national events. This closely mimics
					the real life challenges engineers face when working on the projects.
					</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
	<!-- /Section: about -->
	
	<!-- Section: photos -->
    <section id="photos" class="home-section text-center bg-gray" <?php if ($detect->isMobile()) { ?>style="overflow:hidden;"<?php } ?>>
		<div class="container">
			<div class="section-heading">
				<h2>Photos</h2>
			</div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
                    <div class="row gallery-item">
						<a class="photos-2012" onclick="displayPhotos('2012', '', 21);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2012.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
						<a class="photos-2013" onclick="displayPhotos('2013', '', 5);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2013.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
						<a class="photos-2014" onclick="displayPhotos('2014', '', 2);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2014.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
						<a class="photos-2015" onclick="displayPhotos('2015', '', 2);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2015.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
						<a class="photos-2015-berlin" onclick="displayPhotos('2015', '/berlin', 89);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2015-berlin.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
						<a class="photos-2015-hartford" onclick="displayPhotos('2015', '/hartford', 154);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2015-hartford.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
						<a class="photos-2015-springfield" onclick="displayPhotos('2015', '/springfield', 61);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2015-springfield.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
						<a class="photos-2015-waterbury" onclick="displayPhotos('2015', '/waterbury', 3);">
							<div class="col-md-3" style="margin-bottom:10px;">
								<img src="assets/images/photos/photos-2015-waterbury.jpg" class="img-responsive" alt="img" style="height:400px;">
							</div>
						</a>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: photos -->
	
	<!-- Root element of PhotoSwipe. Must have class pswp. -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;" <?php if (!$detect->isMobile()) { ?>style="z-index:9001;"<?php } ?>>
		<!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
		<div class="pswp__bg"></div>
		
		<!-- Slides wrapper with overflow:hidden. -->
		<div class="pswp__scroll-wrap">
			
			<!-- Container that holds slides. 
				PhotoSwipe keeps only 3 of them in the DOM to save memory.
				Don't modify these 3 pswp__item elements, data is added later on. -->
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>
			
			<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<!--  Controls are self-explanatory. Order can be changed. -->
					<div class="pswp__counter"></div>
					<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
					<button class="pswp__button pswp__button--share" title="Share"></button>
					<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
					<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
					
					<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
					<!-- element will get class pswp__preloader--active when preloader is running -->
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
						  <div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						  </div>
						</div>
					</div>
				</div>
				
				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div> 
				</div>
				
				<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
				<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
				
				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Root element of PhotoSwipe. -->
	
	<!-- Section: awards -->
	<section id="awards" class="home-section text-center">
		<div class="section-heading">
			<h2>Awards</h2>
			<p>Our Proud Achievements.</p>
		</div>
		<div class="container">
			<div class="row">
				<table class="awards_table table table-striped">
					<tbody>
						<tr>
							<th>Season</th>
							<th>Event</th>
							<th>Awards</th>
						</tr>
						<tr>
							<td>2015</td>
							<td>NE District - Hartford Event</td>
							<td>Gracious Professionalism Award sponsored by Johnson & Johnson</td>
						</tr>
						<tr>
							<td>2014</td>
							<td>Groton District Event</td>
							<td>District Event Winner</td>
						</tr>
						<tr>
							<td>2013</td>
							<td>BAE Systems Granite State Regional</td>
							<td>Industrial Safety Award sponsored by Underwriters Laboratories</td>
						</tr>
						<tr>
							<td>2012</td>
							<td>WPI Regional</td>
							<td>Innovation in Control Award sponsored by Rockwell Automation<br>Coopertition Award</td>
						</tr>
						<tr>
							<td>2012</td>
							<td>Northeast Utilities FIRST Connecticut Regional</td>
							<td>Innovation in Control Award sponsored by Rockwell Automation</td>
						</tr>
						<tr>
							<td>2008</td>
							<td>Connecticut Regional</td>
							<td>Regional Finalists<br>Delphi "Driving Tomorrow's Technology" Award</td>
						</tr>
						<tr>
							<td>2007</td>
							<td>UTC Connecticut Regional</td>
							<td>Website Award</td>
						</tr>
						<tr>
							<td>2007</td>
							<td>BAE SYSTEMS Granite State Regional</td>
							<td>Rookie All Star Award<br>Highest Rookie Seed</td>
						</tr>
					</tbody>
				</table>
			</div>
	</section>
	<!-- /Section: awards -->
	
	<!-- Section: first -->	
    <section id="first" class="home-section text-left bg-gray">
		<div class="heading-about marginbot-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="section-heading">
							<h2 class="text-center"><i>F.I.R.S.T.</i></h2>
							<a href="http://www.usfirst.org/" target="blank"><img src="assets/images/firstlogo.jpg" class="center" style="width:100%;max-width:100vw;"></a>
							<p>
							Dean Kamen founded <i>F.I.R.S.T.</i> in 1989 to give young people the opportunity to be leaders in science and technology.
							<br><br>
							"To transform our culture by creating a world where science and technology are celebrated and where young people dream of becoming science and technology leaders."<br>
							<span style="float:right;">-Dean Kamen, Founder</span>
							<br><br>
							Through innovative programs, <i>F.I.R.S.T.</i> motivates young people to pursue science, technology, engineering, and math in their education and career. <i>F.I.R.S.T.</i> programs improve self-confidence, knowledge, and life skills.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- /Section: first -->
	
	<!-- Section: sponsors -->
    <section id="sponsors" class="home-section text-center">
		<div class="heading-about marginbot-50">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="section-heading">
						<h2>Our sponsors</h2>
						<p>We are still competing thanks to our proud sponsors.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<?php if ($detect->isMobile()) { ?> <?php } ?>
			<div class="row">			<!-- style="margin-bottom:20px;" -->
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>		<!-- use class="col-sm-3 col-sm-3", for 2 columns on big phone screens -->
					<div class="sponsor-icon">
						<a href="http://www.pw.utc.com/" target="blank"><img src="assets/images/sponsors/pw.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Pratt & Whitney</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.nasa.gov" target="blank"><img src="assets/images/sponsors/nasa.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>NASA</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.hartford.edu" target="blank"><img src="assets/images/sponsors/uhart.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>University of Hartford</h5>
						<!-- <p>Provides meeting rooms to develop strategy.</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.tallan.com" target="blank"><img src="assets/images/sponsors/tallan.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Tallan</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.tsunamitsolutions.com/" target="blank"><img src="assets/images/sponsors/tsunami_tsolutions.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Tsunami Tsolutions</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.aetna.com/" target="blank"><img src="assets/images/sponsors/aetna.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Aetna</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.nutmegstatefcu.org/" target="blank"><img src="assets/images/sponsors/nutmeg.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Nutmeg State Financial Credit Union</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.laganaflorists.com" target="blank"><img src="assets/images/sponsors/lagana.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Lagana Florists</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
			</div>
			<div class="row">
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.satellitetoolmachine.net/" target="blank"><img src="assets/images/sponsors/stm.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Satellite Tool & Machine Co.</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.industrialsurplus.com/" target="blank"><img src="assets/images/sponsors/industrial_surplus.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Industrial Surplus</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.hartfordschools.org/" target="blank"><img src="assets/images/sponsors/hps.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Hartford Public Schools</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<div <?php if ($detect->isMobile()) { ?>style="width:100vw;max-width:100vw;"<?php } else { ?> class="col-xs-6 col-sm-3" <?php } ?>>
					<div class="sponsor-icon">
						<a href="http://www.solidworks.com/" target="blank"><img src="assets/images/sponsors/solidworks.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>SolidWorks</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p> -->
					</div>
				</div>
				
				<!-- OLD SPONDORS BELOW -->
				<!--
				<div class="col-sm-3 col-md-3">
					<div class="sponsor-icon">
						<a href="http://www.eversource.com/" target="blank"><img src="assets/images/sponsors/eversource.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>Eversource</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				
				<div class="col-sm-3 col-md-3">
					<div class="sponsor-icon">
						<a href="http://www.utc.com/" target="blank"><img src="assets/images/sponsors/utc.jpg" style="max-height:75px;max-width:100%;"></a>
					</div>
					<div class="sponsor-desc">
						<h5>United Technologies</h5>
						<!-- <p>Lorem ipsum dolor sit amet</p>
					</div>
				</div>
				-->
			</div>
		</div>
	</section>
	<!-- /Section: sponsors -->
	
	<!-- Section: contact -->
    <section id="contact" class="home-section text-center bg-gray">
		<div class="heading-contact marginbot-50">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="section-heading">
						<h2>Get in touch</h2>
						<p>Send us a message.</p>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					<div class="boxed-grey">
						<form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" placeholder="Enter name" required="required" />
								</div>
								<div class="form-group">
									<label for="email">Email Address</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
										<input type="email" class="form-control" name="mailaddress" placeholder="Enter email" required="required" />
									</div>
								</div>
								<div class="form-group">
									<label for="subject">Subject</label>
									<select id="subject" name="subject" class="form-control" required="required">
										<option value="" selected="">Choose One:</option>
										<option value="Question">Question</option>
										<option value="Suggestion">Suggestion</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="message">Message</label>
									<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="g-recaptcha" data-sitekey="6LfN5AwTAAAAAJ6_J7Yc7yrNIoK0g9kzfKk8XEQu"></div>
								<button type="submit" class="btn btn-skin pull-right" id="btnContactUs">Send Message</button>
							</div>
						</div>
						</form>
					</div>
					
					<div class="widget-contact row">
						<div class="col-lg-6">
							<address>
								<strong>Email</strong><br>
								<a href="mailto:#">admin@antuple.net</a>
							</address>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /Section: contact -->
	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>Copyright &copy; 2015 Team 1991 and <a href="http://www.antuple.net/">Antuple</a>
					</p>
				</div>
			</div>	
		</div>
	</footer>
	
	<script type="text/javascript">
	[
		'//code.jquery.com/jquery-2.1.4.min.js',
		'assets/bootstrap/bootstrap.min.js',
		'assets/js/jquery.easing.min.js',
		'assets/js/classie.min.js',
		'assets/js/gnmenu.min.js',
		'assets/js/jquery.scrollTo.min.js',
		'assets/js/stellar.min.js',
		'assets/js/menu.min.js',
		'assets/photoswipe/photoswipe.min.js',
		'assets/photoswipe/photoswipe-ui-default.min.js',
		'assets/js/photos.min.js',
		'//google.com/recaptcha/api.js',
	].forEach(function(src) {
		var script = document.createElement('script');
		script.src = src;
		script.async = false; 
		document.head.appendChild(script);
	});
	</script>	
</body>
</html>

<?php
	// your secret key
	$secret = "6LfN5AwTAAAAAHQmXMwd_acuB0WZBAs0dQJsR1L-";
	
	// empty response
	$response = null;
	
	// check secret key
	$reCaptcha = new ReCaptcha($secret);
	
	// if submitted check response
	if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_POST["g-recaptcha-response"]
		);
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if ($response != null && $response->success) {
			// captcha success, send mail
			$name = test_input($_POST["name"]);
			$email = test_input($_POST["mailaddress"]);
			$subject = test_input($_POST["subject"]);
			$message = test_input($_POST["message"]);
			$header = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
			mail("admin@antuple.net", $subject, $message, $header);
			echo '<script type="text/javascript">alert("Message sent!"); </script>';
		}
		else {
			echo '<script type="text/javascript">alert("Failed to verify reCAPTCHA! Message not sent."); </script>';
		}
	}		
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	/*
	
	<!-- Core JavaScript Files -->
	<script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.min.js" async></script>
	<!-- Dynamic Loading -->
    <script type="text/javascript" src="assets/bootstrap/bootstrap.min.js" async></script>
    <script type="text/javascript" src="assets/js/jquery.easing.min.js" async></script>	
	<script type="text/javascript" src="assets/js/classie.min.js" async></script>
	<script type="text/javascript" src="assets/js/gnmenu.min.js" async></script>
	<script type="text/javascript" src="assets/js/jquery.scrollTo.min.js" async></script>
	<script type="text/javascript" src="assets/js/stellar.min.js" async></script>
    <!-- Scrolling Menu JavaScript -->
    <script type="text/javascript" src="assets/js/menu.min.js" async></script>
	<!-- PhotoSwipe -->
	<script type="text/javascript" src="assets/photoswipe/photoswipe.min.js" async></script>
	<script type="text/javascript" src="assets/photoswipe/photoswipe-ui-default.min.js" async></script>
	<script type="text/javascript" src="assets/js/photos.min.js" async></script>
	<!-- reCAPTCHA -->
	<script type="text/javascript" src="//google.com/recaptcha/api.js" async></script>
	*/
?>
