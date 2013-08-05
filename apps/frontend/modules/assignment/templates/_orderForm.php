


<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		  
		<tr>
			<td class="rightSide"><?php echo __('Driver Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:200px;" disabled id="driver_name" name="driver_name" >		
				<input type="hidden" style="width:120px;" id="driver_id" name="driver_id" >		
				<input type="hidden" style="width:120px;" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">		
				<input type="hidden" style="width:120px;" id="taskID" name="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">		
				<input type="hidden" style="width:120px;" id="classID" name="classID" >		
				<span class="issue_for" style="">
					<a href='#' class='candidateDriverModal' rel='#candidateDriverPrompts'>
						<button class="ui-button"> ... </button>
					</a> 
				</span> 	
				<br><span id="driver_name_validation" class="error_validation displayNone"><?php echo __('Driver name is required!') ?></span>	 
			
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Vehicle') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:200px;" disabled id="vehicle_name" name="vehicle_name" >		
				<input type="hidden" style="width:120px;" id="vehicle_id" name="vehicle_id" >		
				<input type="hidden" style="width:120px;" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">		
				<input type="hidden" style="width:120px;" id="taskID" name="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">		
				<span class="issue_for" style="">
					<a href='#' class='candidateVehicleModal' rel='#candidateVehiclePrompts'>
						<button class="ui-button"> ... </button>
					</a> 
				</span> 	
				<br><span id="vehicle_name_validation" class="error_validation displayNone"><?php echo __('Vehicle is required!') ?></span>	 
			
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:200px;" rows=1 id="description" name="description" ></textarea>		
			</td>
		</tr>
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" onclick="Javascript:createTaskOrder();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
		
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>
