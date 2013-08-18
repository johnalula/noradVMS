<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
		
		 
		<div class="clearFix"></div>
	</div>
</div>
 
<!-- list container -->
 
<div class="ui-container ">
	<div class="ui-list-cont ui-background">	
		<div>
			<div class="ui-form-container">
				<table style="">
					<tr>
						<td class="ui-text-align-center">MEKELLE UNIVERSITY</td>
					</tr>
					<tr>
						<td class="ui-text-align-center">MU-UMB PROJECT</td>
					</tr>
					<tr>
						<td class="ui-text-align-center">MILEAGE RECORDING FORM FOR PROJECT</td>
					</tr>
					<tr>
						<td class="ui-text-align-center">FIELD AND LOCAL ACTIVITY</td>
					</tr>
					<tr>
						<td class=""><b>PHASE III: 2013</b></td>
					</tr>
				</table>
			</div>
			<div class="ui-form-container">
				<table style="width:auto;text-align:left;">
					<tr>
						<td class="">Project Name :</td>
						<td class=""><b>NORAD</b></td>
					</tr>
					<tr>
						<td class="">Requested By :</td>
						<td class=""><?php echo $task->customerName ?></td>
					</tr>
					<tr>
						<td class="">Plate No :</td>
						<td class="ui-text-align-center">
							<?php foreach($task_orders as $order): ?>
							<?php echo '('. $order->plateCodeNo.') '.$order->plateCode .' - '.$order->plateNo.',' ?>
							<?php endforeach; ?>
						</td>
					</tr>
					 
				</table>
			</div>
		</div>
		<div>
			<?php include_partial('fleetForm', array('task_orders'=>$task_orders, 'task'=>$task )) ?>
		</div>
		<div class="ui-form-container">
				<table style="text-align:left;">
					<tr>
						<td class="">Approved By:</td><td class=""></td>
						<td class="">Signature and Date:</td><td class=""></td>
					</tr>
					<tr>
						<td class="">Authorized By :</td><td class=""></td>
						<td class="">Signature and Date:</td><td class=""></td>
					</tr>
					 
				</table>
			</div>
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->
