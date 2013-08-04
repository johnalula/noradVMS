 
<?php 
	$group_types = UserGroupTable::$ALL_GROUP_TYPES;
	$languages = UserTable::$ALL_LANGUAGES;
	$themes = UserTable::$ALL_THEME_COLORS;
?>
<table class="autoWidth" id="detailTable" >
	<tbody style="width:30%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Group Type') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:140px;margin-right:8px;" id="group_type_id" name="group_type_id" >
					<?php foreach($group_types as $key => $group_type): ?>
					<option value="<?php echo $key ?>" <?php echo $key == UserGroupTable::$GUEST ? 'selected':'' ?>>
					<?php echo $group_type ?></option>		
					<?php endforeach; ?>
				</select>	
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('Language') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:140px;margin-right:8px;" id="language_id" name="language_id" >
					<?php foreach($languages as $key => $language): ?>
					<option value="<?php echo $key ?>" <?php echo $key == UserTable::$ENGLISH ? 'selected':'' ?>>
					<?php echo $language ?></option>		
					<?php endforeach; ?>
				</select>	
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('Theme') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:140px;margin-right:8px;" id="theme_id" name="theme_id" >
					<?php foreach($themes as $key => $theme): ?>
					<option value="<?php echo $key ?>" <?php echo $key == UserTable::$BLUE_COLOR ? 'selected':'' ?>>
					<?php echo $theme ?></option>		
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
		
	</tbody>     
</table>
  

