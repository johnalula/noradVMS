<h1>Fueling tasks List</h1>

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
    <?php foreach ($fueling_tasks as $fueling_task): ?>
    <tr>
      <td><a href="<?php echo url_for('fueling/show?id='.$fueling_task->getId()) ?>"><?php echo $fueling_task->getId() ?></a></td>
      <td><?php echo $fueling_task->getVehicleId() ?></td>
      <td><?php echo $fueling_task->getTokenId() ?></td>
      <td><?php echo $fueling_task->getStartDate() ?></td>
      <td><?php echo $fueling_task->getEndDate() ?></td>
      <td><?php echo $fueling_task->getEffectiveDate() ?></td>
      <td><?php echo $fueling_task->getStatus() ?></td>
      <td><?php echo $fueling_task->getDescription() ?></td>
      <td><?php echo $fueling_task->getType() ?></td>
      <td><?php echo $fueling_task->getAgreementParticipantId() ?></td>
      <td><?php echo $fueling_task->getDepartureDate() ?></td>
      <td><?php echo $fueling_task->getDepartureTime() ?></td>
      <td><?php echo $fueling_task->getDepartureStatus() ?></td>
      <td><?php echo $fueling_task->getReturnDate() ?></td>
      <td><?php echo $fueling_task->getReturnTime() ?></td>
      <td><?php echo $fueling_task->getReturnStatus() ?></td>
      <td><?php echo $fueling_task->getNoOfPassangers() ?></td>
      <td><?php echo $fueling_task->getServiceAgreementCost() ?></td>
      <td><?php echo $fueling_task->getServiceReason() ?></td>
      <td><?php echo $fueling_task->getDepartureMileage() ?></td>
      <td><?php echo $fueling_task->getReturnMileage() ?></td>
      <td><?php echo $fueling_task->getDifferenceMileag() ?></td>
      <td><?php echo $fueling_task->getServiceTypeId() ?></td>
      <td><?php echo $fueling_task->getDuelAcquireId() ?></td>
      <td><?php echo $fueling_task->getDestination() ?></td>
      <td><?php echo $fueling_task->getServiceNoDays() ?></td>
      <td><?php echo $fueling_task->getDriverId() ?></td>
      <td><?php echo $fueling_task->getTransfererId() ?></td>
      <td><?php echo $fueling_task->getTransfereeId() ?></td>
      <td><?php echo $fueling_task->getNewVehicleId() ?></td>
      <td><?php echo $fueling_task->getReturneeId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('fueling/new') ?>">New</a>
