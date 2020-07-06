<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="jumbotron card-img text-center">
	<div class="container">
		<h1 class="display-4">Menu Items</h1>
		<p class="lead text-muted font-weight-bold"> Wide variety of food options & restaurants.</p>
	</div>
</section>


<?php if ($this->session->flashdata('registered')) : ?>
	<p class="alert alert-success alert-dismissable"><?php echo $this->session->flashdata('registered'); ?></p>
<?php endif; ?>

<div class="album bg-light">
	<div class="container">
		<?php if (!empty($menu_items)) { ?>
			<div class="row">
				<?php foreach ($menu_items as $item) { ?>
					<div class="col-md-4">
						<a href="<?php echo base_url() . 'menu/' . $item['m_id']; ?>" style="text-decoration: none; " class="list-group-item list-group-item-action flex-column align-items-start">
							<div class="card shadow-sm">
								<img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?php echo (site_url()) ?>assets/uploaded_images/food_items/<?php echo ($item['image']); ?>" />
								<div class="text-center">
									<div class="h5"><?php echo ($item['item_name']) ?></div>
								</div>
								<div class="card-body">
									<p class="card-text"><?php echo (word_limiter($item['description'], 10)); ?></p>
									<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<button type="button" class="btn btn-sm">Rs. <?php echo ($item['price']) ?> |
												<?php if ($item['type'] === 'Veg') { ?>
													<div class="badge badge-success">
														<?php echo ($item['type']) ?>
													</div>
												<?php } else { ?>
													<div class="badge badge-warning">
														<?php echo ($item['type']) ?>
													</div>
												<?php } ?>
											</button>
										</div>
										<p class="text-weight-italics">
											Restaurant: <b class="text-muted"><?php echo ($item['name']) ?> </b>
										</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php } ?>
			</div>
		<?php } else { ?>
			<div class="alert alert-info" role="alert">
				<span class="font-weight-bolder">Sorry! </span> No Items Are Here!
			</div>
		<?php
		}
		?>
	</div>
</div>
