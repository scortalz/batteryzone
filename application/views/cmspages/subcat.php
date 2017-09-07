  <table class="table table-bordered table-hover" id="subCatTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Sub Category Name</th>
        <th>Category Name</th>
        <th>SubCat Image</th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php $count = 1; foreach ($subcategory as $value) { ?>
 
        <td><?php echo $count++; ?> </td>
        <td><?php echo $value['subcat_name']; ?></td>
        <td><?php $catname = $this->db->get_where('category',array('cat_id' =>  $value['cat_id']))->result_array(); echo $catname['0']['cat_name'];  ?></td>
        <td><img src="<?php echo base_url(). 'assets/images/uploads/category/subcategory/' .$value['subcat_img']; ?>"  width="42" height="42"><?php echo $value['subcat_img']; ?></td>
        <td>  
        <a class="btn btn-info btn-xs edit-sub-cat" type="button" id="subcatedit" name="subcatedit"  data-toggle="modal" value="<?php echo $value['cat_id']; ?>" data-target="#editsubcatmodal">Edit</a>
        <a href="<?php echo base_url();?>Cms/delsubcat/<?php echo $value['subcat_id']; ?>/<?php echo $value['subcat_img']; ?>" 
        class="btn btn-warning btn-xs" type="button" value="" name="delsubCat" id="delsubCat">Delete</a>
        <input type="hidden" name="edt-cat-id" id="" value="<?php echo $value['cat_id']; ?> ">
        <input type="hidden" name="edt-sub-cat-id" id="" value="<?php echo $value['subcat_id']; ?> ">
        </td>
 
      </tr>
     <?php } ?>
    </tbody>
  </table>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <button class="btn btn-primary" type="button" name="add"  data-toggle="modal" data-target="#addsubcatmodal"> Add</button>
    </div>
  </div>
</div>
