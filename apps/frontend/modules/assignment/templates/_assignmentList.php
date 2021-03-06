
<div id="dataList">
<table class="" id="ui-data-list" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Driver Name') ?></th> 
			<th class=""><?php echo  ('Vehicle') ?></th>  
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="" style="padding:2px 3px;text-align:center;"><?php echo  (' Actions') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $task_orders as $order ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?> "> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td  class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $order->id;?>]" class="checkcategory"  />
			</td>
			<td class="ui-input-body-box" style="width:240px;min-width:240px;"> 
				<?php echo $order->firstName.' '.$order->fatherName.' '.$order->grandFatherName ?>
			</td>
			<td class="ui-input-body-box" style="width:150px;min-width:150px;"> 
				<?php echo '('.$order->plateCodeNo .') ' .$order->plateCode.'  '. $order->plateNo ?> 
			</td> 
			<td class="ui-input-body-box" style="width:97%;min-width:90px;"> 
				<?php echo $order->id  ?> 
			</td>  
			<td  class="" style="padding:0px 0px 0px 2px;width:42px;min-width:42px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:42px;min-width:42px;padding:0x 0px;text-align:center;">
					<ul>
						<li>
							<span class="changeVehicle"rel="<?php echo $order->id ?>" >
								<div class="candidateVehicleModal" rel="#candidateVehiclePrompts">
									<span class="rowItem" rel="<?php echo $order->id ?>" >
									<a href="#" class="ui-action-button" rel="<?php echo $order->id ?>">									 
											<img src="<?php echo image_path('new_icons/revert_car_small')  ?>" >								 
									</a>
									</span>
								</div>
							</span>
						</li> 
						<li>
							<span class="changeDriver"rel="<?php echo $order->id ?>" >
								<div class="candidateDriverModal" rel="#candidateDriverPrompts">
									<span class="rowParty" rel="<?php echo $order->id ?>" >
									<a href="#" class="ui-action-button" rel="<?php echo $order->id ?>">									 
											<img src="<?php echo image_path('setting/revert_driver_small')  ?>" >							 
									</a>
									</span>
								</div>
							</span>
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


