<?php

	$payment_modes = PaymentSettingTable::fetchExcludedPaymentMode();
	$currencys = CurrencyTable::processSelection ( $offset=0, $limit=100 ) ;
?>

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		 
		<tr>
			<td class="rightSide"><?php echo __('Payment Mode') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:108px;margin-right:14px;" id="payment_mode" name="payment_mode" >
					<?php foreach($payment_modes as $key => $mode): ?>
					<option value="<?php echo $mode ?>" <?php echo $mode == PaymentSettingTable::$PER_KM ? 'selected':'' ?>>
					<?php echo PaymentSettingTable::fetchPaymentModeValue($mode) ?></option>		
					<?php endforeach; ?>
				</select>	
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Cost') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:100px;text-align:right;" id="cost_value" name="cost_value"  >		
				<br><span id="cost_validation" class="error_validation displayNone"><?php echo __('Cost is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Currency') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:108px;margin-right:14px;" id="currency" name="currency" >
					<?php foreach($currencys as $key => $currency): ?>
					<option value="<?php echo $currency->id ?>" <?php echo $curency->is_default ? 'selected':'' ?>>
					<?php echo $currency->name ?></option>		
					<?php endforeach; ?>
				</select>	
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:200px;" rows=1 id="description" name="description" ></textarea>		
			</td>
		</tr>
		<tr>
			<td style="padding:1px;"></td> 
			<td style="padding:1px;"></td> 
		</tr> 
		  
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button onclick="Javascript:createPaymentMode();" style="margin-left:5px;" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Save') ?>" /></button></td> 
		</tr> 
		
		 
		 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>

