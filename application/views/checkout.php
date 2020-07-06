<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container card mt-5">
	<h2 class="display-4 card-header">Checkout</h2>
	<?php if (validation_errors()) : ?>
		<div class="alert alert-danger text-center mt-5 alert-dismissible fade show" role="alert">
			<?php echo (validation_errors()); ?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
	<?php endif; ?>

	<table id="cart" class="card-body table table-hover table-condensed">
		<thead>
			<tr>
				<th style="width:50%">Product</th>
				<th style="width:10%">Price</th>
				<th style="width:8%">Quantity</th>
				<th style="width:22%" class="text-center">Subtotal</th>
				<th style="width:10%"></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-th="Product">
					<div class="row">
						<div class="col-sm-2 hidden-xs"><img src="<?php echo base_url() ?>assets/uploaded_images/food_items/<?php echo ($menuItem['image']) ?>" width="75" alt="..." class="img-responsive" /></div>
						<div class="col-sm-10">
							<h4 class="nomargin"><?php echo ($menuItem['item_name']); ?></h4>
							<p><?php echo (word_limiter($menuItem['description'], 20)); ?></p>
						</div>
					</div>
				</td>
				<td data-th="Price">Rs. <?php echo ($menuItem['price']); ?></td>
				<td data-th="Quantity">
					1
				</td>
				<td data-th="Subtotal" class="text-center">Rs.<?php echo ($menuItem['price']); ?></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td><a href="<?php echo (base_url()) ?>menu" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back To Menu</a></td>
				<td colspan="2" class="hidden-xs"></td>
				<td class="hidden-xs text-center"><strong>Total Rs.<?php echo ($menuItem['price']); ?></strong></td>
				<td>
					<button class="checkout btn btn-success btn-block" data-toggle="modal" data-target="#contact">Proceed</button>
				</td>
			</tr>
		</tfoot>
	</table>


	<!-- Modal -->
	<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Address Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url() . 'place-order' ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="address">Enter your address</label>
							<textarea class="form-control" id="address" rows="3" name="address" required></textarea>
						</div>

						<!-- Hidden fields to send other information -->
						<input type="text" hidden value="<?php echo ($menuItem['name']) ?>" name="user_id">
						<input type="text" hidden value="<?php echo ($menuItem['name']) ?>" name="restaurant">
						<input type="text" hidden value="<?php echo ($menuItem['m_id']) ?>" name="m_id">
						<input type="text" hidden value="1" name="quantity" id="qty">
						<input type="text" hidden value="<?php echo ($menuItem['price']); ?>" name="amount" id="amt">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Buy</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
