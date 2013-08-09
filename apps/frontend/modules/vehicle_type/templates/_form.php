

<table class="autoWidth" id="detailTable" >
	<tbody style="width:40%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:190px;" id="name" name="" >			
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('Name is required!') ?></span>		
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:190px;" id="description" name="" ></textarea>		
			</td> 
		</tr> 		 
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" onclick="Javascript:createVehicleType();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
	</tbody>     
</table> 
  
