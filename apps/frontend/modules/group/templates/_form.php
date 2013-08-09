
 <!-- group_type_id: { type: integer }
   name: { type: string(100) }   
   is_active: { type: boolean, default: 0 }
   is_blocked: { type: boolean, default: 0 }
   status: { type: boolean, default: 0 }
   ui_theme_color_setting: { type: integer }
   ui_language_setting: { type: integer }
   description: { type: clob }-->
    
<table class="autoWidth" id="detailTable" >
	<tbody style="width:30%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:190px;" id="groupname" name="" >			
				<br><span id="groupname_validation" class="error_validation displayNone"><?php echo __('Group name is required!') ?></span>		
			</td>		
		</tr>	 
		<tr>
			<td class="rightSide"><?php echo __('Active') ?>:<span class="ui-mandatory"></span></td>
			<td>
				<input type="checkbox" style="" id="isActive" name="" >
					
				<span style="margin-bottom:3px;margin-left:35px;padding:2px 8px;"><?php echo __('Block') ?>:</span><input style="vertical-align:bottom;" type="checkbox" style="" id="isBlocked" name="" >
				</span>			
				
			</td>		
		</tr>	 
		<tr>
			<td class="rightSide"><?php echo __('Description') ?>:</td>
			<td>
				<textarea style="width:190px;vertical-align:bottom;" rows="1" id="description" name="" ></textarea>		
			</td> 
		</tr>   
		
	</tbody>     
</table>
  

