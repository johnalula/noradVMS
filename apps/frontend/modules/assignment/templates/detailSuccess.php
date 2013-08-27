<div class="ui-container-box" id="ui-data">
	<div class="ui-main-menu-cont">
		<div class="ui-main-menu-actions">
			<ul>
				<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
				<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
			</ul>
		</div>
	</div>

	<?php 
			/*$order = AssignmentOrderTable::processObject(5, 'bccf5e06023f2898853f276751346793');
			$assigned_id = $order->assignedID;
			$assigned_token = $order->assignedTokenID;
			$driver_id = $order->driverID;
			$driver_token = $order->driverTokenID;		
			
			$ex_driver = DriverTable::processObject($driver_id, $driver_token);
			echo $ex_driver->id;
			//if($ex_driver) {
				$ex_driver->is_assigned = false; 
				$ex_driver->save();
			//}
		
			/*$assigned = AssignedVehicleTable::processObject($assigned_id, $assigned_token);
			if($assigned) {
				$assigned->participant_id = 6;
				$assigned->save();	
			}
			
			if($order) {
				$order->vehicle_id = 6;
				$order->save();
			}
			
			$nw_order = AssignmentOrderTable::processObject($order_id, $token_id);
			if($nw_order) {
				$nw_driver_id = $nw_order->driverID;
				$nw_driver_token_id = $nw_order->driverTokenID;
			}
			
			$nw_driver = DriverTable::processObject($nw_driver_id, $nw_driver_token_id);
			if($nw_driver) {
				$nw_driver->is_assigned = true;
				$nw_driver->save();
			}*/
			
	?>
	<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
		<div class="ui-error-box btn-danger">
			<div class="ui-error-list">
				<?php echo 'Category already existed!' ?>
				<span class="ui-error-close">X</span>
			</div>			
		</div> 
	</div>

	<div id="ui-display-success-cont" class="ui-success-data displayNone"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Category successfuly saved!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>

	<div id="ui-display-delete-cont" class="ui-success-data displayNone"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Category successfuly deleted!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>
	<!-- list container -->
	<div class="ui-container">
		<div class="ui-list-cont">		
			<div class="ui-main-list-cont" >
				<div class="ui-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Assigned Vehicles')  ?></h1>				
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->
				
				<div class="ui-main-content-list"> 
					<div class="ui-main-content-cont" >
						<div class="ui-content-list-box">
							<div class="ui-list-filter-cont">
								<div class="ui-list-batch-actions"> 
									<input type="hidden" id="totalData" value=" <?php echo $totalData ?>" >
										<ul>
											<li><a href=""><img src="<?php echo image_path('icons/delete_small') ?>">Delete</a></li>
											<li></li> 
										</ul>  
								</div>
								<div class="ui-filter-list" style="padding:3px;"> 
									 &nbsp;
								</div>
								<div class="clearFix"></div>
							</div>
							<div class="ui-content-lists">
								<?php include_partial('assignmentList', array('task_orders' => $task_orders )) ?>
							</div><!-- end of ui-content-lists -->
						</div><!-- end of ui-content-list-box -->
					</div><!-- end of ui-main-content-cont --> 
				</div><!-- end of ui-main-content-list --> 
				
				<div class="ui-list-footer">				
					  &nbsp; 
				</div><!-- end of ui-list-header -->
				
				<div class="ui-list-pagination-cont">
					<table>	 
						<tr>
							<td> 
								<div class="ui-pagination-list-size"> 
									<ul class="display">
										<input type="hidden" id="pagiantion_pageOffset" name="pagiantion_pageOffset" >
										<li class="display_list" id="pagiantion_display">Display: #  
											<select onclick="" name="pagiantion_pagesize" class="selspan" id="pagiantion_pagesize"> 
												<option value="10"  >10</option>
												<option value="20"  >20</option>
												<option value="30"  >30</option> 
												<option value="50"  >50</option>
												<option value="100" >100</option>
											</select>
										</li>
										<li></li>
									</ul>
								</div>
								<div class="clearFix"></div>
							</td>
							<td>
								<div class="ui-pagination-list-content">									 
									<ul>	 									
										<li class="prev_page"><span id="pagiantion_firstPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/first') ?>">First</a></span>  
											<span id="" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">First</span>
										</li>
										<li class="prev_page"><span id="pagiantion_prevPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/prev') ?>">Prev</a></span>  
											<span id="pagiantion_disabledPrevPage" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
										</li>
										
										<li class="next_page">
											<span id="pagiantion_nextPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/next') ?>">Next</a>
											</span> 
											<span id="pagiantion_disabledNextPage" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Next
												</span>
										</li>
										<li class="next_page">
											<span id="pagiantion_lastPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/last') ?>">Last</a>
											</span> 
											<span id="" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Last
												</span>
										</li>
											<input type="hidden" id="pagiantion_nextpageOffset" name="pagiantion_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
											<input type="hidden" id="pagiantion_prevpageOffset" name="pagiantion_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
									</ul> 									 
								</div>							
								<div class="clearFix"></div>
							</td>
						</tr> 
					</table>
				</div>
			</div> <!-- end of ui-main-list-cont -->
		</div>  <!-- end of ui-list-cont -->
	</div> <!-- end of ui-container -->


	<div class="ui-navigation-cont">
		<div class="ui-navigation-box">
			<div class="ui-navigation-list">
				<ul class="ui-left-button">
					<li><a href="<?php echo url_for('assignment/order?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-back-button"><img src="<?php echo image_path('new_icons/back') ?>">Back</button></a></li>
				</ul>
				</ul>
				<ul class="ui-right-button">
					<li><a href="<?php echo url_for('assignment/complete?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Complete</button></a></li>
				</ul>
				<div class="clearFix"></div>
			</div>
		
		</div>
	</div>
