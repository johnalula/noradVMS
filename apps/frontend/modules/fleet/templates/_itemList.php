<?php
	$roles = ParticipantCore::$ALL_PARTICIPANT_ROLES;
?>
<table class="" id="locationList" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class="" style="border-right:0px;"><?php echo  ('Item Name') ?></th>  
			<th class="" style="border-left:1px solid #bbb;"><?php echo  ('Quantity') ?></th>   
			<th class="" style="border-right:0px;"><?php echo  ('Vehicle') ?></th> 
			<?php if($task->canEditItem): ?>	  
			<th class="" style="border-left:0px;"></th>    
			<?php endif; ?>
			<th class=""><?php echo  ('Description') ?></th>  
			<?php if($task->canEditItem): ?>	
			<th class="" style="padding:2px 6px;text-align:center;"><?php echo  (' +/-') ?></th>
			<?php endif; ?>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>		
		<?php if($task->canEditItem): ?>		 
		<tr class="ui-input-header">
			<th class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</th>
			<th class="ui-inpu-box" style="width:15px;padding:2px 8px;text-align:center;"> 
				<input type="checkbox"  id="category-check-<?php echo $i;?>" name="category-check[<?php echo $passenger->id;?>]" class="checkcategory"  />
			</th> 
			<th class="ui-inpu-box" style="width:250px;min-width:250px;">
				<input type="text" class="" style="width:250px;min-width:250px;" id="item_name" name="item_name" >
				<br><span id="item_name_validation" class="error_validation displayNone"><?php echo __('Name is required!') ?></span>	
			</th>  
			<th class="ui-inpu-box" style="width:80px;min-width:80px;">
				<input type="text" class="" style="width:80px;min-width:80px;text-align:right;" id="quantity" name="quantity" >
			</th>   
			<th class="ui-inpu-box" style="width:180px;min-width:180px;">
				<input type="text" style="width:180px;min-width:180px;" id="item_vehicle_name" name="item_vehicle_name" > 
				<input type="hidden" style="width:150px;min-width:150px;" id="item_vehicle_id" name="vehicle_id"> 
				<input type="hidden" style="width:150px;min-width:150px;" id="orderID" name="orderID"> 
				<input type="hidden" style="width:150px;min-width:150px;" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>"> 
				<br><span id="item_vehicle_validation" class="error_validation displayNone"><?php echo __('Vehicle is required!') ?></span>	
			</th>   
			<th class="" style="padding:0px 0px;text-align:center;border-left:0px solid #ccc;">
				 <span class="" style=""><a href='#' onclick="" class='candidateItemVehicleModal' rel='#candidateItemVehiclePrompts'>
				<button class="ui-action-button"  >...</button></a> </span>	
			</th>
			<th class="ui-inpu-box" style="width:97%;min-width:50px;">
				<input type="text" style="width:97%;min-width:50px;" id="item_description" name="item_description" value="<?php echo $passenger->description ?>"> 
			</th>  
			<th class="ui-action-triger" style="width:48px;min-width:48px;padding:0px 0px;text-align:left;border-left:1px solid #ccc;">
				 <div class="ui-action-triger-button" style="padding:0px!important;"><a href='#' onclick="Javascript:createItem(<?php echo $sf_request->getParameter('task_id') ?>);" class='' rel='#'>
				<img src="<?php echo image_path('new_icons/setting_small')  ?>" >	</a> </div>	
			</th>
			<td class="ui-table-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</th>
		 
		</tr>
	<?php endif; ?>
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach($items as $item): ?>

		<tr class="ui-input-body-header"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;background:#dfe2e7;"> 
				<input type="checkbox"  id="category-check-<?php echo $i;?>" name="category-check[<?php echo $passenger->id;?>]" class="checkcategory"  />
			</td> 
			<td class="ui-input-body-box" style="width:250px;min-width:250px;">
				<input type="text" style="width:250px;min-width:250px;" id="participant_name-<?php echo $passenger->id ?>" name="participant_name" value="<?php echo $item->itemName ?>">
			</td>  
			<td class="ui-input-body-box" style="width:80px;min-width:80px;">
				<input type="text" class="" style="width:80px;min-width:80px;text-align:right;" id="quantity" name="quantity" value="<?php echo $item->itemQuantity ?>">
			</td>   
			<td class="ui-input-body-box" style="width:180px;min-width:180px;">
				<input type="text" style="width:180px;min-width:180px;" id="vehicle_name-<?php echo $item->id ?>" name="vehicle_name" value="<?php echo $item->assignedVehicle ?'('.$item->plateCodeNo.') '.$item->plateCode.' - '.$item->plateNo.' ( '.$item->vehicleMake.' )':'' ?>"> 
				<input type="hidden" style="width:150px;min-width:150px;" id="vehicle_id-<?php echo $passenger->id ?>" name="vehicle_id"> 
			</td>   
			<?php if($task->canEditItem): ?>	
			<td class="" style="padding:0px 0px;text-align:center;border-left:0px solid #ccc;">
				 <span class="" style=""><a href='#' onclick="Javascript:createTaskParticipant();" class='candidateVehicleModal' rel='#candidateVehiclePrompts'>
				<button class="ui-action-button"  >...</button></a> </span>	
			</td>
			<?php endif; ?>
			<td class="ui-input-body-box" style="width:97%;min-width:50px;">
				<input type="text" style="width:97.5%;min-width:50px;" id="description-<?php echo $item->id ?>" name="description" value="<?php echo $item->description ?>"> 
			</td>  
			<?php if($task->canEditItem): ?>	
			<td  class="" style="padding:0px 0px 0px 2px;width:42px;min-width:42px;border-right:0px solid #ddd;"> 
					
				<div class="ui-list-action" style="width:42px;min-width:42px;padding:0x 0px;text-align:center;margin-left:2px;">
					<ul>
						<li>
							<a href="#" class="ui-action-button" onclick="Javascript:deleteParticipant(<?php echo $participant->id ?>);" rel="<?php echo $participant->id ?>">									 
									<img src="<?php echo image_path('new_icons/save_small')  ?>" >								 
							</a>
						</li> 
						<li> 
							<a href="#" class="ui-action-button" onclick="Javascript:deleteParticipant(<?php echo $participant->id ?>);" rel="<?php echo $participant->id ?>">	
								 
									<img src="<?php echo image_path('icons/delete')  ?>" >
								 
							</a>
						</li>
					</ul>
				</div>
				
			</td>
			<?php endif; ?>
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



