

<table class="" id="locationList" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Name') ?></th> 
			<th class=""><?php echo  ('Group') ?></th>  
			<th class=""><?php echo  ('Date') ?></th>  
			<th class=""><?php echo  ('Time') ?></th>  
			<th class=""><?php echo  ('Action') ?></th>  
			<th class=""><?php echo  ('Module') ?></th>  
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $activitys as $activity ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $activity->id;?>]" class="checkactivity"  />
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo $activity->userName ?>
			</td>
			<td class="" style="width:180px;"> 
				<?php echo $activity->groupName  ?> 
			</td>  
			<td class="" style="width:240px;"> 
				<?php echo $activity->accessDate  ?> 
			</td>  
			<td class="" style="width:180px;"> 
				<?php echo $activity->accessTime  ?> 
			</td>  
			<td class="" style="width:120px;"> 
				<?php echo SystemLogFileTable::findActionValue($activity->accessAction)  ?> 
			</td>  
			<td class="" style="width:98%;"> 
				<?php echo $activity->id  ?> 
			</td>  
			 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		<?php endforeach; ?>
		 

		</tbody> 
</table>

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


