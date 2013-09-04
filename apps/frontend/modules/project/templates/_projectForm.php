<?php
	$statuss = ParticipantCore::$ALL_STATUSES;
?>

<table>
	<tr>
		<td class="rightSide">
			<?php echo __('Project No') ?>:
		</td>
		<td>
			<input type="text" id="project_no" style="width:100px;">
		</td>
		<td class="rightSide"><?php echo __('Status') ?>:</td>
		<td >				
			<select id="project_status" style="width:100px;">
				<?php foreach( $statuss as $key => $status): ?>
				<option value="<?php echo $key ?>" >
					<?php echo $status ?>
				</option>
				<?php endforeach; ?>
			</select>	
		</td>	
	</tr>
	 
</table>
