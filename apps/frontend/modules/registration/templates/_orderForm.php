


<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		  
		<tr>
			<td class="rightSide"><?php echo __('Category') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:260px;" disabled id="category_name" name="category_name" >		
				<input type="hidden" style="width:120px;" id="category_id" name="category_id" >		
				<input type="hidden" style="width:120px;" id="tokenID" name="tokenID" value="<?php echo $sf_request->getParameter('token_id') ?>">		
				<input type="hidden" style="width:120px;" id="taskID" name="taskID" value="<?php echo $sf_request->getParameter('task_id') ?>">		
				<span class="issue_for" style="">
					<a href='#' class='candidateModal' rel='#candidatePrompts'>
						<button class="ui-button"> ... </button>
					</a> 
				</span> 	
				<br><span id="name_validation" class="error_validation displayNone"><?php echo __('Category is required!') ?></span>	 
			
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Quantity') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:72px;text-align:right;margin-right:8px;" id="quantity" name="quantity" >		
				<?php echo __('Unit Price') ?>:<span class="ui-mandatory">*</span>
				<input style="width:94px;text-align:right;" id="unit_price" name="unit_price" >		
				<br><span id="quantity_validation" class="error_validation displayNone"><?php echo __('Quantity is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Unit') ?>:<span class="ui-mandatory"> </span></td>
			<td>
				<select style="width:80px;margin-right:16px;" id="unit" name="unit" >
					<?php foreach($units as $unit): ?>
					<option value="<?php echo $unit->id ?>"><?php echo $unit->unitName ?></option>		
					<?php endforeach; ?>
				</select>
				<?php echo __('Currency') ?>:<span class="ui-mandatory"></span>
				<select style="width:102px;margin-right:8px;" id="currency" name="currency" >
					<?php foreach($currencys as $currency): ?>
					<option value="<?php echo $currency->id ?>"><?php echo $currency->currencyName ?></option>		
					<?php endforeach; ?>
				</select>
				<br><span id="quantity_validation" class="error_validation displayNone"><?php echo __('Quantity is required!') ?></span>	
			</td> 
		</tr> 
		
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:260px;" rows=1 id="description" name="description" ></textarea>		
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
				<button style="margin-left:5px;" onclick="Javascript:createTaskOrder();" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>
