<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="<?php echo url_for('general_setting/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">General Setting</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

<?php //$flags = FuelTypeTable::processCreate ( 'eadas', 'asdfasdf' ); 

	//echo $flags ? 'true' : 'flase' ;
//$flag = DriverTable::processCreate ( 4, 3, 4, 'asdfa' );
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
				<h1><img src="<?php echo image_path('new_icons/oil') ?>"><?php echo __('Driver')  ?></h1>		
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
							<legend><img src="<?php echo image_path('icons/add_small') ?>" ><?php echo ('New Driver')  ?></legend>
						</fieldset><!-- end of ui-content-fieldset -->
						
						<div class="ui-main-form-content ui-collapsible-list-box">
							<table>
								<tr>
									<td >
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
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Drivers')  ?></h1>				
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
							<div class="ui-filter-list"> 
								<?php include_partial('employeeFilter', array('groups' => $groups,'classs' => $classs )) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('list', array('drivers' => $drivers )) ?>
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
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->


<div class="modal" id="employeePrompts">	
	<div class="ui-modal">
	<form>   	
		<div class="ui-modal-header">
			<h1>Eployee Date</h1>		
		</div>
		<div class="partialFilterBox">
			<div class="filterBox" style="text-align:left;margin-right:20px;">
				 <?php include_partial('employeeFilter', array()); ?>	
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
			 <?php include_partial('employeeList', array('employees' => $employees)); ?>	
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
	
	 var triggerEmployee = $(".employeeModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#employeePrompts form").submit(function(e) {

		if($("input[name=selectEmployee]:checked", this).length == 0)
			$("input[id=selectEmployee-1]").attr("checked", "checked");

		triggerEmployee.eq(0).overlay().close();

		var input = $("input[name=selectEmployee]:checked", this).val();
		var listArr = input.split("$");

		document.getElementById("employee_id").value = listArr[0];
		document.getElementById("employee_name").value = listArr[1]; 
		
		$('#name_validateion').addClass('displayNone');
		$('#employee_name').removeClass('validation_error_border'); 

		return e.preventDefault();
	});
	
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

	
	
	function createDriver()
	{
		var empID = document.getElementById('employee_id').value
		var licensetype = document.getElementById('license_type').value
		var workexp = document.getElementById('work_experience').value
		var desc = document.getElementById('description').value
		
		if( empID == '')
		{
			$('#name_validation').removeClass('displayNone');
			$('#employee_name').addClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'employee_id='+empID+'&license_type='+licensetype+'&work_experience='+workexp+'&description='+desc,
				url: '<?php echo url_for('driver/createDriver')?>', 
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





