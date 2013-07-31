
<table class="" id="dashboard-box" >
	<tbody>
		<tr> 
			<td > 
				<a href="<?php echo url_for('unit/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/book') ?>"><br>
						<span class="ui-dashboard-label">Unit</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('currency/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/vehicle_setting_xlarge') ?>"><br>
						<span class="ui-dashboard-label">Currency</span>
						&nbsp;
					</div>
				</a>
			</td>  
			<td > 
				<a href="<?php echo url_for('category/index') ?>">
					<div class="ui-dashboard">
						<img src="<?php echo image_path('new_icons/fleet_manage') ?>"><br>
						<span class="ui-dashboard-label">Category</span>
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

