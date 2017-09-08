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
<?php foreach ($aproduct as $product) { ?>



<div class="container">
    <!-- Main Container -->
    <div class="row">
        <!-- Main Row -->
        <div class="col-md-4 ProName ">
            <!-- Picture Plugin Start -->
            <img id="batteryimage" class="img-responsive" style="cursor: pointer" data-toggle="modal" data-target="#myModal2" src="<?php echo base_url().$prourl.$product['p_main_image'];?>">

            <div class="modal fade" id="myModal2" role="dialog">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">

                        <div class="modal-header text-right ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">

                            <center><img src="<?php echo base_url().$prourl.$product['p_main_image'];?>">
                            </center>

                        </div>




                    </div>
                </div>
            </div>

        </div>
        <!--  End of Picture Plugin -->


        <div class="col-md-3">
            <span class="ProName">
          <?php echo $product['p_name'];?>
        </span>
            <br>

            <span class="proPrice"><?php echo $product['p_price'];?> 
        </span>
            <br>

            <span class="delivery">Delivery Time 2-3 Days  </span>
            <span class="questForm" data-toggle="modal" data-target="#myModal"> 
       <i class="fa fa-question-circle fa-2x" id="fa-question-circle" aria-hidden="true"></i>
 Ask A Question</span>
            <br>
            <br>
            <img id="howto" class="imggformm" src="<?php echo base_url();?>assets/images/howto.jpg">


        </div>
        <!--  End of Products  Name Price Etc -->
        <div class="col-md-1 col-lg-1"> </div>
        <!-- ADDRESS MODAL -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div style="background:orange;" class="modal-content">
                    <div style="padding: 25px 30px 20px;background-color:#f5f5f5;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Address Details</h4>
                        </div>
                        <div class="modal-body">
                <form action="<?php echo base_url();?>Home/askaquestion" method="post" id="askaquestion">

                       <fieldset>
                      
                            <div class="col-md-6 mb-15">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                            </div>

                            <div class="col-md-6 mb-15">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Your Email">
                            </div>

                            <div class="col-md-6 mb-15">
                                <input type="text" name="contactno" id="contactno" class="form-control" placeholder="Contact Number">
                            </div>

                            <div class="col-md-6 mb-15">
                                <textarea name="question" style="width: 323px;" class="form-control" id="question" placeholder="Your Question"></textarea>
                            </div>
                            <input type="hidden" name="p_id" id="p_id" value="<?php echo $product['p_id'];?>">
                            <input type="hidden" name="pagename" id="pagename" value="<?php echo $pagename;?>" >
                     </fieldset>
                        </div>

                        <div class="row"></div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                             </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ADDRESS MODAL ENDS -->


        <div class="col-md-4 ">
            <form action="<?php echo base_url();?>Home/products/add-order" method="post" class="form-horizontal formm" id="orderform">


                <fieldset>

                    <!-- Form Name -->
                    <legend>
                        <center> Order Form</center>
                    </legend>

                    <!-- Text input-->
                    <div class="form-group">

                        <div class="col-md-12">
                            <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">

                        <div class="col-md-12">
                            <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">

                        </div>
                    </div>

                    <!-- Select Basic -->

                    <div class="form-group">

                        <div class="col-md-12">
                            <input id="quantity" name="quantity" type="number" placeholder="Quantity" class="form-control input-md">

                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md">
                                </div>
                                <div class="col-md-6">
                                    <input id="city" name="city" type="text" placeholder="City" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Text input-->
                    <div class="form-group">

                        <div class="col-md-12">
                            <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md">

                        </div>
                    </div>



                    <!-- Select Basic -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <select id="payment" name="payment" class="form-control">
                                <option value="Cash">Cash</option>
                                <option value="e-paisa">Easy Paisa</option>
                                <option value="j-cash">Jazz Cash</option>
                                <option value="c-card">Credit Card</option>
                            </select>
                        </div>
                    </div>


                    <!-- Multiple Checkboxes -->
                    <div class="form-group">

                        <div class="col-md-12">
                            <div class="checkbox ">
                                <label for="checkboxes-0">
                                    <input type="checkbox" name="terms" id="terms" value="1" class="chkk"> I Accept Terms & Conditions
                                </label>
                            </div>
                            <div class="checkbox ">
                                <label for="checkboxes-1">
                                    <input type="checkbox" name="subscription" id="subscription" value="2" class="chkk"> Subscribe for Deals & Discounts
                                </label>
                            </div>
                        </div>
                    </div>



                    <!-- Button  -->
                    <div class="form-group">

                        <div class="col-md-12">
                            <button type="submit" id="submit" class="btn btn-success">Order Now</button>
                        </div>
                    </div>
                    <center>
                        <img src="<?php echo base_url().$prourl.$product['p_main_image'];?>" class="imggformm">
                    </center>
                </fieldset>
            </form>

        </div>
        <!--  End of Contact Form -->


    </div>
    <!-- End Main Row -->
</div>
<!-- End Main Container -->
<?php } ?>



<div class="container">
    <!--   Product Description Container -->
    <div class="row">
        <!--   Product Description Row -->


        This Area is Reserved for Product Description
        <br>
        <br> This Area is Reserved for Product Description
        <br>
        <br> This Area is Reserved for Product Description
        <br>
        <br> This Area is Reserved for Product Description
        <br>
        <br> This Area is Reserved for Product Description
        <br>
        <br>

    </div>
    <!-- End Product Description Row -->
</div>
<!-- End Product Description Container -->

<?php include_once('layout/footer.php');?>