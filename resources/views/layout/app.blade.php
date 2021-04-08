
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/normalize.css" media="screen">
		<link rel="stylesheet" href="assets/css/grid.css" media="screen">
		<link rel="stylesheet" href="assets/css/animate.min.css" media="screen">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/js/plugins/owl-carousel/owl.carousel.css" media="screen">
		<link rel="stylesheet" href="assets/js/plugins/owl-carousel/owl.theme.css" media="screen">
		<link rel="stylesheet" href="assets/js/plugins/owl-carousel/owl.transitions.css" media="screen">

		<link rel="stylesheet" href="assets/js/plugins/easy-responsive-tabs/easyresponsivetabs.css" media="screen">
		<link rel="stylesheet" href="assets/js/plugins/magnific-popup/jquery.magnific-popup.css" media="screen">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css" media="screen">
		<script src="assets/js/modernizr.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
      <title>USCIS VERIFY</title>
   </head>
   <body>
   <header id="header">
			<div class="q-container">
				<div id="logo">
					<a href="index.php"><img src="assets/img/logo.png" alt=""></a>
				</div>

				<nav id="nav">
					<a href="#" id="nav-toggle" title="Navigation"><i class="fa fa-bars"></i></a>
					<ul>
						<li><a href="index.html">Home <span>Welcome</span></a></li>
						<li><a href="#">About <span>USCIS Verify</span></a></li>
                  <li><a href="#">Contact <span>Get In Touch</span></a></li>
						<li class="nav-special nav-reverse">
							<a href="#">PROVIDER <span>Benefits</span></a>
							<ul>
								<li><a href="#" data-toggle="modal" data-target="#exampleModal" id="example_login_model">Provider Login</a></li>
								<li><a href="#">Apply</a></li>
							</ul> 	
						</li>
					</ul>
				</nav>
			</div>
			
		</header>
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
						<div class="modal-content modal-padding">
							<div class="modal-header border-0">
								<h3 class="modal-title w-100 text-center" id="exampleModalLabel">Log In</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							{{Form::open(['url'=>url('login'),'id'=>'general_form'])}}
								<div class="form-label-group">
									<label for="inputEmail">Email address</label>
									<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
									@if(Session::has('invalid_login'))
										<p class="text-danger">{{ Session::get('invalid_login') }}</p>
									@endif
													</div>

								<div class="form-label-group">
									<label for="inputPassword">Password</label>
									<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
								</div>

								<div class="custom-control custom-checkbox mb-3">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Remember password</label>
								</div>
								<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
								<!-- <hr class="my-4">
								<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
								<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button> -->
								 {{Form::close()}}
							</div>
						</div>   
						</div>
					</div> 
					<!-- Modal -->

		@yield('content')


		<footer id="footer">
			<div class="q-container">
				<div class="q-row">
					<div class="q-col-2-3">
						<nav id="nav-footer-primary">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="#" data-toggle="modal" data-target="#exampleModal" id="example_login_model">Provider Login</a></li>
							</ul>
						</nav>

						<p class="footer-info">Copyright 2017. All rights reserved.</p>
					</div>
					<div class="q-col-1-3">
						<a href="#" class="footer-logo"><img src="assets/img/logo-footer.png" alt=""></a>

						<ul class="social-profiles">
							<li><a href="http://facebook.com/uscis" class="social-button social-facebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://twitter.com/uscis" class="social-button social-twitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
      <!-- JavaScript -->
	  <script src="assets/js/jquery-1.11.1.min.js"></script>
		<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<Script src="assets/js/jquery-ui.min.js"></script>

		<!-- Loading: Google Maps API-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVILsE_q8MXQDljo45Cy2nUjb3LPuja_c"></script>

		<!-- Loading: Additional Scripts and Plugins -->
		<script src="assets/js/less-1.7.3.min.js"></script>
		<script src="assets/js/plugins/jquery.hoverintent.min.js"></script>
		<script src="assets/js/plugins/jquery.superfish.min.js"></script>
		<script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/js/plugins/easy-responsive-tabs/easyresponsivetabs.js"></script>
		<script src="assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/plugins/jquery.mixitup.min.js"></script>
		<script src="assets/js/plugins/jquery.fitvids.js"></script>
		<script src="assets/js/plugins/jquery.mousewheel.min.js"></script>
		<script src="assets/js/plugins/jquery.simplr.smoothscroll.min.js"></script>
		<script src="assets/js/plugins/wow.min.js"></script>

		<!-- Loading: Forms and Form Validation -->
		<script src="assets/js/plugins/jquery.form.min.js" type="text/javascript"></script>
		<script src="assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
		<script src="assets/js/custom.validation.js" type="text/javascript"></script>

		<!-- Loading: Custom Scripts -->
		<script src="assets/js/custom.electoral.js"></script>

		<!-- Start: StatCounter Code -->
		<script type="text/javascript">
		var sc_project=4147920; 
		var sc_invisible=1; 
		var sc_partition=51; 
		var sc_click_stat=1; 
		var sc_security="40840811"; 
		</script>

		<script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a title="web stats" class="statcounter" href="http://www.statcounter.com/free_web_stats.html"><img class="statcounter" src="http://c.statcounter.com/4147920/0/40840811/1/" alt="web stats" /></a></div></noscript>


      <script src="js/custom.js"></script>
      <script src="js/slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
		@yield('script')
   </body>
</html>
