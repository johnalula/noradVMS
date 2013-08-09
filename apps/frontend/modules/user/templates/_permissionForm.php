<?php 
	$modules = PermissionTable::$ALL_MODULES;
?>
<div id="categoryList">
<table class="" id="ui-data-list-center" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"> </th> 
			<th class=""><?php echo  ('Module Name') ?></th> 
			<th class="text-align:center!important;"><?php echo  ('Read') ?></th> 
			<th class="text-align:center;"><?php echo  ('Create') ?></th> 
			<th class="text-align:center;"><?php echo  ('Update') ?></th>  
			<th class="text-align:center;"><?php echo  ('Delete') ?></th>   
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
		<tr class="ui-data-checkbox">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<td class="ui-table-border" style="width:15px;padding:2px 8px;"></td> 
			<td class=""></td> 
			<td class="text-align:center!important;"><input type="checkbox" class="ui-checkbox" id="check_all_read" name="check_all_read" value="true" /></td> 
			<td class="text-align:center;"><input type="checkbox" class="ui-checkbox" id="check_all_create" name="check_all_create" value="true" /></td> 
			<td class="text-align:center;"><input type="checkbox" class="ui-checkbox" id="check_all_update" name="check_all_update" value="true" /></td>  
			<td class="text-align:center;"><input type="checkbox" class="ui-checkbox" id="check_all_delete" name="check_all_delete" value="true" /></td>   
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		<?php foreach( $modules as $key => $module ): ?>

		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" disabled id="category-check-<?php echo $i;?>" name="category-check[<?php echo $key;?>]" class="check_all_permision"  />
			</td>
			<td class="" style=""> 
				<?php echo $module ?>
			</td>
			<td class="" style="width:80px;min-width:80px;text-align:center;"> 
				<input type="checkbox" name="module-read[<?php echo $key ?>]" id="module-read-<?php echo $key ?>" rel="<?php echo $key ?>" class="check_all_read_permision">
			</td>
			<td class="" style="width:80px;min-width:80px;text-align:center;"> 
				<input type="checkbox" name="module-create[<?php echo $key ?>]" id="module-create-<?php echo $key ?>" rel="<?php echo $key ?>" class="check_all_create_permision">
			</td>
			<td class="" style="width:80px;min-width:80px;text-align:center;"> 
				<input type="checkbox" name="module-update[<?php echo $key ?>]" id="module-update-<?php echo $key ?>" class="check_all_update_permision">
			</td>
			<td class="" style="width:80px;min-width:80px;text-align:center;"> 
				<input type="checkbox" name="module-delete[<?php echo $key ?>]" id="module-delete-<?php echo $key ?>" class="check_all_delete_permision">
			</td>  
			 
			<td class="ui-table-list-border" style="width:8px;text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		<?php endforeach; ?>
		</tbody> 
</table>
</div>

<script type="text/javascript">

	$(document).ready(function(){
		
		$('.check_all_read_permision').click(function(){
			
			var data = document.getElementByName('');
			return false;
		});
			
	});
	
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

    // add multiple select / deselect functionality
    $("#check_all_read").click(function () {
          $('.check_all_read_permision').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".check_all_read_permision").click(function(){
 
        if($(".check_all_read_permision").length == $(".check_all_read_permision:checked").length) {
            $("#check_all_read").attr("checked", "checked");
        } else {
            $("#check_all_read").removeAttr("checked");
        }

    });

    $("#check_all_create").click(function () {
          $('.check_all_create_permision').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".check_all_create_permision").click(function(){
 
        if($(".check_all_create_permision").length == $(".check_all_create_permision:checked").length) {
            $("#check_all_create").attr("checked", "checked");
        } else {
            $("#check_all_create").removeAttr("checked");
        }
    });

    $("#check_all_update").click(function () {
          $('.check_all_update_permision').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".check_all_update_permision").click(function(){
 
        if($(".check_all_update_permision").length == $(".check_all_update_permision:checked").length) {
            $("#check_all_update").attr("checked", "checked");
        } else {
            $("#check_all_update").removeAttr("checked");
        }
    });

    $("#check_all_delete").click(function () {
          $('.check_all_delete_permision').attr('checked', this.checked);
    });
 
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".check_all_update_permision").click(function(){
 
        if($(".check_all_delete_permision").length == $(".check_all_delete_permision:checked").length) {
            $("#check_all_delete").attr("checked", "checked");
        } else {
            $("#check_all_delete").removeAttr("checked");
        }
    });

	 
});

</script>


