<?php include_once('top_panel.php'); ?>
	<?php include_once('side_navbar.php'); ?>
	
	
	
		<section class="content">
			<div class="container-fluid">
				<div class="block-header text-right"> <a class="btn btn-info float-left" href="<?php echo base_url('branch/add')?>">Add Branch</a> </div>
				<!-- Basic Examples -->
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2> Branch List</h2> </div>
							<div class="body">
								<div class="table-responsive">
									<table id="example" class="table table-striped table-bordered" style="width:100%">
										<thead>
											<tr>
												<th rowspan="1" colspan="1">Action</th>
												<th rowspan="1" colspan="1">City</th>
												<th rowspan="1" colspan="1">Lat</th>
												<th rowspan="1" colspan="1">Long</th>
												<th rowspan="1" colspan="1">Mobile</th>
												<th rowspan="1" colspan="1">Image</th>
												<th rowspan="1" colspan="1">Name</th>
												<!--<th rowspan="1" colspan="1">Description</th>-->
												<th rowspan="1" colspan="1">Address</th>
												<th rowspan="1" colspan="1">Status</th>
												<th rowspan="1" colspan="1">Seo Title</th>
												<th rowspan="1" colspan="1">Seo Keyword</th>
												<th rowspan="1" colspan="1">Seo Description</th>
											</tr>
										</thead>
										<tbody>
											<?php 
										foreach($branch_list as $key=>$value){
										   // print_r($value);
										 ?>
												<tr role="row" class="odd">
													<td> <a href="<?php echo base_url('branch/edit_branch/'.$value->id)?>"><i class="material-icons">mode_edit_outline</i></a> </td>
													<td>
														<?php echo $value->city?>
													</td>
													<td>
														<?php echo $value->lat?>
													</td>
													<td>
														<?php echo $value->long?>
													</td>
													<td>
														<?php echo $value->mobile?>
													</td>
													<td><img src="<?php echo base_url('uploads/admin/branch/'.$value->image_uplode)?>" width="50px" height="50px"></td>
													<td>
														<?php echo $value->name?>
													</td>
													<!--<td><?php //echo $value->description?></td>-->
													<td>
														<?php echo $value->address?>
													</td>
													<td>
														<?php echo $value->status?>
													</td>
													<td>
														<?php echo $value->seo_title?>
													</td>
													<td>
														<?php echo $value->seo_keyword?>
													</td>
													<td>
														<?php echo $value->seo_description?>
													</td>
												</tr>
												<?php }  ?>
										</tbody>
										<tfoot>
											<tr>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Age</th>
												<th>Start date</th>
												<th>Salary</th>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!-- #END# Basic Examples -->
				</div>
			</div>
		</section>
		<script>
		$(document).ready(function() {
			$('#example').DataTable();
		});
		</script>