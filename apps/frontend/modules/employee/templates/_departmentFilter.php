<?php 

	//$groups = CategoryTable::processGroupSelection();
	$parents = EmployeeTable::$EMP_PARTICIPANTS; 
?> 
<ul>
	<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
	<li>
		<select style="width:100px;margin-left:2px;"    id="parent_type" name="parent_type">
			<option>&nbsp;</option>
			<?php foreach($parents as $key => $parent): ?>								 
				<option value="<?php echo  $key ?>" >
					<?php echo $parent ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li> 
	<li>
		<select style="width:100px;margin-left:2px;"    id="parent_status" name="parent_status">
			<option>&nbsp;</option>
			<?php foreach($classs as $key => $clss): ?>								 
				<option value="<?php echo  $clss->classID ?>" >
					<?php echo PropertyClassCore::fetchItemTypeValue($clss->classID) ?>
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

