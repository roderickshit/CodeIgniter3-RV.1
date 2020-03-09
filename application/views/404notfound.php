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
			<li class="nav-item"><a class="nav-link"><?php echo '<p class="mt-2">CodeIgniter v'.CI_VERSION.'</p>';?></a></li>
		</ul>
	</nav>
	<div class="container mt-2">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<img src="<?php echo base_url('assets/imgs/codeigniter-logo.png'); ?>" width="185" height="35">
				<hr class="my-3">
				<h4 class="fnt-rubik font-weight-bold">404 NOT FOUND</h4>
				<p class="fnt-rubik">Page is under development or unavailable.</p>
				<hr class="my-2">
				<p class="mt-4 fs-20 fnt-condensedroboto">Page rendered in <strong style="color: darkblue;">{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong style="color: darkblue;">' . CI_VERSION . '</strong>' : '' ?>, Powered by <i class="fab fa-bootstrap" style="color: purple;"> </i><i class="ml-2 fab fa-php"></i></p>

			</div>
			
		</div>
	</div>
</body>
</html>