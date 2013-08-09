<?php

	$services = array(1 => 'Field', 2 => 'Local');
?>

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Destination') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:180px;" id="destination" name="destination" >		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('No of Days') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:50px;text-align:right;margin-right:9px;" id="no_of_days" name="no_of_days" >		
				<?php echo __('Cost') ?>:<span class="ui-mandatory"></span>
				<input style="width:70px;text-align:right;" id="agreement_cost" name="agreement_cost" value="<?php echo $vehicle->pinNo ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Service Type') ?>:</td>
			<td>
				<select style="width:187px;margin-right:8px;" id="service_type" name="service_type" >
					<?php foreach($services as $key => $service): ?>
					<option value="<?php echo $key ?>"><?php echo $service ?></option>		
					<?php endforeach; ?>
				</select>		
			</td>		
		</tr>	
		 
		<tr>
			<td class="rightSide"><?php echo __('Service Reason') ?>:</td>
			<td>
				<textarea style="width:180px;" rows=2 id="service_reason" name="service_reason" ></textarea>		
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
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
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
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		 
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>


