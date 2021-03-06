<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $assignment_task->getId() ?></td>
    </tr>
    <tr>
      <th>Vehicle:</th>
      <td><?php echo $assignment_task->getVehicleId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $assignment_task->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Start date:</th>
      <td><?php echo $assignment_task->getStartDate() ?></td>
    </tr>
    <tr>
      <th>End date:</th>
      <td><?php echo $assignment_task->getEndDate() ?></td>
    </tr>
    <tr>
      <th>Effective date:</th>
      <td><?php echo $assignment_task->getEffectiveDate() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $assignment_task->getStatus() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $assignment_task->getDescription() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $assignment_task->getType() ?></td>
    </tr>
    <tr>
      <th>Agreement participant:</th>
      <td><?php echo $assignment_task->getAgreementParticipantId() ?></td>
    </tr>
    <tr>
      <th>Departure date:</th>
      <td><?php echo $assignment_task->getDepartureDate() ?></td>
    </tr>
    <tr>
      <th>Departure time:</th>
      <td><?php echo $assignment_task->getDepartureTime() ?></td>
    </tr>
    <tr>
      <th>Departure status:</th>
      <td><?php echo $assignment_task->getDepartureStatus() ?></td>
    </tr>
    <tr>
      <th>Return date:</th>
      <td><?php echo $assignment_task->getReturnDate() ?></td>
    </tr>
    <tr>
      <th>Return time:</th>
      <td><?php echo $assignment_task->getReturnTime() ?></td>
    </tr>
    <tr>
      <th>Return status:</th>
      <td><?php echo $assignment_task->getReturnStatus() ?></td>
    </tr>
    <tr>
      <th>No of passangers:</th>
      <td><?php echo $assignment_task->getNoOfPassangers() ?></td>
    </tr>
    <tr>
      <th>Service agreement cost:</th>
      <td><?php echo $assignment_task->getServiceAgreementCost() ?></td>
    </tr>
    <tr>
      <th>Service reason:</th>
      <td><?php echo $assignment_task->getServiceReason() ?></td>
    </tr>
    <tr>
      <th>Departure mileage:</th>
      <td><?php echo $assignment_task->getDepartureMileage() ?></td>
    </tr>
    <tr>
      <th>Return mileage:</th>
      <td><?php echo $assignment_task->getReturnMileage() ?></td>
    </tr>
    <tr>
      <th>Difference mileag:</th>
      <td><?php echo $assignment_task->getDifferenceMileag() ?></td>
    </tr>
    <tr>
      <th>Service type:</th>
      <td><?php echo $assignment_task->getServiceTypeId() ?></td>
    </tr>
    <tr>
      <th>Duel acquire:</th>
      <td><?php echo $assignment_task->getDuelAcquireId() ?></td>
    </tr>
    <tr>
      <th>Destination:</th>
      <td><?php echo $assignment_task->getDestination() ?></td>
    </tr>
    <tr>
      <th>Service no days:</th>
      <td><?php echo $assignment_task->getServiceNoDays() ?></td>
    </tr>
    <tr>
      <th>Driver:</th>
      <td><?php echo $assignment_task->getDriverId() ?></td>
    </tr>
    <tr>
      <th>Transferer:</th>
      <td><?php echo $assignment_task->getTransfererId() ?></td>
    </tr>
    <tr>
      <th>Transferee:</th>
      <td><?php echo $assignment_task->getTransfereeId() ?></td>
    </tr>
    <tr>
      <th>New vehicle:</th>
      <td><?php echo $assignment_task->getNewVehicleId() ?></td>
    </tr>
    <tr>
      <th>Returnee:</th>
      <td><?php echo $assignment_task->getReturneeId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('assignment/edit?id='.$assignment_task->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('assignment/index') ?>">List</a>
