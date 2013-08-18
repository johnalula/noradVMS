
<div class="ui-form-container">
	<table style="border:0px solid #000;" class="ui-form-table">
		<thead>
			<tr>
				<th>Field Places</th>
				<th>Date</th>
				<th>Departure <br>Time</th>
				<th>Return <br>Time</th>
				<th>Starting <br>Mileage</th>
				<th>Return <br>Mileage</th>
				<th>Difference (KM)</th>
				<th style="text-align:center;">Name & Signature<br>Driver</th>
				<th style="text-align:center;">Name & Signature<br>User</th>
			</tr>
		</thead>
		<tbody>
			<?php $total=0; ?>
			<?php foreach($task_orders as $order): ?>
			<tr>
				<td class=""><?php   ?></td>
				<td class=""><?php   ?></td>
				<td class="" style="text-align:center;"><?php echo $task->departTime ?></td>
				<td class="" style="text-align:center;"><?php echo $task->returnTime ?></td>
				<td class="" style="text-align:right;"><?php echo $order->departMileage ?></td>
				<td class="" style="text-align:right;"><?php echo $order->departMileage ?></td>
				<td class="" style="text-align:right;"><?php echo $order->diffMileage ?></td>
				<td class="" style="width:120px;"></td>
				<td class=""></td>
			</tr>
			<?php $total +=$order->diffMileage; ?>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan=6 style="text-align:right;">Total Mileage Used</td>
				<td class="" style="text-align:right;"><?php echo $total ?></td>
				<td class=""></td>
				<td class=""></td> 
			</tr>
		</tfoot>
	</table>
</div>