</div>

<div class="modal" id="candidateDriverPrompts">
	<form>
	<div class="ui-partial-container" style="border:0px solid #f00;">
		 <div class="ui-partial-container">
			<div class="ui-partial-main-list-cont" >
				<div class="ui-partial-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Employee Lists')  ?></h1>	
					<div class="ui-form-content-minimize opened" id="ui-list-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-list-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-list-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>	
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->		
				
				<div class="ui-content-container-box">
			<div class="ui-main-content-list "> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						<div class="ui-list-filter-cont">
							 
							<div class="ui-filter-list"> 
								<?php include_partial('candidateDriverFilter', array()) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('candidateDriverList', array('drivers' => $drivers )) ?>
						</div><!-- end of ui-content-lists -->
					</div><!-- end of ui-content-list-box -->
				</div><!-- end of ui-main-content-cont --> 
			</div><!-- end of ui-main-content-list --> 
			
			<div class="ui-list-footer">				
				  &nbsp; 
			</div><!-- end of ui-list-header -->
			
			<div class="ui-list-pagination-cont ui-pagination-color" style="">
					<table>	 
						<tr>
							<td> 
								<div class="ui-pagination-list-size"> 
									<ul class="display">
										<input type="hidden" id="parent_total" name="" value="<?php echo count($totalData) ?>">
										<input type="hidden" id="parent_pagination_pageOffset" name="parent_pagination_pageOffset" >
										<li class="display_list" id="parent_pagination_display">Display: #  
											<select onclick="" name="parent_pagination_pagesize" class="selspan" id="parent_pagination_pagesize"> 
												<option value="2"  >10</option>
												<option value="20"  >20</option>
												<option value="30"  >30</option> 
												<option value="50"  >50</option>
												<option value="100" >100</option>
											</select>
										</li>
										<li></li>
									</ul>
								</div>
								<div class="clearFix"></div>
							</td>
							<td>
								<div class="ui-pagination-list-content">									 
									<ul>	 									
										<li class="prev_page"><span id="parent_pagination_firstPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/first') ?>">First</a></span>  
											<span id="" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">First</span>
										</li>
										<li class="prev_page"><span id="parent_pagination_prevPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/prev') ?>">Prev</a></span>  
											<span id="parent_pagination_disabledPrevPage" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
										</li>
										
										<li class="next_page">
											<span id="parent_pagination_nextPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/next') ?>">Next</a>
											</span> 
											<span id="parent_pagination_disabledNextPage" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Next
												</span>
										</li>
										<li class="next_page">
											<span id="parent_pagination_lastPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/last') ?>">Last</a>
											</span> 
											<span id="" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Last
												</span>
										</li>
											<input type="hidden" id="parent_pagination_nextpageOffset" name="parent_pagination_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
											<input type="hidden" id="parent_pagination_prevpageOffset" name="parent_pagination_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
									</ul> 									 
								</div>							
								<div class="clearFix"></div>
							</td>
						</tr> 
					</table>
				</div>
			</div>
			</div>
		 </div>
	</div>
	<div class="ui-partial-footer">
		<ul>
			<li> 
				<button type="button" id="changeAssignDriver" class=" close"  style=""><img src="<?php echo image_path('setting/upload_small') ?>"> <?php echo __('Insert') ?> </button>   
			</li> 
			<li>
				<button type="button" class="close"  style=""> <?php echo __('Cancel') ?> </button> 
			</li>
			
			</ul>
			<div class="clearFix"></div>
		</div>
