<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/signin.css">


<div class="card form-signin">
	<form method="post" action="<?php echo base_url(); ?>signin">
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
		<h1 class="h3 mb-3 font-weight-normal text-center">Sing In</h1>
		<label for="inputEmail" class="sr-only">Email address</label>
		<input name="email" type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="inputPassword" class="form-control mb-2" placeholder="Password">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<div class="text-center">
			<a href="<?php echo base_url(); ?>register-user">Register As User</a> or
			<a href="<?php echo base_url(); ?>register-restaurant">Register As Restaurant</a>
		</div>
	</form>
	<p class="mt-3 text-muted text-center">&copy; <?php echo date("Y"); ?> Copyright.</p>
</div>
