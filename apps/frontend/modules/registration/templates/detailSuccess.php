<div class="ui-container-box">
	<div class="ui-main-menu-cont">
		<div class="ui-main-menu-actions">
			<ul>
				<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
				<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
			</ul>
			
			 
			<div class="clearFix"></div>
		</div>
	</div>
	<?php  

	$ip =  gethostbyname($_SERVER['HTTP_HOST']) ;
	$current_date = date('Y-m-d', time());
	$time = date('h:i:s A');
	$module  = 'Administrator';
	$action = SystemLogFileTable::$UPDATE;
	$user_id = 1;
	
	//$flag = VehicleTable::processUpdate ( 1,'9e673a2c813c7e6a46aa3b8176ff3d81','ET',1234,4,1,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year, 1,1,$purchased_date, $purchased_type, $serial_no, $pin_no, $purchased_mileage,$current_mileage,$seat_capacity,$doors,$liter,$engine_no,$chesis_no, $description );
	
	//$flag = RegistrationTaskTable::processUpdateRegistrationVehicle ( 2, '9c670fb5140f2ccfe2f0745948d1e309', 'ET', '1378', 4, 1, 'BMW', $vehicle_model, 'Red', $vehicle_weight, 1, $description ); 
	//$flag = UserGroupTable::processDelete(9, 0);
	//$group = UserGroupTable::processCreate($module, 'admin');
	//$group1 = UserGroupTable::processCreate('Finance', 'finance');
	//$group5 = UserGroupTable::processCreate('Director', 'director');
	//$group6 = UserGroupTable::processCreate('President', 'president');
	//$group2 = UserGroupTable::processCreate('Head', 'head');
	//$group3 = UserGroupTable::processCreate('Dean', 'dean');
	//$group4 = UserGroupTable::processCreate('Mechanic', 'mechanic');

	//$flag = SystemLogFileTable::processCreate(1, $module, $action, $time, $current_date, $ip)
	//$flag = SystemLogFileTable::processCreate(1, $module, $action, $time, $current_date, $ip)
	//$flag = SystemLogFileTable::processCreate(2, $module, $action, $time, $current_date, $ip)
	//$flag = SystemLogFileTable::processCreate(2, $module, $action, $time, $current_date, $ip)

	?>
	<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
		<div class="ui-error-box btn-danger">
			<div class="ui-error-list">
				<?php echo 'Plate number already existed!' ?>
				<span class="ui-error-close">X</span>
			</div>			
		</div> 
	</div>

	<div id="ui-display-success-cont" class="ui-success-data displayNone"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Fule type successfuly saved!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>

	<div id="ui-display-delete-cont" class="ui-success-data displayNone"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Fule type successfuly deleted!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>
	<!-- list container -->
	 
	<div class="ui-container">
		<div class="ui-list-cont">		
			<div class="ui-main-list-cont" >
				<div class="ui-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('New Registered Vehicles')  ?></h1>				
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->
				
				<div class="ui-main-content-list"> 
					<div class="ui-main-content-cont" >
						<div class="ui-content-list-box">
							<div class="ui-list-filter-cont">
								<div class="clearFix"></div>
							</div>
							<div class="ui-content-lists">
								<?php include_partial('detailList', array('task_orders' => $task_orders )) ?>
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
										
										<input type="hidden" id="pagination_pageOffset" name="pagination_pageOffset" >
										<li class="display_list" id="pagination_display">Display: #  
											<select onclick="" name="pagination_pagesize" class="selspan" id="pagination_pagesize"> 
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
										<li class="prev_page"><span id="pagination_firstPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/first') ?>"></a></span>  
											<span id="" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">First</span>
										</li>
										<li class="prev_page"><span id="pagination_prevPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/prev') ?>"></a></span>  
											<span id="pagination_disabledPrevPage" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>"></span>
										</li>
										
										<li class="next_page">
											<span id="pagination_nextPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/next') ?>"></a>
											</span> 
											<span id="pagination_disabledNextPage" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">
												</span>
										</li>
										<li class="next_page">
											<span id="pagination_lastPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/last') ?>"></a>
											</span> 
											<span id="" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">
												</span>
										</li>
											<input type="hidden" id="pagination_nextpageOffset" name="pagination_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
											<input type="hidden" id="pagination_prevpageOffset" name="pagination_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
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
					<li><a href="<?php echo url_for('registration/order?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-back-button"><img src="<?php echo image_path('new_icons/back') ?>">Back</button></a></li>
				</ul>
				</ul>
				<ul class="ui-right-button">
					<li><a href="<?php echo url_for('registration/complete?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Complete</button></a></li>
				</ul>
				<div class="clearFix"></div>
			</div>
		
		</div>
	</div>
