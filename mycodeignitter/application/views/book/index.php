<div class="album py-3 bg-light">
<div class="container">







				<div class="row">
					<ul class="nav justify-content-center">

						<?php foreach($category as $c){ ?>
							<li class="nav-item">
								<a class="nav-link btn-light" href="<?php echo site_url('book/bookserch/'); ?><?php echo $c['id']; ?>/"><?php echo $c['category_name']; ?></a>
							</li>
						<?php } ?>

					</ul>
				</div>
<hr/>





<div class="card-wrapper flip-right box1">

  <div class="card ">
    <div class="front" style="background:#007bff;"><a href="<?php echo site_url('book/add'); ?>" style="color:#FFFFFF" >ADD BOOKMARK</a> </div>
  </div>

</div>


<?php foreach($book as $b){ ?>


<div class="card-wrapper flip-right box1">
  <div class="card ">
  <div class="front " style="background: <?php echo $b['color']; ?>; ">

  <a href="<?php echo $b['url']; ?>" target="_blank" style="color:#FFFFFF" title="<?php echo $b['description']; ?>"> <?php echo $b['bookmark_name']; ?></a>

  </div>
     <ul class="icon" style="background:<?php echo $b['color']; ?>">
<li><a href="<?php echo site_url('book/view/'.$b['id']); ?>"><span class="glyphicon glyphicon-pencil">❤</span></a></li>
</ul>

  </div>
  </div>


<?php } ?>
