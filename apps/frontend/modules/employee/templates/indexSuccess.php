<h1>Employees List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Token</th>
      <th>Name</th>
      <th>Alias</th>
      <th>Participant type</th>
      <th>Status</th>
      <th>Parent</th>
      <th>Leader participant</th>
      <th>Participant contact</th>
      <th>Vat number</th>
      <th>Project no</th>
      <th>Campus</th>
      <th>Description</th>
      <th>Type</th>
      <th>Dept</th>
      <th>Title</th>
      <th>First name</th>
      <th>Last name</th>
      <th>Gender</th>
      <th>Birth date</th>
      <th>Job title</th>
      <th>Dean name</th>
      <th>Director name</th>
      <th>Section no</th>
      <th>Section leader name</th>
      <th>Project code</th>
      <th>Project director</th>
      <th>Participant</th>
      <th>License type</th>
      <th>Work experience</th>
      <th>Established date</th>
      <th>Company owner</th>
      <th>Company license type</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($employees as $employee): ?>
    <tr>
      <td><a href="<?php echo url_for('employee/show?id='.$employee->getId()) ?>"><?php echo $employee->getId() ?></a></td>
      <td><?php echo $employee->getTokenId() ?></td>
      <td><?php echo $employee->getName() ?></td>
      <td><?php echo $employee->getAlias() ?></td>
      <td><?php echo $employee->getParticipantTypeId() ?></td>
      <td><?php echo $employee->getStatus() ?></td>
      <td><?php echo $employee->getParentId() ?></td>
      <td><?php echo $employee->getLeaderParticipantId() ?></td>
      <td><?php echo $employee->getParticipantContactId() ?></td>
      <td><?php echo $employee->getVatNumber() ?></td>
      <td><?php echo $employee->getProjectNo() ?></td>
      <td><?php echo $employee->getCampusId() ?></td>
      <td><?php echo $employee->getDescription() ?></td>
      <td><?php echo $employee->getType() ?></td>
      <td><?php echo $employee->getDeptId() ?></td>
      <td><?php echo $employee->getTitle() ?></td>
      <td><?php echo $employee->getFirstName() ?></td>
      <td><?php echo $employee->getLastName() ?></td>
      <td><?php echo $employee->getGender() ?></td>
      <td><?php echo $employee->getBirthDate() ?></td>
      <td><?php echo $employee->getJobTitle() ?></td>
      <td><?php echo $employee->getDeanName() ?></td>
      <td><?php echo $employee->getDirectorName() ?></td>
      <td><?php echo $employee->getSectionNo() ?></td>
      <td><?php echo $employee->getSectionLeaderName() ?></td>
      <td><?php echo $employee->getProjectCode() ?></td>
      <td><?php echo $employee->getProjectDirector() ?></td>
      <td><?php echo $employee->getParticipantId() ?></td>
      <td><?php echo $employee->getLicenseType() ?></td>
      <td><?php echo $employee->getWorkExperience() ?></td>
      <td><?php echo $employee->getEstablishedDate() ?></td>
      <td><?php echo $employee->getCompanyOwner() ?></td>
      <td><?php echo $employee->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('employee/new') ?>">New</a>
