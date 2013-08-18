
<div id="categoryList">
<table class="" id="ui-data-list" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Vehicle') ?></th>   
			<th class=""><?php echo  ('Driver Name') ?></th> 
			<th class=""><?php echo  ('Departure Mileage') ?></th> 
			<th class=""><?php echo  ('Vehicle Type') ?></th>  
			<th class=""><?php echo  ('Fuel') ?></th>  
			<th class=""><?php echo  ('Acquired Fuel') ?></th>  
			<th class="" style="padding:2px 2px;text-align:center;"><?php echo  ('') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $vehicles as $vehicle ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $vehicle->id;?>]" class="checkcategory"  />
			</td>
			<td class="" style="width:90%;min-width:20px;"> 
				<img src="<?php echo image_path('new_icons/car_small') ?>">
				<?php echo '( '. $vehicle->plateCodeNo.' ) '.$vehicle->plateCode .' - '.$vehicle->plateNo.' ( '.$vehicle->vehicleMake.' ) ' ?>
			</td>
			<td class="" style="width:140px;min-width:140px;"> 
				<img style="vertical-align:bottom;margin-right:5px;" src="<?php echo image_path('setting/vehicle_driver_small') ?>"><?php echo $vehicle->fullName ?>
			</td>
			<td class="" style="width:120px;min-width:120px;"> 
				<?php echo $vehicle->departMileage ?>
			</td>
			<td class="" style="width:90px;min-width:90px;"> 
				<?php echo $vehicle->vehicleType ?>
			</td> 
			<td class="" style="width:50px;min-width:50px;"> 
				<?php echo $vehicle->fuelType ?>
			</td> 
			<td class="" style="width:80px;min-width:80px;"> 
				<?php echo $vehicle->acquiredFuelType.' litter' ?>
			</td> 
			 
			<td  class="" style="padding:0px 0px 0px 1px;width:22px;min-width:22px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:22px;min-width:22px;padding:0x 0px;text-align:center;">
					<ul>
						<li>
							<a href="#" class="" rel="<?php echo $task->id ?>">									 
									<img src="<?php echo image_path('new_icons/view')  ?>" >								 
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



