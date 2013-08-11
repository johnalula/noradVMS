<?php

	$services = array(1 => 'Field', 2 => 'Local');
	$modes = PaymentSettingTable::$ALL_PAYMENT_MODES;
?>

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Destination') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:200px;" id="destination" name="destination" value="<?php echo $taskObj->destination ?>" >		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Departure Date') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:78px;margin-right:8px;" id="departure_date" name="departure_date" value="<?php echo $taskObj->departure_date ?>">		
				<?php echo __('Time') ?>:<span class="ui-mandatory"></span>
				<input style="width:60px;" id="departure_time" name="departure_time" value="<?php echo $taskObj->departure_time ?>">		
				<br><span id="quantity_validation" class="error_validation displayNone"><?php echo __('Quantity is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('No of Days') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:40px;text-align:right;margin-right:9px;" id="no_of_days" name="no_of_days" value="<?php echo $taskObj->service_number_of_days ?>" >		
				 <?php echo __('Payment') ?>:<span class="ui-mandatory"></span>
					<select style="width:83px;margin-right:8px;" id="payment_mode" name="payment_mode" >
						<?php foreach($modes as $key => $mode): ?>
						<option value="<?php echo $key ?>" <?php echo $taskObj->payment_mode_id == $key ? 'selected':'' ?>><?php echo $mode ?></option>		
						<?php endforeach; ?>
					</select>		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Service Type') ?>:</td>
			<td>
				<select style="width:208px;margin-right:8px;" id="service_type" name="service_type" >
					<?php foreach($services as $key => $service): ?>
					<option value="<?php echo $key ?>" <?php echo $taskObj->service_type_id == $key ? 'selected':'' ?>>
						<?php echo $service ?></option>		
					<?php endforeach; ?>
				</select>		
			</td>		
		</tr>	
		 
		<tr>
			<td class="rightSide"><?php echo __('Service Reason') ?>:</td>
			<td>
				<textarea style="width:200px;" rows=1 id="service_reason" name="service_reason" ><?php echo $taskObj->service_reason ?></textarea>		
			</td>
		</tr>
		 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();
	$('#departure_date').datepicker();

</script>


