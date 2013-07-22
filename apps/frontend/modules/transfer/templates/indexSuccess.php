<h1>Transfer tasks List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Vehicle</th>
      <th>Token</th>
      <th>Start date</th>
      <th>End date</th>
      <th>Effective date</th>
      <th>Status</th>
      <th>Description</th>
      <th>Type</th>
      <th>Agreement participant</th>
      <th>Departure date</th>
      <th>Departure time</th>
      <th>Departure status</th>
      <th>Return date</th>
      <th>Return time</th>
      <th>Return status</th>
      <th>No of passangers</th>
      <th>Service agreement cost</th>
      <th>Service reason</th>
      <th>Departure mileage</th>
      <th>Return mileage</th>
      <th>Difference mileag</th>
      <th>Service type</th>
      <th>Duel acquire</th>
      <th>Destination</th>
      <th>Service no days</th>
      <th>Driver</th>
      <th>Transferer</th>
      <th>Transferee</th>
      <th>New vehicle</th>
      <th>Returnee</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($transfer_tasks as $transfer_task): ?>
    <tr>
      <td><a href="<?php echo url_for('transfer/show?id='.$transfer_task->getId()) ?>"><?php echo $transfer_task->getId() ?></a></td>
      <td><?php echo $transfer_task->getVehicleId() ?></td>
      <td><?php echo $transfer_task->getTokenId() ?></td>
      <td><?php echo $transfer_task->getStartDate() ?></td>
      <td><?php echo $transfer_task->getEndDate() ?></td>
      <td><?php echo $transfer_task->getEffectiveDate() ?></td>
      <td><?php echo $transfer_task->getStatus() ?></td>
      <td><?php echo $transfer_task->getDescription() ?></td>
      <td><?php echo $transfer_task->getType() ?></td>
      <td><?php echo $transfer_task->getAgreementParticipantId() ?></td>
      <td><?php echo $transfer_task->getDepartureDate() ?></td>
      <td><?php echo $transfer_task->getDepartureTime() ?></td>
      <td><?php echo $transfer_task->getDepartureStatus() ?></td>
      <td><?php echo $transfer_task->getReturnDate() ?></td>
      <td><?php echo $transfer_task->getReturnTime() ?></td>
      <td><?php echo $transfer_task->getReturnStatus() ?></td>
      <td><?php echo $transfer_task->getNoOfPassangers() ?></td>
      <td><?php echo $transfer_task->getServiceAgreementCost() ?></td>
      <td><?php echo $transfer_task->getServiceReason() ?></td>
      <td><?php echo $transfer_task->getDepartureMileage() ?></td>
      <td><?php echo $transfer_task->getReturnMileage() ?></td>
      <td><?php echo $transfer_task->getDifferenceMileag() ?></td>
      <td><?php echo $transfer_task->getServiceTypeId() ?></td>
      <td><?php echo $transfer_task->getDuelAcquireId() ?></td>
      <td><?php echo $transfer_task->getDestination() ?></td>
      <td><?php echo $transfer_task->getServiceNoDays() ?></td>
      <td><?php echo $transfer_task->getDriverId() ?></td>
      <td><?php echo $transfer_task->getTransfererId() ?></td>
      <td><?php echo $transfer_task->getTransfereeId() ?></td>
      <td><?php echo $transfer_task->getNewVehicleId() ?></td>
      <td><?php echo $transfer_task->getReturneeId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('transfer/new') ?>">New</a>
