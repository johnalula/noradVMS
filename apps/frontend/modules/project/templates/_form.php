

<table class="autoWidth" id="detailTable" >
	<tbody style="width:40%;">
		<tr>
			<td class="rightSide"><?php echo __('Parent') ?>:<span class="ui-mandatory">*</span></td>
			<td >				
				<input type="text" disabled id="parent_name" style="width:180px;" >
				<input type="hidden" disabled id="parentID" style="width:160px;" >
				<span class="issue_for" style="">
						<a href='#' class='parentModal' rel='#parentPrompts'>
				<button class="ui-button"> ... </button></a> </span> 	
				<br><span id="parent_validation" class="error_validation displayNone"><?php echo __('Parent is required!') ?></span>	
			</td>	
		</tr>
		 
		<tr>
			<td class="rightSide"><?php echo __('Project Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:180px;" id="project_name" name="" >			
				<br><span id="project_name_validation" class="error_validation displayNone"><?php echo __('Project name is required!') ?></span>		
			</td>		
		</tr>
		<td class="rightSide">
			<?php echo __('Alias') ?>:<span class="ui-mandatory">*</span>
		</td>
		<td>
			<input type="text" id="project_alias" style="width:180px;">
		</td>		
		<tr>
		<td class="rightSide"><?php echo __('Description') ?>:</td>
		<td>
				<textarea type="text" rows=2 style="width:180px;" id="description" name="description" ></textarea>			
				<br><span id="participant_firstname_validate" class="error_validation displayNone"><?php echo __('First name is required!') ?></span>		
			</td> 
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;margin-top:2px;" onclick="Javascript:createProject();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
		
	</tbody>     
</table> 

<script>
	
	$('#birth_date').datepicker({
	
		showOn: "both",
		buttonImageOnly: true,
		buttonImage: '<?php echo image_path('icons/calendar_small') ?>' 
	
	});
	
	$(document).ready(function(){
		
		$('#name').keyup(function(key){
			
			$('#name_validation').addClass('displayNone');
			$('#name').removeClass('validation_error_border');
			return false;
			
		});
		
	});

</script>
