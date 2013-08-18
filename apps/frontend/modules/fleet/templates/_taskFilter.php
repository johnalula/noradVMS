<?php 
	$statuss = FleetServiceTaskTable::processTaskStatusSelection();
?>

<div class="ui-list-batch-actions"> 
	<ul>
		<li><a href=""><img src="<?php echo image_path('icons/delete_small') ?>">Delete</a></li>
		<li></li> 
	</ul>  
</div>
<div class="ui-filter-list"> 
	<ul>
		<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
		<li><input type="text" id="keyword" style="width:120px;"></li>
		<li>
			<select id="status">
				<option></option>
				<?php foreach($statuss as $key => $status): ?>
					<option value="<?php echo $status ?>"><?php echo TaskCore::processTaskStatusTypeValue($status) ?></option>
				<?php endforeach; ?>
			</select>
		</li> 
	</ul>  
</div>
