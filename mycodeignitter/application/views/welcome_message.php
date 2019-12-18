<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="simple bookmarking service">
    <title>Simple bookmarks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
<style>
.jumbotron {
  padding-top: 3rem;
  padding-bottom: 3rem;
  margin-bottom: 0;
  background-color: #fff;
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: 6rem;
    padding-bottom: 6rem;
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
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
<section class="jumbotron text-center"></section>
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Hello!</h1>
      <p class="lead text-muted">
        It's not easy to look for something on the darknet.<br> Even harder to remember URL sites like this   http://afajj7x4zfl2d3fc2u7uzxp4iwf4r2kucr5on24xk2hwrssoj7yivhid.onion  :)
        it’s much easier to save url once and use it constantly. Our service does not contain javascript, we maintain your security.</p>
      <p>
        <a href="<?php echo site_url('auth/login/'); ?>" class="btn btn-primary ">Login</a>
        <a href="<?php echo site_url('auth/create_user_web/'); ?>" class="btn btn-secondary ">Registration</a>
      </p>
    </div>
  </section>

<section class="jumbotron text-center"></section>
</main>

<footer class="text-muted border-top">
  <div class="container">
    <p class="float-right">

    </p>
    <p>Simple bookmarks is &copy; http://afajj7x4zfl2d3fc2u7uzxp4iwf4r2kucr5on24xk2hwrssoj7yivhid.onion
      <br> clearnet :  http://savelink.org
      <br>
        Email for communication: bookmarks_admin@protonmail.com</p>
<br>
        <a href="http://afajj7x4zfl2d3fc2u7uzxp4iwf4r2kucr5on24xk2hwrssoj7yivhid.onion/counter/visits.php?id=c789bbba96bf90cadd9f9d64bd9a9327"><img style="height:24px;width:auto;" src="http://afajj7x4zfl2d3fc2u7uzxp4iwf4r2kucr5on24xk2hwrssoj7yivhid.onion/counter/counter.php?id=c789bbba96bf90cadd9f9d64bd9a9327&bg=FFFFFF&fg=FFFFFF&tr=0&unique=0&mode=0"></a>

  </div>
</footer>
</body>
</html>
<!--  Page rendered in  {elapsed_time} seconds. -->
