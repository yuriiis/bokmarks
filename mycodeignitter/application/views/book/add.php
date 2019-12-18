
<center>
	<h3>Add your bookmark</h3>
</center>
<br>
<?php echo form_open('book/add',array("class"=>"form-horizontal")); ?>

<div class="form-group">
	<label for="url"  >Bookmark url</label>

		<input type="text" name="url"  id="url" value="<?php echo $this->input->post('url'); ?>" class="form-control" placeholder="https://duckduckgo.com/" />
		<span class="text-danger"><?php echo form_error('url');?></span>
	</div>

	<div class="form-group">
		<label for="bookmark_name" >Bookmark name</label>

			<input type="text" name="bookmark_name" value="<?php echo $this->input->post('bookmark_name'); ?>" class="form-control" id="bookmark_name" placeholder="duckduckgo"/>
			<span class="text-danger"><?php echo form_error('bookmark_name');?></span>
	</div>






	<div class="form-group">
	<label for="ulogin">Your Login</label>

			<input type="text" name="ulogin" value="<?php echo $this->input->post('ulogin'); ?>" class="form-control" id="ulogin" placeholder="not safe, use at your own risk"/>
			<span class="text-danger"><?php echo form_error('ulogin');?></span>
	</div>

	<div class="form-group">
		<label for="upass">Your Password</label>

			<input type="text" name="upass" value="<?php echo $this->input->post('upass'); ?>" class="form-control" id="upass" placeholder="not safe, use at your own risk"/>
			<span class="text-danger"><?php echo form_error('upass');?></span>
	</div>




	<div class="form-group">
		<label for="description" >Description</label>

			<textarea name="description" class="form-control" id="description" placeholder="A search engine that doesn't track you"><?php echo $this->input->post('description'); ?></textarea>

	</div>



	<div class="form-group">
		<label for="color"  >Color</label>

<select name="color" id="color" class="custom-select"  onChange="this.style.backgroundColor=this.options[this.selectedIndex].style.backgroundColor" required >


  <option style="background: #F6E58D; color: #FFF;" value="#F6E58D" selected>LIGHT SAND</option>
  <option style="background: #F9CA23; color: #FFF;" value="#F9CA23">DARK SAND</option>
  <option style="background: #FEBE76; color: #FFF;" value="#FEBE76">LIGHT ORANGE</option>
  <option style="background: #F0932B; color: #FFF;" value="#F0932B">DARK ORANGE</option>
  <option style="background: #FF7979; color: #FFF;" value="#FF7979">CORAL</option>
  <option style="background: #EB4C4B; color: #FFF;" value="#EB4C4B">RED</option>
  <option style="background: #BADC58; color: #FFF;" value="#BADC58">LIME GREEN</option>
  <option style="background: #6AB04C; color: #FFF;" value="#6AB04C">GRASS GREEN</option>
  <option style="background: #DFF9F8; color: #FFF;" value="#DFF9F8">LIGHT SKY BLUE</option>
  <option style="background: #C7ECEE; color: #FFF;" value="#C7ECEE">DARK SKY BLUE</option>
  <option style="background: #7ED6DF; color: #FFF;" value="#7ED6DF">OCEAN</option>
  <option style="background: #23A6B3; color: #FFF;" value="#23A6B3">DARK OCEAN</option>
  <option style="background: #E056FD; color: #FFF;" value="#E056FD">FUSCHIA</option>
  <option style="background: #BE2EDD; color: #FFF;" value="#BE2EDD">DARK FUSCHIA</option>
  <option style="background: #686DE0; color: #FFF;" value="#686DE0">PERIWINKLE</option>
  <option style="background: #4834D4; color: #FFF;" value="#4834D4">PURPLE</option>
  <option style="background: #30336C; color: #FFF;" value="#30336C">DEEP PURPLE</option>
  <option style="background: #120F40; color: #FFF;" value="#120F40">TWILIGHT</option>
  <option style="background: #95AFC0; color: #FFF;" value="#95AFC0">STEEL GREY</option>
  <option style="background: #535C68; color: #FFF;" value="#535C68">DARK GREY</option>

</select>



	</div>




		<div class="form-group">
	 		<label for="category"  >Category</label>

	 			<select name="category" class="form-control">
	 				<option value="">select category</option>
	 				<?php
	 				foreach($all_category as $category)
	 				{
	 					$selected = ($category['id'] == $this->input->post('category')) ? ' selected="selected"' : "";

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
