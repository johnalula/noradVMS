

<table id="candidateList" align="left"> 
	<thead class="ui-widget-header">
		<tr>
			<td style="width:30px;"><h5>&nbsp;</h5></td>
			<td style="width:282px;"><h5><?php echo __('Name') ?></h5></td>
			<td style="width:282px;"><h5><?php echo __('Driver') ?></h5></td> 
		</tr>
	</thead>
	<tbody  class="ui-widget-content">	
		<?php 
			$i = 1 ;
		foreach($candidates as $candidate ): ?>
		<tr>
			<td style="">
				<input type="radio" id="selectCandidate-<?php echo $i ?>" name="selectCandidate" value="<?php echo  $candidate->vehicle_id. '$'.$candidate->plateCode.'$'. $candidate->plateNo ?>">
				
			</td> 
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo $candidate->plateNo .' ( '.$candidate->plateCode.' )'.$candidate->vehicle_id ?>
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo $candidate->participant_id ?>
			</td> 
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</tbody>
</table>


<script>
 

</script>


