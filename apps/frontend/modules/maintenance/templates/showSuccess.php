<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $maintenance->getId() ?></td>
    </tr>
    <tr>
      <th>Vehicle:</th>
      <td><?php echo $maintenance->getVehicleId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $maintenance->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Start date:</th>
      <td><?php echo $maintenance->getStartDate() ?></td>
    </tr>
    <tr>
      <th>End date:</th>
      <td><?php echo $maintenance->getEndDate() ?></td>
    </tr>
    <tr>
      <th>Effective date:</th>
      <td><?php echo $maintenance->getEffectiveDate() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $maintenance->getStatus() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $maintenance->getDescription() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $maintenance->getType() ?></td>
    </tr>
    <tr>
      <th>Agreement participant:</th>
      <td><?php echo $maintenance->getAgreementParticipantId() ?></td>
    </tr>
    <tr>
      <th>Departure date:</th>
      <td><?php echo $maintenance->getDepartureDate() ?></td>
    </tr>
    <tr>
      <th>Departure time:</th>
      <td><?php echo $maintenance->getDepartureTime() ?></td>
    </tr>
    <tr>
      <th>Departure status:</th>
      <td><?php echo $maintenance->getDepartureStatus() ?></td>
    </tr>
    <tr>
      <th>Return date:</th>
      <td><?php echo $maintenance->getReturnDate() ?></td>
    </tr>
    <tr>
      <th>Return time:</th>
      <td><?php echo $maintenance->getReturnTime() ?></td>
    </tr>
    <tr>
      <th>Return status:</th>
      <td><?php echo $maintenance->getReturnStatus() ?></td>
    </tr>
    <tr>
      <th>No of passangers:</th>
      <td><?php echo $maintenance->getNoOfPassangers() ?></td>
    </tr>
    <tr>
      <th>Service agreement cost:</th>
      <td><?php echo $maintenance->getServiceAgreementCost() ?></td>
    </tr>
    <tr>
      <th>Service reason:</th>
      <td><?php echo $maintenance->getServiceReason() ?></td>
    </tr>
    <tr>
      <th>Departure mileage:</th>
      <td><?php echo $maintenance->getDepartureMileage() ?></td>
    </tr>
    <tr>
      <th>Return mileage:</th>
      <td><?php echo $maintenance->getReturnMileage() ?></td>
    </tr>
    <tr>
      <th>Difference mileag:</th>
      <td><?php echo $maintenance->getDifferenceMileag() ?></td>
    </tr>
    <tr>
      <th>Service type:</th>
      <td><?php echo $maintenance->getServiceTypeId() ?></td>
    </tr>
    <tr>
      <th>Duel acquire:</th>
      <td><?php echo $maintenance->getDuelAcquireId() ?></td>
    </tr>
    <tr>
      <th>Destination:</th>
      <td><?php echo $maintenance->getDestination() ?></td>
    </tr>
    <tr>
      <th>Service no days:</th>
      <td><?php echo $maintenance->getServiceNoDays() ?></td>
    </tr>
    <tr>
      <th>Driver:</th>
      <td><?php echo $maintenance->getDriverId() ?></td>
    </tr>
    <tr>
      <th>Transferer:</th>
      <td><?php echo $maintenance->getTransfererId() ?></td>
    </tr>
    <tr>
      <th>Transferee:</th>
      <td><?php echo $maintenance->getTransfereeId() ?></td>
    </tr>
    <tr>
      <th>New vehicle:</th>
      <td><?php echo $maintenance->getNewVehicleId() ?></td>
    </tr>
    <tr>
      <th>Returnee:</th>
      <td><?php echo $maintenance->getReturneeId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('maintenance/edit?id='.$maintenance->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('maintenance/index') ?>">List</a>