</form>
</div>
<input type="hidden" id="partyID" name="partyID" >
<input type="hidden" id="vehicleID" name="vehicleID" >
<input type="hidden" id="orderID" name="orderID" >

<div class="modal" id="candidateVehiclePrompts">
 
		<input type="hidden" id="taskID" name="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">
		<input type="hidden" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">
		
		
		
	<div class="ui-partial-container" style="border:0px solid #f00;">
		 <div class="ui-partial-container">
			<div class="ui-partial-main-list-cont" >
				<div class="ui-partial-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Employee Lists')  ?></h1>	
					<div class="ui-form-content-minimize opened" id="ui-list-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-list-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-list-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>	
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->		
				
				<div class="ui-content-container-box">
			<div class="ui-main-content-list "> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						<div class="ui-list-filter-cont">
							 
							<div class="ui-filter-list"> 
								<?php include_partial('candidateVehicleFilter', array()) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('candidateVehicleList', array('vehicles' => $vehicles )) ?>
						</div><!-- end of ui-content-lists -->
					</div><!-- end of ui-content-list-box -->
				</div><!-- end of ui-main-content-cont --> 
			</div><!-- end of ui-main-content-list --> 
			
			<div class="ui-list-footer">				
				  &nbsp; 
			</div><!-- end of ui-list-header -->
			
			<div class="ui-list-pagination-cont ui-pagination-color" style="">
					<table>	 
						<tr>
							<td> 
								<div class="ui-pagination-list-size"> 
									<ul class="display">
										<input type="hidden" id="parent_total" name="" value="<?php echo count($totalData) ?>">
										<input type="hidden" id="parent_pagination_pageOffset" name="parent_pagination_pageOffset" >
										<li class="display_list" id="parent_pagination_display">Display: #  
											<select onclick="" name="parent_pagination_pagesize" class="selspan" id="parent_pagination_pagesize"> 
												<option value="2"  >10</option>
												<option value="20"  >20</option>
												<option value="30"  >30</option> 
												<option value="50"  >50</option>
												<option value="100" >100</option>
											</select>
										</li>
										<li></li>
									</ul>
								</div>
								<div class="clearFix"></div>
							</td>
							<td>
								<div class="ui-pagination-list-content">									 
									<ul>	 									
										<li class="prev_page"><span id="parent_pagination_firstPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/first') ?>">First</a></span>  
											<span id="" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">First</span>
										</li>
										<li class="prev_page"><span id="parent_pagination_prevPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/prev') ?>">Prev</a></span>  
											<span id="parent_pagination_disabledPrevPage" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
										</li>
										
										<li class="next_page">
											<span id="parent_pagination_nextPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/next') ?>">Next</a>
											</span> 
											<span id="parent_pagination_disabledNextPage" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Next
												</span>
										</li>
										<li class="next_page">
											<span id="parent_pagination_lastPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/last') ?>">Last</a>
											</span> 
											<span id="" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Last
												</span>
										</li>
											<input type="hidden" id="parent_pagination_nextpageOffset" name="parent_pagination_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
											<input type="hidden" id="parent_pagination_prevpageOffset" name="parent_pagination_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
									</ul> 									 
								</div>							
								<div class="clearFix"></div>
							</td>
						</tr> 
					</table>
				</div>
			</div>
			</div>
		 </div>
	</div>
	<div class="ui-partial-footer">
		<ul>
			<li> 
				<button type="button" id="changeAssignVehicle" class="addVehicle close"  style=""> <img src="<?php echo image_path('setting/upload_small') ?>"><?php echo __('Insert') ?> </button>   
			</li> 
			<li>
				<button type="button" class="close"  style=""> <?php echo __('Cancel') ?> </button> 
			</li>
			
			</ul>
			<div class="clearFix"></div>
		</div>
 
