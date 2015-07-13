<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Services <small>services</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>index.php/projinfocus_region">Page</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Edit Service</a>
					</li>
				</ul>
				<!-- <div class="page-toolbar">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
						Actions <i class="fa fa-angle-down"></i>
						</button>
						<ul class="dropdown-menu pull-right" role="menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
						</ul>
					</div>
				</div> -->
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Edit Service Page
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<?php /* ?><?php echo base_url();?>index.php/projinfocus_region/add  <?php */ ?>
							<form action="" id="form_sample_3" class="form-horizontal" method="post">
								<div class="form-body">									
									<div class="alert alert-danger display-hide">
									    <?php echo $error;?>
										<button class="close" data-close="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success display-hide">
										<button class="close" data-close="alert"></button>
										Your form validation is successful!
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Heading <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<textarea name="heading" row="4" data-required="1" class="form-control"></textarea>
										</div>
									</div>	
									<!--<div class="form-group">
										<label class="control-label col-md-3">Heading <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<textarea name="editor3" row="15" data-required="1" class="form-control"></textarea>
										</div>
									</div>-->
									<div class="form-group">
										<label class="control-label col-md-3">Why choose us? <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" name="editor3" rows="6" data-error-container="#editor3_error"></textarea>
											<div id="editor3_error">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Status <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select name="status" class="form-control">
												<option value="1" selected>Yes</option>
												<option value="0">No</option>
											</select> 
										</div>
									</div>								
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<a href="<?php echo base_url();?>index.php/menus"> <button type="button" class="btn default">Cancel</button></a>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
</div>	