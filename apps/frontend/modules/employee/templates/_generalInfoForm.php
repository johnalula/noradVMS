<?php 
	$statuss = ParticipantCore::$ALL_STATUSES;
	$types = EmployeeTable::$ALL_EMPLOYMENT_TYPES;
	
?>

<table>
	<tr>
		<td class="rightSide">
			<?php echo __('ID No') ?>:<span class="ui-mandatory">*</span>
		</td>
		<td>
			<input type="text" id="id_no" style="width:100px;">
		</td>
		<td class="rightSide">
			<?php echo __('Project No') ?>:
		</td>
		<td>
			<input type="text" id="project_no" style="width:100px;">
		</td>
	</tr>
	<tr>
		<td class="rightSide">
			<?php echo __('Vat No') ?>:
		</td>
		<td>
			<input type="text" id="vat_no" style="width:100px;">
		</td>
		<td class="rightSide">
			<?php echo __('Status') ?>:
		</td>
		<td>
			<select style="width:109px;margin-left:4px;"    id="status" name="status"> 
					<?php foreach($statuss as $key => $status): ?>								 
						<option value="<?php echo  $key ?>" <?php echo ParticipantCore::$ACTIVE == $key ? 'selected' : '';  ?> >
							<?php echo $status ?>
						</option>								 
					<?php endforeach; ?>
				</select>
		</td>
	</tr>
	<tr>
		<td class="rightSide">
			<?php echo __('Job Title') ?>:
		</td>
		<td colspan=2>
			<input type="text" id="job_title" style="width:130px;">
		</td>
		 
	</tr>
	<tr>
		<td class="rightSide">
			<?php echo __('Employeement') ?>:
		</td>
		<td colspan=2>
			<select style="width:139px;margin-left:4px;"    id="employment_type" name="employment_type"> 
					<?php foreach($types as $key => $type): ?>								 
						<option value="<?php echo  $key ?>" <?php echo  EmployeeTable::$ADMINISTRATIVE_STAFF == $key ? 'selected' : '';  ?> >
							<?php echo $type ?>
						</option>								 
					<?php endforeach; ?>
				</select>
		</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td></td>
	</tr>
	 


</table>

