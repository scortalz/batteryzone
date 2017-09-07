  <table class="table table-bordered table-hover" id="catTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Cat Name</th>
        <th>Cat Image</th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php $count = 1; foreach ($category as $value) { ?>
 
        <td><?php echo $count++; ?><input type="hidden" name="catid" value="<?php echo $value['cat_id']; ?> "></td>
        <td><?php echo $value['cat_name']; ?></td>
        <td><img src="<?php echo base_url(). 'assets/images/uploads/category/' .$value['cat_img']; ?>"  width="42" height="42"><?php echo $value['cat_img']; ?></td>
        <td>  
        
        <a class="btn btn-info btn-xs edit-cat" type="button" id="edit" name="edit"  data-toggle="modal" value="<?php echo $value['cat_id']; ?>" data-target="#editcatmodal">Edit</a>
        <a href="<?php echo base_url();?>Cms/delcat/<?php echo $value['cat_id']; ?>/<?php echo $value['cat_img']; ?>" 
        class="btn btn-warning btn-xs" type="button" value="" name="delete" id="delCat">Delete</a>
        
        </td>
 
      </tr>
     <?php } ?>
    </tbody>
  </table>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <button class="btn btn-primary" type="button" name="add"  data-toggle="modal" data-target="#addcatmodal"> Add</button>
    </div>
  </div>
</div>


