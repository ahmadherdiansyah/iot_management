<section class="content-header">
	<h1>
		Device
		<small>Management</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-bolt"></i> device</a></li>
	</ol>
</section>
<section class="content">    
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Device view</h3>
				<div>
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
                        <?php foreach($device_name as $keying => $val) { ?>
							<th><?php echo ($keying+1); ?></th>
							<th><?php echo $val->device1; ?></th>
							<th><?php echo $val->device2; ?></th>
							<th><?php echo $val->device3; ?></th>
                            <th><?php echo $val->device4; ?></th>
                            <th><?php echo $val->device5; ?></th>
                            <th>Api Key</th>
                        <?php }?>
						</thead>
						<tbody>
							<?php foreach($user_list as $key => $value){ ?>
								<tr>
									<td><?php echo ($key+1); ?></td>
									<td><?php echo $value->data1; ?></td>
									<td><?php echo $value->data2; ?></td>
									<td><?php echo $value->data3; ?></td>
                                    <td><?php echo $value->data4; ?></td>
                                    <td><?php echo $value->data5; ?></td>
									<td><?php echo $value->api_key; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</section>