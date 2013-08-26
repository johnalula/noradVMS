
<div id="candidateList">
<table class="" id=" " >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border"  style="width:15px;padding:2px 8px;"><input type="checkbox" disabled id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Name') ?></th> 
			<th class=""><?php echo  ('Department') ?></th> 
			<th class=""><?php echo  ('Alias') ?></th> 
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach($customers as $key => $candidate ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="radio" id="selectCandidate-<?php echo $i ?>" name="selectCandidate" value="<?php echo  $candidate->id. '$'.$candidate->name ?>">
			</td>
			<td class="" style="width:260px;min-width:260px;"> 
				<?php echo $candidate->fullName ? $candidate->fullName : $candidate->name?>
			</td>
			<td class="" style="width:100px;min-width:100px;"> 
				<?php echo $candidate->id ?>
			</td>
			<td class="" style="width:80px;min-width:80px;"> 
				<?php echo $candidate->alias ?>
			</td>
			<td class="" style=""> 
				<?php echo $candidate->description  ?> 
			</td>  
			
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		<?php endforeach; ?>
		</tbody> 
</table>
</div>
 
