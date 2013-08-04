<?php 

	//$groups = CategoryTable::processGroupSelection();
?> 
<ul>
	<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
	<li>
		<select style="width:120px;margin-left:2px;"    id="category_group_id" name="category_group_id">
			<option>&nbsp;</option>
			<?php foreach($groups as $key => $group): ?>								 
				<option value="<?php echo  $group->groupID ?>" >
					<?php echo CategoryCharacterization::fetchValue($group->groupID) ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li> 
	<li>
		<select style="width:100px;margin-left:2px;"    id="category_class_id" name="category_class_id">
			<option>&nbsp;</option>
			<?php foreach($classs as $key => $clss): ?>								 
				<option value="<?php echo  $clss->classID ?>" >
					<?php echo PropertyClassCore::fetchItemTypeValue($clss->classID) ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li> 
	<li>
		<input style="width:120px;" type="text" id="keyword">
	</li>
</ul>  

<script>

	
</script>
