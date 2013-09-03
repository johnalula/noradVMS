<?php

?>

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Destination') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:210px;background:#f9f9f9;" disabled id="destination" name="destination" value="<?php echo $task->destination ?>">
				<input type="hidden" style="width:120px;" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">		
				<input type="hidden" style="width:120px;" id="taskID" name="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Return Date') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:84px;margin-right:8px;" id="returnDate" name="returnDate" value="<?php echo $task->returnDate ?>">		
				<?php echo __('Time') ?>:<span class="ui-mandatory"></span>
				<input style="width:64px;" id="return_time" name="return_time"  value="<?php echo $task->returnTime ?>">		
				<br><span id="quantity_validation" class="error_validation displayNone"><?php echo __('Quantity is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" onclick="Javascript:modifyFleetReturnTask();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
		
 
	</tbody>     
</table> 
 

<script>
	
	$('#returnDate').datepicker();


</script>