</div>

<script>
	
	$(window).load(function()
	{		
		$('#category_name').focus();		
		return false;		
	});
	 
	 
	 var triggerDriverCandidate = $(".candidateDriverModal").overlay({ 
		modal: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#candidateDriverPrompts form").submit(function(e) {

		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked");

		triggerDriverCandidate.eq(0).overlay().close();

		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$");

		document.getElementById("driver_id").value = listArr[0];
		document.getElementById("driver_name").value = listArr[1]; 
		
		$('#driver_name_validateion').addClass('displayNone');
		$('#driver_name').removeClass('validation_error_border'); 

		return e.preventDefault();
	});
	
	 var triggerVehicleCandidate = $(".candidateVehicleModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$(document).ready(function()
	{
			
		$('.changeVehicle').click(function()
		{
			var rowNo = $(".rowItem", this).attr('rel');
			//var itemID = $("input#itemID-"+rowNo, this).val();
			
			document.getElementById("orderID").value = rowNo; 
			
			var taskID = document.getElementById("taskID").value ;
			
			return false;
				
		});
		
		$('.selectCaldidate').click(function()
		{
			var rowNo = $(this).attr('rel');
			//var itemID = $("input#itemID-"+rowNo, this).val();
			
			document.getElementById("vehicleID").value = rowNo; 
			$(this).addAttr('checked');
			//var taskID = document.getElementById("taskID").value ;
			
			return false;
				
		});
		
		$('#changeAssignVehicle').click(function()
		{
			var vehicle = document.getElementById("vehicleID").value;
			var order = document.getElementById("orderID").value;
			var task = document.getElementById("taskID").value;
			var token = document.getElementById("tokenID").value;
			
			var result = $.ajax({
				type: "GET",
				data: 'task_id='+task+'&token_id='+token+'&order_id='+order+'&vehicle_id='+vehicle,
				url: '<?php echo url_for('assignment/changeVehicle')?>',
				success: function(html) {}
				}).responseText;
				
				//var data = 'task_id='+task+'&token_id='+token+'&order_id='+order+'&vehicle_id='+vehicle;
				//alert(data);
			location.reload();
			//var data_url =  '<?php echo url_for('assignment/selection')?>';
			//var data = $('#dataList').load(data_url);
			// $('body').append(result);
			return false;
				
		});
	});
	
	$(document).ready(function()
	{
			
		$('.changeDriver').click(function()
		{
			var rowNo = $(".rowParty", this).attr('rel');
			//var itemID = $("input#itemID-"+rowNo, this).val();
			
			document.getElementById("orderID").value = rowNo; 
			
			var taskID = document.getElementById("taskID").value ;
			
			return false;
				
		});
		
		$('.selectDriver').click(function()
		{
			var rowNo = $(this).attr('rel');
			//var itemID = $("input#itemID-"+rowNo, this).val();
			
			document.getElementById("partyID").value = rowNo; 
			$(this).addAttr('checked');
			//var taskID = document.getElementById("taskID").value ;
			
			return false;
				
		});
		
		$('#changeAssignDriver').click(function()
		{
			var driver = document.getElementById("partyID").value;
			var order = document.getElementById("orderID").value;
			var task = document.getElementById("taskID").value;
			var token = document.getElementById("tokenID").value;
			
			$.ajax({
				type: "GET",
				dataType: "html",
				data: 'task_id='+task+'&token_id='+token+'&order_id='+order+'&driver_id='+driver,
				url: '<?php echo url_for('assignment/changeDriver')?>',
				success: function(html) { 
						//var result = decodeURIComponent(html);
						//alert(html);
						$("#dataList").html(html);
						//e.preventDefault();
						//return false;
						},
				async: false
				});
				
				

				//var url = '<?php echo url_for('assignment/selection')?>';
				//$('#ui-data-list').html(decodeURIComponent(result));
				//var callback = $('#dataList').html(decodeURIComponent(res));
				//var data = 'task_id='+task+'&token_id='+token;
				//alert(res);
				//$('#dataList').html(decodeURIComponent(res)).prependTo('#dataList');
					//$('#dataList').loadIfModified(url);
				
				//var limit = document.getElementById('pagiantion_pagesize').value
				//var keyword = document.getElementById('keyword').value
				//var group_id = document.getElementById('category_group_id').value
				//var class_id = document.getElementById('category_class_id').value
			
			/*	var result = $.ajax({
						type: "GET",
						data: 'limit='+limit+'&offset='+offset,
						url: '<?php echo url_for('assignment/selection')?>',
						success: function(html) { }, 
						async: false
						}).responseText;*/
				
				//if(res)
					//document.getElementById("dataList").innerHTML = decodeURIComponent(res);
				 
				//var data = 'task_id='+task+'&token_id='+token+'&order_id='+order+'&driver_id='+driver;
				//alert(data);
			//location.reload();
			return false;
				
		});
	});
	
	/*$("#candidateVehiclePrompts form").submit(function(e) {

		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked");

		triggerVehicleCandidate.eq(0).overlay().close();

		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$");
		var vehicleCode = listArr[2]+'( '+listArr[1]+')';
		
		//var orderID = document.getElementById("orderID").value ;
		
		document.getElementById("vehicleID-"+orderID).value = listArr[0];
		document.getElementById("vehicle_id").value = listArr[0];
		document.getElementById("vehicle_name").value = vehicleCode; 
		
		///$('#vehicle_name_validateion').addClass('displayNone');
		//$('#vehicle_name').removeClass('validation_error_border'); 

		return e.preventDefault();
	});*/
	 

	function showSuccess()
	{
		$('#ui-display-success-cont').removeClass('displayNone');
		
		location.reload().delay(3000);
	}
	
	function showError()
	{
		$('#ui-display-error-cont').removeClass('displayNone');
	}
	
	function deleteSuccess()
	{
		$('#ui-display-delete-cont').removeClass('displayNone');
		location.reload().delay(3000);
	}

	
	
	function createTaskOrder( )
	{
		var vehicle = document.getElementById('vehicle_id').value
		var driver = document.getElementById('driver_id').value
		var desc = document.getElementById('description').value
		var taskID = document.getElementById('taskID').value
		var tokenID = document.getElementById('tokenID').value
		
		if( vehicle == '' && driver == '' )
		{
			$('#driver_name_validation').removeClass('displayNone');
			$('#driver_name').addClass('validation_error_border');
			$('#vehicle_name_validation').removeClass('displayNone');
			$('#vehicle_name').addClass('validation_error_border');
			
			return false;
		}
		
		if( vehicle == '')
		{
			$('#driver_name_validation').addClass('displayNone');
			$('#driver_name').removeClass('validation_error_border');
			$('#vehicle_name_validation').removeClass('displayNone');
			$('#vehicle_name').addClass('validation_error_border');
			
			return false;
		}
		
		if( driver == '')
		{
			$('#driver_name_validation').removeClass('displayNone');
			$('#driver_name').addClass('validation_error_border');
			$('#vehicle_name_validation').addClass('displayNone');
			$('#vehicle_name').removeClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'task_id='+taskID+'&token_id='+tokenID+'&driver_id='+driver+'&vehicle_id='+vehicle+'&description='+desc,
				url: '<?php echo url_for('assignment/createTaskOrder')?>', 
				success: function(data) { 
					showSuccess(); 
				},
				error: function(msg) {
					showError();
				},
			
				async: false
				});
				
				//alert(taskID, tokenID);
				//alert('hello');
		
		return false;
		
	}
	
	function deleteCategory(catID)
	{
		$.ajax({
			data: 'category_id='+catID,
			url: '<?php echo url_for('category/deleteCategory')?>', 
				success: function(data) { 
					deleteSuccess(); 
				},
				error: function(msg) {
					showError();
				},
			
				async: false
				});
	
		return false;
	}
	 
