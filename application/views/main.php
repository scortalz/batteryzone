<?php include_once('layout/header.php');?>
  <style type="text/css">
   
   
    .slider {
        width: 40%;
        height: 40%;
        margin: 5% 0 0 30%; 
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
        color: grey;
    }
  </style>

<?php $caturl      = 'assets/images/uploads/category/';
      $subcaturl   = 'assets/images/uploads/category/subcategory/';
      $prourl      = 'assets/images/uploads/category/subcategory/products/';
      $banurl      = 'assets/images/uploads/banners/';
 ?>

<div class="col-12 col-md-9 bodyContent">
    <p class="float-left d-md-none">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">&DoubleLongLeftArrow; Toggle Categories</button>
    </p>

    <div class="row aa">
        <div class="col-md-12">
            <!-- <img class="img-responsive" src="<?php echo base_url();?>assets/images/bannerb.png"> -->
    <section class="autoplay slider">
             <div>
               <img class="img-responsive" src="http://placehold.it/210x70?text=1">
             </div>
             <div>
               <img class="img-responsive" src="http://placehold.it/210x70?text=2">
             </div>
             <div>
               <img class="img-responsive" src="http://placehold.it/210x70?text=3">
             </div>
             <div>
               <img class="img-responsive" src="http://placehold.it/210x70?text=4">
             </div>
             <div>
               <img class="img-responsive" src="http://placehold.it/210x70?text=5">
             </div>
             <div>
               <img class="img-responsive" src="http://placehold.it/210x70?text=6">
             </div>
  </section>
    </div>

    <div class="row">
    <?php foreach($category as $cat){ ?>
        <div id="image-changer" class="col-6 col-lg-4">
            <img style="height: 200px;" src="<?php echo base_url().$caturl.$cat['cat_img']; ?>">
            <h2><?php echo $cat['cat_name']; ?></h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-secondary" href="<?php echo base_url().'Home/subcat/'.$cat['cat_id']; ?>" role="button">View details &raquo;</a>
            </p>
        </div>
        <?php } ?>

    </div>
    <!--/row-->
</div>
<!--/span-->


</div>
<!--/row-->

<hr>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="aside col-lg-4  ">
            <img src="<?php echo base_url();?>assets/images/batryside1.png">

            <img src="<?php echo base_url();?>assets/images/batryside2.png">
        </div>



    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 proHead"><i class="fa fa-star" aria-hidden="true"></i> New arrivals</div>
    </div>
    <div class="row">
    <?php foreach ($products as $proforeach) { ?>
        <div class="col-md-2 ">
            <img class="picIn" src="<?php echo base_url().$prourl.$proforeach['p_main_image'];?>"> </span>
            <span class="textIn"><?php echo $proforeach['p_name']; ?></span>
            <br>
            <center>
                <span class="price"><?php echo $proforeach['p_price']; ?> </span>
                <br>
                <span class="order"> Order Now  </span> </center>
            <hr class="hrr">
        </div>
<?php } ?>
    </div>

    <div class="row">
        <div class="col-md-12 proHead"><i class="fa fa-star" aria-hidden="true"></i> Featured Products</div>
    </div>
    <div class="row">
    <?php foreach ($products as $proforeach) { ?>
        <div class="col-md-2 ">
            <img class="picIn" src="<?php echo base_url().$prourl.$proforeach['p_main_image'];?>"> </span>
            <span class="textIn"><?php echo $proforeach['p_name']; ?></span>
            <br>
            <center>
                <span class="price"> <?php echo $proforeach['p_price']; ?> </span>
                <br>
                <span class="order"> Order Now  </span> </center>
            <hr class="hrr">
        </div>
        <?php } ?>
   
    </div>

</div>


 
    
<?php include_once('layout/footer.php');?>
