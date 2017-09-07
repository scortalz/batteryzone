  <table class="table table-bordered table-hover" id="bannerstable">
    <thead>
      <tr>
        <th>Id</th>
        <th>Banner Image</th>
        
        <th>Date</th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <?php $count = 1; foreach ($banners as $value) {  ?>
 
        <td><?php echo $count++; ?> </td>
        <td><img src="<?php echo base_url(). 'assets/images/uploads/banners/' .$value['b_img']; ?>"  width="42" height="42"><?php echo $value['b_img']; ?></td>
        <td><?php echo $value['b_date']; ?> </td>
        <td>  
       <input type="hidden" name="bannerid" id="bannerid" value="<?php echo $value['b_id']; ?>">
        <a class="btn btn-info btn-xs edit-banner" type="button" name="editbanner"  data-toggle="modal" value="" data-target="#editbanner">Edit</a>
        <a href="<?php echo base_url(); ?>/Cms/banner/<?php echo $value['b_id'];?>/<?php echo $value['b_img'];?>" 
        class="btn btn-warning btn-xs" type="button" value="" name="" id="">Delete</a>
        </td>
 
      </tr>
  <?php } ?>
    </tbody>
  </table>
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <button class="btn btn-primary" type="button" name="add"  data-toggle="modal" data-target="#addbanner"> Add</button>
    </div>
  </div>
</div>
