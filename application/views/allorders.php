<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="card mt-3">
	<div class="flex-wrapper">
		<div class="card-header">
			<h2 class="text-center display-4">
				<?php echo $this->session->userdata('name') ?><br>
			</h2>
			<h2 class="text-center">
				You've Orders To Serve
			</h2>
		</div>

		<div class="container card-body">
			<?php if (empty($orders)) { ?>
				<div class="alert alert-info alert-dismissible fade show" role="alert">
					<strong> No orders </strong> For You. Don't worry somone will get yours.
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php } else { ?>
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr class="table-info text-dark">
								<th scope="col">#</th>
								<th scope="col">Image</th>
								<th scope="col">Customer</th>
								<th scope="col">Item</th>
								<th scope="col">Type</th>
								<th scope="col">Price</th>
								<th scope="col">Address</th>
								<th scope="col">Status</th>
								<th scope="col">Waiting</th>
							</tr>
						</thead>
						<tbody>
							<?php $counter = 1;
							foreach ($orders as $order) { ?>
								<tr>
									<th scope="row"><?php echo ($counter++); ?></th>
									<td><img src="<?php echo base_url() ?>assets/uploaded_images/food_items/<?php echo ($order['image']) ?>" width="40" alt="Product Image" class="img-responsive" />
									</td>
									<td><?php echo ($order['name']); ?></td>
									<td><?php echo ($order['item_name']); ?></td>
									<td><?php echo ($order['type']); ?></td>
									<td>Rs.<?php echo ($order['amt']); ?></td>
									<td><?php echo ($order['address']); ?></td>
									<?php if ($order['status'] == 0) { ?>
										<?php if ($order['waiting'] == 1) { ?>
											<td><a class="badge badge-warning" href="<?php echo base_url() . 'confirm/' . $order['o_id']; ?>">Pending - Click To Confirm</a></td>
										<?php } else { ?>
											<td>
												<p class="badge alert-secondary">Order Cancelled, Can't Confirm Now</p>
											</td>
										<?php } ?>
									<?php } else { ?>
										<td>
											<p class="badge alert-success" href="#">Confirmed</p>
										</td>
									<?php } ?>
									<?php if ($order['waiting'] == 1) { ?>
										<td>
											<p class="badge alert-info">In-Queue</p>
										</td>
									<?php } else { ?>
										<td>
											<p class="badge alert-danger">Cancelled</p>
										</td>
									<?php } ?>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
		</div>
	<?php } ?>
	</div>
</div>
</div>
