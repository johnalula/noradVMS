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
	<?php 
		 
	
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
					<h1><img src="<?php echo image_path('new_icons/oil') ?>"><?php echo __('Task Order')  ?></h1>		
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
								<legend><img src="<?php echo image_path('icons/add_small') ?>" ><?php echo ('New Task Order')  ?></legend>
							</fieldset><!-- end of ui-content-fieldset -->
							
							<div class="ui-main-form-content ui-collapsible-list-box">
								<table>
									<tr>
										<td >
											<fieldset  style="">
												<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
												<div class="ui-main-form" >		
													 <?php include_partial('return_orderForm', array('task' => $task)) ?>
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

	<div class="ui-navigation-cont">
		<div class="ui-navigation-box">
			<div class="ui-navigation-list">
				<ul class="ui-left-button">
					<li><a href="<?php echo url_for('fleet/view?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-back-button"><img src="<?php echo image_path('new_icons/back') ?>">Back</button></a></li>
				</ul>
				</ul>
				<?php if($task->canProceed): ?>
				<ul class="ui-right-button">
					<li><a href="<?php echo url_for('fleet/return_process?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Next</button></a></li>
				</ul>
				<?php endif; ?>
				<div class="clearFix"></div>
			</div>
		
		</div>
	</div>
</div>

 


<script>
	
	$(window).load(function()
	{		
		$('#vehicle_name').focus();		
		return false;		
	});
	 
	 
	 var triggerCandidate = $(".candidateVehicleModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#candidateVehiclePrompts form").submit(function(e) {

		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked");

		triggerCandidate.eq(0).overlay().close();

		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$");
		var vehicleCode = listArr[2]+' ( '+listArr[1]+' )';
			
		document.getElementById("vehicle_id").value = listArr[0];
		document.getElementById("vehicle_name").value = vehicleCode;
		document.getElementById("orderID").value = listArr[3];
		
		$('#vehicle_name_validateion').addClass('displayNone');
		$('#vehicle_name').removeClass('validation_error_border'); 

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

	
	
	function modifyFleetReturnTask( )
	{
		var return_date = document.getElementById('returnDate').value
		var return_time = document.getElementById('return_time').value
		var taskID = document.getElementById('taskID').value
		var tokenID = document.getElementById('tokenID').value
		
		/*if( catID == '' && quantity == '' )
		{
			$('#name_validation').removeClass('displayNone');
			$('#category_name').addClass('validation_error_border');
			$('#quantity_validation').removeClass('displayNone');
			$('#quantity').addClass('validation_error_border');
			
			return false;
		}
		
		if( catID == '')
		{
			$('#name_validation').removeClass('displayNone');
			$('#category_name').addClass('validation_error_border');
			$('#quantity_validation').addClass('displayNone');
			$('#quantity').removeClass('validation_error_border');
			
			return false;
		}
		*/
		 
			$.ajax({
				type: "GET",
				data: 'task_id='+taskID+'&token_id='+tokenID+'&return_date='+return_date+'&return_time='+return_time,
				url: '<?php echo url_for('fleet/modifyFleetReturn')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
				async: false
				});
			
			//var data ='task_id='+taskID+'&token_id='+tokenID+'&return_date='+return_date+'&return_time='+return_time;
			//alert(data);
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
			if(offset == '')
				offset = 0;
			categoryPagination(offset);
			
			return false;
				
		});
		
		$('#pagiantion_lastPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			
			offset = parseInt(totalData)-parseInt(limit);
			if(offset < 0)
				offset = 0;
				
			categoryPagination(offset);
			
			return false;
				
		});
		
		$('#pagiantion_nextPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			var totalData = document.getElementById('totalData').value;
			if(offset == '')
				offset = 0;
				
			offset = parseInt(offset) + parseInt(limit);
			lastOffset = parseInt(totalData)-parseInt(limit);
			
			if(offset >= totalData)
				offset = lastOffset;
			
			document.getElementById('pagiantion_pageOffset').value = offset;
	
			categoryPagination(offset);
			 
			return false;
				
		});
		
		$('#pagiantion_prevPage').click(function()
		{
			var offset = document.getElementById('pagiantion_pageOffset').value;
			var limit = document.getElementById('pagiantion_pagesize').value;
			
			offset -= parseInt(limit);
			
			if(offset < 0)
				offset = 0;
		
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





