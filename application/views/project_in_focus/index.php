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
						<a href="#">Projects</a>
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
								<i class="fa fa-globe"></i>List of project in focus
							</div>
							<div class="tools">
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<a href="<?php echo base_url();?>index.php/project_in_focus/add"><button class="btn green" id="sample_editable_1_new">
											New Project <i class="fa fa-plus"></i>
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
									 Link
								</th>
								<th>
									 Sequence
								</th>
								<th>
									 Status
								</th>
								<th>
									Action									 
								</th>
								
							</tr>
							</thead>
							<tbody>
							<?php 
							//echo "<pre>";print_r($data);die;

							foreach ($data as $keyres => $valueres) {
							?>
							<tr>
								<td>
									 <img src="<?php echo base_url();?>images/project_in_focus/<?php echo $valueres['image'];?>" width="20%" height="auto">
								</td>
								<td>
									 <?php echo trim($valueres['title']);?>
								</td>
								<td>
									 <?php echo trim($valueres['link']);?>
								</td>
								<td>
									 <?php echo trim($valueres['sequence']);?>
								</td>
								
								<td>
									 <?php if(trim($valueres['status'])==1) echo "Yes"; else echo "No";?>
								</td>
								<td>
									 <a href="<?php echo base_url();?>index.php/project_in_focus/edit/<?php echo $valueres['id'];?>" class="glyphicon glyphicon-pencil"></a>
									 <?php if(trim($valueres['status'])==1){
									 echo "|";
									  ?>
									 	<a href="<?php echo base_url();?>index.php/project_in_focus/delete/<?php echo $valueres['id'];?>" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure do you want to Delete project!')"></a>
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