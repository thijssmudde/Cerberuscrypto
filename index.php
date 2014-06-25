<!DOCTYPE html>
<html>
<head>

	<!-- 
		Created by @fullhdpixel (Twitter) 
		W3C valid
	-->

	<meta charset="utf-8">
	
	<!-- Jquery -->
	<script src="./lib/js/jquery-2.1.1.min.js"></script>
	<script src="./lib/js/jquery-ui-1.10.4.min.js"></script>

	<!-- Main document -->
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	<script src="./js/index.js"></script>
	
	<!-- Bootstrap -->
	<link href="./lib/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="./lib/js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- Fontawesome -->
	<link href="./css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- Animate -->
	<link href="./css/style.css" rel="stylesheet" type="text/css">
	
	<title>
		Cerberuscrypto.com
	</title>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="navbar-header">
			<a href="#index" class="navbar-brand">
				<span class="small-nav">
					<span class="logo"></span>
				</span>
				<span class="full-nav"> Cerberuscrypto </span>
			</a>
		</div>
		<div>
			<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
				<li class="active">
					<a href="#index" role="button" data-toggle="tab">
						<i class="glyphicon glyphicon-home"></i> Home 
					</a>
				</li>
				<li>
					<a href="#login" role="button" data-toggle="tab">
						<i class="fa fa-sign-in"></i> Login
					</a>
				</li>
				<li>
					<a href="#register" role="button" data-toggle="tab">
						<i class="fa fa-edit"></i> Register
					</a>
				</li>
				<li>
					<a href="#about" role="button" data-toggle="tab">
						<i class="fa fa-users"></i> About Us
					</a>
				</li>
				<li>
					<a href="#contact" role="button" data-toggle="tab">
						<i class="glyphicon glyphicon-comment"></i> Contact Us
					</a>
				</li>
			</ul>
			
			<div class="tab-content">
				<!-- Home -->
				<div class="tab-pane fade in active" id="index">
					<div class="col-md-4 col-md-offset-4">
						<h2>Welcome</h2>
					</div>
				</div>
			
				<!-- Login -->	
				<div class="tab-pane fade in" id="login">
				<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
				<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
					<div class="col-md-4 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Login</h3>
							</div>
							<div class="panel-body">
								<form role="form">
								<fieldset>
									<div class="form-group">
										<input class="form-control" placeholder="Your email" name="email" id="emaillogin" type="text">
									</div>
									<div class="form-group">
										<input class="form-control" placeholder="Password" name="password" id="passwordlogin" type="password" value="">
									</div>
									<div class="checkbox">
										<label>
											<input name="remember" type="checkbox" value="Remember Me"> Remember Me
										</label>
									</div>
									<hr/>
									<input class="btn btn-lg btn-success btn-block" type="submit" value="Login" onclick="validateUser(($('emaillogin').text(),$('passwordlogin').text())">
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Register -->
				<div class="tab-pane fade in" id="register">
				<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
				<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
					<div class="col-md-4 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Sign up</h3>
							</div>
							<div class="panel-body">
								<form role="form">
									<fieldset>
										<div class="form-group">
											<input class="form-control" placeholder="Username" name="username" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Your email" name="email" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="password" type="password" value="">
										</div>
										<div class="checkbox">
											<label>
												<input name="remember" type="checkbox">
												I agree to the <a href="#">Terms of Services</a>
											</label>
										</div>
									<hr/>
									<input class="btn btn-lg btn-success btn-block" type="submit" value="Sign Up">
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<!-- About -->
				<div class="tab-pane fade in" id="about">
					<div class="col-md-8 col-md-offset-2">
						<h2>About Cerberuscrypto</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
						</p>
						<div class="media">
						  <a class="pull-left" href="#">
							<img src="#" class="img-rounded">
						  </a>
						  <div class="media-body">
							<h4 class="media-heading">Media heading</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
							</p>
						  </div>
						</div>
						
					</div>
				</div>
				
				<!-- Contact -->
				<div class="tab-pane fade in" id="contact">
				<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
				<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>
					<div class="col-md-4 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">Contact</h3>
							</div>
							<div class="panel-body">
								<form role="form">
									<fieldset>
										<div class="form-group">
											<input class="form-control" placeholder="Subject" name="subject" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Your email" name="email" type="text">
										</div>
										<div class="form-group">
											<textarea rows="5" id="description" name="description" class="form-control input-block-level" placeholder="Description"></textarea>
										</div>
									<hr/>
									<input class="btn btn-lg btn-success btn-block" type="submit" value="Submit">
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">

	<!--  -->
	<section id="" class="bg-white">
	</section>

	<!--  -->
	<section id="" class="bg-gray">
	</section>
</div>

<div class="navbar navbar-default navbar-fixed-bottom" id="footer">
    <div class="container">
		<p class="navbar-text pull-left">© 2014 - Website created by <a href="https//twitter.com/fullhdpixel">Fullhdpixel</a>
		</p>
      
		<a href="https://twitter.com" class="navbar-btn btn-primary btn pull-right">Twitter</a>
		<a href="https://plus.google.com/.com" class="navbar-btn btn-danger btn pull-right">Google +</a>
		<a href="https://twitter.com" class="navbar-btn btn-primary btn pull-right">Facebook</a>
    </div>
</div>

<script>
$( document ).ready(function() {
	$(function () {
		$('#tabs a:last').tab("select", index)
	})
});
</script>

</body>
</html>