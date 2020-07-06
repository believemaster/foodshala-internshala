<header>
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">
				<img src="https://i.pinimg.com/originals/fd/80/ec/fd80ecec48eba2a9adb76e4133905879.png" width="30" height="30" alt="">
				Foodshala
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
					</li>

					<!-- Only if the user is logged in as restaurant, he/she can add a new food item and see the list of orders taken -->
					<?php if ($this->session->userdata('logged_in') && ($this->session->userdata('role') === "res")) : ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo (base_url() . "menu/create"); ?>">Add new Item</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo (base_url() . "all-orders"); ?>">All Orders</a>
						</li>
					<?php endif; ?>

					<!-- Only if the user is logged in as customer, he/she can his order history -->
					<?php if ($this->session->userdata('logged_in') && ($this->session->userdata('role') === "user")) : ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo (base_url() . "orders"); ?>">Orders</a>
						</li>
					<?php endif; ?>

					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>menu">Menu</a>
					</li>
					<?php if (!$this->session->userdata('logged_in')) : ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="<?php echo base_url(); ?>register-user">Customer</a>
								<a class="dropdown-item" href="<?php echo base_url(); ?>register-restaurant">Restaurant</a>
							</div>
						</li>
					<?php endif; ?>

					<?php if ($this->session->userdata('logged_in')) : ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Hi, <?php echo ($this->session->userdata('name')); ?>
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="<?php echo (base_url() . "logout"); ?>">Logout</a>
							</div>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
</header>
