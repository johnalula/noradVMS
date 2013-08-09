<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="<?php echo url_for('general_setting/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">General Setting</a></li>
			<li><a href="#" id="" onclick="Javascript:createGroup();"><img src="<?php echo image_path('icons/save_small') ?>">Save</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

<?php //$flags = FuelTypeTable::processCreate ( 'eadas', 'asdfasdf' ); 

	$group_id = 2;
	$data = array(7,8);
	$length = 2;
	$per = PermissionTable::fetchDuplicated(62, 2);;
	//$obj = PermissionTable::processObject($per->id, $per->token_id);
	//$obj->create_action = true;
	//$obj->save();
	echo $per->id;
				
	//echo $flags ? 'true' : 'flase' ;
?>
<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
	<div class="ui-error-box btn-danger">
		<div class="ui-error-list">
			<?php echo 'Group already existed!' ?>
			<span class="ui-error-close">X</span>
		</div>			
	</div> 
</div>

<div id="ui-display-success-cont" class="ui-success-data displayNone"> 
	<div class="ui-success-box btn-danger">
		<div class="ui-success-list">
			<?php echo 'Group successfuly saved!' ?>
			<span class="ui-success-close">X</span>
		</div>			
	</div> 
</div>

<div id="ui-display-delete-cont" class="ui-success-data displayNone"> 
	<div class="ui-success-box btn-danger">
		<div class="ui-success-list">
			<?php echo 'Group successfuly deleted!' ?>
			<span class="ui-success-close">X</span>
		</div>			
	</div> 
</div>

<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont">
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('new_icons/group') ?>"><?php echo __('Group')  ?></h1>		
				<div class="ui-form-content-minimize opened" id="ui-form-collaps-list-box" style="margin-top:0px;float:right;">	
					<span id="ui-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
					<span id="ui-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
				</div>	
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-list">
				<div class="ui-content-minimize opened" id="ui-collaps-list-box" style="margin-top:8px;">
					<span class="minus-btn" id="minus-button" ><img src="<?php echo image_path('icons/minus') ?>"></span>
					<span class="plus-btn displayNone" id="plus-button"><img src="<?php echo image_path('icons/plus') ?>"></span>
				</div><!-- end of ui-content-minimize -->
			
				<div class="ui-main-content-cont" >	
					<div class="ui-main-content">
						<fieldset class="ui-content-fieldset">
							<legend><img style="width:16px;height:16px;" src="<?php echo image_path('new_icons/group_add') ?>" ><?php echo ('New Group')  ?></legend>
						</fieldset><!-- end of ui-content-fieldset -->
						
						<div class="ui-main-form-content ui-collapsible-list-box">
							<table>
								<tr>
									<td >
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Group Detail') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('form', array()) ?>
											</div><!-- end of ui-content-form -->
										</fieldset>
									</td>
									<td >
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Group Setting') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('groupsettingForm', array()) ?>
											</div><!-- end of ui-content-form -->
										</fieldset>
									</td>
								</tr>
								 
							</table>
							  
						</div><!-- end of ui-main-form-content -->
					</div><!-- end of ui-main-content -->
				</div><!-- end of ui-main-content-cont -->
			</div>
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->

<!-- list container -->
 
<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont" >
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Group Permission')  ?></h1>
				<div class="ui-form-content-minimize closed" id="ui-grid-collaps-list-box" style="margin-top:0px;float:right;">	
					<span id="ui-grid-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
					<span id="ui-grid-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
				</div>	
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-content-list ui-grid-content-container-box displayNone"> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						 
						<div class="ui-content-lists">
							<?php include_partial('permissionForm', array()) ?>
						</div><!-- end of ui-content-lists -->
					</div><!-- end of ui-content-list-box -->
				</div><!-- end of ui-main-content-cont --> 
			</div><!-- end of ui-main-content-list --> 
			
			 
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->
 
