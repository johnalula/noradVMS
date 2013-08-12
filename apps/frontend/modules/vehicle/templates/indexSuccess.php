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
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Vehicles')  ?></h1>				
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-content-list"> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						<div class="ui-list-filter-cont">
							<?php include_partial('filter') ?>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('list', array('vehicles' => $vehicles, 'allVehicles' => $allVehicles )) ?>
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
 
<script>

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
