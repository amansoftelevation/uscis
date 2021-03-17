
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/custom.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>USCIS VERIFY</title>
   </head>
   <body>
		<header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top  bg-primary-custom">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="images/logo.png" alt="logo" width="100px"> </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarCollapse">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span>Welcome</span></a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">About<span>USCIS Verify</span></a>
                     </li>
                     <li class="nav-item provider-list">
                        <a class="nav-link" href="#"><span>* * *</span>Provider</a>
                     </li>
                     <li class="nav-item login-btn">
                        <button type="button" class="" data-toggle="modal" data-target="#exampleModal">Login</button>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
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
                       <hr class="my-4">
                       <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                       <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                    {{Form::close()}}
                  </div>
               </div>   
            </div>
         </div>             
		</header>


		@yield('content')


		<footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <ul class="quick-links">
                     <li><a href="#">Home</a></li>
                     <li><a href="#">Provider Login</a></li>
                  </ul>
                  <p class="text-white">Copyright 2017.All rights reserved.</p>
               </div>
               <div class="col-md-6 text-right">
                  <div class="logo-white"><img src="images/logo-white.png" class="img-fluid" width="150px"> </div>
                  <ul class="social-icon-list">
                     <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
		</footer>
      <!-- JavaScript -->
      <script src="js/custom.js"></script>
      <script src="js/slim.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>

   </body>
</html>
