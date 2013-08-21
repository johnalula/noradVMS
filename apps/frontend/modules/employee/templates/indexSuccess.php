<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="<?php echo url_for('general_setting/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">General Setting</a></li>
			<li><a href="" ><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

<?php //$flags = EmployeeTable::processCreate(1, 9, 1, 'asfasdf', $father_name, $grand_father_name, $id_no, $job_title, $birth_date, $status, $vat_number, $project_no, $description, $pobox_no, $mobile_no, $phone_no, $fax_no, $email, $website); 

//$flags = EmployeeTable::processParentSelection(); 
//echo count($flags);
//$flag
	//echo $flags ? 'true' : 'flase' ;
?>
<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
	<div class="ui-error-box btn-danger">
		<div class="ui-error-list">
			<?php echo 'Emplyee already existed!' ?>
			<span class="ui-error-close">X</span>
		</div>			
	</div> 
</div>

<div id="ui-display-success-cont" class="ui-success-data displayNone"> 
	<div class="ui-success-box btn-danger">
		<div class="ui-success-list">
			<?php echo 'Emplyee successfuly saved!' ?>
			<span class="ui-success-close">X</span>
		</div>			
	</div> 
</div>

<div id="ui-display-delete-cont" class="ui-success-data displayNone"> 
	<div class="ui-success-box btn-danger">
		<div class="ui-success-list">
			<?php echo 'Emplyee successfuly deleted!' ?>
			<span class="ui-success-close">X</span>
		</div>			
	</div> 
</div>

<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont">
			<div class="ui-list-header">				
				<h1><img class="clickRefresh" src="<?php echo image_path('setting/staff_medium') ?>"><?php echo __('Employee')  ?></h1>		
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
							<legend><img style="width:16px;height:16px;" src="<?php echo image_path('setting/staff_medium') ?>" ><?php echo ('New Employee')  ?></legend>
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
									<td >
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('General Info') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('generalInfoForm', array()) ?>
											</div><!-- end of ui-content-form -->
										</fieldset>
									</td>
								</tr>
								<tr>
									<td >
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Address') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('addressForm', array()) ?>
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
							<?php include_partial('list', array('employees' => $employees )) ?>
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

<div class="modal" id="departmentPrompts">
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
								<?php include_partial('departmentFilter', array()) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('departmentList', array('parents' => $parents )) ?>
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
				<button type="submit" class=""  style=""> <?php echo __('Insert') ?> </button>   
			</li> 
			<li>
				<button type="button" class="close"  style=""> <?php echo __('Cancel') ?> </button> 
			</li>
			
			</ul>
			<div class="clearFix"></div>
		</div>
</form>
</div>