</div>
 


<script>
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
	
	function updateVehicle ( vehicleID )
	{
		var tokenID = document.getElementById('token_id-'+vehicleID).value;
		var plate_code = document.getElementById('plate_code-'+vehicleID).value;
		var plate_no = document.getElementById('plate_no-'+vehicleID).value;
		var plate_code_no = document.getElementById('plate_code_no-'+vehicleID).value;
		var vehicle_type = document.getElementById('vehicle_type-'+vehicleID).value;
		var vehicle_make = document.getElementById('vehicle_make-'+vehicleID).value;
		var vehicle_model = document.getElementById('vehicle_model-'+vehicleID).value;
		var vehicle_color = document.getElementById('vehicle_color-'+vehicleID).value;
		var vehicle_weight = document.getElementById('vehicle_weight-'+vehicleID).value;
		var fuel_type = document.getElementById('fuel_type-'+vehicleID).value;
		var desc = document.getElementById('description-'+vehicleID).value;
		 
			$.ajax({
				type: "GET",
				data: 'vehicle_id='+vehicleID+'&token_id='+tokenID+'&plate_code='+plate_code+'&plate_no='+plate_no+'&plate_code_no='+plate_code_no+'&vehicle_type='+vehicle_type+'&vehicle_make='+vehicle_make+'&vehicle_model='+vehicle_model+'&vehicle_color='+vehicle_color+'&vehicle_weight='+vehicle_weight+'&fuel_type='+fuel_type+'&description='+desc,
				url: '<?php echo url_for('registration/updateRegistrationVehicle')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
				async: false
				});
			
			/*var data ='vehicle_id='+vehicleID+'&token_id='+tokenID+'&plate_code='+plate_code+'&plate_no='+plate_no+'&plate_code_no='+plate_code_no+'&vehicle_type='+vehicle_type+'&vehicle_make='+vehicle_make+'&vehicle_model='+vehicle_model+'&vehicle_color='+vehicle_color+'&vehicle_weight='+vehicle_weight+'&fuel_type='+fuel_type+'&description='+desc;
			alert(data);*/
		return false;
		
	}
	
	 var itemTriggers = $(".itemModal").overlay({
 
      // some mask tweaks suitable for modal dialogs 
      mask: {
        color: '#ebecff',
        loadSpeed: 200,
        opacity: 0.9
      },
 
      closeOnClick: false
  });
  
	 var vehicleTriggers = $(".vehicleModal").overlay({
 
      // some mask tweaks suitable for modal dialogs 
      mask: {
        color: '#ebecff',
        loadSpeed: 200,
        opacity: 0.9
      },
 
      closeOnClick: false
  });

		
	$(document).ready(function(){
	  
		$('.changePinnableItem').click(function(){
			
			/*$(".changeItem")
			 .not($(this))
			 .removeClass("active");
	
			$(this).addClass("active");*/
	
			var rowNo = $(".rowItem", this).attr('rel');
			//var itemID = $("input#itemID-"+rowNo, this).val();
			
			document.getElementById("current_item_id").value = rowNo; 
			
			var taskID = document.getElementById("taskID_value").value ;
			
			var res = $.ajax({
					type: 'GET',
					data: 'item_id='+rowNo+'&task_id='+taskID,
					url: '<?php echo url_for('issuancetask/reselectItem')?>',
					async: false
					}).responseText;
		 
		 //var activeValue = $(this).find('.active').val();
		 
			//alert(rowNo);
			
			if(res)
					document.getElementById("itemReselectorListTable").innerHTML=res;
			
			return false;
		});
		
	});
	
	$(document).ready(function(){
	  
		$('.changeVehicle').click(function(){
			
			/*$(".changeItem")
			 .not($(this))
			 .removeClass("active");
	
			$(this).addClass("active");*/
	
			var rowNo = $(".rowVehicle", this).attr('rel');
			//var itemID = $("input#itemID-"+rowNo, this).val();
			
			document.getElementById("current_vehicle_id").value = rowNo; 
			
			var taskID = document.getElementById("taskID_value").value ;
			
			var res = $.ajax({
					type: 'GET',
					data: 'vehicle_id='+rowNo+'&task_id='+taskID,
					url: '<?php echo url_for('issuancetask/reselectVehicle')?>',
					async: false
					}).responseText;
		 
		 //var activeValue = $(this).find('.active').val();
		 
			//alert(rowNo);
			
			if(res)
					document.getElementById("vehicleReselectorListTable").innerHTML=res;
			
			return false;
		});
		
	});
	
	function vehiclePagination(offset)
	{
		var limit = document.getElementById('pagination_pagesize').value; 
		var type = document.getElementById('vehicle_type').value; 
		var status = document.getElementById('status').value; 
		var keyword = document.getElementById('keyword').value; 
	
		var result = $.ajax({
				type: "GET",
				data: 'limit='+limit+'&offset='+offset+'&type='+type+'&status='+status+'&keyword='+keyword,
				url: '<?php echo url_for('vehicle/pagination')?>',
				success: function(html) { $('#dataList').html(html) }, 
				async: false
				}).responseText;
				
		//var data = 'limit='+limit+'&offset='+offset+'&type='+type+'&status='+status+'&keyword='+keyword;
		//alert(data);
		return false;	
	}
	
	$(document).ready(function()
	{			
		$('#pagination_pagesize').change(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			if(offset == '')	offset = 0;
			vehiclePagination(offset);
			//alert(offset);
			return false;
				
		});
		
		$('#pagination_lastPage').click(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			var limit = document.getElementById('pagination_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			
			offset = parseInt(totalData)-parseInt(limit);
			if(offset < 0)	offset = 0;				
			document.getElementById('pagination_pageOffset').value = offset;
			
			vehiclePagination(offset);
			
			//alert(totalData)
			return false;
				
		});
		
		$('#pagination_nextPage').click(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			var limit = document.getElementById('pagination_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			if(offset == '')	offset = 0;
				
			offset = parseInt(offset) + parseInt(limit);
			lastOffset = parseInt(totalData)-parseInt(limit);
			
			if(offset >= totalData)		offset = lastOffset;
			
			document.getElementById('pagination_pageOffset').value = offset;	
			vehiclePagination(offset);
			 
			return false;				
		});
		
		$('#pagination_prevPage').click(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			var limit = document.getElementById('pagination_pagesize').value;			
			offset -= parseInt(limit);			
			if(offset < 0) offset = 0;		
			document.getElementById('pagination_pageOffset').value = offset;			
			vehiclePagination(offset);
			
			return false;				
		});
		
		$('#pagination_firstPage').click(function()
		{
			offset = 0;
			//document.getElementById('pagination_pageOffset').value = offset;
			
			vehiclePagination(offset);
			 
			return false;
		});		
		$('#vehicle_type').change(function(key)
		{
			offset = 0;
			document.getElementById('pagination_pageOffset').value = offset;
			vehiclePagination(offset);
			//alert('dd');
			
			return false;
		});		
		$('#status').change(function()
		{
			offset = 0;
			document.getElementById('pagination_pageOffset').value = offset;
			vehiclePagination(offset);
			 
			
			return false;
		});		
		$('#keyword').keyup(function(key)
		{
			offset = 0;
			document.getElementById('pagination_pageOffset').value = offset;
			vehiclePagination(offset);
			
			return false;
		});		
	});

</script>
