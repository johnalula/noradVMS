

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
	
		<tr>
			<td class="rightSide"><?php echo __('Employee') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:180px;" id="employee_name" name="employee_name" >		
				<input type="hidden" style="width:120px;" id="employee_id" name="employee_id" >	
				<span class="issue_for" style="">
					<a href='#' class='employeeModal' rel='#employeePrompts'>
						<button class="ui-button"> ... </button>
					</a> 
				</span> 		
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('Employee is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('License Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:120px;" id="license_type" name="license_type" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Work Experience') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:120px;" id="work_experience" name="work_experience" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:190px;" rows=1 id="description" name="description" ></textarea>		
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
				<button style="margin-left:5px;" onclick="Javascript:createDriver();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>
