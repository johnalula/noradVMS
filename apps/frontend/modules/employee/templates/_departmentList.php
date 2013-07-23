

<table id="departmentList" align="left"> 
	<thead class="ui-widget-header">
		<tr>
			<td style="width:30px;"><h5>&nbsp;</h5></td>
			<td style="width:282px;"><h5><?php echo __('Name') ?></h5></td>
			<td style="width:282px;"><h5><?php echo __('Dean') ?></h5></td>
			<td style="width:282px;"><h5><?php echo __('College') ?></h5></td>
			<td style="width:30%;"><h5><?php echo __('Description') ?></h5></td>  
		</tr>
	</thead>
	<tbody  class="ui-widget-content">	
		<?php 
			$i = 1 ;
		foreach($departments as $department ): ?>
		<tr>
			<td style="">
				<input type="radio" id="selectDepartment-<?php echo $i ?>" name="selectDepartment" value="<?php echo  $department->id. '$'.$department->name ?>">
				
			</td> 
			<td><?php echo $department->name ?></td> 
			<td><?php echo $department->id ?></td>  
			<td><?php echo $department->id ?></td>  
			<td><?php echo $department->description ?></td>  
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</tbody>
</table>


<script>
 

</script>


