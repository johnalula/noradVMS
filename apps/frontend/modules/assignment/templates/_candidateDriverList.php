
<div id="myDataList">
<table class="" id=" " >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border"  style="width:15px;padding:2px 8px;"><input type="checkbox" disabled id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Name') ?></th> 
			<th class=""><?php echo  ('Alias') ?></th> 
			<th class=""><?php echo  ('Parent') ?></th> 
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach($drivers as $key => $candidate ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="radio" class="selectDriver" rel="<?php echo  $candidate->employee_id ?>" id="selectCandidate-<?php echo $i ?>" name="selectCandidate" value="<?php echo  $candidate->employee_id. '$'.$candidate->firstName ?>">
			</td>
			<td class="" style="width:200px;min-width:200px;"> 
				<?php echo $candidate->firstName.' '.$candidate->fatherName.' '.$candidate->grandFatherName . ' ' ?>
			</td>
			<td class="" style="width:60px;min-width:60px;"> 
				<?php echo $candidate->id ?>
			</td>
			<td class="" style="width:120px;min-width:120px;"> 
				<?php echo $candidate->id ?>
			</td>
			<td class="" style="width:95%;"> 
				<?php echo $candidate->description ?>
			</td>  
			
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		<?php endforeach; ?>
		</tbody> 
</table>
</div>
 
