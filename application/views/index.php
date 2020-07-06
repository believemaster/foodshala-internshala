<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<main role="main">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="bd-placeholder-img" width="100%" height="100%" src="https://miro.medium.com/max/3840/1*k92-ZChOfryiqAKb59peBg.jpeg" />
				<div class="container">
					<div class="carousel-caption text-left">
						<h1>Happy Place For Foodies</h1>
						<p>Looking for the best and delicious food with different options? Signup now.</p>
						<p><a class="btn btn-lg btn-info active" href="<?php echo base_url() ?>register-user" role="button">Sign up Customer</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="bd-placeholder-img" width="100%" height="100%" src="https://i2.wp.com/www.disneytouristblog.com/wp-content/uploads/2019/06/black-tap-burgers-shakes-restaurant-disneyland-downtown-disney-california-2356.jpg?resize=800%2C511&ssl=1" />
				<div class="container">
					<div class="carousel-caption">
						<h1>Do You Own A Restaurant?</h1>
						<p>Just singup and sell your sweet delicious food online at foodshala and spread your name online.</p>
						<p><a class="btn btn-lg btn-info active" href="<?php echo base_url() ?>register-restaurant" role="button">Sing up Restaurant</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="bd-placeholder-img" width="100%" height="100%" src="https://health.clevelandclinic.org/wp-content/uploads/sites/3/2019/06/cropped-GettyImages-643764514.jpg" />
				<div class="container">
					<div class="carousel-caption text-right">
						<h1>Wide Rage Of Food Online</h1>
						<p>Wide variety of food included into the menu to fill up your tummy.</p>
						<p><a class="btn btn-lg btn-info active" href="<?php echo base_url() ?>menu" role="button">Browse Menu</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- 3 Headings -->

	<div class="container marketing">

		<!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-lg-4">
				<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://freeiconshop.com/wp-content/uploads/edd/eat-flat-1.png" />
				<h2>Healthy</h2>
				<p>All restaurants in the Foodshala are quality checked. Before listing their items on menu they the restaurant os verified with all quality testing to ensure that our customers will get the healthy food.</p>
				<p><a class="btn btn-outline-secondary" href="<?php echo base_url() ?>menu" role="button">Menu &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.freeiconspng.com/uploads/chief-icon-6.png" />
				<h2>Parters</h2>
				<p>You are always free to register yourself as a restaurant in foodshala so that you can easily serve your food to public out in the market and have some online profit with the lines of customers.</p>
				<p><a class="btn btn-outline-secondary" href="<?php echo base_url() ?>register-restaurant" role="button">Register &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.menupad.com/media/img/mode-online-ordering.png" />
				<h2>Online</h2>
				<p>No need to rush out to restaurants to buy, just look up into website and order what you like. Order the food and just wait for confirmation from restaurant also you can cancel your order anytime.</p>
				<p><a class="btn btn-outline-secondary" href="<?php echo base_url() ?>menu" role="button">Menu &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->


		<!-- START THE FEATURETTES -->

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Always. <span class="text-muted">Hot To Serve.</span></h2>
				<p class="lead">Restaurants listed are much quick and easy to deliver your orders. You just need to sit back tight and wait for the fresha and hot food at your doorstep in no time after the order is placed.</p>
			</div>
			<div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://www.dinneratthezoo.com/wp-content/uploads/2017/12/meal-prep-burrito-bowls-500x500.jpg" alt="" width="500" height="500" />
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7 order-md-2">
				<h2 class="featurette-heading">Preference <span class="text-muted">of customer we always care for.</span></h2>
				<p class="lead">We make it easy for customers with the preference. So relax if you are vegan we still got food to serve you. Just see the badge of Veg and Non-veg of the product and order your favorite.</p>
			</div>
			<div class="col-md-5 order-md-1">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://www.currytrail.in/wp-content/uploads/2018/01/Lime-chicken-brownrice-with-cilantro-meal-prep_11-500x500.jpg" alt="" />
			</div>
		</div>

		<hr class="featurette-divider">

		<div class="row featurette">
			<div class="col-md-7">
				<h2 class="featurette-heading">Wide <span class="text-muted">Variety and list.</span></h2>
				<p class="lead">We are connected with so many restaurants that you will be tired of scrolling the menu. Restaurant partners are always adding on their new food items and you will see the first listing in the menu.</p>
			</div>
			<div class="col-md-5">
				<img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://theclevermeal.com/wp-content/uploads/2018/12/veganappetizers_roundup-500x500.jpg" alt="" />
			</div>
		</div>

		<hr class="featurette-divider">

		<!-- /END THE FEATURETTES -->
