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
					<h3 class="box-title">Device List</h3>

					<div class="box-tools pull-right">
						<a href="<?php echo base_url('user/create')?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Create">
							<i class="fa fa-plus"></i>
						</a>
					</div>
				<div>
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
							<th>No.</th>
							<th>Device1</th>
							<th>Device2</th>
							<th>Device3</th>
							<th>Device4</th>
							<th>Device5</th>
							<th>Id Device</th>
							<th>Api Key</th>
							<th>View Data</th>
						</thead>
						<tbody>
							<?php foreach($user_list as $key => $value){ ?>
								<tr>
									<td><?php echo ($key+1); ?></td>
									<td><?php echo $value->device1; ?></td>
									<td><?php echo $value->device2; ?></td>
									<td><?php echo $value->device3; ?></td>
									<td><?php echo $value->device4; ?></td>
									<td><?php echo $value->device5; ?></td>
									<td><?php echo $value->id_nama; ?></td>
									<td><?php echo $value->api_key; ?></td>
									<td>
										<a href="<?php echo base_url("user/device/".$value->api_key."/".$value->id_nama."")?>"">Link</a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</section>