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
			Sliders <small>sliders</small>
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="#">Sliders</a>
					</li>				
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>List of slider images
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a href="<?php echo base_url();?>index.php/sliders/add"><button class="btn green" id="sample_editable_1_new">
											New Image <i class="fa fa-plus"></i>
											</button>
											</a>
										</div>
									</div>
								</div>
							</div>							
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>

							<tr>
								<th>
									 Image
								</th>
								<th>
									 Title
								</th>
								<th>
									 Sub Title
								</th>
								<th>
									 Sequence
								</th>
								<th>
									 Status
								</th>
								
								<th>Action									 
								</th>
								
							</tr>
							</thead>
							<tbody>
							<?php 
							//echo "<pre>";print_r($data);die;

							foreach ($data as $keyslider => $valueslider) {
							?>
							<tr>
								<td>
									 <img src="<?php echo base_url();?>images/sliders/<?php echo $valueslider['image'];?>" width="50%" height="auto">
								</td>
								<td>
									 <?php echo $valueslider['title'];?>
								</td>
								<td>
									 <?php echo $valueslider['subtitle'];?>
								</td>
								<td>
									 <?php echo $valueslider['sequence'];?>
								</td>
								<td>
									 <?php if(trim($valueslider['status']) == 1) echo "Yes"; else echo "No";?>
								</td>
								<td>
									<a href="<?php echo base_url();?>index.php/sliders/edit/<?php echo $valueslider['id'];?>" class="glyphicon glyphicon-pencil"></a>
									<?php if(trim($valueslider['status']) == 1) {
										echo "|";
									?>
									 <a href="<?php echo base_url();?>index.php/sliders/deleteslider/<?php echo $valueslider['id'];?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure do you want to Delete Slider image!')"></a>
									 <?php									 
									}
									?>
								</td>
								
							</tr>
							<?php
							}
							?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
					
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->