
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ url('css/custom.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
      <link rel="stylesheet" href="{{ url('assets/css/normalize.css') }}" media="screen">
		<link rel="stylesheet" href="{{ url('assets/css/grid.css') }}" media="screen">
		<link rel="stylesheet" href="{{ url('assets/css/animate.min.css') }}" media="screen">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="{{ url('assets/js/plugins/owl-carousel/owl.carousel.css') }}" media="screen">
		<link rel="stylesheet" href="{{ url('assets/js/plugins/owl-carousel/owl.theme.css') }}" media="screen">
		<link rel="stylesheet" href="{{ url('assets/js/plugins/owl-carousel/owl.transitions.css') }}" media="screen">

		<link rel="stylesheet" href="{{ url('assets/js/plugins/easy-responsive-tabs/easyresponsivetabs.css') }}" media="screen">
		<link rel="stylesheet" href="{{ url('assets/js/plugins/magnific-popup/jquery.magnific-popup.css') }}" media="screen">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{ url('assets/css/style.css') }}" media="screen">
		<link href="https://beontime.io/css/toaster.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,700,300' rel='stylesheet' type='text/css'>
      <title>USCIS VERIFY</title>
   </head>
   <body>
   <header id="header">
			<div class="q-container">
				<div id="logo">
					<a href="{{ url('/') }}"><img src="{{ url('assets/img/logo.png') }}" alt=""></a>
				</div>

				<nav id="nav">
					<a href="#" id="nav-toggle" title="Navigation"><i class="fa fa-bars"></i></a>
					<ul>
						<li><a href="{{ url('/') }}">Home <span>Welcome</span></a></li>
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
					<button type="button" id="login_close" class="close" data-dismiss="modal" aria-label="Close">
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
						<div class="d-flex align-items-center justify-content-between mb-3">
						<div class="custom-control custom-checkbox ">
							<input type="checkbox" class="custom-control-input" id="customCheck1">
							<label class="custom-control-label" for="customCheck1">Remember password</label>
						</div>
						<a href="#" data-toggle="modal" data-target="#exampleModal1" id="example_forgot_model">Forget Password</a>
						</div>
						<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
					{{Form::close()}}
				</div>
			</div>   
		</div>
	</div> 
					<!-- Modal -->
					
		<!-- forget password Modal -->
		<div class="modal fade p-0" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-padding">
					<div class="modal-header border-0 pb-0">
						<h3 class="modal-title w-100 text-center" id="exampleModalLabel">Reset Your Password</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					<p class="mt-0 text-center">Enter your email, and we,ll send you an email to reset your password</p>
					{{Form::open(['url'=>url('forget-password'),'id'=>'general_form'])}}
						<div class="form-label-group">
							<label for="inputEmail">Email address</label>
							<input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
							@if(Session::has('invalid_email'))
								<p class="text-danger">{{ Session::get('invalid_email') }}</p>
							@endif
											</div>
						<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
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
	  <script src="{{ url('clients/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
      <!-- Bootstrap tether Core JavaScript -->
      <script src="{{ url('clients/plugins/bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
      <script src="{{ url('clients/bootstrap/dist/js/bootstrap.min.js') }}"></script>
      <script src="{{ url('clients/js/app-style-switcher.js') }}"></script>
      <script src="{{ url('clients/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
      <!--Wave Effects -->
      <script src="{{ url('clients/js/waves.js') }}"></script>
      <!--Menu sidebar -->
      <script src="{{ url('clients/js/sidebarmenu.js') }}"></script>
      <!--Custom JavaScript -->
      <script src="{{ url('clients/js/custom.js') }}"></script>
      <!--This page JavaScript -->
      <!--chartis chart-->
      <script src="{{ url('clients/plugins/bower_components/chartist/dist/chartist.min.js') }}"></script>
      <script src="{{ url('clients/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
      <script src="{{ url('clients/js/pages/dashboards/dashboard1.js') }}"></script>
      <script src="http://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	  <script src="https://beontime.io/js/jquery.toast.js"></script>
	  
	@if(Session::has('success_message'))
	 <script>
			$.toast({
				  heading             : 'Success',
				  text                : "{{Session::get('success_message')}}",
				  loader              : true,
				  loaderBg            : '#fff',
				  showHideTransition  : 'fade',
				  icon                : 'success',
				  hideAfter           : 3000,
				  position            : 'top-right'
			});
	   
	   </script>
	@endif
	
		<script>
			$(document).ready( function () {
				$('#example_forgot_model').click(function(){
					$('#login_close').click();
				});
			});
		</script>
	  
	@if(Session::has('invalid_login'))
		<script>
			$(document).ready( function () {
				$('#example_login_model').click();
			});
		</script>
	@endif
	@if(Session::has('invalid_email'))
		<script>
			$(document).ready( function () {
				$('#example_forgot_model').click();
			});
		</script>
	@endif
		@yield('script')
   </body>
</html>
