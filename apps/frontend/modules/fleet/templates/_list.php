
<table class="" id="locationList" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" disabled id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Reference No') ?></th> 
			<th class=""><?php echo  ('Delay') ?></th> 
			<th class=""><?php echo  ('No Delay') ?></th> 
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
				<?php if($task->completedTask):  ?>
					<img class="ui-image-style" src="<?php echo image_path('setting/completed_small')  ?>" >	
				<?php endif; ?>
				<?php if($task->taskOnField): ?>
					<img class="ui-image-style"src="<?php echo image_path('setting/on_field_small')  ?>" >	
				<?php endif; ?>	
				<?php if($task->activeTask): ?>
					<img class="ui-image-style"src="<?php echo image_path('setting/active_small')  ?>" >	
				<?php endif; ?>
				<?php if($task->taskOnProccess): ?>
					<img class="ui-image-style"src="<?php echo image_path('setting/process_small')  ?>" >	
				<?php endif; ?>
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo $task->referenceNo ?>
			</td>
			<td class="" style="width:50px;min-width:50px;"> 
				<?php if($task->isDelayed):  ?>
					<img class="ui-image-style" src="<?php echo image_path('setting/completed_small')  ?>" >	
				<?php endif; ?>
			</td>
			<td class="" style="width:60px;min-width:60px;"> 
				 <?php echo $task->noOfDelayed ?>
			</td>
			<td class="" style="width:99%;"> 
				<?php echo $task->description  .' = ' .$task->costAmount ?> 
			</td>  
			<td  class="" style="padding:0px 0px 0px 1px;width:40px;min-width:40px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:40px;min-width:40px;padding:0x 0px;text-align:center;">
					<ul>
						<?php if($task->completedTask): ?>
						<li>
							<a href="<?php echo url_for('fleet/field_form?task_id='.$task->id.'&token_id='.$task->token_id) ?>" class="" rel="<?php echo $task->id ?>">									 
									<img src="<?php echo image_path('new_icons/view')  ?>" >								 
							</a>
						</li>
						<?php else: ?>
						<li>
							<a href="<?php echo url_for('fleet/view?task_id='.$task->id.'&token_id='.$task->token_id) ?>" class="" rel="<?php echo $task->id ?>">									 
									<img src="<?php echo image_path('new_icons/view')  ?>" >								 
							</a>
						</li> 
						<?php endif; ?>
						<?php if($task->canDelete): ?>
						<li> 
							<a href="#" class="ui-action-button" onclick="Javascript:deleteTask(<?php echo $vehicle->id ?>);" rel="<?php echo $vehicle->id ?>">	
								 
									<img src="<?php echo image_path('new_icons/del')  ?>" >
								 
							</a>
						</li>
						<?php endif; ?>
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

	$(function(){
 
    // add multiple select / deselect functionality
    $("#allcategorycheck").click(function () {
          $('.checkcategory').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".checkcategory").click(function(){
 
        if($(".checkcategory").length == $(".checkcategory:checked").length) {
            $("#allcategorycheck").attr("checked", "checked");
        } else {
            $("#allcategorycheck").removeAttr("checked");
        }
 
    });
});

</script>



