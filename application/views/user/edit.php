<section class="content-header">
	<h1>
		User
		<small>Management</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-user"></i> User</a></li>
	</ol>
</section>
<section class="content">    
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
                    <h3 class="box-title">Edit User</h3>
                    
				<div>
                 <form name="create_user" action="<?php echo base_url('user/edit_save')?>" method="POST" role="form">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">
                                Username
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="username" class="form-control" id="username" readonly="readonly" value="<?php echo $user->username; ?>"/>
						</div>
						<div class="form-group">
                            <label for="nama">
                                Fullname
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $user->fullname; ?>" required/>
						</div>
						<div class="form-group">
                            <label for="nama">
                                New Password
                            </label>
                            <input type="password" name="password" class="form-control" id="password"/>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="update" class="btn btn-success" value="Update"/>
                        <a href="<?php echo base_url('user/index')?>" class="btn btn-default">Back</a>
                    </div>
                </form>
			</div>
        </div>
    </div>
</section>