<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont" >
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Groups')  ?></h1>	
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
							<div class="ui-list-batch-actions"> 
								<input type="hidden" id="totalData" value=" <?php echo $totalData ?>" >
									<ul>
										<li><a href=""><img src="<?php echo image_path('icons/delete_small') ?>">Delete</a></li>
										<li></li> 
									</ul>  
							</div>
							<div class="ui-filter-list"> 
								<?php include_partial('filter', array('groups' => $groups,'classs' => $classs )) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('list', array('groups' => $groups )) ?>
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
			</div>
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->

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
		//location.reload().delay(3000);
	}
	
	function arrayFunction(arrList, activity)
	{
		var j = 1;
		var m = 0;
		var arrData = [];
		
		for( i = 0; i < arrList; i++)
			{
				var check = $('#module-'+activity+'-'+j).is(':checked')
				if(check == true) {					
					arrData[m] = $('#module-'+activity+'-'+j).attr('rel');
					m++;
				}
				j++;
			}
		return arrData;
	}
	
	function createGroup()
	{
		var name = document.getElementById('groupname').value
		var is_active = document.getElementById('isActive').checked ? 1:0;
		var is_blocked = document.getElementById('isBlocked').checked ? 1:0;
		var group_type = document.getElementById('group_type_id').value;
		var language_id = document.getElementById('language_id').value;
		var theme_id = document.getElementById('theme_id').value;
		var desc = document.getElementById('description').value;
		
		if( name == '')
		{
			$('#groupname_validation').removeClass('displayNone');
			$('#groupname').addClass('validation_error_border');
			
			return false;
		}
		
			var readLen = $('.check_all_read_permission').length;
			var createLen = $('.check_all_create_permission').length;
			var updateLen = $('.check_all_update_permission').length;
			var deleteLen = $('.check_all_delete_permission').length;
			
			
			var readArr = arrayFunction(readLen, 'read');
			var createArr = arrayFunction(createLen, 'create');
			var updateArr = arrayFunction(updateLen, 'update');
			var deleteArr = arrayFunction(deleteLen, 'delete');
			 
			var read_len = readArr.length;
			var create_len = createArr.length;
			var update_len = updateArr.length;
			var delete_len = deleteArr.length;
			
			$.ajax({
				type: "GET",
				data: 'name='+name+'&is_active='+is_active+'&is_blocked='+is_blocked+'&group_type_id='+group_type+'&language_id='+language_id+'&theme_id='+theme_id+'&description='+desc+'&read_arr_data='+readArr+'&read_arr_length='+read_len+'&create_arr_data='+createArr+'&create_arr_length='+create_len+'&update_arr_data='+updateArr+'&update_arr_length='+update_len+'&delete_arr_data='+deleteArr+'&delete_arr_length='+delete_len,
				url: '<?php echo url_for('group/createGroup')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
			
				async: false
				});

			$('#myData').load('group/selection');

		return false;
		
	}
	
	function deleteGroup(groupID, tokenID)
	{
		var limit = document.getElementById('pagiantion_pagesize').value;
		var offset = document.getElementById('pagiantion_pageOffset').value;
		var keyword = document.getElementById('keyword').value;
		var ids = groupID.split("$");
		
		var group_id = ids[0];
		var token_id = ids[1];
		
		$.ajax({
			data: 'group_id='+group_id+'&token_id='+token_id,
			url: '<?php echo url_for('group/deleteGroup')?>', 
				success: function() { 
					deleteSuccess(); 
				},
				error: function() {
					showError();
				},
			
				async: false
				});
	
			var result = $.ajax({
				type: "GET",
				data: 'keyword='+keyword+'&limit='+limit+'&offset='+offset,
				url: '<?php echo url_for('group/selection')?>',
				success: function(html) { $('#myData').html(html) }, 
				async: false
				}).responseText;
				
				//var data = 'group_id='+group_id+'&token_id='+token_id;
				//alert(data);
								
		return false;
	}
	
	 
//***************

	function groupPagination(offset)
	{
		var limit = document.getElementById('pagiantion_pagesize').value
		var keyword = document.getElementById('keyword').value
		var group_type_id = document.getElementById('group_type_id').value
	
		var result = $.ajax({
				type: "GET",
				data: 'keyword='+keyword+'&group_type_id='+group_type_id+'&limit='+limit+'&offset='+offset,
				url: '<?php echo url_for('group/pagination')?>',
				success: function(html) { $('#myData').html(html) }, 
				async: false
				}).responseText;
		
		return false;	
	}
	
	$(document).ready(function()
	{			
		$('#pagiantion_pagesize').change(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			if(offset == '')	offset = 0;
			groupPagination(offset);
			
			return false;
				
		});
		
		$('#pagiantion_lastPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			
			offset = parseInt(totalData)-parseInt(limit);
			if(offset < 0)	offset = 0;				
			document.getElementById('pagiantion_pageOffset').value = offset;
			
			groupPagination(offset);
			
			return false;
				
		});
		
		$('#pagiantion_nextPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			if(offset == '')	offset = 0;
				
			offset = parseInt(offset) + parseInt(limit);
			lastOffset = parseInt(totalData)-parseInt(limit);
			
			if(offset >= totalData)		offset = lastOffset;
			
			document.getElementById('pagiantion_pageOffset').value = offset;	
			groupPagination(offset);
			 
			return false;				
		});
		
		$('#pagiantion_prevPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;			
			offset -= parseInt(limit);			
			if(offset < 0) offset = 0;		
			document.getElementById('pagiantion_pageOffset').value = offset;			
			groupPagination(offset);
			
			return false;				
		});
		
		$('#pagiantion_firstPage').click(function()
		{
			offset = 0;
			groupPagination(offset);
			
			return false;
		});
		
		$('#group_type_id').change(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			groupPagination(offset);
				
			return false;
				
		});
		
		
		$('#keyword').keyup(function(key)
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			groupPagination(offset);	

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
			$('#ui-display-success-cont').addClass('displayNone');			
			return false;
		});
		 
		
		$('.ui-success-close').click(function(){			
			$('#ui-success-error-cont').addClass('displayNone');			
			return false;
		});
		
	});

</script>





