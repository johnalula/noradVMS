<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

<?php //$flags = UserGroupTable::processCreate('Finance', 'finance'); 

	//echo $flags ? 'true' : 'flase' ;
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
	
	var form = $('#taskForm');
	
	form.submit(function(){
		
		var refnoValue = document.getElementById('reference_no').value
		var dateValue = document.getElementById('date').value
		var descValue = document.getElementById('description').value
		
		if( dateValue == '')
		{
			$('#date_validation').removeClass('displayNone');
			$('#date').addClass('validation_error_border');
			
			return false;
		}
		
		else			
			return true;
			
			
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





