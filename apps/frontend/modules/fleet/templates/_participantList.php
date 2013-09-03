<?php
	$roles = ParticipantCore::$ALL_PARTICIPANT_ROLES;
?>
<table class="" id="locationList" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class="" style="border-right:0px;"><?php echo  ('Full Name') ?></th>  
			<th class="" style="border-left:1px solid #bbb;"><?php echo  ('Role') ?></th>   
			<th class=""><?php echo  ('Vehicle') ?></th>   
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
		 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach($participants as $participant): ?>

		<tr class="ui-input-body-header"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;background:#dfe2e7;"> 
				<input type="checkbox"  id="category-check-<?php echo $i;?>" name="category-check[<?php echo $participant->id;?>]" class="checkcategory"  />
			</td> 
			<td class="ui-input-body-box" style="width:260px;min-width:260px;">
				<?php if($participant->is_default): ?>
					<input type="text" style="width:260px;min-width:260px;background:#fee;" id="reference_no" disabled name="reference_no" value="<?php echo $participant->firstName.' '.$participant->fatherName.' '.$participant->grandFatherName ?>">  
				<?php else: ?>
					<input type="text" style="width:260px;min-width:260px;" id="reference_no" disabled name="reference_no" value="<?php echo $participant->firstName.' '.$participant->fatherName.' '.$participant->grandFatherName ?>">  
				<?php endif; ?>
				
			</td>  
			<td class="ui-input-body-box" style="width:150px;min-width:150px;">
				<?php if($participant->is_default): ?>
					<input type="text" style="width:150px;min-width:150px;background:#fee;" id="description" disabled name="description" value="<?php echo ParticipantCore::fetchParticipantRoleValue($participant->participant_role) ?>">
				<?php else: ?>
				<input type="text" style="width:150px;min-width:150px;" id="description" disabled name="description" value="<?php echo ParticipantCore::fetchParticipantRoleValue($participant->participant_role) ?>">
				<?php endif; ?>
				
			</td>   
			<td class="ui-input-body-box" style="width:180px;min-width:180px;">
				<?php if($participant->is_default): ?>
					<input type="text" style="width:220px;min-width:220px;background:#fee;" id="reference_no" disabled name="reference_no" value="<?php echo $participant->assignedVehicle ?'('.$participant->plateCodeNo.') '.$participant->plateCode.' - '.$participant->plateNo.' ( '.$participant->vehicleMake.' )':'' ?>">  
				<?php else: ?>
				<input type="text" style="width:220px;min-width:220px;" id="reference_no" disabled name="reference_no" value="<?php echo $participant->assignedVehicle ?'('.$participant->plateCodeNo.') '.$participant->plateCode.' - '.$participant->plateNo.' ( '.$participant->vehicleMake.' )':'' ?>">  
				<?php endif; ?>
				
			</td>   
			<td class="ui-input-body-box" style="width:98%;min-width:50px;">
				<?php if($participant->is_default): ?>
					<input type="text" style="width:98%;min-width:50px;background:#fee;" id="description" name="description" value="<?php echo $participant->description ?>"> 
				<?php else: ?>
				<input type="text" style="width:98%;min-width:50px;" id="description" name="description" value="<?php echo $participant->description ?>"> 
				<?php endif; ?>
				
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



