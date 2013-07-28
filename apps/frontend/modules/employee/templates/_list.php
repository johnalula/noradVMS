<table id="employeeList">
	<thead>
		<tr>
			<th class="ui-table-border" style="width:8px;border-left:1px solid #bbb;padding:4px 8px;"></th> 
			<th class="ui-table-border" style="width:15px;padding:2px 8px;"><input type="checkbox" id="allcategorycheck" name="all-category-check" value="true" /></th> 
			<th>Full Name</th>
			<th>Department</th>
			<th>Employement Type</th>
			<th>Job Title</th>
			<th>Status</th>
			<th class="" style="padding:2px 6px;text-align:center;width:45px;min-width:45px;"><?php echo  (' Actions') ?></th>
			<th class="ui-table-border" style="width:8px;border-left:0px solid #bbb;padding:4px 8px;"></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($employees as $key => $empployee ): ?>
		<tr class="<?php echo fmod($row, 2) ? 'even' : 'odd' ?>"> 
			<td class="ui-table-list-border" style="text-align:center;padding:4px 8px;background:#dfe2e7;border-right:1px solid #bbb;border-left:1px solid #bbb;border-bottom:1px solid #bbb;"> 
				 
			</td>
			<td class="" style="width:15px;min-width:15px;padding:2px 8px;"> 
				<input type="checkbox" id="category-check-<?php echo $key+1;?>" name="category-check[<?php echo $employee->id;?>]" class="checkcategory"  />
			</td>
			<td><?php echo $employee->fullName ?></td>
			<td><?php echo $employee->department ?></td>
			<td><?php echo $employee->employmentType ?></td>
			<td><?php echo $employee->jobTitle ?></td>
			<td><?php echo $employee->status ?></td>
			<td  class="" style="padding:0px 0px 0px 3px;width:45px;min-width:45px;border-right:0px solid #ddd;"> 
				<div class="ui-list-action" style="width:45px;min-width:45px;padding:0x 0px;text-align:center;">
					<ul>
						<li>
							<a href="<?php echo url_for('category/view?participant_id='.$employee->id) ?>" class="" rel="<?php echo $employee->id ?>">	
								<button class="ui-button"  >
									<img src="<?php echo image_path('icons/icon-16-preview')  ?>" >
								</button> 
							</a>
						</li> 
						<li> 												
							<button class="ui-button" onClick="Javascript:deleteCategory(<?php echo $employee->id ?>);">
								<img src="<?php echo image_path('icons/icon-16-delete')  ?>" >
							</button>
						</a>
						</li>
					</ul>
				</div>
			</td>
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
