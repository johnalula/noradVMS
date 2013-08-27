<div class="ui-container-box">
	<div class="ui-main-menu-cont">
		<div class="ui-main-menu-actions">
			<ul>
				<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
				<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
			</ul>
		
		<span class="ui-page-navigator">
			<ul>
				<li><a href="<?php echo url_for('fleet/index') ?>"><img src="<?php echo image_path('new_icons/back') ?>">Back to list</a></li>
			</ul>
		</span>
		<div class="clearFix"></div>
		</div>
	</div>

	<?php //$flag = RegistrationTaskTable::processCreateTaskParticipant ( 8, '04af0a0a982b3eebed63de6fa33f0320', 1, 8, 'adf asfas adfasdfa'); 

		//echo $flags ? 'true' : 'flase' ;
		//$task = FleetServiceTaskTable::processObject (3, '7cce503e52b19443173741966b71c2c4' );
		//echo count($task);
	?>
	<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
		<div class="ui-error-box btn-danger">
			<div class="ui-error-list">
				<?php echo 'There was an error!' ?>
				<span class="ui-error-close">X</span>
			</div>			
		</div> 
	</div>

	<?php if ($sf_user->getFlash('saved.success', 0) != 0):?>
	<div id="ui-display-success-cont" class="ui-success-data"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Task successfuly created!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>
	<?php endif; ?>

	<div id="ui-display-delete-cont" class="ui-success-data displayNone"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Successfuly deleted!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>
	<input type="hidden" id="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">
	<input type="hidden" id="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">

	<div class="ui-container">
		<div class="ui-list-cont">		
			<div class="ui-main-list-cont">
				<div class="ui-list-header">				
					<h1><img src="<?php echo image_path('new_icons/registration_large') ?>"><?php echo __('Fleet Registration')  ?></h1>	
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
								<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Edit Registration')  ?></legend>
							</fieldset><!-- end of ui-content-fieldset -->
							
							<div class="ui-main-form-content ui-collapsible-list-box">
								<table>
									<tr>
										<td rowspan=2>
											<fieldset  style="">
												<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
												<div class="ui-main-form" >		
													 <?php include_partial('viewForm', array('task' => $task)) ?>													
												</div><!-- end of ui-content-form -->
											</fieldset>
										</td>																				 
										<td rowspan=2>
											<fieldset  style="">
												<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
												<div class="ui-main-form" >		
													 <?php include_partial('viewServiceForm', array('task' => $task)) ?>													
												</div><!-- end of ui-content-form -->
											</fieldset>
										</td>																				 
									</tr>									 
								</table>
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
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Attachments & Participants')  ?></h1>	
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
								<div class="ui-tab-main-cont">
								<div class="ui-tab-container-box" style="">
									<div id="tabs" class="ui-tab-detail-list-box">
											<ul class="ui-tab-list" > 
												<li><a href="#ui-tab-one" class="active" data-toggle="tab"><?php echo ('Attachment') ?></a></li>
												<li ><a href="#ui-tab-two" data-toggle="tab"><?php echo ('Participant') ?></a></li> 
												 
											</ul>
											<div class="clearFix"></div>
											
										<div class="ui-detail-tab-list" >
											<div id="ui-tab-one" class="ui-tab" style="">
												<div class="ui-tab-content-frame">
													 <div class="ui-tab-content-container-box" style="border:0px;">
													<div class="ui-main-content-list" style="border:0px;"> 
														<div class="ui-main-content-cont"  style="border:0px;">
															<div class="ui-content-list-box"  style="border:0px;">
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
																	<?php include_partial('attachmentForm', array('attachments' => $attachments )) ?>
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
													 </div>
											</div>
										<div id="ui-tab-two" class="ui-tab" style="">
											<div class="ui-tab-content-frame">
												 <div class="ui-tab-content-container-box" style="border:0px;">
												<div class="ui-main-content-list" style="border:0px;"> 
													<div class="ui-main-content-cont"  style="border:0px;">
														<div class="ui-content-list-box"  style="border:0px;">
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
																<?php include_partial('participantForm', array('participants' => $participants )) ?>
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
												 </div>
										</div>
									
									 </div>
									<div class="clearFix"></div>
									</div>
								</div>
								</div>
								
							</div><!-- end of ui-content-list-box -->
						</div><!-- end of ui-main-content-cont --> 
					</div><!-- end of ui-main-content-list --> 
					 
				</div><!-- end of ui-content-container-box -->
			</div> <!-- end of ui-main-list-cont -->
		</div>  <!-- end of ui-list-cont -->
	</div> <!-- end of ui-container -->

	<div class="ui-navigation-cont">
		<div class="ui-navigation-box">
			<div class="ui-navigation-list">
				<ul class="ui-left-button">
					<li><a href="<?php echo url_for('fleet/index') ?>"><button class="ui-back-button"><img src="<?php echo image_path('new_icons/back') ?>">Back</button></a></li>
				</ul>
				<ul class="ui-right-button">
					<?php if(!$taskObj->canReturn): ?>
					<li><a href="<?php echo url_for('fleet/return_order?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Next</button></a></li>
					<?php else: ?>
					<li><a href="<?php echo url_for('fleet/order?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Next</button></a></li>
					<?php endif; ?>
				</ul>
				<div class="clearFix"></div>
			</div>
		
		</div>
	</div>
