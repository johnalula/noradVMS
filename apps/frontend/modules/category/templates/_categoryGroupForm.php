<?php

	
	$groups = CategoryCharacterization::$ALL;
	$clsss = PropertyClassCore::$ALL_ITEM_TYPES;
 
 
?>


<table class="autoWidth" id="detailTable" >
	<tbody style="width:50%;"> 
		<tr>
			<td class="rightSide" style="width:100px;"><?php echo __('Group') ?>:</td>
			<td>
				<select style="width:160px;margin-left:2px;"    id="category_group" name="category_group">
					<option>&nbsp;</option>
					<?php foreach($groups as $key => $group): ?>								 
						<option value="<?php echo  $key ?>" <?php echo CategoryCharacterization::$FIXED_ASSET == $key ? 'selected' : '';  ?> >
							<?php echo $group ?>
						</option>								 
					<?php endforeach; ?>
				</select>
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('Class') ?>:</td>
			<td>
				<select style="width:160px;margin-left:2px;"    id="category_class" name="category_class">
					<option>&nbsp;</option>
					<?php foreach($clsss as $key => $clss): ?>								 
						<option value="<?php echo  $key ?>" <?php echo PropertyClassCore::$VEHICLE == $key ? 'selected' : '';  ?>   >
							<?php echo $clss ?>
						</option>								 
					<?php endforeach; ?>
				</select> 
			</td> 
		</tr> 
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>
 
	</tbody>     
</table> 
  
