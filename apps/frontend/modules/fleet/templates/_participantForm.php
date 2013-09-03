<?php
	$roles = ParticipantCore::$ALL_PARTICIPANT_ROLES;
?>
<table class="" id="locationList" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class="" style="border-right:0px;"><?php echo  ('Full Name') ?></th>  
			<th class="" style="border-left:0px;"></th>  
			<th class=""><?php echo  ('Role') ?></th>   
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="" style="padding:2px 6px;text-align:center;"><?php echo  (' +/-') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
		<tr class="ui-input-header">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th>  
			<th class="ui-inpu-box" style="width:180px;min-width:180px;">
				<input type="text" style="width:180px;min-width:180px;" id="participant_name" name="participant_name" >
				<input type="hidden" style="width:130px;min-width:130px;" id="participant_id" name="participant_id" >
				
			</th> 
			<th class="ui-add-button-action" style="width:20px;background:#dfe2e7;padding:0px;">
				 <span class="" style=""><a href='#' class='locationModal' rel='#locationPrompts'>
				<button class="ui-add-button">...</button></a> </span> 	
			</th> 
			<th class="ui-inpu-box" style="width:180px;min-width:180px;">
				<select id="particiapnt_role" style="width:188px;min-width:188px;" >
					<?php foreach($roles as $key => $role ): ?>
					<option value="<?php echo $key ?>"><?php echo $role ?></option>
					<?php endforeach; ?>
				</select>
			</th>   
			<th class="ui-inpu-box" style="width:98%;min-width:50px;">
				<input type="text" style="width:98%;min-width:50px;" id="description" name="description">
			</th>  
			<th class="" style="padding:0px 0px;text-align:left;border-left:1px solid #ccc;">
				 <span class="" style="padding:0px!important;"><a href='#' onclick="Javascript:createTaskParticipant();" class='' rel='#'>
				<button class="ui-action-button" style="padding:0px 4px!important!;" ><img style="float:left!important;vertical-align:middle!important;width:16px!important;height:16px!important;margin:0px!important!;" src="<?php echo image_path('new_icons/user_add')  ?>" ></button></a> </span>	
			</th>
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
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $task->id;?>]" class="checkcategory"  />
			</td> 
			<td class="ui-input-body-box" style="width:180px;min-width:180px;">
				<input type="text" style="width:180px;min-width:180px;" id="reference_no" name="reference_no" value="<?php echo $participant->firstName.' '.$participant->fatherName.' '.$participant->grandFatherName ?>">  
			</td> 
			<td class="ui-add-button-action" style="width:20px;background:#dfe2e7;padding:0px;">
				 <span class="" style=""><a href='#' class='locationModal' rel='#locationPrompts' >
				<button class="ui-add-button">...</button></a> </span> 	
			</td>  
			<td class="ui-input-body-box" style="width:180px;min-width:180px;">
				<input type="text" style="width:180px;min-width:180px;" id="description" disabled name="description" value="<?php echo ParticipantCore::fetchParticipantRoleValue($participant->participant_role) ?>">
			</td>   
			<td class="ui-input-body-box" style="width:98%;min-width:50px;">
				<input type="text" style="width:98%;min-width:50px;" id="description" name="description">
			</td>  
			<td  class="" style="padding:0px 0px 0px 2px;width:42px;min-width:42px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:42px;min-width:42px;padding:0x 0px;text-align:center;">
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



