 
<div class="ui-list-box-container">
	<div class="ui-list-box-layer">		
		<div class="ui-list-box">
			<div class="ui-list-box-header">
				<h1><img src="<?php echo image_path('setting/home') ?>"><?php echo __('Employee')  ?></h1>
				
				<div class="clearFix"></div>
			</div>
			
			<div class="ui-content-minimize opened" id="collaps-participant" style="margin-top:8px;">
				<span class="minus-btn" id="minus-button" ><img src="<?php echo image_path('icons/minus') ?>"></span>
				<span class="plus-btn displayNone" id="plus-button"><img src="<?php echo image_path('icons/plus') ?>"></span>
			</div> 
			
			<div class="ui-list-box-content" >		
				 
				<fieldset class="ui-content-fieldset">
					<legend><img src="<?php echo image_path('icons/add_medium') ?>" ><?php echo ('New Employee')  ?></legend>
					<div class="ui-list-form-content collaps-detail-box">
						<table>
							<tr>
								<td rowspan=2>
									<fieldset  style="">
										<legend><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
										<div class="ui-content-form" >		
											 <?php include_partial('form', array()) ?>
										</div><!-- end of ui-content-form -->
									</fieldset>
								</td>
								<td >
									<fieldset  style="">
										<legend><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
										<div class="ui-content-form" >		
											 <?php include_partial('generalInfoForm', array()) ?>
										</div><!-- end of ui-content-form -->
									</fieldset>
								</td>
							</tr>
							<tr>
								<td >
									<fieldset  style="">
										<legend><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
										<div class="ui-content-form" >		
											 <?php include_partial('addressForm', array()) ?>
										</div><!-- end of ui-content-form -->
									</fieldset>
								</td>

							</tr>
						</table>
						
						 
						<div class="ui-action-button-box">
							<button  id="saveData" class="ui-action-button" onclick="Javascript:createEmployee();" ><img src="<?php echo image_path('icons/save') ?>" ><?php echo ('Save') ?></button> 
						</div><!-- end of ui-action-box -->
						
					</div><!-- end of ui-list-form-content -->
				
			 
					<div class="ui-tab-container">
						<div id="tabs" class="ui-detail-list-box">
								<ul class="ui-detail" > 
									<li ><a href="#jurisdictionType" ><?php echo ('Existing Employees') ?></a></li>
									 
								</ul>
								<div class="clearFix"></div>
				 
							<div class="ui-detail-list">
								<div id="jurisdictionType" style="">
									<div class="ui-list-content">
										<div class="list-box-content" id="collaps-detail-box">		
											 													
										</div><!-- end of list-box-content -->
										
										<div class="ui-list-pagination">
											<div class="ui-pagination-box"> 
												<form class="form-horizontal" action="" method="get">
												<div class="paginateValue">
													<ul class="display">
														<input type="hidden" id="employee_pageOffset" name="employee_pageOffset">
														<li class="display_list" id="employee_display">Display: #  
															<select onclick="" name="employee_pagesize" class="selspan" id="employee_pagesize"> 
																<option value="4"  >10</option>
																<option value="30"  >30</option> 
																<option value="50"  >50</option>
																<option value="100"  >100</option>
															</select>
														</li>
														<li></li>
													</ul>
												</div>
											</form> 
												<div class="ui-pagination">
													<ul>	 
														
														<li class="prev_page"><span id="employee_prevPage" class="imag"><a href=""><img src="<?php echo image_path('page-prev') ?>">Prev</a></span>  
														 <span id="employee_disabledPrevPage" class="imag  displayNone"><img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span> </li>
														<li> </li>
														
														
														<li class="next_page"> <span id="employee_nextPage" class="imag"><a href=""><img src="<?php echo image_path('page-next') ?>">Next</a></span> 
														 <span id="employee_disabledNextPage" class="imag  displayNone"><img src="<?php echo image_path('page-next-disabled') ?>">Next</span></li>
														<input type="hidden" id="employee_nextpageOffset" name="employee_nextpageOffset">
														<input type="hidden" id="employee_prevpageOffset" name="employee_prevpageOffset" >
														
											
													</ul>  
												</div><!-- end of ui-pagination -->
												<div class="clearFix"></div>
											</div><!-- end of ui-pagination-box -->
										</div><!-- end of ui-list-pagination -->
									</div><!-- end of ui-list-content -->
								</div><!-- end fo jurisdictionType -->
							</div><!-- end of ui-detail-list --->
					</div>
				 </div>
			 	</fieldset>
			<div class="clearFix"></div>
		</div>
		</div>
	</div>
	<div class="clearFix"></div>
</div>


<div class="modal" id="departmentPrompts">
	
	<div class="ui-modal">
	<form>   
	
		<div class="ui-modal-header">
			<h1>House</h1>		
			<span class="ui-modal-close"> X </span>
			<div class="clearFix"></div>
		</div>
		<div class="ui-modal-filter-box">
			<div class="filterBox" style="text-align:left;margin-right:20px;">
				  dd
			</div>			 
		</div>
	<div class="ui-partial-list-box">
		 <div class="ui-partial-list">
			<div class="ui-partial-content">
				 
				<div class="clearFix"></div>	
			</div>
		
			<div class="ui-list-pagination">
					<div class="ui-pagination-box"> 
						 
						<div class="paginateValue">
							<ul class="" style="margin-bottom:2px;">
								<input type="hidden" id="location_pageOffset" name="location_pageOffset">
								<li class="display_list" id="location_display">Display: #  
									<select style="padding:2px;" onclick="" name="location_pagesize" class="selspan" id="location_pagesize"> 
										<option value="10"  >10</option>
										<option value="30"  >30</option> 
										<option value="50"  >50</option>
										<option value="100"  >100</option>
									</select>
								</li>
								<li></li>
							</ul>
						</div>
					 
						<div class="ui-pagination">
							<ul>	 
								
								<li class="prev_page"><span id="location_prevPage" class="imag"><a href=""><img src="<?php echo image_path('page-prev') ?>">Prev</a></span>  
								 <span id="location_disabledPrevPage" class="imag  displayNone"><img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span> </li>
								<li> </li>
								
								
								<li class="next_page"> <span id="location_nextPage" class="imag"><a href=""><img src="<?php echo image_path('page-next') ?>">Next</a></span> 
								 <span id="location_disabledNextPage" class="imag  displayNone"><img src="<?php echo image_path('page-next-disabled') ?>">Next</span></li>
								<input type="hidden" id="location_nextpageOffset" name="location_nextpageOffset">
								<input type="hidden" id="location_prevpageOffset" name="location_prevpageOffset" >
								
								
							</ul>  
						</div><!-- end of ui-pagination -->
						<div class="clearFix"></div>
					</div><!-- end of ui-pagination-box -->
				</div><!-- end of ui-list-pagination -->
			</div>
		</div>
		
		<div class="ui-modal-footer-box">
			<div class="ui-modal-footer">
				<ul>
					<li><button class="ui-modal-button" type="submit" style=""><?php echo ('OK') ?> </button></li>
					<li><button class="ui-modal-button-cancel" type="submit" style=""><?php echo ('Cancel') ?> </button></li>
				</ul>
				<div class="clearFix"></div>
			</div>		
		</div>
	</form>
</div>
<div class="clearFix"></div>
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
		var arrOwner = input.split("$"); 
		
		document.getElementById("empDepartmentID").value = arrOwner[0];
		document.getElementById("empDeparment").value = arrOwner[1]; 
		//$('#owner_name_validate').addClass('displayNone');
		//$('#ownerName').removeClass('validation_error_border'); 

		return e.preventDefault();
	});

</script>
