<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="<?php echo url_for('general_setting/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">General Setting</a></li>
			<li><a href="" ><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

<?php //$flags = FuelTypeTable::processCreate ( 'eadas', 'asdfasdf' ); 

	//echo $flags ? 'true' : 'flase' ;
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

<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont">
			<div class="ui-list-header">				
				<h1><img class="clickRefresh" src="<?php echo image_path('new_icons/group') ?>"><?php echo __('Group')  ?></h1>		
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
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('User Detail') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('form', array()) ?>
											</div><!-- end of ui-content-form -->
										</fieldset>
									</td>
									<td >
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Group Detail') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('usersettingForm', array()) ?>
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
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('User Permission')  ?></h1>
				<div class="ui-form-content-minimize closed" id="ui-grid-collaps-list-box" style="margin-top:0px;float:right;">	
					<span id="ui-grid-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
					<span id="ui-grid-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
				</div>	
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-content-list ui-grid-content-container-box"> 
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
							<?php include_partial('list', array('users' => $users )) ?>
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
		location.reload().delay(3000);
	}

	
	
	function createCategory()
	{
		var name = document.getElementById('name').value
		var group_id = document.getElementById('category_group').value
		var class_id = document.getElementById('category_class').value
		var desc = document.getElementById('description').value
		
		if( name == '')
		{
			$('#name_validation').removeClass('displayNone');
			$('#name').addClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'name='+name+'&group_id='+group_id+'&class_id='+class_id+'&description='+desc,
				url: '<?php echo url_for('category/createCategory')?>', 
				success: function(data) { 
					showSuccess(); 
				},
				error: function(msg) {
					showError();
				},
			
				async: false
				});

		
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
	 
	 $(document).ready(function(){
		$('.clickRefresh').click(function(){
			
			var arrRead = [];
			var arrCreate = [];
			var arrDelete = [];
			var arrUpdate = [];
			var len = $('.check_all_read_permision').length;
			var j = 1;
			var m = 0;

			for( i = 0; i < len; i++)
			{
				var check = $('#module-read-'+j).is(':checked')
				if(check == true) {					
					arrRead[m] = $('#module-read-'+j).attr('rel');
					m++;
				}
				j++;
			}
			 
			var arr_len = arrRead.length;
			
			$.ajax({
			data: 'arr_list='+arr+'&arr_length='+arr_len,
			url: '<?php echo url_for('user/createPermission')?>', 
				success: function() { 
					deleteSuccess(); 
				},
				error: function() {
					showError();
				},
			
				async: false
				});
				
				location.reload();
			
			return false;
		});
		 
	});
//***************

	function categoryPagination(offset)
	{
		var limit = document.getElementById('pagiantion_pagesize').value;
		var keyword = document.getElementById('keyword').value;
		var group_id = document.getElementById('category_group_id').value;
		var class_id = document.getElementById('category_class_id').value;
	
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
			if(offset == '')	offset = 0;
			categoryPagination(offset);
			
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
			
			categoryPagination(offset);
			
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
			categoryPagination(offset);
			 
			return false;				
		});
		
		$('#pagiantion_prevPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;			
			offset -= parseInt(limit);			
			if(offset < 0) offset = 0;		
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