</div>

<div class="modal" id="candidateCustomerPrompts">
	<div class="ui-modal">
	<form>   
		<div class="ui-modal-header">
			<h1>Eployee Date</h1>
		</div>
		<div class="partialFilterBox">
			<div class="filterBox" style="text-align:left;margin-right:20px;">
				 <?php include_partial('customerFilter', array()); ?>	
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
			 <?php include_partial('customerList', array('customers' => $customers)); ?>	
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
	 var triggerCandidate = $(".candidateCustomerModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#candidateCustomerPrompts form").submit(function(e) {

		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked");

		triggerCandidate.eq(0).overlay().close();

		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$");

		document.getElementById("customer_id").value = listArr[0];
		document.getElementById("customer_name").value = listArr[1];
		
		$('#customer_name_validateion').addClass('displayNone');
		$('#customer_name').removeClass('validation_error_border'); 

		return e.preventDefault();
	});
	 
	function reselectCustomer()
	{
		var custID = document.getElementById('customer_id').value
		//var limit = document.getElementById('pagiantion_pagesize').value
		//var keyword = document.getElementById('keyword').value
		//var group_id = document.getElementById('offset').value
		//var class_id = document.getElementById('category_class_id').value
	
		var result = $.ajax({
				type: "GET",
				data: 'customer_id='+custID,
				url: '<?php echo url_for('fleet/selectCustomer')?>',
				success: function(html) { $('#candidateList').html(html) }, 
				async: false
				}).responseText;
		
		return false;	
	}
	
	$(document).ready(function(){
		$('candidateCustomerModal').click(function(){
			
			reselectCustomer();
			return false;
		});		
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
	
	function updateTask ()
	{
		var taskID = document.getElementById('taskID').value;
		var tokenID = document.getElementById('tokenID').value;
		var dateValue = document.getElementById('date').value;
		var refnoValue = document.getElementById('reference_no').value;
		var descValue = document.getElementById('description').value;
		
		if( dateValue == '')
		{
			$('#date_validation').removeClass('displayNone');
			$('#date').addClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'task_id='+taskID+'&token_id='+tokenID+'&reference_no='+refnoValue+'&date='+dateValue+'&description='+descValue,
				url: '<?php echo url_for('registration/updateTask')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
			
				async: false
				});
			
			
			//var data = 'task_id='+taskID+'&token_id='+tokenID+'&reference_no='+refnoValue+'&date='+dateValue+'&description='+descValue;
			//alert(data);
		
		return false;
		
	}
	
//***************************************************

	function createTaskParticipant()
	{
		var partID = document.getElementById('participant_id').value
		var role = document.getElementById('particiapnt_role').value
		var desc = document.getElementById('description').value
		var taskID = document.getElementById('taskID').value;
		var tokenID = document.getElementById('tokenID').value;
		
		/*if( ref_no == '')
		{
			$('#ref_no_validation').removeClass('displayNone');
			$('#ref_no').addClass('validation_error_border');
			
			return false;
		}*/
		 			
			$.ajax({
				type: "GET",
				data: 'taskID='+taskID+'&tokenID='+tokenID+'&participant_id='+partID+'&participant_role='+role+'&description='+desc,
				url: '<?php echo url_for('registration/createTaskParticipant')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
			
				async: false
				});  

		// alert('hello');
		return false;
		
	}
	
	function createTaskAttachment()
	{
		var certificate_type = document.getElementById('certificate_type').value
		var ref_no = document.getElementById('ref_no').value
		var no_pages = document.getElementById('no_of_pages').value
		var file_no = document.getElementById('file_no').value
		var desc = document.getElementById('description').value
		var taskID = document.getElementById('taskID').value;
		var tokenID = document.getElementById('tokenID').value;
		
		if( ref_no == '')
		{
			$('#ref_no_validation').removeClass('displayNone');
			$('#ref_no').addClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'taskID='+taskID+'&tokenID='+tokenID+'&certificate_type='+certificate_type+'&reference_no='+ref_no+'&num_pages='+no_pages+'&folder_stored='+file_no+'&description='+desc,
				url: '<?php echo url_for('registration/createTaskAttachment')?>', 
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
			
			$('#ui-display-success-cont').hide();
			$('#ui-display-success-cont').addClass('displayNone');
			//alert('dd');
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






