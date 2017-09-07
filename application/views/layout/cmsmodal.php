 <!--   Add CAt Modal  -->
  <div id="addcatmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Category</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open_multipart('Cms/addcat',array('id' => 'add-data')); ?>

                <div class="form-group">
                <fieldset>
                  <label for="category">Category Name</label>
                  <input type="input" name="category" class="form-control" id="category">
                </div>
                <div class="form-group">
                  <label for="categoryimg">Image</label>
                  <input type="file" name="categoryimg" class="form-control" id="categoryimg">
                </div>
                </fieldset>
                <button type="submit" class="btn btn-default">Submit</button>
               
              <?php echo form_close();?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

  </div>
</div>
<!--  End Add CAt Modal  -->


<!--    Edit CAt Modal  -->
  <div id="editcatmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Category</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Cms/edit',array('id' => 'edit-data')); ?>
                <div class="form-group">
                <input type="hidden" id="id" name="id">
                <fieldset>
                  <label for="category">Category Name</label>
                  <input type="input" id="edtname" name="edtname" value="" class="form-control">
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-primary uploadnewimg" id="" >Click to Upload Image</button>
                  <div class="newimg" style="display:none;">
                  <label for="img">Image</label>
                  <input type="hidden" name="delPic" id="delPic">
                  <input type="file" value="" id="edtimg" name="categoryimg" class="form-control" >
                  </div>
                  </fieldset>

                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              <?php echo form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!--  End Edit CAt Modal  -->
  

<!--  Add Subcat Modal 
 -->
  <div id="addsubcatmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Category</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open_multipart('Cms/subcat/form',array('id' => 'add-cat-data')); ?>

                <div class="form-group">
                <fieldset>
                  <label for="category">Sub Category Name</label>
                  <input type="input" name="subcategory" class="form-control" id="subcategory">
                </div>


                <div class="form-group">
                </fieldset>
                  <label for="sel-cat">Sub Category Name</label>
                  <select name="sel-cat" class="form-control" id="sel-cat">
                    <?php  foreach ($category as $value) { ?>
                      
                    <option value="<?php echo $value['cat_id'];?>"><?php echo $value['cat_name'];?></option>


                    <?php } ?>

                    </select>
                </div>

                <div class="form-group">
                  <label for="categoryimg">Image</label>
                  <input type="file" name="subcategoryimg" class="form-control" id="subcategoryimg">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
               
              <?php echo form_close();?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

  </div>
</div>
<!--  End Add Subcat Modal 
 -->


<!--  Edit Subcat Modal 
 -->

  <div id="editsubcatmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Sub-Category</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Cms/subcat/form-edit',array('id' => 'edit-sub-data')); ?>
                <div class="form-group">

                <input type="hidden" id="editsubcatid" name="editsubcatid">
                <fieldset>
                  <label for="category">Sub Category Name</label>
                  <input type="input" id="edtsubcatname" name="edtsubcatname" value="" class="form-control">
                </div>



                <div class="form-group">
                </fieldset>
                  <label for="sel-cat">Category Name</label>
                  <select name="sel-cat" class="form-control sel-cat" id="sel-cat">
                    <?php  foreach ($category as $value) { ?>
                      
                    <option id="check" value="<?php echo $value['cat_id'];?>"><?php echo $value['cat_name'];?></option>


                    <?php } ?>

                    </select>
                </div>


                <div class="form-group">
                  <button type="button" class="btn btn-primary uploadnewimg" id="" >Click to Upload Image</button>
                  <div class="newimg" style="display:none;">
                  <label for="img">Image</label>
                  <input type="hidden" name="oldimg" id="oldimg">
                  <input type="file" value="" id="subcategoryimg" name="subcategoryimg" class="form-control" >
                  </div>

                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              <?php echo form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--  ENDS Edit Subcat Modal 
 -->


