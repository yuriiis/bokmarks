<center>
<h3>Edit your category</h3>
</center>
<br>

<?php echo form_open('category/edit/'.$category['id'],array("class"=>"form-horizontal")); ?>


	<div class="form-group">
		<label for="category_name" >Category Name</label>
			<input type="text" name="category_name" value="<?php echo ($this->input->post('category_name') ? $this->input->post('category_name') : $category['category_name']); ?>" class="form-control" id="category_name" />
			<span class="text-danger"><?php echo form_error('category_name');?></span>
	</div>
	<div class="form-group">
		<label for="description" >Description</label>
			<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $category['description']); ?></textarea>
	</div>

	<div class="form-group">
		<label for="stattus"  >Category type</label>

<select name="stattus" class="custom-select">

	<?php
					$stattus_values = array(
						'0'=>'Hidden category',
						'1'=>'Public category',
					);

					foreach($stattus_values as $value => $display_text)
					{
						$selected = ($value == $category['stattus']) ? ' selected="selected"' : "";

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					}
					?>



</select>

	</div>



	<div class="row">
		<div class="col-auto mr-auto"> </div>
		<div class="col-auto"><button type="submit" class="btn btn-success">Save</button></div>
	</div>

<?php echo form_close(); ?>
