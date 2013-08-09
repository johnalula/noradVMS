 
<?php 
	$groups = UserGroupTable::fetchGroups();
	$languages = UserTable::$ALL_LANGUAGES;
	$themes = UserTable::$ALL_THEME_COLORS;
?>
<table class="autoWidth" id="detailTable" >
	<tbody style="width:30%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Active') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input type="checkbox" style="" id="username" name="" >
					
				<span style="margin-bottom:3px;margin-left:35px;padding:2px 8px;"><?php echo __('Block') ?>:</span>
				<input style="vertical-align:bottom;" type="checkbox"  id="username" name="" >
				
			</td>		
		</tr>	 
		<tr>
			<td class="rightSide"><?php echo __('Group') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<select style="width:160px;margin-right:8px;" id="group_type_id" name="group_type_id" >
					<?php foreach($groups as $key => $group): ?>
					<option value="<?php echo $key->groupID ?>" >
					<?php echo $group->groupName ?></option>		
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
		  
		
	</tbody>     
</table>
  

