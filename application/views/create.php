<div class="container">
	<?php echo (validation_errors()); ?>
	<div class="card mt-3">
		<div class="card-header">
			<h2 class="text-center display-4">
				Create Item
			</h2>
		</div>
		<div class="card-body">
			<form class="form-signin" method="post" action="<?php echo base_url() ?>menu/create" enctype="multipart/form-data">
				<div class="form-group">
					<label for="food_item">Name of the food item</label>
					<input type="text" name='name' required class="form-control" id="food_item" placeholder="Food item name">
				</div>
				<div class="form-group">
					<label for="food_description">Food Description</label>
					<textarea minlength="150" name='description' required class="form-control" id="food_description" rows="3" placeholder="Add Details For Your Product"></textarea>
				</div>
				<div class="form-group">
					<label for="food_type">Type of food (Veg / Non-Veg)</label>
					<select class="form-control" id="food_type" required name='type'>
						<option value="">Select Type</option>
						<option value="Veg">Veg</option>
						<option value="Non-Veg">Non-Veg</option>
					</select>
				</div>
				<div class="form-group">
					<label for="food_price">Set the price for your food item</label>
					<input type="number" name='price' required class="form-control" id="food_price" placeholder="Food item price">
				</div>
				<div class="form-group">
					<label for="food_img">Upload Image</label>
					<input type="file" class="form-control-file" id="food_img" name='image'>
				</div>
				<button type="submit" class="btn btn-outline-primary">Submit</button>
			</form>
		</div>
	</div>


</div>