<!--  Add PRoduct Modal 
 -->
  <div id="addproduct" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Add Products</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Cms/products/add-product',array('id' => 'addproductmodal')); ?>
          
                <div class="form-group">
                <fieldset>
                  <label for="p-name">Product Name</label>
                  <input type="input" id="pname" name="pname" value="" class="form-control">
                </div>

                <div class="form-group">
                  <label for="p-cat-name">Category Name</label>
                  <select name="cat-name" class="form-control" id="pcatname">
                      <?php foreach($category as $cat){ ?>
                    <option id="" value="<?php echo $cat['cat_id'];?>"><?php echo $cat['cat_name'];?></option>

                    <?php } ?>
                    </select>
                </div>



                <div class="form-group">
                  <label for="p-cat-name">Sub Category Name</label>
                  <select name="sub-cat" class="form-control" id="pcatname">
                      <?php foreach($subcategory as $subcat){ ?>
                    <option id="" value="<?php echo $subcat['subcat_id'];?>"><?php echo $subcat['subcat_name'];?></option>

                    <?php } ?>
                    </select>
                </div>



                <div class="form-group">
                <fieldset>
                  <label for="p-price">Product Price</label>
                  <input type="input" id="pprice" name="pprice" value="" class="form-control">
                </div>

                <div class="form-group">
                <fieldset>
                  <label for="is-featured">Is Featured</label>
                  
                  <input type="checkbox" name="is-featured" id="is-featured">
                </div>





                <div class="form-group">
                  <button type="button" class="btn btn-primary uploadnewimg" id="" >Click to Upload Image</button>
                  <div class="newimg" style="display:none;">
                  <label for="img">Image</label>
                  <input type="file" value="" id="productimg" name="productimg" class="form-control" >
                  </div>
                  </fieldset>

                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                <?php echo form_close();?>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div><!-- END  Add PRoduct Modal 
 -->


<!--  Edit Product Modal 
 -->

  <div id="productedit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Edit Products</h4>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('Cms/products/edit-product',array('id' => 'editproductmodal')); ?>
          
                <div class="form-group">
                  <label for="p-name">Product Name</label>
                  <fieldset>
                  
                  <input type="input" id="peditname" name="peditname" value="" class="form-control">
                </div>
                <input type="hidden" name="productid" id="productid">
                <input type="hidden" name="productoldpic" id="productoldpic">
                <div class="form-group">
                  <label for="pcatname">Category Name</label>
                  <select name="pcatname" class="form-control pcatname" id="pcatname">
                      <?php foreach($category as $cat){ ?>
                    <option id="" value="<?php echo $cat['cat_id'];?>"><?php echo $cat['cat_name'];?></option>

                    <?php } ?>
                    </select>
                </div>



                <div class="form-group">
                  <label for="psubcatname">Sub Category Name</label>
                  <select name="psubcatname" class="form-control psubcatname" id="psubcatname">
                      <?php foreach($subcategory as $subcat){ ?>
                    <option id="" value="<?php echo $subcat['subcat_id'];?>"><?php echo $subcat['subcat_name'];?></option>

                    <?php } ?>
                    </select>
                </div>



                <div class="form-group">
                  <label for="edtprice">Product Price</label>
                  <input type="input" id="edtprice" name="edtprice" value="" class="form-control">
                </div>

                <div class="form-group">
                  <label for="is-featured">Is Featured</label>
                  
                  <input type="checkbox" class="is-featured" name="is-featured" id="is-featured">
                </div>





                <div class="form-group">
                  <button type="button" class="btn btn-primary uploadnewimg" id="" >Click to Upload Image</button>
                  <div class="newimg" style="display:none;">
                  <label for="img">Image</label>
                  <input type="file" value="" id="productimg" name="productimg" class="form-control" >
                  </div>
                </fieldset>

                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                <?php echo form_close();?>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--  ENDS Edit Product Modal 
 -->

 <!-- add banners modal -->
  <div id="addbanner" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Banner</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open_multipart('Cms/banner/add-banner',array('id' => 'add-banner')); ?>
                <fieldset>
                <div class="form-group">
                  <label for="bannerimg">Banner Image</label>
                  <input type="file" name="bannerimg" class="form-control" id="bannerimg">
                </div>
                </fieldset>
                <button type="submit" class="btn btn-default">Submit</button>
               
              <?php echo form_close();?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

  </div>
</div>

<!-- end of add banners modal -->


 <!-- edit banners modal -->
  <div id="editbanner" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Banner</h4>
      </div>
      <div class="modal-body">
       <?php echo form_open_multipart('Cms/banner/edit-banner',array('id' => 'edit-banner')); ?>
                <fieldset>
                <div class="form-group">
                  <label for="bannerimg">Banner Image</label>
                  <input type="file" name="bannerimg" class="form-control" id="bannerimg">
                </div>
                </fieldset>
                <input type="hidden" name="banid" id="banid" value="" >
                <input type="hidden" name="oldbanimg" id="oldbanimg">
                <button type="submit" class="btn btn-default">Submit</button>
               
              <?php echo form_close();?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

  </div>
</div>

<!-- end of edit banners modal -->