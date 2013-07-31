
<table class="" id="dashboard-box" >
	<tbody>
		<tr> 
			<td > 
				<a href="<?php echo url_for('vehicle/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/book') ?>"><br>
						<span class="ui-dashboard-label">Vehicles</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('assigned_vehicles/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/vehicle_setting_xlarge') ?>"><br>
						<span class="ui-dashboard-label">Assigned Vehicles</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('vehicle_type/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/fleet_manage') ?>"><br>
						<span class="ui-dashboard-label">Vehicle Type</span>
						&nbsp;
					</div>
				</a>
			</td>   
			<td > 
				<a href="<?php echo url_for('fuel_type/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/oil_large') ?>"><br>
						<span class="ui-dashboard-label">Fuel Type</span>
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

