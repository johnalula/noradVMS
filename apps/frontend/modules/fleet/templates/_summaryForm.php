
<div class="ui-form-container">
	<table style="border:0px solid #000;" class="ui-form-table">
		<thead>
			<tr>
				<th>No</th>
				<th>Vehicle</th>
				<th>Difference (KM)</th>
				<th>No days</th>
				<th>Per KM</th>
				<th>Per Day</th>
				<th>Total Cost</th> 
				<th>Remark</th> 
			</tr>
		</thead>
		<tbody>
			<?php $row=1; ?>
			<?php foreach($task_orders as $order): ?>
			<tr>
				<td class="" style="text-align:center;"><?php echo $row ?></td> 
				<td class="" style="text-align:left;"><?php echo '( '. $order->plateCodeNo.' ) '.$order->plateCode .' - '.$order->plateNo.' ( '.$order->vehicleMake.' ) ' ?></td>
				<td class="" style="text-align:center;"><?php echo $order->diffMileage ?></td>
				<td class="" style="text-align:center;"><?php echo $order->fieldDays+$order->delayedDays?></td>
				<td class="" style="text-align:right;"><?php echo $order->diffMileage*5 ?></td>
				<td class="" style="text-align:right;"><?php echo ($order->fieldDays+$order->delayedDays)*$order->paymentAmount ?></td>
				<td class="" style="text-align:right;"><?php echo $order->order_cost ?></td>
				 
				<td class=""></td>
			</tr>
			<?php $row++; ?>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan=6 style="text-align:right;">Total Mileage Used</td>
				<td class="" style="text-align:right;"><?php echo $task->total_cost ?></td>
				<td class=""></td> 
			</tr>
		</tfoot>
	</table>
</div>
