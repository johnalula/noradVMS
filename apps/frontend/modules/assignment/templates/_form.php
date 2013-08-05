

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		<!--<tr>
			<td class="rightSide"><?php echo __('Registration Mode') ?>:</td>
			<td>
				<select id="mode" style="width:128px;" name="mode">
					<option value="1"><?php echo 'Project' ?></option>
					<option value="2"><?php echo 'Donated' ?></option>
					<option value="3"><?php echo 'Purchased' ?></option>
				</select>
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('Name is required!') ?></span>		
			</td>		
		</tr>		--> 
		<tr>
			<td class="rightSide"><?php echo __('Reference No') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:120px;" id="reference_no" name="reference_no" >		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Date') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:120px;" id="date" name="date" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:190px;" rows=1 id="description" name="description" ></textarea>		
			</td>
		</tr>
		<tr>
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		<tr>
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>

