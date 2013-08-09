
<?php 
	//$fullName = ehco ;
?>
<table class="autoWidth" style="margin-left:10px;margin-top:5px;" id="detailTable" >
	<tbody style="width:40%;"> 
 
		<tr>
			<td class="rightSide"><?php echo __('Driver Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input style="width:205px;background:#f9f9f9;" disabled id="reference_no" name="reference_no" value="<?php echo $vehicle->firstName.' '.$vehicle->fatherName.' '.$vehicle->grandFatherName ?> ">		
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Serial No') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:75px;" id="" name="date" value="<?php echo $vehicle->serialNo  ?>">
				<span class="" style="margin-left:11px;">
				<?php echo __('Pin No') ?>:<span class="ui-mandatory"></span>
				<input style="width:57px;" id="reference_no" name="reference_no" value="<?php echo $vehicle->pinNo ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td>  
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Purchased Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:205px;" id="" name="date" >		
				<br><span id="date_validation" class="error_validation displayNone"><?php echo __('Date is required!') ?></span>	
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Registration Date') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:74px;" id="date" disabled name="date" value="<?php echo $vehicle->startDate  ?>">
				<span class="" style="margin-left:3px;">
				<?php echo __('Reg. No') ?>:<span class="ui-mandatory"></span>
				<input style="width:57px;text-align:right" disabled id="date" name="reference_no" value="<?php echo $vehicle->taskID ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td>  
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Purchased Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:213px;"    id="category_group" name="category_group">
					<option>&nbsp;</option>
					<?php foreach($feul_types as $key => $type): ?>								 
						<option value="<?php echo  $type->id ?>"  >
							<?php echo $type->fuelTypeName ?>
						</option>								 
					<?php endforeach; ?>
				</select>
			</td> 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Perchased Date') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input style="width:75px;" id="date" name="date" value="<?php   ?>">
				<span class="" style="margin-left:5px;">
				<?php echo __('Ref. No') ?>:<span class="ui-mandatory"></span>
				<input style="width:57px;text-align:right" id="date" name="reference_no" value="<?php echo $vehicle->refNo ?>">		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td>  
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Service Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:100px;"    id="category_group" name="category_group">
					<option>&nbsp;</option>
					<?php foreach($feul_types as $key => $type): ?>								 
						<option value="<?php echo  $type->id ?>"  >
							<?php echo $type->fuelTypeName ?>
						</option>								 
					<?php endforeach; ?>
				</select>
				<span class="" style="margin-left:5px;">
				<?php echo __('Year') ?>:<span class="ui-mandatory"></span>
				<input style="width:56px;" id="reference_no" name="reference_no" >		
				</span>
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		<tr>
			<td class="rightSide"><?php echo __('Vehicle Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:213px;"    id="category_group" name="category_group">
					<option>&nbsp;</option>
					<?php foreach($types as $key => $type): ?>								 
						<option value="<?php echo  $type->id ?>" <?php echo $vehicle->vehicleType == $type->id ? 'selected':'' ?>  >
							<?php echo $type->vehicleTypeName ?>
						</option>								 
					<?php endforeach; ?>
				</select>
				 
				<br><span id="reference_no_validation" class="error_validation displayNone"><?php echo __('Reference No is required!') ?></span>	
			</td> 
		</tr>
		
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:205px;" rows=2 id="description" name="description" ></textarea>		
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
	</tbody>     
</table> 
 
<script>
	
	$('#date').datepicker();


</script>


