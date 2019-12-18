<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="simple bookmarking service">

    <title>Simple bookmarks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">




  </head>

  <body>

	<nav  class="navbar navbar-expand-lg navbar-dark bg-dark ">
		<div class="container d-flex justify-content-between">

<a class="navbar-brand d-flex align-items-center" href="<?php echo site_url('/'); ?>"><svg class="i-bookmark" viewBox="0 0 32 32" width="24" height="24" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"><path d="M6 2 L26 2 26 30 16 20 6 30 Z"></path></svg>Simple bookmarks</a>

<ul class="navbar-nav my-2 my-md-0 mr-md-3">

      <li class="nav-item">
		<a class="nav-link" href="<?php echo site_url('category'); ?>">CATEGORY</a>
      </li>

      <li class="nav-item">
		<a class="nav-link" href="<?php echo site_url('auth/logout'); ?>"  tabindex="0" data-toggle="tooltip" title="<?php echo $user_email ?>">LOGOUT</a>
      </li>

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
