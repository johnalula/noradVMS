

<table class="autoWidth" id="detailTable" >
	<tbody style="width:40%;">
		<tr>
			<td class="rightSide"><?php echo __('Department') ?>:<span class="ui-mandatory">*</span></td>
			<td >				
				<input type="text" disabled id="empDepartment" style="width:160px;">
				<input type="hidden" disabled id="empDepartmentID" style="width:160px;">
				<span class="issue_for" style="">
						<a href='#' class='departmentModal' rel='#departmentPrompts'>
				<button class="ui-button"> ... </button></a> </span> 	
				<br><span id="department_validation" class="error_validation displayNone"><?php echo __('Department is required!') ?></span>	
			</td>	
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Title') ?>:</td>
			<td >				
				<select id="empTitle" style="width:80px;">
				 
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
				<input type="text" style="width:160px;" id="empName" name="" >			
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('First name is required!') ?></span>		
			</td>		
		</tr>		
		<tr>
			<td class="rightSide"><?php echo __('Father Name') ?>:</td>
			<td>
				<input type="text" style="width:160px;" id="empFatherName" name="" >			
			</td>
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Grand Father Name') ?>:</td>
			<td>
				<input type="text" style="width:160px;" id="empGrandFatherName" name="pGrandFatherName" >			
			</td>
		</tr>
		 
		<tr>
			<td class="rightSide"><?php echo __('Birth Date') ?>:</td>
			<td>
				<input type="text" style="width:120px;" id="empBirthDate" name="" >			
			</td>
		</tr>
		 
		<tr>
			<td class="rightSide"><?php echo __('Gender') ?>:</td>
			<td>
				<select id="pGender" style="width:105px;">
					<option value="1" ><?php echo 'Male' ?></option>
					<option value="2" ><?php echo 'Female' ?></option>
				</select>				
			</td>
		</tr> 
		<tr>
		<td class="rightSide"><?php echo __('Description') ?>:</td>
		<td>
				<input type="text" style="width:170px;" id="pDescription" name="pDescription" >			
				<br><span id="participant_firstname_validate" class="error_validation displayNone"><?php echo __('First name is required!') ?></span>		
			</td> 
		</tr>
		
	</tbody>     
</table> 

<script>
	
	$('#empBirthDate').datepicker();
	
	$(document).ready(function(){
		
		$('#pName').keyup(function(key){
			
			$('#name_validation').addClass('displayNone');
			$('#pName').removeClass('validation_error_border');
			return false;
			
		});
		
	});

</script>
