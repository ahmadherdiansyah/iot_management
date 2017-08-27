<section class="content-header">
	<h1>
		Device
		<small>Management</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-bolt"></i> Device</a></li>
	</ol>
</section>
<section class="content">    
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Create Device</h3>
				<div>
				 <form name="create_user" action="<?php echo base_url('user/create_save')?>" method="POST" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">
                                Device1
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="device1" class="form-control" id="username" required/>
						</div>
						<div class="form-group">
                            <label for="nama">
                                Device2
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="device2" class="form-control" id="fullname" required/>
						</div>
						<div class="form-group">
                            <label for="nama">
                                Device3
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="device3" class="form-control" id="password" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama">
                                Device4
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="device4" class="form-control" id="password" required/>
                        </div>
                        <div class="form-group">
                            <label for="nama">
                                Device5
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="device5" class="form-control" id="password" required/>
                        </div>
                        <div class="form-group">
                        <label>
                            Api Key
                            <span class="required-indicator">*</span>
                        </label>
                        <select name="api" class="form-control" require>
                        <?php foreach($api_list as $key => $value){ ?>
                        <option value="<?php echo $value->api_key; ?>"><?php echo $value->api_key; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="create" class="btn btn-success" value="Create"/>
                        <a href="<?php echo base_url('user/index')?>" class="btn btn-default">Back</a>
                    </div>
                </form>
			</div>
        </div>
    </div>
</section>