<h1>Maintenances List</h1>

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
    <?php foreach ($maintenances as $maintenance): ?>
    <tr>
      <td><a href="<?php echo url_for('maintenance/show?id='.$maintenance->getId()) ?>"><?php echo $maintenance->getId() ?></a></td>
      <td><?php echo $maintenance->getVehicleId() ?></td>
      <td><?php echo $maintenance->getTokenId() ?></td>
      <td><?php echo $maintenance->getStartDate() ?></td>
      <td><?php echo $maintenance->getEndDate() ?></td>
      <td><?php echo $maintenance->getEffectiveDate() ?></td>
      <td><?php echo $maintenance->getStatus() ?></td>
      <td><?php echo $maintenance->getDescription() ?></td>
      <td><?php echo $maintenance->getType() ?></td>
      <td><?php echo $maintenance->getAgreementParticipantId() ?></td>
      <td><?php echo $maintenance->getDepartureDate() ?></td>
      <td><?php echo $maintenance->getDepartureTime() ?></td>
      <td><?php echo $maintenance->getDepartureStatus() ?></td>
      <td><?php echo $maintenance->getReturnDate() ?></td>
      <td><?php echo $maintenance->getReturnTime() ?></td>
      <td><?php echo $maintenance->getReturnStatus() ?></td>
      <td><?php echo $maintenance->getNoOfPassangers() ?></td>
      <td><?php echo $maintenance->getServiceAgreementCost() ?></td>
      <td><?php echo $maintenance->getServiceReason() ?></td>
      <td><?php echo $maintenance->getDepartureMileage() ?></td>
      <td><?php echo $maintenance->getReturnMileage() ?></td>
      <td><?php echo $maintenance->getDifferenceMileag() ?></td>
      <td><?php echo $maintenance->getServiceTypeId() ?></td>
      <td><?php echo $maintenance->getDuelAcquireId() ?></td>
      <td><?php echo $maintenance->getDestination() ?></td>
      <td><?php echo $maintenance->getServiceNoDays() ?></td>
      <td><?php echo $maintenance->getDriverId() ?></td>
      <td><?php echo $maintenance->getTransfererId() ?></td>
      <td><?php echo $maintenance->getTransfereeId() ?></td>
      <td><?php echo $maintenance->getNewVehicleId() ?></td>
      <td><?php echo $maintenance->getReturneeId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('maintenance/new') ?>">New</a>
