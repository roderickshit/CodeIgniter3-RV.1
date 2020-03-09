<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to CodeIgniter</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-light navbar-light" style="height: 50px;">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link"><?php echo '<p class="mt-3 fnt-rubik font-weight-bold">CodeIgniter v'.CI_VERSION.'</p>';?></a></li>
		</ul>
	</nav>
	<div class="container mt-2">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h5 class="fnt-rubik font-weight-bold">The page you are looking at is being generated dynamically by</h5>
				<img src="<?php echo base_url('assets/imgs/codeigniter-logo.png'); ?>" width="185" height="35">
				<hr class="my-3">
				<p class="fnt-rubik font-weight-bold">If you would like to edit this page you'll find it located at:</p>
				<p class="fnt-condensedroboto" style="color: darkslateblue;">application/views/welcome_message.php</p>

				<p class="mt-4 fnt-rubik font-weight-bold">The corresponding controller for this page is found at:</p>
				<p class="fnt-condensedroboto" style="color: darkslateblue;">application/controllers/Welcome.php</p>

				<p class="fnt-rubik">If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="https://codeigniter.com/user_guide/index.html" style="text-decoration: none;">User Guide</a>.</p>
				<hr class="my-2">
				<p class="mt-4 fs-20 fnt-condensedroboto">Page rendered in <strong style="color: darkblue;">{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong style="color: darkblue;">' . CI_VERSION . '</strong>' : '' ?>, Powered by <i class="fab fa-bootstrap" style="color: purple;"> </i><i class="ml-2 fab fa-php"></i></p>

			</div>
			
		</div>
	</div>
</body>
</html>