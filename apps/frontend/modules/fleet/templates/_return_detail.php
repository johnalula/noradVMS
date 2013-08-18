<?php
	$types = array(1 => 'Refundable', 2 => 'Non-Refundable', )

?>


<table class="autoWidth" style="margin-left:10px;margin-top:5px;width:80%;" id="detailTable" >
	<tbody style="width:40%;"> 
		  
		<tr>
			<td class="rightSide"><?php echo __('Fleet No') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->id ?></span>
			</td>
			<td class="rightSide"><?php echo __('Customer') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->customerName ?></span>
			</td>
			
			<td class="rightSide"><?php echo __('Departure Date') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->departure_date ?></span>
			</td>
			 
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Reference No') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->reference_no ?></span>
			</td>
			<td class="rightSide"><?php echo __('Project No') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->projectNo ?></span>
			</td>
			
			<td class="rightSide"><?php echo __('Departure Time') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->departure_time ?></span>
			</td>
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Date') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->start_date ?></span>
			</td>
			<td class="rightSide"><?php echo __('Destination') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->destination ?></span>
			</td>
			<td class="rightSide"><?php echo __('Payment Mode') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo PaymentSettingTable::fetchPaymentModeValue($task->payment_mode_id) ?></span>
			</td>
		</tr> 
		<tr>
			<td class="rightSide"></td>
			<td>
				<span class="" style="padding:3px 10px;"></span>
			</td>
			<td class="rightSide"></td>
			<td>
				 
			</td>
			<td class="rightSide"></td>
			<td>
				 
			</td>
		</tr> 
		<tr>
			<td class="rightSide"><?php echo __('Authorize By') ?> :<span class="ui-mandatory"></span></td>
			<td>
				<span class="" style="padding:3px 10px;"><?php echo $task->isReturned ? 'false' : 'true' ?></span>
			</td>
			<td class="rightSide"><?php echo __('Registered By') ?> :<span class="ui-mandatory"></span></td>
			<td>
				 
			</td>
			<td class="rightSide"></td>
			<td>
				 
			</td>
		</tr> 
		
		 
	</tbody>     
</table> 
 
<script>
	
	


</script>
