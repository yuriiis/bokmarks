<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="simple bookmarking service <?php echo $cat['category_name']; ?>">
    <title><?php echo $cat['category_name']; ?> - Simple bookmarks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<style>
	.card-wrapper {
  display: inline-block;
  perspective: 1000px;
}

.card-wrapper .card {
  position: relative;
  cursor: pointer;
  transition-duration: 0.6s;
  transition-timing-function: ease-in-out;
  transform-style: preserve-3d;
}
.card-wrapper .card .front,
.card-wrapper .card .back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  transform: rotateX(0deg);
}
.card-wrapper .card .front {
  z-index: 2;
}


/* DEMO */
body {

}
.card-wrapper,
.card {
  width: 180px;
  height: 120px;

}
.card .front,
.card .back {
  display: flex;
  align-items: center;
  justify-content: center;

}
.card .front {
  color: #FFFFFF;

  font-weight: 700;
  font-size: 1rem;
}
.card .back {
  font-size: 1.5rem;
  color: #FFFFFF;

}


</style>



  </head>

  <body>


	<nav  class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<div class="container d-flex justify-content-between">
<a class="navbar-brand d-flex align-items-center" href="<?php echo site_url('/'); ?>"><svg class="i-bookmark" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"><path d="M6 2 L26 2 26 30 16 20 6 30 Z"></path></svg>Simple bookmarks</a>
<ul class="navbar-nav my-2 my-md-0 mr-md-3">
</ul>
		</div>
	</nav>


		<main role="main">


	<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>

</main>

	<footer class="text-muted  border-top" >
	  <div class="container">
	    <p class="float-right">
	      <a href="#">Back to top</a>
	    </p>
	    <p>This service needs your sponsorship. Please help us if you like.</p>
	    <p>Our payment details  BTC  14TEt3t9yyJd7m2SEi8vqmS3BuxEXrg4h1 </p>
	  </div>
	</footer>


	</body>
	</html>
