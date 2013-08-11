<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="<?php echo url_for('general_setting/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">General Setting</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
		<span class="ui-page-navigator">
		<ul>
			<li><a href="<?php echo url_for('payment/index') ?>"><img src="<?php echo image_path('new_icons/back') ?>">Back to list</a></li>
		</ul>
		</span>
		<div class="clearFix"></div>
	</div>
</div>

<?php 
	//$flag = PaymentSettingTable::processUpdate (1, 'd56d78ed207154c54cbb326142f8eada', 3,1, 'asdfasdf afsdfasdfds' );
?>
<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
	<div class="ui-error-box btn-danger">
		<div class="ui-error-list">
			<?php echo 'There was an error, either duplicated or null entry data!' ?>
			<span class="ui-error-close">X</span>
		</div>			
	</div> 
</div>

<div id="ui-display-success-cont" class="ui-success-data displayNone"> 
	<div class="ui-success-box btn-danger">
		<div class="ui-success-list">
			<?php echo 'Payment mode successfuly updated!' ?>
			<span class="ui-success-close">X</span>
		</div>			
	</div> 
</div>
 

<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont">
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('new_icons/registration_large') ?>"><?php echo __('Payment Mode Setting')  ?></h1>	
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
							<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Edit Payment Mode')  ?></legend>
						</fieldset><!-- end of ui-content-fieldset -->
						
						<div class="ui-main-form-content ui-collapsible-list-box">
								<table>
									<tr>
										<td rowspan=2>
											<fieldset  style="">
												<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
												<div class="ui-main-form" >		
													 <?php include_partial('viewForm', array('modeObj' => $modeObj)) ?>													
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

	
	
	function updatePaymentMode()
	{
		var modeID = document.getElementById('modeID').value
		var tokenID = document.getElementById('tokenID').value
		var mode = document.getElementById('payment_mode').value
		var cost = document.getElementById('cost_value').value
		var currency = document.getElementById('currency').value
		var desc = document.getElementById('description').value
		
		if( cost == '')
		{
			$('#cost_validation').removeClass('displayNone');
			$('#cost_value').addClass('validation_error_border');
			
			return false;
		}
		 			
			$.ajax({
				type: "GET",
				data: 'mode_id='+modeID+'&token_id='+tokenID+'&payment_mode_id='+mode+'&cost_value='+cost+'&currency_id='+currency+'&description='+desc,
				url: '<?php echo url_for('payment/updateMode')?>', 
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
	
	function deletePaymentMode(catID)
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





