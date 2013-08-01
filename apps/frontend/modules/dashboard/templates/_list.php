
<table class="" id="dashboard-box" >
	<tbody>
		<tr> 
			<td > 
				<a href="<?php echo url_for('tasks/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/book') ?>"><br>
						<span class="ui-dashboard-label">Main Tasks</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('vehicle_setting/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/vehicle_setting_xlarge') ?>"><br>
						<span class="ui-dashboard-label">Vehicle Setting</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('fleet_setting/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/fleet_large') ?>"><br>
						<span class="ui-dashboard-label">Fleet Setting</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('participant/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/participant_large') ?>"><br>
						<span class="ui-dashboard-label">Participant Management</span>
						&nbsp;
					</div>
				</a>
			</td>  
		</tr> 
		<tr> 
			<td > 
				<a href="<?php echo url_for('user_management/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/icon-48-user') ?>"><br>
						<span class="ui-dashboard-label">User Management</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('general_setting/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/icon-48-config') ?>"><br>
						<span class="ui-dashboard-label">General Setting</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('user_activity/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/user_activity') ?>"><br>
						<span class="ui-dashboard-label">User Activities</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('tasks/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/statistics_xlarge') ?>"><br>
						<span class="ui-dashboard-label">Report</span>
						&nbsp;
					</div>
				</a>
			</td>  
		</tr> 
	</tbody> 
</table>
 
<script>

	$(document).ready(function(){
		
		$('.ui-dashboard').mouseover(function(){
			
				$(this).addClass('ui-dashboard-shadowed');
				
				return false;
		});
		
		$('.ui-dashboard').mouseout(function(){
			
				$(this).removeClass('ui-dashboard-shadowed');
				
				return false;
		});
		
	});
</script>

