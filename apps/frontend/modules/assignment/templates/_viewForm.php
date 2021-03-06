
<input style="width:120px;" type="hidden" id="taskID" name="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">		
<input style="width:120px;" type="hidden" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">		

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;">
		<tr>
			<td class="rightSide"><?php echo __('Owner') ?>:<span class="ui-mandatory">*</span></td>
			<td >				
				<input type="text" disabled id="owner_name" style="width:160px;" value="<?php echo $taskObj->ownerAlias ? $taskObj->ownerAlias : $taskObj->ownerName ?>">
				<input type="hidden" disabled id="ownerID" style="width:160px;" value="<?php echo $taskObj->ownerID ?>"> 
				<span class="issue_for" style="">
						<a href='#' class='ownerModal' rel='#ownerPrompts'>
				<button class="ui-button"> ... </button></a> </span> 	
				<br><span id="owner_validation" class="error_validation displayNone"><?php echo __('Owner is required!') ?></span>	
			</td>	
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Reference No') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:120px;" id="reference_no" name="reference_no" value="<?php echo $taskObj->referenceNo ?>">		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<!--<tr>
			<td class="rightSide"><?php echo __('Registration Mode') ?>:</td>
			<td>
				<select id="mode" style="width:128px;" >
					<option value="1"><?php echo 'Project' ?></option>
					<option value="2"><?php echo 'Donated' ?></option>
					<option value="3"><?php echo 'Purchased' ?></option>
				</select>
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('Name is required!') ?></span>		
			</td>		
		</tr>		 -->
		<tr>
			<td class="rightSide"><?php echo __('Date') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:120px;" id="date" name="" value="<?php echo $taskObj->startDate ?>">		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:190px;" id="description" rows=1 name="" ><?php echo $taskObj->description ?></textarea>		
			</td>
		</tr>
		<tr>
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		<tr>
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" onclick="Javascript:updateTask()" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><?php echo __('Update') ?></button></td> 
		</tr> 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>

