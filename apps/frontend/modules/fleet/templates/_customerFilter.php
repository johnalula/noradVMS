<?php 

	//$groups = CategoryTable::processGroupSelection();
	$types = ParticipantTable::processParticipantTypeSelection(); 
	$statuss = ParticipantTable::processParticipantStatusSelection(); 
?> 
<ul>
	<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
	<li>
		<select style="width:100px;margin-left:2px;"    id="parent_type" name="parent_type">
			<option>&nbsp;</option>
			<?php foreach($types as $key => $type): ?>								 
				<option value="<?php echo  $type ?>" >
					<?php echo ParticipantCore::fetchParticipantValue($type) ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li> 
	<li>
		<select style="width:100px;margin-left:2px;"    id="parent_status" name="parent_status">
			<option>&nbsp;</option>
			<?php foreach($statuss as $key => $status): ?>								 
				<option value="<?php echo  $status ?>" >
					<?php echo ParticipantCore::fetchParticipantStatusValue($status) ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li> 
	<li>
		<input style="width:120px;" type="text" id="parent_keyword">
	</li>
</ul>  

<script>

	
</script>


