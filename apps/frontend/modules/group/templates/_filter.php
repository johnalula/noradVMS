<?php 

	//$groups = CategoryTable::processGroupSelection();
?> 
<ul>
	<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
	<li>
		<select style="width:120px;margin-left:2px;"    id="category_group_id" name="category_group_id">
			<option>&nbsp;</option>
			<?php foreach($groups as $key => $group): ?>								 
				<option value="<?php echo  $group ?>" >
					<?php echo $group->id ?>
				</option>								 
			<?php endforeach; ?>
		</select>
	</li> 
	<li>
		<select style="width:100px;margin-left:2px;"    id="group_type_id" name="group_type_id">
			<option>&nbsp;</option>
			<?php foreach($classs as $key => $clss): ?>								 
				<option value="<?php echo  $clss->id ?>" >
					<?php echo $clss->id ?>
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
