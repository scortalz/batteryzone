<?php include_once('layout/header.php');?>
<?php 
      $subcaturl   = 'assets/images/uploads/category/subcategory/';
      $prourl      = 'assets/images/uploads/category/subcategory/products/';
      $banurl      = 'assets/images/uploads/banners/';
 ?>
<div class="col-12 col-md-9 bodyContent">
    <p class="float-left d-md-none">
        <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">&DoubleLongLeftArrow; Toggle Categories</button>
    </p>

</div>
<!--/span-->

</div>
<!--/row-->

</div>
</div>

<div class="container">
    <!--   Product Description Container -->
    <div class="row">
        <!--   Product Description Row -->

        <div class="col-md-12 proHead"><i class="fa fa-star" aria-hidden="true"></i> Categories for the Product XYZ</div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">


            <?php foreach($selsubcategory as $subcat) {?>
                <div class="col-md-5">
                    <img class="img-responsive" src="<?php echo base_url().$subcaturl.$subcat['subcat_img'];?>">
                    <div class="subCatName">
                        <a href="<?php echo base_url();?>/Home/producsts/<?php echo $subcat['subcat_id'];?>"> <?php echo $subcat['subcat_name']; ?></a>
                    </div>
                </div>
                <div class="col-md-2"></div>
            <?php } ?>



            </div>
        </div>
        <div class="col-md-2"></div>
    </div>

</div>
<!-- End Product Description Row -->
</div>
<!-- End Product Description Container -->
      <?php include_once('layout/footer.php');?>