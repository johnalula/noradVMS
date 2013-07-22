<h1>Accident tasks List</h1>

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
    <?php foreach ($accident_tasks as $accident_task): ?>
    <tr>
      <td><a href="<?php echo url_for('accident/show?id='.$accident_task->getId()) ?>"><?php echo $accident_task->getId() ?></a></td>
      <td><?php echo $accident_task->getVehicleId() ?></td>
      <td><?php echo $accident_task->getTokenId() ?></td>
      <td><?php echo $accident_task->getStartDate() ?></td>
      <td><?php echo $accident_task->getEndDate() ?></td>
      <td><?php echo $accident_task->getEffectiveDate() ?></td>
      <td><?php echo $accident_task->getStatus() ?></td>
      <td><?php echo $accident_task->getDescription() ?></td>
      <td><?php echo $accident_task->getType() ?></td>
      <td><?php echo $accident_task->getAgreementParticipantId() ?></td>
      <td><?php echo $accident_task->getDepartureDate() ?></td>
      <td><?php echo $accident_task->getDepartureTime() ?></td>
      <td><?php echo $accident_task->getDepartureStatus() ?></td>
      <td><?php echo $accident_task->getReturnDate() ?></td>
      <td><?php echo $accident_task->getReturnTime() ?></td>
      <td><?php echo $accident_task->getReturnStatus() ?></td>
      <td><?php echo $accident_task->getNoOfPassangers() ?></td>
      <td><?php echo $accident_task->getServiceAgreementCost() ?></td>
      <td><?php echo $accident_task->getServiceReason() ?></td>
      <td><?php echo $accident_task->getDepartureMileage() ?></td>
      <td><?php echo $accident_task->getReturnMileage() ?></td>
      <td><?php echo $accident_task->getDifferenceMileag() ?></td>
      <td><?php echo $accident_task->getServiceTypeId() ?></td>
      <td><?php echo $accident_task->getDuelAcquireId() ?></td>
      <td><?php echo $accident_task->getDestination() ?></td>
      <td><?php echo $accident_task->getServiceNoDays() ?></td>
      <td><?php echo $accident_task->getDriverId() ?></td>
      <td><?php echo $accident_task->getTransfererId() ?></td>
      <td><?php echo $accident_task->getTransfereeId() ?></td>
      <td><?php echo $accident_task->getNewVehicleId() ?></td>
      <td><?php echo $accident_task->getReturneeId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('accident/new') ?>">New</a>
