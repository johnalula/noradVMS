<?php
	$types = array(1 => 'Refundable', 2 => 'Non-Refundable', )

?>


<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		  
		<tr>
			<td class="rightSide"><?php echo __('Vehicle') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:230px;" disabled id="vehicle_name" name="vehicle_name" >		
				<input type="hidden" style="width:120px;" id="vehicle_id" name="vehicle_id" >		
				<input type="hidden" style="width:120px;" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">		
				<input type="hidden" style="width:120px;" id="taskID" name="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">		
				<input type="hidden" style="width:120px;" id="classID" name="classID" >		
				<input type="hidden" style="width:120px;" id="orderID" name="orderID" >		
				<span class="issue_for" style="">
					<a href='#' class='candidateVehicleModal' rel='#candidateVehiclePrompts'>
						<button class="ui-button"> ... </button>
					</a> 
				</span> 	
				<br><span id="vehicle_validation" class="error_validation displayNone"><?php echo __('Vehicle is required!') ?></span>	 
			
		</tr> 
		
		<tr>
			<td class="rightSide"><?php echo __('Retrun Mileage') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:230px;"  id="return_mileage" name="return_mileage" >
				<br><span id="quantity_validation" class="error_validation displayNone"><?php echo __('Mileage is required!') ?></span>	
			</td> 
		</tr> 
		
		<tr>
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		 
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" onclick="Javascript:returnFleetOrder();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
	</tbody>     
</table> 
 
<script>
	
	$('#returnDate').datepicker();


</script>
