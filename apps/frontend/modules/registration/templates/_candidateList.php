

<table id="candidateList" align="left"> 
	<thead class="ui-widget-header">
		<tr>
			<td style="width:30px;"><h5>&nbsp;</h5></td>
			<td style="width:282px;"><h5><?php echo __('Name') ?></h5></td>
			<td style="width:282px;"><h5><?php echo __('Group') ?></h5></td>
			<td style="width:282px;"><h5><?php echo __('Class') ?></h5></td>
			<td style="width:30%;"><h5><?php echo __('Description') ?></h5></td>  
		</tr>
	</thead>
	<tbody  class="ui-widget-content">	
		<?php 
			$i = 1 ;
		foreach($candidates as $candidate ): ?>
		<tr>
			<td style="">
				<input type="radio" id="selectCandidate-<?php echo $i ?>" name="selectCandidate" value="<?php echo  $candidate->id. '$'.$candidate->categoryName.'$'.$candidate->classID ?>">
				
			</td> 
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo $candidate->categoryName ?>
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo CategoryCharacterization::fetchValue($candidate->category_group_id) ?>
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo PropertyClassCore::fetchItemTypeValue($candidate->category_class_id) ?>
			</td>
			<td class="" style="width:99%;"> 
				<?php echo $candidate->description  ?> 
			</td>  
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</tbody>
</table>


<script>
 

</script>


