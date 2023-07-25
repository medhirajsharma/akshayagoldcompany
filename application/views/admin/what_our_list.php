<?php include_once('top_panel.php'); ?>
	<?php include_once('side_navbar.php'); ?>
	
	
	
		<section class="content">
			<div class="container-fluid">
				<div class="block-header text-right">
				<a class="btn btn-info float-left" href="<?php echo base_url('page/what_our')?>">Add Our Customer</a> </div>
				<!-- Basic Examples -->
				<div class="row clearfix">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="header">
								<h2>What Our CustomerPage List</h2> </div>
							<div class="body">
								<div class="table-responsive">
									<table id="example1" class="table table-striped table-bordered" style="width:100%">
										<thead>
										    <tr>    
									    	   <th rowspan="1" colspan="1">Action</th>
									    	   <th rowspan="1" colspan="1">Description</th>
											</tr>
										</thead>
										<tbody>
										<?php 
										foreach($page_list as $key=>$value){
										   // print_r($value);
										 ?>
											<tr role="row" class="odd">
											<td>
											<a href="<?php echo base_url('page/what_our_edit/'.$value->id)?>"><i class="material-icons">mode_edit_outline</i></a>
											</td>
											<td><?php echo $value->description; ?></td>
											</tr>
										<?php }  ?>
										</tbody>
										<tfoot>
										 <tr>    
									    	   <th rowspan="1" colspan="1">Action</th>
												
												<th rowspan="1" colspan="1">Description</th>
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
			$('#example1').DataTable();
		});
		</script>