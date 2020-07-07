<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/signin.css">
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<div class="card form-signin">
	<form class="" method="post" action="<?php echo base_url(); ?>store-restaurant">
		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger text-center mt-5 alert-dismissible fade show" role="alert">
				<?php echo (validation_errors()); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?>

		<div class="text-center">
			<img class="mb-2" src="https://i.pinimg.com/originals/fd/80/ec/fd80ecec48eba2a9adb76e4133905879.png" alt="" width="72" height="72">
		</div>
		<h1 class="h3 mb-3 font-weight-normal text-center">Restaurant Sing Up</h1>
		<label for="inputName" class="sr-only">Restaurant Name</label>
		<input name="name" type="text" id="inputName" class="form-control mb-2" placeholder="Restaurant Name" autofocus>

		<label for="inputEmail" class="sr-only">Email address</label>
		<input name="email" type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" autofocus>

		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="inputPassword" class="form-control mb-2" placeholder="Password">

		<label for="inputRePassword" class="sr-only">Password</label>
		<input name="repassword" type="password" id="inputRePassword" class="form-control mb-2" placeholder="Re-Password">

		<button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
		<div class="text-center">
			<a href="<?php echo base_url(); ?>register-user">Register As User</a>
		</div>
	</form>
	<p class="mt-5 mb-3 text-muted text-center">&copy; <?php echo date("Y"); ?> Copyright.</p>
</div>
