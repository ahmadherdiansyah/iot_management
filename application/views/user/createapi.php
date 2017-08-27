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
					<h3 class="box-title">Create API Key</h3>
				<div>
				 <form name="create_user" action="<?php echo base_url('user/createapi_save')?>" method="POST" role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama">
                                API Key
                                <span class="required-indicator">*</span>
                            </label>
                            <input type="text" name="api" class="form-control" id="password" required/>
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