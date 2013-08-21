

<table class="autoWidth" id="detailTable" >
	<tbody style="width:40%;">
		<tr>
			<td class="rightSide"><?php echo __('Department') ?>:<span class="ui-mandatory">*</span></td>
			<td >				
				<input type="text" disabled id="department_name" style="width:160px;" >
				<input type="hidden" disabled id="departmentID" style="width:160px;" >
				<span class="issue_for" style="">
						<a href='#' class='departmentModal' rel='#departmentPrompts'>
				<button class="ui-button"> ... </button></a> </span> 	
				<br><span id="department_validation" class="error_validation displayNone"><?php echo __('Department is required!') ?></span>	
			</td>	
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Title') ?>:</td>
			<td >				
				<select id="title" style="width:80px;">
				 
					<option value="<?php echo $title->id ?>" >
					<?php echo 'Mr.' ?></option>
					
					<option value="<?php echo $title->id ?>" >
					<?php echo 'Mrs.' ?></option>
				 
				</select>	
			</td>	
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:160px;" id="name" name="" >			
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('First name is required!') ?></span>		
			</td>		
		</tr>		
		<tr>
			<td class="rightSide"><?php echo __('Father Name') ?>:</td>
			<td>
				<input type="text" style="width:160px;" id="father_name" name="" >			
			</td>
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Grand Father Name') ?>:</td>
			<td>
				<input type="text" style="width:160px;" id="grand_father_name" name="grand_father_name" >			
			</td>
		</tr>
		 
		<tr>
			<td class="rightSide"><?php echo __('Birth Date') ?>:</td>
			<td>
				<input type="text" style="width:120px;" id="birth_date" name="" >			
			</td>
		</tr>
		 
		<tr>
			<td class="rightSide"><?php echo __('Gender') ?>:</td>
			<td>
				<select id="gender" style="width:105px;">
					<option value="1" ><?php echo 'Male' ?></option>
					<option value="2" ><?php echo 'Female' ?></option>
				</select>				
			</td>
		</tr> 
		<tr>
		<td class="rightSide"><?php echo __('Description') ?>:</td>
		<td>
				<textarea type="text" rows=1 style="width:170px;" id="description" name="description" ></textarea>			
				<br><span id="participant_firstname_validate" class="error_validation displayNone"><?php echo __('First name is required!') ?></span>		
			</td> 
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;margin-top:2px;" onclick="Javascript:createEmployee();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
	</tbody>     
</table> 

<script>
	
	$('#birth_date').datepicker({
	
		showOn: "both",
		buttonImageOnly: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>' 
	
	});
	
	$(document).ready(function(){
		
		$('#name').keyup(function(key){
			
			$('#name_validation').addClass('displayNone');
			$('#name').removeClass('validation_error_border');
			return false;
			
		});
		
	});

</script>
