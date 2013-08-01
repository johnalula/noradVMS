
<table class="" id="locationList" >
	<thead>
		<tr class="">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class=""><?php echo  ('Certificate Type') ?></th> 
			<th class=""><?php echo  ('Reference No') ?></th>  
			<th class=""><?php echo  ('No of Pages') ?></th>  
			<th class=""><?php echo  ('File No') ?></th>  
			<th class="" style="min-width:100px;"><?php echo  ('Description') ?></th>  
			<th class="" style="padding:2px 6px;text-align:center;"><?php echo  (' +/-') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
		<tr class="ui-input-header">
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th class="ui-inpu-box" style="width:140px;min-width:140px;">
				<select id="certificate_type" style="width:140px;min-width:140px;" >
					<option value="1"><?php echo 'Project' ?></option>
					<option value="2"><?php echo 'Donated' ?></option>
					<option value="3"><?php echo 'Purchased' ?></option>
				</select>
			</th> 
			<th class="ui-inpu-box" style="width:130px;min-width:130px;">
				<input type="text" style="width:130px;min-width:130px;" id="reference_no" name="reference_no" >
			</th>  
			<th class="ui-inpu-box" style="width:100px;min-width:100px;">
				<input type="text" style="width:100px;min-width:100px;" id="no_of_pages" name="no_of_pages" >
			</th>  
			<th class="ui-inpu-box" style="width:120px;min-width:120px;">
				<input type="text"style="width:120px;min-width:120px;"  id="file_no" name="file_no">
			</th>  
			<th class="ui-inpu-box" style="width:97%;min-width:70px;">
				<input type="text" style="width:97%;min-width:70px;" id="description" name="description">
			</th>  
			<th class="" style="padding:0px 1px;text-align:center;border-left:1px solid #ccc;">
				 <span class="" style=""><a href='#' class='locationModal' rel='#locationPrompts'>
				<button class="ui-action-button">...</button></a> </span> 	
			</th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>				 
	</thead>
	<tbody>
		<?php $row=0 ?>

		 

		<tr class="ui-input-body-header"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;background:#dfe2e7;"> 
				<input type="checkbox" id="category-check-<?php echo $i;?>" name="category-check[<?php echo $task->id;?>]" class="checkcategory"  />
			</td>
			<td class="ui-input-body-box" style="width:132px;min-width:132px;">
				<input type="text" style="width:132px;min-width:132px;" disabled id="certificate_type" name="certificate_type" >
			</td> 
			<td class="ui-input-body-box" style="width:130px;min-width:130px;">
				<input type="text" style="width:130px;min-width:130px;" id="reference_no" name="reference_no" >
			</td>  
			<td class="ui-input-body-box" style="width:100px;min-width:100px;">
				<input type="text" style="width:100px;min-width:100px;" id="no_of_pages" name="no_of_pages" >
			</td>  
			<td class="ui-input-body-box" style="width:120px;min-width:120px;">
				<input type="text"style="width:120px;min-width:120px;"  id="file_no" name="file_no">
			</td>  
			<td class="ui-input-body-box" style="width:97%;min-width:50px;">
				<input type="text" style="width:97%;min-width:70px;" id="description" name="description">
			</td>  
			<td  class="" style="padding:0px 2px 0px 2px;width:50px;min-width:50px;border-left:1px solid #ddd;background:#dfe2e7;"> 
				<div class="ui-list-action" style="width:50px;min-width:50px;padding:0x 2px;text-align:center;">
					<ul>
						<li>
							<a href="<?php echo url_for('category/view?participant_id='.$task->id) ?>" class="" rel="<?php echo $task->id ?>">	
								<button class="ui-button"  >
									<img style="margin:0px;" src="<?php echo image_path('new_icons/save_small')  ?>" >
								</button> 
							</a>
						</li> 
						<li> 												
							<button class="ui-button" onClick="Javascript:deleteCategory(<?php echo $task->id ?>);">
								<img src="<?php echo image_path('icons/delete_small')  ?>" >
							</button>
						</a>
						</li>
					</ul>
				</div>
			</td>
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-left:1px solid #bbb;border-right:1px solid #bbb;border-bottom:1px solid #bbb;"> 
			</td>
		<?php $row++ ?>
		</tr>
		 
		 

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



