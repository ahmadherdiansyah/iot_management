<section class="content-header">
	<h1>
		API
		<small>Management</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-book"></i> API</a></li>
	</ol>
</section>
<section class="content">    
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">API List</h3>

					<div class="box-tools pull-right">
						<a href="<?php echo base_url('user/create_api')?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Create">
							<i class="fa fa-plus"></i>
						</a>
					</div>
				<div>
				<div class="box-body">
					<table class="table table-bordered table-striped">
						<thead>
							<th>No.</th>
							<th>Api Key</th>
							<th>Username</th>
						</thead>
						<tbody>
							<?php foreach($api_list as $key => $value){ ?>
								<tr>
									<td><?php echo ($key+1); ?></td>
									<td><?php echo $value->api_key; ?></td>
									<td><?php echo $value->username; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</section>