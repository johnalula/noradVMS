
<div id="myData">
<table class="" id="ui-data-list" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Name') ?></th> 
			<th class=""><?php echo  ('Group Type') ?></th> 
			<th class=""><?php echo  ('Theme Color') ?></th> 
			<th class=""><?php echo  ('Language') ?></th>  
			<th class=""><?php echo  ('Active') ?></th>  
			<th class=""><?php echo  ('Blocked') ?></th>  
			<th class="" style="padding:2px 3px;text-align:center;"><?php echo  (' Actions') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $groups as $group ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $group->id;?>]" class="checkcategory"  />
			</td>
			<td class="" style="width:98%;min-width:220px;"> 
				<?php echo $group->groupName ?>
			</td>
			<td class="" style="width:140px;min-width:140px;"> 
				<?php echo UserGroupTable::findGroupTypeValue($group->groupType) ?>
			</td>
			<td class="" style="width:100px;min-width:100px;"> 
				<?php echo UserTable::findUIThemeValue($group->groupThemeColor) ?>
			</td>
			<td class="" style="width:80px;min-width:80px;"> 
				<?php echo UserTable::findLanguageValue($group->groupLanguage)  ?> 
			</td>  
			<td class="" style="width:50px;min-width:50px;text-align:center;"> 
				<?php if($group->isActive): ?>
					<a href=""><img src="<?php echo image_path('new_icons/user_active_small') ?>" title="Active Group"></a>
				<?php else: ?>
					<a href=""><img src="<?php echo image_path('new_icons/user_inactive_small') ?>" title="In Active Group"></a>
				<?php endif; ?>
			</td>
			<td class="" style="width:50px;min-width:50px;text-align:center;"> 
				<?php if($group->isBlocked): ?>
					<a href=""><img src="<?php echo image_path('new_icons/lock_small') ?>" title="Blocked Group"></a>
				<?php else: ?>
					<a href=""><img src="<?php echo image_path('new_icons/lock_open_small') ?>" title="Unblocked Group"></a>
				<?php endif; ?>
			</td>
			<td  class="" style="padding:0px 0px 0px 2px;width:42px;min-width:42px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:42px;min-width:42px;padding:0x 0px;text-align:center;">
					<ul>
						<li>
							<a href="<?php echo url_for('group/view?user_id='.$group->id) ?>" class="ui-action-button" rel="<?php echo $group->id ?>">									 
									<img src="<?php echo image_path('new_icons/view')  ?>" >								 
							</a>
						</li> 
						<li> 
						 
							<a href="#" class="ui-action-button" onclick="Javascript:deleteGroup('<?php echo $group->id .'$'. $group->token_id ?>');" rel="<?php echo $group->id ?>">	
								 
									<img src="<?php echo image_path('icons/delete')  ?>" >
								 
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


