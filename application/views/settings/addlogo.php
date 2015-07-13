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
			Logo <small>logo</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url();?>index.php/setting/listlogo">Logo</a>
						<i class="fa fa-angle-right"></i>
					</li>
					
					<li>
						<a href="#">Add</a>
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
								<i class="fa fa-gift"></i>Add Logo
							</div>
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?php echo base_url();?>index.php/upload/do_upload" id="form_sample_3" class="form-horizontal" enctype="multipart/form-data" method="post">
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
										<label for="exampleInputFile" class="col-md-3 control-label">Logo</label>
										<div class="col-md-9">
											<input type="file" id="exampleInputFile" name="userfile">
											<p class="help-block">
												 Squareyards logo here.
											</p>
										</div>
									</div>
									<?php /*?>
									<div class="form-group">
										<label class="control-label col-md-3">Name <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="text" name="name" data-required="1" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Email Address <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
												</span>
												<input type="email" name="email" class="form-control" placeholder="Email Address">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
										<div class="col-md-4">
											<input name="occupation" type="text" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Select2 Dropdown <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control select2me" name="options2">
												<option value="">Select...</option>
												<option value="Option 1">Option 1</option>
												<option value="Option 2">Option 2</option>
												<option value="Option 3">Option 3</option>
												<option value="Option 4">Option 4</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Select2 Tags <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input type="hidden" class="form-control" id="select2_tags" value="" name="select2tags">
											<span class="help-block">
											select tags </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Datepicker</label>
										<div class="col-md-4">
											<div class="input-group date date-picker" data-date-format="dd-mm-yyyy">
												<input type="text" class="form-control" readonly name="datepicker">
												<span class="input-group-btn">
												<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
												</span>
											</div>
											<!-- /input-group -->
											<span class="help-block">
											select a date </span>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Membership <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="radio-list" data-error-container="#form_2_membership_error">
												<label>
												<input type="radio" name="membership" value="1"/>
												Fee </label>
												<label>
												<input type="radio" name="membership" value="2"/>
												Professional </label>
											</div>
											<div id="form_2_membership_error">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Services <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="checkbox-list" data-error-container="#form_2_services_error">
												<label>
												<input type="checkbox" value="1" name="service"/> Service 1 </label>
												<label>
												<input type="checkbox" value="2" name="service"/> Service 2 </label>
												<label>
												<input type="checkbox" value="3" name="service"/> Service 3 </label>
											</div>
											<span class="help-block">
											(select at least two) </span>
											<div id="form_2_services_error">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Markdown</label>
										<div class="col-md-9">
											<textarea name="markdown" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
											<div id="editor_error">
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">WYSIHTML5 Editor <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="wysihtml5 form-control" rows="6" name="editor1" data-error-container="#editor1_error"></textarea>
											<div id="editor1_error">
											</div>
										</div>
									</div>
									<div class="form-group last">
										<label class="control-label col-md-3">CKEditor <span class="required">
										* </span>
										</label>
										<div class="col-md-9">
											<textarea class="ckeditor form-control" name="editor2" rows="6" data-error-container="#editor2_error"></textarea>
											<div id="editor2_error">
											</div>
										</div>
									</div><?php */?>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">Submit</button>
											<a href="<?php echo base_url();?>index.php/setting/listlogo"> <button type="button" class="btn default">Cancel</button></a>
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