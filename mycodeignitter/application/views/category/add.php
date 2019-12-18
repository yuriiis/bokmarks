<center>
<h3>Add your category</h3>
</center>
<br>

<?php echo form_open('category/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="category_name"  >Category Name</label>

			<input type="text" name="category_name" value="<?php echo $this->input->post('category_name'); ?>" class="form-control" id="category_name" placeholder="music" />
			<span class="text-danger"><?php echo form_error('category_name');?></span>
	</div>
	<div class="form-group">
		<label for="description"  >Description</label>

			<textarea name="description" class="form-control" id="description" placeholder="sites with music tracks online" ><?php echo $this->input->post('description'); ?></textarea>

	</div>

	<div class="form-group">
		<label for="stattus"  >Category type</label>

<select name="stattus" class="custom-select">
  <option selected value="0">Hidden category</option>
  <option value="1">Public category</option>
</select>

	</div>

	<div class="row">
		<div class="col-auto mr-auto"> </div>
		<div class="col-auto"><button type="submit" class="btn btn-success">Save</button></div>
	</div>

<?php echo form_close(); ?>
