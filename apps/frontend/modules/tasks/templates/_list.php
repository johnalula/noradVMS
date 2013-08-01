
<table class="" id="dashboard-box" >
	<tbody>
		<tr> 
			<td > 
				<a href="<?php echo url_for('registration/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/book') ?>"><br>
						<span class="ui-dashboard-label">Registration</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('assignment/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/vehicle_setting_xlarge') ?>"><br>
						<span class="ui-dashboard-label">Assignment</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('fleet/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/fleet_manage') ?>"><br>
						<span class="ui-dashboard-label">Fleet Registration</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('fueling/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/group_xlarge') ?>"><br>
						<span class="ui-dashboard-label">Fueling</span>
						&nbsp;
					</div>
				</a>
			</td>  
		</tr> 
		<!--<tr> 
			<td > 
				<a href="<?php echo url_for('tasks/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/icon-48-user') ?>"><br>
						<span class="ui-dashboard-label">Accident & Incident</span>
						&nbsp;
					</div>
				</a>
			</td>   
		</tr> -->
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

