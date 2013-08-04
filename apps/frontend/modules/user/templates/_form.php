
 <!--participant_id: { type: integer }
    username: { type: string(255), notnull: true }
    password: { type: string(255), notnull: true }
    group_id: { type: integer } 
    is_active: { type: boolean, default: 0 }
    is_blocked: { type: boolean, default: 0 }
    is_super_admin: { type: boolean, default: 0 }
    status: { type: boolean, default: 0 }
    permission_mode: { type: integer }
    ui_theme_color_setting: { type: integer }
    ui_language_setting: { type: integer }-->
    
<table class="autoWidth" id="detailTable" >
	<tbody style="width:30%;"> 
		<tr>
			<td class="rightSide"><?php echo __('Employee') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:190px;" id="employee" name="" >			
				<input type="hidden" style="width:190px;" id="employee_id" name="" >			
				<span class="issue_for" style="">
					<a href='#' class='candidateModal' rel='#candidatePrompts'>
						<button class="ui-button"> ... </button>
					</a> 
				</span> 	
				<br><span id="employee_validation" class="error_validation displayNone"><?php echo __('Employee is required!') ?></span>		
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('User Name') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:190px;" id="username" name="" >			
				<br><span id="username_validation" class="error_validation displayNone"><?php echo __('Username is required!') ?></span>		
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('Password') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:190px;" id="name" name="" >			
				<br><span id="password_validation" class="error_validation displayNone"><?php echo __('Password is required!') ?></span>		
			</td>		
		</tr>		 
		<tr>
			<td class="rightSide"><?php echo __('Confirm Password') ?>:<span class="ui-mandatory">*</span></td>
			<td>
				<input type="text" style="width:190px;" id="name" name="" >			
				<br><span id="confirm_password_validation" class="error_validation displayNone"><?php echo __('Confirm password is required!') ?></span>		
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
  

