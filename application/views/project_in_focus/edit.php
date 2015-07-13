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
			Project In Focus <small>project in focus</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>index.php/sliders">Project In Focus</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Edit</a>
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
								<i class="fa fa-gift"></i>Add Project In Focus
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="#" id="form_sample_3" class="form-horizontal" method="post"  enctype="multipart/form-data">
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
										<label class="control-label col-md-3">Title <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="title" value="<?php if(!empty($data['title'])) echo $data['title']; ?>" data-required="1" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Link <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<textarea rows="2" name="link"  data-required="1" class="form-control"><?php if(!empty($data['link'])) echo $data['link']; ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Sequence <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="sequence" value="<?php if(!empty($data['sequence'])) echo $data['sequence']; ?>" data-required="1" class="form-control"/>
										</div>
									</div>	
									<div class="form-group">
										<label class="control-label col-md-3">Status <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select name="status" class="form-control">
												<option value="1" <?php if($data['status']==1) echo "selected";?>>Yes</option>
												<option value="0" <?php if($data['status']==0) echo "selected";?>>No</option>
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