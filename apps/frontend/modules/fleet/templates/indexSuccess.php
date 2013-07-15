<h1>Fleet service tasks List</h1>

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
    <?php foreach ($fleet_service_tasks as $fleet_service_task): ?>
    <tr>
      <td><a href="<?php echo url_for('fleet/show?id='.$fleet_service_task->getId()) ?>"><?php echo $fleet_service_task->getId() ?></a></td>
      <td><?php echo $fleet_service_task->getVehicleId() ?></td>
      <td><?php echo $fleet_service_task->getTokenId() ?></td>
      <td><?php echo $fleet_service_task->getStartDate() ?></td>
      <td><?php echo $fleet_service_task->getEndDate() ?></td>
      <td><?php echo $fleet_service_task->getEffectiveDate() ?></td>
      <td><?php echo $fleet_service_task->getStatus() ?></td>
      <td><?php echo $fleet_service_task->getDescription() ?></td>
      <td><?php echo $fleet_service_task->getType() ?></td>
      <td><?php echo $fleet_service_task->getAgreementParticipantId() ?></td>
      <td><?php echo $fleet_service_task->getDepartureDate() ?></td>
      <td><?php echo $fleet_service_task->getDepartureTime() ?></td>
      <td><?php echo $fleet_service_task->getDepartureStatus() ?></td>
      <td><?php echo $fleet_service_task->getReturnDate() ?></td>
      <td><?php echo $fleet_service_task->getReturnTime() ?></td>
      <td><?php echo $fleet_service_task->getReturnStatus() ?></td>
      <td><?php echo $fleet_service_task->getNoOfPassangers() ?></td>
      <td><?php echo $fleet_service_task->getServiceAgreementCost() ?></td>
      <td><?php echo $fleet_service_task->getServiceReason() ?></td>
      <td><?php echo $fleet_service_task->getDepartureMileage() ?></td>
      <td><?php echo $fleet_service_task->getReturnMileage() ?></td>
      <td><?php echo $fleet_service_task->getDifferenceMileag() ?></td>
      <td><?php echo $fleet_service_task->getServiceTypeId() ?></td>
      <td><?php echo $fleet_service_task->getDuelAcquireId() ?></td>
      <td><?php echo $fleet_service_task->getDestination() ?></td>
      <td><?php echo $fleet_service_task->getServiceNoDays() ?></td>
      <td><?php echo $fleet_service_task->getDriverId() ?></td>
      <td><?php echo $fleet_service_task->getTransfererId() ?></td>
      <td><?php echo $fleet_service_task->getTransfereeId() ?></td>
      <td><?php echo $fleet_service_task->getNewVehicleId() ?></td>
      <td><?php echo $fleet_service_task->getReturneeId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('fleet/new') ?>">New</a>
