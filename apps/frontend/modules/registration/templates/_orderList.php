
<div id="categoryList">
<table class="" id="ui-data-list" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Name') ?></th> 
			<th class=""><?php echo  ('Quantity') ?></th> 
			<th class=""><?php echo  ('Unit') ?></th> 
			<th class=""><?php echo  ('Currency') ?></th> 
			<th class=""><?php echo  ('Class') ?></th> 
			<th class=""><?php echo  ('Description') ?></th>  
			<th class="" style="padding:2px 3px;text-align:center;"><?php echo  (' Actions') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $task_orders as $order ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>  ui-input-body-header"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td  class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $order->id;?>]" class="checkcategory"  />
			</td>
			<td class="ui-input-body-box" style="width:140px;min-width:140px;"> 
				<input type="text" style="width:140px;min-width:140px;" id="" value="<?php echo $order->categoryName ?>">
			</td>
			<td class="ui-input-body-box" style="width:70px;min-width:70px;"> 
				<input type="text" style="width:70px;min-width:70px;" id="" value="<?php echo $order->actual_quantity ?>">
			</td>
			<td class="ui-input-body-box" style="width:80px;min-width:80px;"> 
				<input type="text" style="width:80px;min-width:80px;" id="" value="<?php echo $order->unitName ?>">
			</td>
			<td class="ui-input-body-box" style="width:80px;min-width:80px;"> 
				<input type="text" style="width:80px;min-width:80px;" id="" value="<?php echo $order->currencyName ?>">
			</td>
			<td class="ui-input-body-box" style="width:80px;min-width:80px;"> 
				<input type="text" style="width:80px;min-width:80px;" disabled id="" value="<?php echo PropertyClassCore::fetchItemTypeValue($order->clss) ?>"> 
			</td>
			<td class="ui-input-body-box" style="width:97%;min-width:90px;"> 
				<input type="text" style="width:97%;min-width:90px;" id="" value="<?php echo $order->tskStatus  ?> ">
			</td>  
			<td  class="" style="padding:0px 0px 0px 2px;width:42px;min-width:42px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:42px;min-width:42px;padding:0x 0px;text-align:center;">
					<ul>
						<li>
							<a href="<?php echo url_for('category/view?category_id='.$order->id) ?>" class="ui-action-button" rel="<?php echo $order->id ?>">									 
									<img src="<?php echo image_path('new_icons/save_small')  ?>" >								 
							</a>
						</li> 
						<li> 
							<a href="#" class="ui-action-button" onclick="Javascript:deleteCategory(<?php echo $order->id ?>);" rel="<?php echo $order->id ?>">	
								 
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


