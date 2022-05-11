<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>


	<!-- Bootstrap core CSS -->
	<link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">

	<style>
		body {
			background: #cdebff;
		}

		.btn-login {
			font-size: 0.9rem;
			letter-spacing: 0.05rem;
			padding: 0.75rem 1rem;
		}
	</style>

</head>

<body>
	<div class="container">
		<form method="POST">
			<div class="container">
				<div class="row">
					<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
						<div class="card border-0 shadow rounded-3 my-5">
							<div class="card-body p-4 p-sm-5">
								<h5 class="card-title text-center mb-5 fw-light fs-5">Form Login </h5>
								<form></form>
								<form method="POST" action="<?= base_url('auth'); ?>">
									<div class="form-floating mb-3">
										<input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
										<label for="floatingInput">Email address</label>
									</div>
									<div class="form-floating mb-3">
										<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
										<label for="floatingPassword">Password</label>
									</div>

									<div class="mb-3 text-center">
										<input type="submit" name="submit_form" class="btn btn-primary" value="Sign in">
									</div>

								</form>
								<br>

								<div class="form-floating mb-3 text-center">
									<p>Not a member? <a href="<?= base_url('login/register') ?>">Register</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>

<!-- js -->
<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>

</html>