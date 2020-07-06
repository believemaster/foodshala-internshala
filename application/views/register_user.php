<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/signin.css">


<div class="card form-signin mt-4">
	<form method="post" action="<?php echo base_url(); ?>store-user">
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
		<h1 class="h3 mb-3 font-weight-normal text-center">Cutomer Sing Up</h1>
		<label for="inputName" class="sr-only">Name</label>
		<input name="name" type="text" id="inputName" class="form-control mb-2" placeholder="Name" autofocus>

		<label for="inputEmail" class="sr-only">Email address</label>
		<input name="email" type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" autofocus>

		<label for="inputType" class="sr-only">Food Type</label>
		<select name="preference" id="inputType" class="form-control mb-2" placeholder="Email address" autofocus>
			<option value="">Preference</option>
			<option value="veg">Veg</option>
			<option value="non-veg">Non-Veg</option>
			<option value="both">Both</option>
		</select>

		<label for="inputPassword" class="sr-only">Password</label>
		<input name="password" type="password" id="inputPassword" class="form-control mb-2" placeholder="Password">

		<label for="inputRePassword" class="sr-only">Password</label>
		<input name="repassword" type="password" id="inputRePassword" class="form-control mb-2" placeholder="Re-Password">

		<button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
		<div class="text-center">
			<a href="<?php echo base_url(); ?>register-restaurant">Register As Restaurant</a>
		</div>

	</form>
	<p class="mt-5 mb-3 text-muted text-center">&copy; <?php echo date("Y"); ?> Copyright.</p>
</div>
