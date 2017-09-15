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
    .slick-track{
        margin-bottom: 4% !important;
    }

    .slick-prev:before,
    .slick-next:before {

        color: black;
        padding-top:10% !important; 
    }
    .slick-prev.slick-arrow,
    .slick-next.slick-arrow{

        padding-top:25% !important; 
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
    <section class="autoplay slider " style="margin: 0px auto;width: 100%;" >
             <div>
               <img style="width: 100%; height: 50vh;" src="<?php echo base_url();?>assets/images/slider/1.png">
             </div>

             <div>
               <img style="width: 100%; height: 50vh;" src="<?php echo base_url();?>assets/images/slider/2.png">
             </div>

             <div>
               <img style="width: 100%; height: 50vh;" src="<?php echo base_url();?>assets/images/slider/3.png">
             </div>

             <div>
               <img style="width: 100%; height: 50vh;" src="<?php echo base_url();?>assets/images/slider/4.png">
             </div>

             <div>
               <img style="width: 100%; height: 50vh;" src="<?php echo base_url();?>assets/images/slider/5.png">
             </div>

             <div>
               <img style="width: 100%; height: 45vh;" src="<?php echo base_url();?>assets/images/slider/6.png">
             </div>
  </section>
    </div>

    <div class="row">
    <?php $count = 0; foreach($category as $cat){ ?>

        <div id="image-changer" class="col-md-3 shadowback">
 <img class="catMain" src="<?php echo base_url().$caturl.$cat['cat_img']; ?>"></img> 
  <span id="txtImg" class="txtImg"><?php echo $cat['cat_name']; ?></span>
  <h2><span class="txtImgg"><?php echo $cat['cat_name']; ?></span></h2>
<p> <?php $subcatname = $this->db->get_where('subcategory',array('cat_id' =>  $cat['cat_id']))->result_array(); ?>
            
      <?php foreach($subcatname as $subcat){ ?>   
    <a class="btn btn-secondary btn-primary btn-block " href="<?php echo base_url().'Home/subcat/'.$cat['cat_id']; ?>" role="button"><?php echo $subcat['subcat_name'];?> &raquo;</a>
               <?php } ?>
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
        <?php foreach($banner as $banimg){ ?>  
            <img src="<?php echo base_url().$banurl.$banimg['b_img'];?>">
             <?php } ?> 
        </div>
 



    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 proHead"><i class="fa fa-star" aria-hidden="true"></i> New arrivals</div>
    </div>
    <div class="row">
    <?php $count = 0; foreach ($products as $proforeach) { ?>
        <div class="col-md-2 ">
            <img class="picIn" src="<?php echo base_url().$prourl.$proforeach['p_main_image'];?>"> </span>
            <span class="textIn"><?php echo $proforeach['p_name']; ?></span>
            <br>
            <center>
                <span class="price"><?php echo $proforeach['p_price']; ?> </span>
                <br>
                <a class="order" 
                href="<?php echo base_url();?>Home/products/<?php echo $proforeach['p_id'];?>"> Order Now  </a>
            <hr class="hrr">
        </div>
<?php  $count++;
        if ($count == 6) {
          break;
        }   } ?>
    </div>

    <div class="row">
        <div class="col-md-12 proHead"><i class="fa fa-star" aria-hidden="true"></i> Featured Products</div>
    </div>
    <div class="row">
    <?php  $count = 0; foreach($featurepro as $featured) { ?>
        <div class="col-md-2 ">
            <img class="picIn" src="<?php echo base_url().$prourl.$featured['p_main_image'];?>"> </span>
            <span class="textIn"><?php echo $featured['p_name']; ?></span>
            <br>
            <center>
                <span class="price"> <?php echo $featured['p_price']; ?> </span>
                <br>
                <a class="order" 
                href="<?php echo base_url();?>Home/products/<?php echo $featured['p_id'];?>"> Order Now  </a> </center>
            <hr class="hrr">
        </div>
        <?php 
        $count++;
        if ($count == 6) {
          break;
        }
      } ?>
   
    </div>

</div>

<!-- <form action="asdsad" method="post" id="search">
  
  <input type="text" name="name" />
  <button type="submit">submit</button>
</form>
 -->
 
    
<?php include_once('layout/footer.php');?>

<script type="text/javascript">
 
