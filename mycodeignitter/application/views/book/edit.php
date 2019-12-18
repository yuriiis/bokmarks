<center>
	<h3>Edit your bookmark</h3>
</center>
<br>
<?php echo form_open('book/edit/'.$book['id'],array("class"=>"form-horizontal")); ?>



<div class="form-group">
	<label for="url" >Bookmark Url</label>

	<input name="url"  id="url" value="<?php echo ($this->input->post('url') ? $this->input->post('url') : $book['url']); ?>" class="form-control" />
<span class="text-danger"><?php echo form_error('url');?></span>
</div>

<div class="form-group">
	<label for="bookmark_name">Bookmark Name</label>

	<input type="text" name="bookmark_name" value="<?php echo ($this->input->post('bookmark_name') ? $this->input->post('bookmark_name') : $book['bookmark_name']); ?>" class="form-control" id="bookmark_name" />
<span class="text-danger"><?php echo form_error('bookmark_name');?></span>
</div>

<div class="form-group">
	<label for="ulogin">Your Login</label>

	<input type="text" name="ulogin" value="<?php echo ($this->input->post('ulogin') ? $this->input->post('ulogin') : $book['ulogin']); ?>" class="form-control" id="ulogin" />
<span class="text-danger"><?php echo form_error('ulogin');?></span>
</div>

<div class="form-group">
	<label for="upass">Your Password</label>

	<input type="text" name="upass" value="<?php echo ($this->input->post('upass') ? $this->input->post('upass') : $book['upass']); ?>" class="form-control" id="upass" />
<span class="text-danger"><?php echo form_error('upass');?></span>
</div>


<div class="form-group">
	<label for="description">Description</label>

	<textarea name="description" class="form-control" id="description"><?php echo ($this->input->post('description') ? $this->input->post('description') : $book['description']); ?></textarea>

</div>


	<div class="form-group">
		<label for="color"  >Color</label>

<select name="color" id="color" class="custom-select" onChange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor" required>

	<?php
					$color_values = array(

						'#F6E58D'=>'LIGHT SAND',
						'#F9CA23'=>'DARK SAND',
						'#FEBE76'=>'LIGHT ORANGE',
						'#F0932B'=>'DARK ORANGE',
						'#FF7979'=>'CORAL',
						'#EB4C4B'=>'RED',
						'#BADC58'=>'LIME GREEN',
						'#6AB04C'=>'GRASS GREEN',
						'#DFF9F8'=>'LIGHT SKY BLUE',
						'#C7ECEE'=>'DARK SKY BLUE',
						'#7ED6DF'=>'OCEAN',
						'#23A6B3'=>'DARK OCEAN',
						'#E056FD'=>'FUSCHIA',
						'#BE2EDD'=>'DARK FUSCHIA',
						'#686DE0'=>'PERIWINKLE',
						'#4834D4'=>'PURPLE',
						'#30336C'=>'DEEP PURPLE',
						'#120F40'=>'TWILIGHT',
						'#95AFC0'=>'STEEL GREY',
						'#535C68'=>'DARK GREY',
					);

					foreach($color_values as $value => $display_text)
					{
						$selected = ($value == $book['color']) ? ' selected="selected"' : "";

						echo '<option  style="background: '.$value.'; color: #FFF;"  value="'.$value.'" '.$selected.'>'.$display_text.'</option>';

					}
					?>



</select>

	</div>










<div class="form-group">

	<label for="category"  >Category</label>

	<select name="category" class="form-control">
		<option value="">Select category</option>
		<?php
		foreach($all_category as $category)
		{
			$selected = ($category['id'] == $book['category']) ? ' selected="selected"' : "";

			echo '<option value="'.$category['id'].'" '.$selected.'>'.$category['category_name'].'</option>';
		}
		?>
	</select>

</div>


<div class="row">
	<div class="col-auto mr-auto"> </div>
	<div class="col-auto"><button type="submit" class="btn btn-success">Save</button></div>
</div>

<?php echo form_close(); ?>
