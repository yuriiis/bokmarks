<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="simple bookmarking service">

    <title>Login bookmarks</title>

    <!-- Bootstrap core CSS -->
      <!--<link rel="stylesheet" href="third_party/bootstrap.min.css" >-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <!--<link rel="stylesheet" href="third_party/album.css" >-->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
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


<br><br>
  <div class="row">
    <div class="col">

    </div>
        <div class="col-md-auto">

      <div class="card">
        <div class="card-body">

      <?php echo form_open("auth/create_user_web");?>

      <h1><?php echo lang('create_user_heading');?></h1>
      <p><?php echo lang('create_user_subheading');?></p>
<br>
        <div id="infoMessage"><?php echo $message;?></div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" id="email" name="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email" value="" >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <?php
        if($identity_column!=='email') {
            echo '<p>';
            echo lang('create_user_identity_label', 'identity');
            echo '<br />';
            echo form_error('identity');
            echo form_input($identity);
            echo '</p>';
        }
        ?>




        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="password"  placeholder="Password" value="" >
        </div>

        <div class="form-label-group">
          <input type="password" id="password_confirm" class="form-control" value="" name="password_confirm" placeholder="Confirm  password" required>

        </div>
<br>

        <button type="submit" class="btn btn-primary" name="submit">Sign up</button>
      <?php echo form_close();?>

    </div>
    </div>

    </div>
    <div class="col">

    </div>

  </div>

</main>


<br><br>

<footer class="text-muted border-top">
  <div class="container">
    <p class="float-right">

    </p>
    <p>Simple bookmarks is &copy; http://afajj7x4zfl2d3fc2u7uzxp4iwf4r2kucr5on24xk2hwrssoj7yivhid.onion
      <br>

        Email for communication: bookmarks_admin@protonmail.com</p>
  </div>
</footer>


</body>
</html>
<!--  Page rendered in  {elapsed_time} seconds.-->
