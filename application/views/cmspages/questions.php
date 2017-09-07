<table class="table table-hover table-bordered" id="questionsTable">
    <thead>
      <tr>
        <th>Count</th>
        <th>product</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Questions</th>
        <th>Pagename</th>
        <th>Date</th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <?php $count = 1; foreach ($questions as $value) { ?>
        <td><?php echo $count++; ?></td>
        <td><?php echo $value['p_id']; ?></td>
        <td><?php echo $value['q_name']; ?></td>
        <td><?php echo $value['q_email']; ?></td>
        <td><?php echo $value['q_phone']; ?></td>
        
        <td><?php echo $value['q_question']; ?></td>
        
        <td><?php echo $value['q_pagename']; ?></td>
        <td><?php echo $value['q_date']; ?></td>
        <td> 
        <a href="<?php echo base_url();?>Cms/questions/<?php echo $value['q_id']; ?>" 
        class="btn btn-danger btn-xs" type="button" value="" name="" id="">Delete</a>
        </td>
 
      </tr>
  <?php } ?>
    </tbody>
  </table>

