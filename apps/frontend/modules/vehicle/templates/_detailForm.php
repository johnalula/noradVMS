

<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
 
		<tr>
			<td class="rightSide"><?php echo __('Plate Code') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:54px;" id="date" name="date" value="<?php echo $vehicle->plateCode ?>">
				<span class="" style="margin-left:8px;">
				<?php echo __('Plate No') ?>:<span class="ui-mandatory"></span>
				<input style="width:75px;" id="reference_no" name="reference_no" value="<?php echo $vehicle->plateNo ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		 
		<tr>
			<td class="rightSide"><?php echo __('Model') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="date" name="date" value="<?php echo $vehicle->modelNo ?>">		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Make') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="date" name="date" value="<?php echo $vehicle->vehicleMake ?>">		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Seat Capacity') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:73px;text-align:right;" id="date" name="date" value="<?php echo $vehicle->seatCapacity ?>">
				<span class="" style="margin-left:6px;">
				<?php echo __('Doors') ?>:<span class="ui-mandatory"></span>
				<input style="width:72px;text-align:right;" id="reference_no" name="reference_no" value="<?php echo $vehicle->seatCapacity ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Engine No') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="date" name="date" value="<?php echo $vehicle->departStatus ?>">		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Chesis No') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="date" name="date" value="<?php echo $vehicle->chesisNo ?>" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Color') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:70px;" id="date" name="date" value="<?php echo $vehicle->vehicleColor ?>">
				<span class="" style="margin-left:6px;">
				<?php echo __('Weight') ?>:<span class="ui-mandatory"></span>
				<input style="width:70px;" id="reference_no" name="reference_no" value="<?php echo $vehicle->vehicleWeight ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr>
		<tr>
			<td class="rightSide"><?php echo __('Purchased Mileage') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="date" name="date" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Current Mileage') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:210px;" id="date" name="date" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Fuel Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:80px;"    id="category_group" name="category_group">
					<option>&nbsp;</option>
					<?php foreach($feul_types as $key => $type): ?>								 
						<option value="<?php echo  $type->id ?>" <?php echo $vehicle->fuelType == $type->id ? 'selected':'' ?> >
							<?php echo $type->fuelTypeName ?>
						</option>								 
					<?php endforeach; ?>
				</select>
				<span class="" style="margin-left:5px;">
				<?php echo __('litter/Km') ?>:<span class="ui-mandatory"></span>
				<input style="width:58px;" id="reference_no" name="reference_no" >		
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
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>



