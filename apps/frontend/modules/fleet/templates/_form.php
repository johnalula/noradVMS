<?php


?>

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Customer') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:200px;" id="customer_name" name="customer_name" >	
				<input type="hidden" style="width:140px;" id="customer_id" name="customer_id" >	
				<span class="issue_for" style="">
					<a href='#' class='candidateCustomerModal' rel='#candidateCustomerPrompts'>
						<button class="ui-button"> ... </button>
					</a> 
				</span> 		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Customer is required!') ?></span>	
			</td> 
		</tr> 
		 
		<tr>
			<td class="rightSide"><?php echo __('Reference No') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:120px;" id="reference_no" name="reference_no" >		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Date') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:120px;" id="date" name="date" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:200px;" rows=1 id="description" name="description" ></textarea>		
			</td>
		</tr>
		<tr>
			<td style="padding:1px;"></td> 
			<td style="padding:1px;"></td> 
		</tr> 
		  
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
		
		 
		 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>

