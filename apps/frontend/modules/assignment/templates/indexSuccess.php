<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

<?php //$flags = UserGroupTable::processCreate('Finance', 'finance'); 

	//$flag = AssignmentTaskTable::processCreate (  '3/8/2013', $description, '12345', 10, 1 ) ;
?>
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
				<h1><img src="<?php echo image_path('new_icons/registration_large') ?>"><?php echo __('Assignment')  ?></h1>	
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
							<legend><img src="<?php echo image_path('icons/add_small') ?>" ><?php echo ('New Assignment')  ?></legend>
						</fieldset><!-- end of ui-content-fieldset -->
						
						<div class="ui-main-form-content ui-collapsible-list-box">
							<form action="<?php echo url_for('assignment/createTask') ?>" id="taskForm">
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
							</form>
						</div><!-- end of ui-main-form-content -->
					</div><!-- end of ui-main-content -->
				</div><!-- end of ui-main-content-cont -->
			</div><!-- end of ui-main-list -->
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->

<!-- list container -->
 
<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont" >
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Assignments')  ?></h1>	
				<div class="ui-list-content-minimize opened" id="ui-list-collaps-list-box" style="margin-top:0px;float:right;">	
					<span id="ui-list-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
					<span id="ui-list-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
				</div>				
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-content-container-box">
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
												<li><input type="text"></li>
												<li><select><option>name</option><option>father name</option></select></li> 
											</ul>  
								</div>
								<div class="clearFix"></div>
							</div>
							<div class="ui-content-lists">
								<?php include_partial('list', array('tasks' => $tasks )) ?>
							</div><!-- end of ui-content-lists -->
						</div><!-- end of ui-content-list-box -->
					</div><!-- end of ui-main-content-cont --> 
				</div><!-- end of ui-main-content-list --> 
				
				<div class="ui-list-footer">				
					  &nbsp; 
				</div><!-- end of ui-list-header -->
				
				<div class="ui-list-pagination-cont">
					&nbsp;
				</div><!-- ui-list-pagination-cont -->
			</div><!-- end of ui-content-container-box -->
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->


<div class="modal" id="ownerPrompts">
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
								<?php include_partial('candidateOwnerFilter', array()) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('candidateOwnerList', array('parents' => $parents )) ?>
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
	
	 var triggerOwner = $(".ownerModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#ownerPrompts form").submit(function(e) {

		if($("input[name=selectOwner]:checked", this).length == 0)
			$("input[id=selectOwner-1]").attr("checked", "checked");

		triggerOwner.eq(0).overlay().close();

		var input = $("input[name=selectOwner]:checked", this).val();
		var listArr = input.split("$");

		document.getElementById("owner_id").value = listArr[0];
		document.getElementById("owner_name").value = listArr[1]; 
		
		$('#owner_name_validation').addClass('displayNone');
		$('#owner_name').removeClass('validation_error_border'); 

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
	
	// to create new fuel type
	
	var form = $('#taskForm');
	
	form.submit(function(){
		
		var owner_id = document.getElementById('owner_id').value;
		var refnoValue = document.getElementById('reference_no').value;
		var dateValue = document.getElementById('date').value;
		var descValue = document.getElementById('description').value;
		
		if( owner_id == '' && dateValue == '')
		{
			$('#owner_name_validation').removeClass('displayNone');
			$('#owner_name').addClass('validation_error_border'); 
			
			$('#date_validation').removeClass('displayNone');
			$('#date').addClass('validation_error_border');
			
			return false;
		}
		if( owner_id == '')
		{
			$('#owner_name_validation').removeClass('displayNone');
			$('#owner_name').addClass('validation_error_border'); 
		
			$('#date_validation').addClass('displayNone');
			$('#date').removeClass('validation_error_border');
			
			return false;
		}
		if( dateValue == '')
		{
			$('#owner_name_validation').addClass('displayNone');
			$('#owner_name').removeClass('validation_error_border'); 
		
			$('#date_validation').removeClass('displayNone');
			$('#date').addClass('validation_error_border');
			
			return false;
		}
		
		else			
			return true;
			
			//var data = 'owner_id='+owner_id+'reference_no='+refnoValue+'date='+dateValue+'desc='+descValue;
			//alert(data);
			
			return false;				
	});
	
	
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
	
	$(document).ready(function(){
		
		$('#name').keyup(function(key){
			
			$('#name_validation').addClass('displayNone');
			$('#name').removeClass('validation_error_border');
			
			return false;
		});
		
		 
		
	});

</script>





