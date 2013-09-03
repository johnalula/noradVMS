
<div id="myDataList">
<table class="" id=" " >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border"  style="width:15px;padding:2px 8px;"><input type="checkbox" disabled id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Name') ?></th> 
			<th class=""><?php echo  ('Driver') ?></th> 
			<th class=""><?php echo  ('Mileage') ?></th> 
			<th class=""><?php echo  ('Type') ?></th> 
			<th class=""><?php echo  ('Make') ?></th>  
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach($candidates as $key => $candidate ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="radio" id="selectCandidate-<?php echo $i ?>" name="selectCandidate" value="<?php echo  $candidate->id. '$'.$candidate->plateCode.'$'. $candidate->plateNo.'$'. $candidate->id ?>">
			</td>
			<td class="" style="width:95%;;min-width:150px;"> 
				<img style="veritcal-align:bottom;" src="<?php echo image_path('new_icons/car_small') ?>">
				<?php echo '( '. $candidate->plateCodeNo.' ) '.$candidate->plateCode .' - '.$candidate->plateNo.' ( '.$candidate->vehicleMake.' ) ' ?>
			</td>
			<td class="" style="width:130px;min-width:130px;"> 
				<?php echo $candidate->fullName ? $candidate->fullName : $candidate->firstName.' '.$candidate->fatherName.' '.$candidate->grandFatherName ?>
			</td>
			<td class="" style="width:60px;min-width:60px;"> 
				<?php echo $candidate->currentMileage ?>
			</td>
			<td class="" style="width:80px;min-width:80px;"> 
				<?php echo $candidate->vehicleType ?>
			</td>  
			<td class="" style="width:80px;min-width:80px;"> 
				<?php echo $candidate->vehicleMake ?>
			</td>  
			
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		<?php endforeach; ?>
		</tbody> 
</table>
</div>
 
