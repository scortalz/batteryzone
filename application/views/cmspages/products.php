 <table class="table table-hover table-bordered" id="productsTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Category Name</th>
        <th>Sub Category Name</th>
        <th>Product Image</th>
        <th>Product Price</th>
        <th>Featured</th>
        <th>Date</th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <?php $count = 1; foreach ($products as $value) { ?>
 
        <td><?php echo $count++; ?> </td>
        <td><?php echo $value['p_name']; ?> </td>

        <td><?php $catname = $this->db->get_where('category',array('cat_id' =>  $value['cat_id']))->result_array(); echo $catname['0']['cat_name'];  ?></td>

        <td><?php $subcatname = $this->db->get_where('subcategory',array('subcat_id' =>  $value['subcat_id']))->result_array(); echo $subcatname['0']['subcat_name'];  ?></td>
        
        <td><img src="<?php echo base_url(). 'assets/images/uploads/category/subcategory/products/' .$value['p_main_image']; ?>"  width="42" height="42"><?php echo $value['p_main_image']; ?></td>
        
        <td><?php echo $value['p_price']; ?> </td>
        <td><?php echo $value['p_isfeature']; ?> </td>
        <td><?php echo $value['p_date']; ?> </td>
        <td>  
        <a class="btn btn-info btn-xs edit-product" type="button" id="" name=""  data-toggle="modal" value="" data-target="#productedit">Edit</a>
        <a href="<?php echo base_url();?>Cms/products/<?php echo $value['p_id']; ?>/<?php echo $value['p_main_image']; ?>" 
        class="btn btn-warning btn-xs" type="button" value="" name="" id="">Delete</a>
        <input type="hidden" name="" id="p_id" value="<?php echo $value['p_id']; ?>">
        <input type="hidden" name="" id="catid" value="<?php echo $value['cat_id']; ?>">
        <input type="hidden" name="" id="subcatid" value="<?php echo $value['subcat_id']; ?>">
        </td>
 
      </tr>
  <?php } ?>
    </tbody>
  </table>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <button class="btn btn-primary" type="button" name="add"  data-toggle="modal" data-target="#addproduct"> Add</button>
    </div>
  </div>
</div>
