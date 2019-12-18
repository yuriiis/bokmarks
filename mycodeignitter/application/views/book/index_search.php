


<div class="album py-4 bg-light">
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




<div class="card-wrapper flip-right">

<div class="card">
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


<hr/>
<?php

if($one_category['hcode']!='' & $one_category['stattus']==1 )
{

$code = '
<div class="alert alert-secondary" role="alert" >
Short link this page <a href="'.site_url('board/').$one_category['hcode'].'"target="_blank">'.site_url('board/').$one_category['hcode'].'</a>
</div>
';

echo $code;
}
?>

</div>

</div>
