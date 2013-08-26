<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="<?php echo url_for('vehicle_setting/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Vehicle Setting</a></li>
			<li><a href="#" id="" onclick="Javascript:createFuelType();"><img src="<?php echo image_path('icons/save_small') ?>">Save</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

 
<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
	<div class="ui-error-box btn-danger">
		<div class="ui-error-list">
			<?php echo 'Fule type already existed!' ?>
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

<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont">
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('new_icons/oil') ?>"><?php echo __('Fuel Type')  ?></h1>		
				<span class="ui-minimize-arrow"><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
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
							<legend><img src="<?php echo image_path('icons/add_small') ?>" ><?php echo ('New Fuel Type')  ?></legend>
						</fieldset><!-- end of ui-content-fieldset -->
						
						<div class="ui-main-form-content ui-collapsible-list-box">
							<table>
								<tr>
									<td rowspan=2>
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('form', array()) ?>
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
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Fuel Types')  ?></h1>				
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-content-list"> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						<div class="ui-list-filter-cont">
							<div class="ui-list-batch-actions"> 
										<ul>
											<li><a href=""><img src="<?php echo image_path('icons/delete_small') ?>">Delete</a></li>
											<li></li> 
										</ul>  
							</div>
							<div class="ui-filter-list"> 
										<ul>
											<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
											<li><input type="text" id="keyword"></li>
											<li><select><option>name</option><option>father name</option></select></li> 
										</ul>  
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('list', array('fuel_types' => $fuel_types )) ?>
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
											<option value="3"  >3</option>
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
										<a href=""><img src="<?php echo image_path('pagination/first') ?>">First</a></span>  
										<span id="" class="imag displayNone">
										<img src="<?php echo image_path('page-prev-disabled') ?>">First</span>
									</li>
									<li class="prev_page"><span id="pagination_prevPage" class="imag">
										<a href=""><img src="<?php echo image_path('pagination/prev') ?>">Prev</a></span>  
										<span id="pagination_disabledPrevPage" class="imag displayNone">
										<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
									</li>
									
									<li class="next_page">
										<span id="pagination_nextPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/next') ?>">Next</a>
										</span> 
										<span id="pagination_disabledNextPage" class="imag displayNone">
											<img src="<?php echo image_path('page-next-disabled') ?>">Next
											</span>
									</li>
									<li class="next_page">
										<span id="pagination_lastPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/last') ?>">Last</a>
										</span> 
										<span id="" class="imag displayNone">
											<img src="<?php echo image_path('page-next-disabled') ?>">Last
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

	
	// to create new fuel type
	
	function createFuelType()
	{
		var name = document.getElementById('name').value
		var desc = document.getElementById('description').value
		
		if( name == '')
		{
			$('#name_validation').removeClass('displayNone');
			$('#name').addClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'name='+name+'&description='+desc,
				url: '<?php echo url_for('fuel_type/createFuelType')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
			
				async: false
				});

		
		return false;
		
	}
	
	function deleteFuelType(fuelID)
	{
		$.ajax({
			data: 'fuel_type_id='+fuelID,
			url: '<?php echo url_for('fuel_type/deleteFuelType')?>', 
				success: function() { 
					deleteSuccess(); 
				},
				error: function() {
					showError();
				},
			
				async: false
				});
	
		return false;
	}
	
	 
	
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

//********** Pagination ************

	function fuelTypePagination(offset)
	{
		var limit = document.getElementById('pagination_pagesize').value
		var keyword = document.getElementById('keyword').value
	
		var result = $.ajax({
				type: "GET",
				data: 'limit='+limit+'&offset='+offset+'&keyword='+keyword,
				url: '<?php echo url_for('fuel_type/pagination')?>',
				success: function(html) { 
					$('#dataList').html(html) 
				}, 
				async: false
				}).responseText;
		
		return false;	
	}
	
	$(document).ready(function()
	{			
		$('#pagination_pagesize').change(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			if(offset == '')	offset = 0;
			fuelTypePagination(offset);
			//alert('dd');
			return false;
				
		});
		
		/*$('#pagination_lastPage').click(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			var limit = document.getElementById('pagination_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			
			offset = parseInt(totalData)-parseInt(limit);
			if(offset < 0)	offset = 0;				
			document.getElementById('pagination_pageOffset').value = offset;
			
			//fuelTypePagination(offset);
			alert('asd')
			return false;
				
		});*/
		
		$('#pagination_nextPage').click(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			var limit = document.getElementById('pagination_pagesize').value;
			//var totalData = document.getElementById('totalData').value;
			if(offset == '')	offset = 0;
				
			offset = parseInt(offset) + parseInt(limit);
			//lastOffset = parseInt(totalData)-parseInt(limit);
			
		//	if(offset >= totalData)		offset = lastOffset;
			
			document.getElementById('pagination_pageOffset').value = offset;	
			fuelTypePagination(offset);
			// alert('as');
			return false;				
		});
		
		$('#pagination_prevPage').click(function()
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			var limit = document.getElementById('pagination_pagesize').value;			
			offset -= parseInt(limit);			
			if(offset < 0) offset = 0;		
			document.getElementById('pagination_pageOffset').value = offset;			
			fuelTypePagination(offset);
			
			return false;				
		});
		
		/*$('#pagination_firstPage').click(function()
		{
			offset = 0;
			fuelTypePagination(offset);
			
			return false;
		});*/
	
		$('#keyword').keyup(function(key)
		{
			var offset = document.getElementById('pagination_pageOffset').value;
			fuelTypePagination(offset);	

			return false;
		});
		
	});
	
	
</script>





