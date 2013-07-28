

<table class="autoWidth" id="detailTable" >
	<tbody style="width:40%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:190px;" id="catName" name="" >			
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('Category name is required!') ?></span>		
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:190px;" id="pDescription" name="pDescription" ></textarea>		
				<br><span id="participant_firstname_validate" class="error_validation displayNone"><?php echo __('First name is required!') ?></span>		
			</td> 
		</tr> 
	</tbody>     
</table> 

<script>
	
	$('#empBirthDate').datepicker({
	
		showOn: "both",
		buttonImageOnly: true,
		buttonImage: '<?php echo image_path('calander_small') ?>',
		buttonText: "Calendar"
	
	});
	
	$(document).ready(function(){
		
		$('#pName').keyup(function(key){
			
			$('#name_validation').addClass('displayNone');
			$('#pName').removeClass('validation_error_border');
			return false;
			
		});
		
	});

</script>

