<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="card mt-3">
	<div class="flex-wrapper">
		<div class="card-header">
			<h2 class="text-center display-4">
				<?php echo $this->session->userdata('name') ?> <br>
			</h2>
			<h2 class="text-center">
				Here's Your Food Ordered List
			</h2>
		</div>
		<div class="container mt-5 card-body">
			<?php if (empty($ordered)) { ?>
				<div class="alert alert-info alert-dismissible fade show" role="alert">
					<strong><i class="fas fa-info-circle"></i> Oops</strong> You should get something to eat from <a href="<?php echo base_url() ?>menu">Menu Here</a>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<?php } else {
				foreach ($ordered as $item) { ?>

					<?php if ($item['waiting'] == 1) { ?>
						<?php if ($item['status'] == 0) { ?>
							<a class="badge badge-info" href="<?php echo base_url() . 'cancel/' . $item['o_id']; ?>">Order in queue - Click to cancel</a>
						<?php } else { ?>
							<a class="badge alert-secondary">Order Is Confirmed Can't Cancel Now</a>
						<?php } ?>
					<?php } else { ?>
						<a class="badge alert-danger">You Cancelled Your Order</a>
					<?php } ?>

					<a href="<?php echo (base_url('/menu/' . $item['m_id'])); ?>" class="card text-dark mb-2" style="text-decoration: none;">
						<div class="row mt-2">
							<div class="col-md-2">
								<img src="<?php echo (base_url()) ?>assets/uploaded_images/food_items/<?php echo ($item['image']); ?>" class="card-img" alt="Food item thumbnail">
							</div>
							<div class="col-md-9">
								<div class="d-flex w-100 justify-content-between">
									<h5 class="mb-2"><?php echo ($item['item_name']) ?></h5>
									<small><strong>Date: </strong><?php echo date('M j Y g:i A', strtotime($item['created_at'])); ?></small>
								</div>
								<p class="mb-1"><?php echo (word_limiter($item['description'], 50)); ?> <span class="read-more">Read More</span></p>
								<hr>
								<div class="row mt-3 mb-2">
									<div class="col-md">
										<div class="price-box">
											Price: <span class="font-weight-bold"><?php echo ($item['price']) ?> ₹</span>
										</div>
										<div class="<?php echo ($item['type']); ?>">
											Type: <span class="font-weight-bold"><?php echo ($item['type']) ?></span>
										</div>
									</div>
									<div class="col-md">
										<div class="restaurant-box">
											Restaurant Name: <span class="font-weight-bold"><?php echo ($item['res_name']) ?></span>
										</div>
										<div>Status:
											<?php if ($item['status'] == 0) { ?>
												<p class="badge alert-warning">Pending</p>
											<?php } else { ?>
												<p class="badge alert-success">Confirmed
												</p>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</a>
					<hr>
			<?php }
			} ?>
		</div>
	</div>
</div>
