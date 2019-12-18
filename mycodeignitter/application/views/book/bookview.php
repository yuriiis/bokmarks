



  <br><br>
  <div class="row">
    <div class="col">

    </div>
    <div class="col-sm-10 col-md-9 col-lg-5  col-xl-4">

      <div class="card" style="border-color:<?php echo $book['color'] ?>">
        <div class="card-body">



          <p class="h5"><b>Bookmark name :</b><?php echo $book['bookmark_name'] ?></p><br>
          <p class="h5"><b>URL :</b> <a href="<?php echo $book['url'] ?>" target="_blank"><?php echo $book['url'] ?></a></p><br>
    		  <p class="h5"><b>Login :</b> <?php echo $book['ulogin'] ?></p><br>
    		  <p class="h5"><b>Password :</b> <?php echo $book['upass'] ?></p><br>
          <p class="h5"><b>Description :</b> <?php echo $book['description'] ?></p><br>
          <p class="h5"><b>Color :</b> <?php echo $book['color'] ?></p><br>
          <p class="h5"><b>Category :</b><?php echo $category['category_name'] ?></p><br>



          <div class="row">
            <div class="col-auto mr-auto"> </div>
            <div class="col-auto">
            <a href="<?php echo site_url('book/edit/'); ?><?php echo $book['id'] ?>"  role="button" class="btn btn-light">Edit</a>
            <a href="<?php echo site_url('book/remove/'); ?><?php echo $book['id'] ?>"  role="button" class="btn btn-light">Delete</a>

            </div>
          </div>





        </div>
      </div>

    </div>
    <div class="col">

    </div>

  </div>
  <br><br>
