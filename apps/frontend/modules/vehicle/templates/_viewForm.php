
<?php 
	//$fullName = ehco ;
	$perchased_types = array(1 => 'Own', 2 => 'University', 3 => 'Project');
	$service_types = VehicleServiceTypeTable::processSelection ( $offset=0, $limit=100 );
?>
<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
 
		<tr>
			<td class="rightSide"><?php echo __('Driver Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:205px;background:#f9f9f9;" disabled id="driver_name" name="driver_name" value="<?php echo $vehicle->firstName.' '.$vehicle->fatherName.' '.$vehicle->grandFatherName ?> ">		
				<input type="hidden" style="width:205px;background:#f9f9f9;" disabled id="token_id" name="reference_no" value="<?php echo $sf_request->getParameter('token_id') ?> ">		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Serial No') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:75px;" id="serial_no" name="serial_no" value="<?php echo $vehicle->serialNo  ?>">
				<span class="" style="margin-left:11px;">
				<?php echo __('Pin No') ?>:<span class="ui-mandatory"></span>
				<input style="width:57px;" id="pin_num" name="pin_num" value="<?php echo $vehicle->pinNo ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td>  
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Purchased Date') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:205px;" id="purchased_date" name="" value="<?php echo $vehicle->purchasedDate  ?>">
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Registration Date') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:74px;" id="registered_date" disabled name="" value="<?php echo $vehicle->effectiveDate  ?>">
				<span class="" style="margin-left:3px;">
				<?php echo __('Reg. No') ?>:<span class="ui-mandatory"></span>
				<input style="width:57px;text-align:right" disabled id="registration_no" name="reference_no" value="<?php echo $vehicle->taskID ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td>  
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Purchased Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:213px;"    id="purchased_type" name="">
					<option>&nbsp;</option>
					<?php foreach($perchased_types as $key => $type): ?>								 
						<option value="<?php echo  $key ?>" <?php echo $vehicle->purchasedType == $key ? 'selected':'' ?> >
							<?php echo $type ?>
						</option>								 
					<?php endforeach; ?>
				</select>
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Vehicle Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:100px;"    id="vehicle_type" name="vehicle_type">
					<option>&nbsp;</option>
					<?php foreach($types as $key => $type): ?>								 
						<option value="<?php echo  $type->id ?>" <?php echo $vehicle->vehicleTypeID == $type->id ? 'selected':'' ?>  >
							<?php echo $type->vehicleTypeName ?>
						</option>								 
					<?php endforeach; ?>
				</select>
				<span class="" style="margin-left:8px;">
				<?php echo __('Ref ') ?>:<span class="ui-mandatory"></span>
				<input style="width:57px;text-align:right" id="reference_no" name="reference_no" value="<?php echo $vehicle->refNo ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td>  
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Service Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:100px;"    id="service_type" name="category_group">
					<option>&nbsp;</option>
					<<?php foreach($service_types as $key => $type): ?>								 
						<option value="<?php echo  $type->id ?>" <?php echo $vehicle->serviceTypeID == $type->id ? 'selected':'' ?> >
							<?php echo $type->vehicleServiceTypeName ?>
						</option>								 
					<?php endforeach; ?>
				</select>
				<span class="" style="margin-left:5px;">
				<?php echo __('Year') ?>:<span class="ui-mandatory"></span>
				<input style="width:56px;text-align:right;" id="vehicle_year" name="vehicle_year" value="<?php echo $vehicle->serviceYear ?>" >		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr>
		
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:205px;" rows=2 id="description" name="description" ><?php echo $vehicle->description  ?> </textarea>		
			</td>
		</tr>
	
		<tr>
			<td style="padding:4px;"></td> 
			<td style="padding:4px;"></td> 
		</tr> 
		<tr>
			<td></td> 
			<td class="ui-save-button"> 
				<button style="margin-left:5px;" onclick="Javascript:updateVehicle(<?php echo $sf_request->getParameter('vehicle_id') ?>);" class="ui-button"><img src="<?php echo image_path('icons/save_small') ?>"><input style="" class="ui-submit-form" id=""  type="submit"  value="<?php echo __('Update') ?>" /></button></td> 
		</tr> 
	</tbody>     
</table> 
 
<script>
	
	$('#purchased_date').datepicker();


</script>


