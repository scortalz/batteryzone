<?php include_once('layout/header.php');?>
<?php 
      $subcaturl   = 'assets/images/uploads/category/subcategory/';
      $prourl      = 'assets/images/uploads/category/subcategory/products/';
      $banurl      = 'assets/images/uploads/banners/';
 ?>
<style type="text/css" >
 * {
  font-family: "Roboto";
  list-style: none;
  margin: 0;
  padding: 0;
  text-decoration: none;
  letter-spacing: 1px;
  box-sizing: border-box;
}
body {
  background: #f9fafa;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.block {
  margin: 20px;
  border-radius: 4px;
  width: 280px;
  min-height: 430px;
  background: #fff;
  padding: 23px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  box-shadow: 0 2px 55px rgba(0,0,0,0.1);
}
.top {
  border-bottom: 1px solid #e5e5e5;
  padding-bottom: 10px;
}
.top ul {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}
.top a {
  color: #9e9e9e;
}
.top a:hover {
  color: #c7ccdb;
}
.converse {
  padding: 2px 10px;
  border-radius: 20px;
  text-transform: uppercase;
  font-size: 14px;
}
.middle {
  margin-bottom: 40px;
}
.middle img {
  width: 100%;
}
.bottom {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}
.heading {
  font-size: 17px;
  text-transform: uppercase;
  margin-bottom: 5px;
  letter-spacing: 0;
}
.info {
  font-size: 14px;
  color: #969696;
  margin-bottom: 10px;
}
.style {
  font-size: 16px;
  margin-bottom: 20px;
}
.old-price {
  color: #f00;
  text-decoration: line-through;
}
   
</style>

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
<?php foreach($selectedpro as $products) { ?>

<div class="block">
  
  <div class="top">
    <ul>
      <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
      <li><span class="converse"><?php echo $products['p_name']; ?></span></li>
      <li><a href="#"><i class="fa fa-shopping-basket" aria-hidden="true"></i>
</a></li>
    </ul>
  </div>
  
  <div class="middle">
    <img src="<?php echo base_url().$prourl.$products['p_main_image'];?>" alt="pic" />
  </div>
  
  <div class="bottom">
    <div class="heading"><?php echo $products['p_name']; ?></div>
    <div class="price"><?php echo $products['p_price']; ?></div>
    <a href="<?php echo base_url().'Home/products/'.$products['p_id']; ?>" class="btn btn-primary">Buy Now</a>
  </div>
  
</div>

<?php } ?> 

    </div>

</div>
<!-- End Product Description Row -->
</div>
<!-- End Product Description Container -->
      <?php include_once('layout/footer.php');?>