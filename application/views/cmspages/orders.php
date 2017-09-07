<table class="table table-hover table-bordered" id="ordersTable">
    <thead>
      <tr>
        <th>Count</th>
        <th>product</th>
        <th>Name</th>
        <th>Email</th>
        <th>Quantity</th>
        <th>Phone</th>
        <th>City</th>
        <th>Address</th>
        <th>Payment Method</th>
        <th>Date</th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
    <?php $count = 1; foreach ($orders as $value) { ?>
        <td><?php echo $count++; ?></td>
        <td><?php echo $value['p_id']; ?></td>
        <td><?php echo $value['o_name']; ?></td>
        <td><?php echo $value['o_email']; ?></td>

        <td><?php echo $value['o_qty']; ?></td>

        <td><?php echo $value['o_phone']; ?></td>
        
        <td><?php echo $value['o_city']; ?></td>
        
        <td><?php echo $value['o_address']; ?></td>
        <td><?php echo $value['o_method']; ?></td>
        <td><?php echo $value['o_date']; ?></td>
        <td> 
        <a href="<?php echo base_url();?>Cms/orders/<?php echo $value['o_id']; ?>" 
        class="btn btn-danger btn-xs" type="button" value="" name="" id="">Delete</a>
        </td>
 
      </tr>
  <?php } ?>
    </tbody>
  </table>

