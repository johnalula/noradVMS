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
				<li><a href="<?php echo url_for('registration/detail?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Complete</button></a></li>
			</ul>
			<div class="clearFix"></div>
		</div>
	
	</div>
</div>

<div class="modal" id="vehiclePrompts">
	<div class="ui-modal">
	<form>   
		<div class="ui-modal-header">
			<h1>Eployee Date</h1>
		</div>
		<div class="partialFilterBox">
			<div class="filterBox" style="text-align:left;margin-right:20px;">
				 <?php include_partial('candidateFilter', array()); ?>	
			 </div>
			<table style="border:0px solid #f00;width:140px;float:right;margin-top:-40px;">
				<tr>
					<td style="border:1px solid #eee;">
						<div style="float:right;">			
							<button type="submit" style="color:white;background:maroon;width:60px;"><?php echo __('OK') ?> </button>
							<button type="button" class="close"  style="color:red;width:60px;"> <?php echo __('Cancel') ?> </button>  
						</div>			
					</td>
				</tr>
			</table>
		</div>
		 <div class="partialBox">
			 <?php include_partial('candidateList', array('candidates' => $candidates)); ?>	
			 <div class="clearFix"></div>
		</div>
		<div class="partialPagination">
		 <table>		
			<tfoot>
					<tr>
						<td colspan=11> 
							<div class="paginationCont">
								<form class="form-horizontal" action="" method="get">
									<div class="paginateValue">
										<ul class="display">
											<input type="hidden" id="location_pageOffset" name="location_pageOffset" >
											<li class="display_list" id="location_display">Display: #  
												<select onclick="" name="location_pagesize" class="selspan" id="location_pagesize"> 
													<option value="10"  >10</option>
													<option value="30"  >30</option> 
													<option value="50"  >50</option>
													<option value="100"  >100</option>
												</select>
											</li>
											<li></li>
										</ul>
									</div>
								</form> 
								<div class="paginationLayer">
									<div class="paginatNav">
										<ul>	 
											
											<li class="prev_page"><span id="location_prevPage" class="imag">
												<a href=""><img src="<?php echo image_path('page-prev') ?>">Prev</a></span>  
												<span id="location_disabledPrevPage" class="imag displayNone">
												<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
											</li>
											
											<li class="next_page">
												<span id="location_nextPage" class="imag">
													<a href=""><img src="<?php echo image_path('page-next') ?>">Next</a>
												</span> 
												<span id="location_disabledNextPage" class="imag displayNone">
													<img src="<?php echo image_path('page-next-disabled') ?>">Next
													</span>
											</li>
												<input type="hidden" id="location_nextpageOffset" name="location_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
												<input type="hidden" id="location_prevpageOffset" name="location_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
										</ul> 
									</div> 
								</div> 
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</form>
</div>
</div>


<script>
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