<script>
	
	 var triggerDepartment = $(".departmentModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#departmentPrompts form").submit(function(e) {

		if($("input[name=selectDepartment]:checked", this).length == 0)
			$("input[id=selectDepartment-1]").attr("checked", "checked");

		triggerDepartment.eq(0).overlay().close();

		var input = $("input[name=selectDepartment]:checked", this).val();
		var listArr = input.split("$");

		document.getElementById("departmentID").value = listArr[0];
		document.getElementById("department_name").value = listArr[1]; 
		
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

	
	
	function createEmployee()
	{
		var deptID = document.getElementById('departmentID').value;
		var title = document.getElementById('title').value;
		var name = document.getElementById('name').value;
		var father_name = document.getElementById('father_name').value;
		var g_father_name = document.getElementById('grand_father_name').value;
		var birth_date = document.getElementById('birth_date').value;
		var gender = document.getElementById('gender').value;
		var id_no = document.getElementById('id_no').value;
		var project_no = document.getElementById('project_no').value;
		var vat_no = document.getElementById('vat_no').value;
		var status = document.getElementById('status').value;
		var job_title = document.getElementById('job_title').value;
		var emp_type = document.getElementById('employment_type').value;
		var phone_no = document.getElementById('phone_no').value;
		var mobile_no = document.getElementById('mobile_no').value;
		var pobox = document.getElementById('pobox').value;
		var fax_no = document.getElementById('fax_no').value;
		var email = document.getElementById('email').value;
		var website = document.getElementById('website').value;		
		var desc = document.getElementById('description').value;
		
		if( name == '' && deptID == '')
		{
			$('#name_validation').removeClass('displayNone');
			$('#name').addClass('validation_error_border');
			
			$('#department_validation').removeClass('displayNone');
			$('#department_name').addClass('validation_error_border');
			
			return false;
		}
		
		if( name == '')
		{
			$('#name_validation').removeClass('displayNone');
			$('#name').addClass('validation_error_border');
			$('#department_validation').addClass('displayNone');
			$('#department_name').removeClass('validation_error_border');
			
			return false;
		}
		
		if( deptID == '')
		{
			$('#name_validation').addClass('displayNone');
			$('#name').removeClass('validation_error_border');
			$('#department_validation').removeClass('displayNone');
			$('#department_name').addClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'name='+name+'&father_name='+father_name+'&g_father_name='+g_father_name+'&birth_date='+birth_date+'&gender='+gender+'&department_id='+deptID+'&title='+title+'&id_no='+id_no+'&project_no='+project_no+'&vat_no='+vat_no+'&status='+status+'&job_title='+job_title+'&employment_type='+emp_type+'&phone_no='+phone_no+'&mobile_no='+mobile_no+'&pobox='+pobox+'&fax_no='+fax_no+'&email='+email+'&website='+website+'&description='+desc,
				url: '<?php echo url_for('employee/createEmployee')?>', 
				success: function(data) { 
					showSuccess(); 
				},
				error: function(msg) {
					showError();
				},
			
				async: false
				});

		//var data = 'name='+name+'&father_name='+father_name+'&g_father_name='+g_father_name+'&birth_date='+birth_date+'&gender='+gender+'&department_id='+deptID+'&title='+title+'&id_no='+id_no+'&project_no='+project_no+'&vat_no='+vat_no+'&status='+status+'&job_title='+job_title+'&employment_type='+emp_type+'&phone_no='+phone_no+'&mobile_no='+mobile_no+'&pobox='+pobox+'&fax_no='+fax_no+'&email='+email+'&website='+website;
		//alert(data);
		
		return false;		
	}
	
//********** Pagination ************

	function employeePagination(offset)
	{
		var limit = document.getElementById('pagiantion_pagesize').value
		var keyword = document.getElementById('keyword').value
		var group_id = document.getElementById('category_group_id').value
		var class_id = document.getElementById('category_class_id').value
	
		var result = $.ajax({
				type: "GET",
				data: 'keyword='+keyword+'&group_id='+group_id+'&class_id='+class_id+'&limit='+limit+'&offset='+offset,
				url: '<?php echo url_for('employee/pagination')?>',
				success: function(html) { $('#dataList').html(html) }, 
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
			employeePagination(offset);
			
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
			
			employeePagination(offset);
			
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
			employeePagination(offset);
			 
			return false;				
		});
		
		$('#pagiantion_prevPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;			
			offset -= parseInt(limit);			
			if(offset < 0) offset = 0;		
			document.getElementById('pagiantion_pageOffset').value = offset;			
			employeePagination(offset);
			
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
			employeePagination(offset);
				
			return false;
				
		});
		
		$('#category_class_id').change(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			employeePagination(offset);				
			return false;
		});
		
		$('#keyword').keyup(function(key)
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			employeePagination(offset);	

			return false;
		});
		
	});
	
	//*********** Parent Pagination *************//
	
	function parentPagination(offset)
	{
		var limit = document.getElementById('parent_pagination_pagesize').value;
		var keyword = document.getElementById('parent_keyword').value;
		var status = document.getElementById('parent_status').value;
		var type = document.getElementById('parent_type').value;
		if(type =='') type=null;
		
		var result = $.ajax({
				type: "GET",
				data: 'keyword='+keyword+'&type_id='+type+'&status_id='+status+'&limit='+limit+'&offset='+offset,
				url: '<?php echo url_for('employee/parentPagination')?>',
				success: function(html) { $('#myDataList').html(html) }, 
				async: false
				}).responseText;
		
		//var data= 'keyword='+keyword+'&type='+type+'&status='+status+'&limit='+limit+'&offset='+offset;
		//alert(data);
		return false;	
	}
	
	$(document).ready(function()
	{			
		$('#parent_pagination_pagesize').change(function()
		{
			var offset = document.getElementById('parent_pagination_pageOffset').value;
			if(offset == '')	offset = 0;
			parentPagination(offset);
			
			return false;
				
		});
		
		$('#parent_pagination_lastPage').click(function()
		{
			var offset = document.getElementById('parent_pagination_pageOffset').value;
			var limit = document.getElementById('parent_pagination_pagesize').value;
			var totalData = document.getElementById('parent_total').value;
			
			offset = parseInt(totalData)-parseInt(limit);
			if(offset < 0)	offset = 0;				
			document.getElementById('parent_pagination_pageOffset').value = offset;
			
			parentPagination(offset);
			
			return false;
				
		});
		
		$('#parent_pagination_nextPage').click(function()
		{
			var offset = document.getElementById('parent_pagination_pageOffset').value;
			var limit = document.getElementById('parent_pagination_pagesize').value;
			var totalData = document.getElementById('parent_total').value;
			if(offset == '')	offset = 0;
				
			offset = parseInt(offset) + parseInt(limit);
			lastOffset = parseInt(totalData)-parseInt(limit);
			
			if(offset >= totalData)		offset = lastOffset;
			
			document.getElementById('parent_pagination_pageOffset').value = offset;	
			parentPagination(offset);
			 
			return false;				
		});
		
		$('#parent_pagination_prevPage').click(function()
		{
			var offset = document.getElementById('parent_pagination_pageOffset').value;
			var limit = document.getElementById('parent_pagination_pagesize').value;			
			offset -= parseInt(limit);			
			if(offset < 0) offset = 0;		
			document.getElementById('parent_pagination_pageOffset').value = offset;			
			parentPagination(offset);
			
			return false;				
		});
		
		$('#parent_pagination_firstPage').click(function()
		{
			offset = 0;
			parentPagination(offset);
			
			return false;
		});
		
		$('#parent_type').change(function()
		{
			var offset = document.getElementById('parent_pagination_pageOffset').value;
			parentPagination(offset);
				
			return false;
				
		});
		
		$('#parent_status').change(function()
		{
			var offset = document.getElementById('parent_pagination_pageOffset').value;
			parentPagination(offset);				
			return false;
		});
		
		$('#parent_keyword').keyup(function(key)
		{
			var offset = document.getElementById('parent_pagination_pageOffset').value;
			parentPagination(offset);	
//alert('d');
			return false;
		});
		
	});
	 
</script>