//***************

	function categoryPagination(offset)
	{
		var limit = document.getElementById('pagiantion_pagesize').value
		var keyword = document.getElementById('keyword').value
		var group_id = document.getElementById('category_group_id').value
		var class_id = document.getElementById('category_class_id').value
	
		var result = $.ajax({
				type: "GET",
				data: 'keyword='+keyword+'&group_id='+group_id+'&class_id='+class_id+'&limit='+limit+'&offset='+offset,
				url: '<?php echo url_for('category/pagination')?>',
				success: function(html) { $('#categoryList').html(html) }, 
				async: false
				}).responseText;
		
		return false;	
	}
	
	$(document).ready(function()
	{
			
		$('#pagiantion_pagesize').change(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			if(offset == '')
				offset = 0;
			categoryPagination(offset);
			
			return false;
				
		});
		
		$('#pagiantion_lastPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			
			offset = parseInt(totalData)-parseInt(limit);
			if(offset < 0)
				offset = 0;
				
			categoryPagination(offset);
			
			return false;
				
		});
		
		$('#pagiantion_nextPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			if(offset == '')
				offset = 0;
				
			offset = parseInt(offset) + parseInt(limit);
			lastOffset = parseInt(totalData)-parseInt(limit);
			
			if(offset >= totalData)
				offset = lastOffset;
			
			document.getElementById('pagiantion_pageOffset').value = offset;
	
			categoryPagination(offset);
			 
			return false;
				
		});
		
		$('#pagiantion_prevPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			
			offset -= parseInt(limit);
			
			if(offset < 0)
				offset = 0;
		
			document.getElementById('pagiantion_pageOffset').value = offset;
			
			categoryPagination(offset);
			
			return false;
				
		});
		
		$('#pagiantion_firstPage').click(function()
		{
			offset = 0;
			categoryPagination(offset);
			
			return false;
		});
		
		$('#category_group_id').change(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			categoryPagination(offset);
				
			return false;
				
		});
		
		$('#category_class_id').change(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			categoryPagination(offset);				
			return false;
		});
		
		$('#keyword').keyup(function(key)
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			categoryPagination(offset);	

			return false;
		});
		
	});
//******************/

	$(document).ready(function(){
		
		$('#name').keyup(function(key){
			
			$('#name_validation').addClass('displayNone');
			$('#name').removeClass('validation_error_border');
			
			return false;
		});
		
		$('.ui-error-close').click(function(){
			
			$('#ui-display-error-cont').addClass('displayNone');
			
			return false;
		});
		 
		
		$('.ui-success-close').click(function(){
			
			$('#ui-success-error-cont').addClass('displayNone');
			
			return false;
		});
		
	});

</script>





