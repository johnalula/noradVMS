
<div id="categoryList">
<table class="" id="ui-data-list" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Name') ?></th> 
			<th class=""><?php echo  ('Group') ?></th> 
			<th class=""><?php echo  ('Class') ?></th> 
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="" style="padding:2px 3px;text-align:center;"><?php echo  (' Actions') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $categorys as $category ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $category->id;?>]" class="checkcategory"  />
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo $category->categoryName ?>
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo CategoryCharacterization::fetchValue($category->category_group_id) ?>
			</td>
			<td class="" style="width:220px;min-width:220px;"> 
				<?php echo PropertyClassCore::fetchItemTypeValue($category->category_class_id) ?>
			</td>
			<td class="" style="width:99%;"> 
				<?php echo $category->description  ?> 
			</td>  
			<td  class="" style="padding:0px 0px 0px 2px;width:42px;min-width:42px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:42px;min-width:42px;padding:0x 0px;text-align:center;">
					<ul>
						<li>
							<a href="<?php echo url_for('category/view?category_id='.$category->id) ?>" class="ui-action-button" rel="<?php echo $category->id ?>">									 
									<img src="<?php echo image_path('new_icons/view')  ?>" >								 
							</a>
						</li> 
						<li> 
							<a href="#" class="ui-action-button" onclick="Javascript:deleteCategory(<?php echo $category->id ?>);" rel="<?php echo $category->id ?>">	
								 
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


