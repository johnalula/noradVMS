
<?php 
	$types = VehicleTypeTable::processSelection ( $offset=0, $limit=100 );;
	$f_types = FuelTypeTable::processSelection ( $keyword, $offset=0, $limit=100 );
	$statuss = VehicleTable::$ALL_STATUSES;
?>

<div id="dataList">
	
<table class="" id="ui-data-list" style="">
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th colspan=3 class=""><?php echo  ('Vehicle') ?></th>   
			<th class=""><?php echo  ('Type') ?></th> 
			<th class=""><?php echo  ('Make') ?></th> 
			<th class=""><?php echo  ('Model') ?></th> 
			<th class=""><?php echo  ('Color') ?></th> 
			<th class=""><?php echo  ('Weight') ?></th> 
			<th class=""><?php echo  ('Fuel Type') ?></th>   
			<th class=""><?php echo  ('Description') ?></th>   
			<th class="" style="padding:2px 4px;text-align:center;"><?php echo  (' Actions') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>
		<input type="hidden" id="totalData" name="totalData" value="<?php echo count($allVehicles) ?>">
		<?php foreach( $task_orders as $vehicle ): ?>
		
		 
		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?> ui-input-body-header"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<img src="<?php echo image_path('new_icons/car_small')  ?>" >	
			</td>
			 
			<td class="ui-input-body-box" style="width:30px;min-width:30px;">
				<input type="text" style="width:30px;min-width:30px;" id="plate_code-<?php echo $vehicle->id ?>" name="" value="<?php echo $vehicle->plate_code ?>">
				<input type="hidden" style="width:120;min-width:30px;" id="token_id-<?php echo $vehicle->id ?>" name="" value="<?php echo $vehicle->token_id ?>">  
			</td> 
			<td class="ui-input-body-box" style="width:30px;min-width:30px;">
				<input type="text" style="width:30px;min-width:30px;" id="plate_code_no-<?php echo $vehicle->id ?>" name="reference_no" value="<?php echo $vehicle->plate_code_no ?>">  
			</td> 
			<td class="ui-input-body-box" style="width:60px;min-width:50px;">
				<input type="text" style="width:60px;min-width:50px;" id="plate_no-<?php echo $vehicle->id ?>" name="reference_no" value="<?php echo $vehicle->plate_number ?>">  
			</td> 
			 
			<td class="ui-input-body-box" style="width:100px;min-width:90px;">
				<select id="vehicle_type-<?php echo $vehicle->id ?>" style="width:100px;min-width:90px;" >
					<option></option>
					<?php foreach($types as $key => $type): ?>
					<option value="<?php echo $type->id ?>" <?php echo $vehicle->vehicle_type_id == $type->id ? 'selected':'' ?>>
					<?php echo $type->vehicleTypeName ?></option>
				<?php endforeach; ?>
				</select>
			</td>   
			<td class="ui-input-body-box" style="width:80px;min-width:70px;">
				<input type="text" style="width:80px;min-width:70px;" id="vehicle_make-<?php echo $vehicle->id ?>" name="" value="<?php echo $vehicle->vehicle_make?>">  
			</td>
			<td class="ui-input-body-box" style="width:80px;min-width:70px;">
				<input type="text" style="width:80px;min-width:70px;" id="vehicle_model-<?php echo $vehicle->id ?>" name="" value="<?php echo $vehicle->vehicle_model?>">  
			</td>
			<td class="ui-input-body-box" style="width:80px;min-width:70px;">
				<input type="text" style="width:80px;min-width:70px;" id="vehicle_color-<?php echo $vehicle->id ?>" name="" value="<?php echo $vehicle->vehicle_color?>">  
			</td>
			<td class="ui-input-body-box" style="width:60px;min-width:50px;">
				<input type="text" style="width:60px;min-width:50px;" id="vehicle_weight-<?php echo $vehicle->id ?>" name="" value="<?php echo $vehicle->vehicle_weight?>">  
			</td>
			
			<td class="ui-input-body-box" style="width:100px;min-width:90px;">
				<select id="fuel_type-<?php echo $vehicle->id ?>" style="width:100px;min-width:90px;" >
					<option></option>
					<?php foreach($f_types as $key => $f_type): ?>
					<option value="<?php echo $f_type->id ?>"><?php echo $f_type->fuelTypeName ?></option>
				<?php endforeach; ?>
				</select>
			</td>   
			<td class="ui-input-body-box" style="width:95%;min-width:30px;">
				<input type="text" style="width:95%;min-width:30px;" id="description-<?php echo $vehicle->id ?>" name="description" value="<?php echo $vehicle->description ?>">
			</td>  
			<td  class="" style="padding:0px 0px 0px 1px;width:42px;min-width:42px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:42px;min-width:42px;padding:0x 0px;text-align:center;">
					<ul>
						<li>
							<a href="<?php echo url_for('vehicle/view?vehicle_id='.$vehicle->id.'&token_id='.$vehicle->token_id) ?>" class="" rel="<?php echo $task->id ?>">									 
									<img src="<?php echo image_path('new_icons/view')  ?>" >								 
							</a>
						</li> 
						<li> 
							<a href="#" class="ui-action-button" onclick="Javascript:updateVehicle(<?php echo $vehicle->id ?>);" rel="<?php echo $vehicle->id ?>">	
								 
									<img src="<?php echo image_path('new_icons/save_small')  ?>" >
								 
							</a>
						</li>
					</ul>
				</div>
			</td>
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		 
		<?php endforeach; ?>
		</tbody> 
</table>
</div>

<script type="text/javascript">

	$(function(){
 
    // add multiple select / deselect functionality
    $("#allcategorycheck").click(function () {
          $('.checkcategory').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".checkcategory").click(function(){
 
        if($(".checkcategory").length == $(".checkcategory:checked").length) {
            $("#allcategorycheck").attr("checked", "checked");
        } else {
            $("#allcategorycheck").removeAttr("checked");
        }
 
    });
});

</script>


