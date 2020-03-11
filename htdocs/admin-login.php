<!DOCTYPE html>
<html>
<title>Admin Login</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap CSS -->
  	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/adminstyle.css" rel="stylesheet">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lg-offset-4 col-md-offset-4">
				<h1 class="title-apps animated fadeInDown" style="animation-delay: 1s;"  >Admin Login</h1>
				
				<div class="box animated bounceInDown">
					
				<br />
				<form action="checklogin.php" method="POST" class="form-horizontal" role="form">
							
					<div class="form-group has-feedback animated bounceInLeft" style="animation-delay: 0.1s;">
					    <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
					    <span class="glyphicon glyphicon-user form-control-feedback"></span>
					</div>
 
					<div class="form-group has-feedback animated bounceInRight" style="animation-delay: 0.1s;">
					    <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
					    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
					</div>
 
					<div class="form-group animated bounceInDown" style="animation-delay: 0.1s;">
						<div class="col-sm-8 col-sm-offset-2">
						<button type="submit" class="btn btn-primary btn-block">Login <span class="fa fa-key"></span></button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
		<!-- jQuery -->
		<script src="assets/js/jquery-3.2.1.min.js"></script>
		<!-- Boostrap JavaScript-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>