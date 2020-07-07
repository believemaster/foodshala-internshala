<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

<div class="container mt-5">
	<div class="row">

		<div class="col-md-8">
			<img src="<?php echo base_url() ?>assets/uploaded_images/food_items/<?php echo ($item['image']) ?>" alt="Food item image" class="img-fluid">
		</div>

		<div class="col-md-4">

			<h3 class="my-3"><?php echo ($item['item_name']) ?></h3>
			<p><?php echo ($item['description']); ?></p>
			<h3 class="my-3">Details</h3>
			<ul>
				<li>
					Restaurant Name :
					<span class="font-weight-bold"><?php echo ($item['name']) ?></span>
					<br>
				</li>
				<li>
					Price: <span class="font-weight-bold"><?php echo ($item['price']) ?> ₹</span>
					<br>
				</li>
				<li>
					Type: <span class="font-weight-bold"><?php echo ($item['type']) ?></span>
				</li>
			</ul>
			<div class="mt-4 text-center">
				<a href="<?php echo (base_url()) ?>menu" class="btn btn-outline-dark">Back To Menu</a>
				<?php if (!$this->session->userdata('logged_in')) : ?>
					<a href="<?php echo (base_url()) ?>login" class="btn btn-outline-info">Buy Now</a><br>
				<?php endif; ?>
				<?php if ($this->session->userdata('logged_in') && ($this->session->userdata('role') === "res")) : ?>
					<p href="<?php echo (base_url()) ?>login" class="alert alert-warning" disabled>Restaurants Are Not Allowed To Buy</p>
				<?php endif; ?>
				<?php if ($this->session->userdata('logged_in') && ($this->session->userdata('role') === "user")) : ?>
					<a href="<?php echo (base_url()) ?>orders/<?php echo ($item['m_id']); ?>" class="btn btn-outline-success">Buy Now</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
