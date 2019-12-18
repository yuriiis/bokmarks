<div class="album py-3 bg-light">
<div class="container">



	<blockquote class="blockquote text-center">
	  <p class="mb-0"><?php echo $cat['category_name']; ?>.</p>
	  <footer class="blockquote-footer"> <?php echo $cat['description']; ?></footer>
	</blockquote>


<hr/>


		<div  class="row" >




			<?php foreach($book as $b){ ?>


<div class="card-wrapper flip-right box1">


  <div class="card ">


  <div class="front " style="background: <?php echo $b['color']; ?>; ">

  <a href="<?php echo $b['url']; ?>" target="_blank" style="color:#FFFFFF"> <?php echo $b['bookmark_name']; ?></a>

  </div>



  </div> </div>



					<?php } ?>


				</div>
			</div>
		</div>
