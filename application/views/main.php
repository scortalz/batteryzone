<?php include_once('layout/header.php');?>
  <style type="text/css">
   
   
    .slider {
        width:  75%;
        height: 20%;
        margin: 3% 0 7% -4%; 
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {

        color: white;
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
    <section class="autoplay slider " style="margin: 0px auto;" >
             <div>
               <img style="width: 100%; height: 40vh;" src="<?php echo base_url();?>assets/images/slider/1.png">
             </div>

             <div>
               <img style="width: 100%; height: 40vh;" src="<?php echo base_url();?>assets/images/slider/2.png">
             </div>

             <div>
               <img style="width: 100%; height: 40vh;" src="<?php echo base_url();?>assets/images/slider/3.png">
             </div>

             <div>
               <img style="width: 100%; height: 40vh;" src="<?php echo base_url();?>assets/images/slider/4.png">
             </div>

             <div>
               <img style="width: 100%; height: 40vh;" src="<?php echo base_url();?>assets/images/slider/5.png">
             </div>

             <div>
               <img style="width: 100%; height: 45vh;" src="<?php echo base_url();?>assets/images/slider/6.png">
             </div>
  </section>
    </div>

    <div class="row">
    <?php foreach($category as $cat){ ?>
        <div id="image-changer" class="col-6 col-lg-4">
            <img style="height: 200px;" src="<?php echo base_url().$caturl.$cat['cat_img']; ?>">
            <h2><?php echo $cat['cat_name']; ?></h2>
            <p><!-- Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. --> 
             <?php $subcatname = $this->db->get_where('subcategory',array('cat_id' =>  $cat['cat_id']))->result_array(); ?>
            
                <?php foreach($subcatname as $subcat){ ?>   
                <a class="btn btn-secondary" href="<?php echo base_url().'Home/subcat/'.$cat['cat_id']; ?>" role="button"><?php echo $subcat['subcat_name'];?> &raquo;</a>
                 <?php } ?>
                </p>
            <p>
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
