

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
 
		<tr>
			<td class="rightSide"><?php echo __('Plate Code') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:44px;" id="plate_code" name="date" value="<?php echo $vehicle->plateCode ?>">
				<span class="" style="margin-left:8px;">
				<?php echo __('Plate No') ?>:<span class="ui-mandatory"></span>
				<input style="width:85px;" id="plate_no" name="reference_no" value="<?php echo $vehicle->plateNo ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Plate Code No') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:44px;" id="plate_code_no" name="reference_no" value="<?php echo $vehicle->plateCodeNo ?>">	
				<span class="" style="margin-left:8px;">
				<?php echo __('Model') ?>:<span class="ui-mandatory"></span>
				
				<input style="width:100px;" id="vehicle_model" name="vehicle_model" value="<?php echo $vehicle->modelNo ?>">	
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>		
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Make') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="vehicle_make" name="vehicle_make" value="<?php echo $vehicle->vehicleMake ?>">		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		
		
		<tr>
			<td class="rightSide"><?php echo __('Seat Capacity') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:73px;text-align:right;" id="seat_capacity" name="seat_capacity" value="<?php echo $vehicle->seatCapacity ?>">
				<span class="" style="margin-left:6px;">
				<?php echo __('Doors') ?>:<span class="ui-mandatory"></span>
				<input style="width:72px;text-align:right;" id="no_of_doors" name="no_of_doors" value="<?php echo $vehicle->noOfDoors ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Engine No') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="vehicle_engine_no" name="vehicle_engine_no" value="<?php echo $vehicle->engineNo ?>">		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Chesis No') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="vehicle_chesis_no" name="vehicle_chesis_no" value="<?php echo $vehicle->chesisNo ?>" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Color') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:70px;" id="vehicle_color" name="vehicle_color" value="<?php echo $vehicle->vehicleColor ?>">
				<span class="" style="margin-left:6px;">
				<?php echo __('Weight') ?>:<span class="ui-mandatory"></span>
				<input style="width:70px;" id="vehicle_weight" name="vehicle_weight" value="<?php echo $vehicle->vehicleWeight ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Purchased Mileage') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="purchased_mileage" name="purchased_mileage" value="<?php echo $vehicle->purchasedMileage ?>">			
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Current Mileage') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="current_mileage" name="purchased_mileage" value="<?php echo $vehicle->currentMileage ?>">			
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Fuel Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:80px;"    id="fuel_type" name="fuel_type">
					<option>&nbsp;</option>
					<?php foreach($feul_types as $key => $ftype): ?>								 
						<option value="<?php echo  $ftype->id ?>" <?php echo $vehicle->fuelTypeID == $ftype->id ? 'selected':'' ?> >
							<?php echo $ftype->fuelTypeName ?>
						</option>								 
					<?php endforeach; ?>
				</select>
				<span class="" style="margin-left:5px;">
				<?php echo __('liter/Km') ?>:<span class="ui-mandatory"></span>
				<input style="width:60px;text-align:right;" id="liter_per_km" name="liter_per_km" value="<?php echo $vehicle->literPerKM ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td style="padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
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



