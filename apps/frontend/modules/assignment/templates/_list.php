
<table class="" id="locationList" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" disabled id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Reference No') ?></th> 
			<th class=""><?php echo  ('Owner') ?></th>
			<th class=""><?php echo  ('Date') ?></th> 
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="" style="padding:2px 2px;text-align:center;"><?php echo  (' Actions') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $tasks as $task ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:4px 8px;"> 
				 
			</td>
			<td class="" style="width:110px;min-width:110px;"> 
				<?php echo $task->referenceNo ?>
			</td>
			<td class="" style="width:160px;min-width:160px;"> 
				<span rel="<?php echo $task->id ?>" title="<?php echo $task->ownerName ?>">
					<?php echo $task->ownerAlias ? $task->ownerAlias :$task->ownerName ?>
				</span>
			</td>
			 
			<td class="" style="width:90px;min-width:90px;"> 
				<?php echo $task->effective_date ?>
			</td>
			 
			<td class="" style="width:95%;"> 
				<?php echo $task->description  ?> 
			</td>  
			<td  class="" style="padding:0px 0px 0px 1px;width:40px;min-width:40px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:40px;min-width:40px;padding:0x 0px;text-align:center;">
					<ul>
						<?php  ?>
						<li>
							<a href="<?php echo url_for('fleet/field_form?task_id='.$task->id.'&token_id='.$task->token_id) ?>" class="" rel="<?php echo $task->id ?>">									 
									<img src="<?php echo image_path('new_icons/view')  ?>" >								 
							</a>
						</li>
						<?php  ?>
						
						<?php  ?>
						<?php ?>
						<li> 
							<a href="#" class="ui-action-button" onclick="Javascript:deleteTask(<?php echo $vehicle->id ?>);" rel="<?php echo $vehicle->id ?>">	
								 
									<img src="<?php echo image_path('new_icons/del')  ?>" >
								 
							</a>
						</li>
						<?php  ?>
						
						<?php ?> 
					</ul>
				</div>
			</td>
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		<?php endforeach; ?>
		 
		</tbody> 
</table>

<script type="text/javascript">
 

</script>



