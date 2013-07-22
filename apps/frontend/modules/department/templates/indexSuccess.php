<h1>Departments List</h1>

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
    <?php foreach ($departments as $department): ?>
    <tr>
      <td><a href="<?php echo url_for('department/show?id='.$department->getId()) ?>"><?php echo $department->getId() ?></a></td>
      <td><?php echo $department->getTokenId() ?></td>
      <td><?php echo $department->getName() ?></td>
      <td><?php echo $department->getAlias() ?></td>
      <td><?php echo $department->getParticipantTypeId() ?></td>
      <td><?php echo $department->getStatus() ?></td>
      <td><?php echo $department->getParentId() ?></td>
      <td><?php echo $department->getLeaderParticipantId() ?></td>
      <td><?php echo $department->getParticipantContactId() ?></td>
      <td><?php echo $department->getVatNumber() ?></td>
      <td><?php echo $department->getProjectNo() ?></td>
      <td><?php echo $department->getCampusId() ?></td>
      <td><?php echo $department->getDescription() ?></td>
      <td><?php echo $department->getType() ?></td>
      <td><?php echo $department->getDeptId() ?></td>
      <td><?php echo $department->getTitle() ?></td>
      <td><?php echo $department->getFirstName() ?></td>
      <td><?php echo $department->getLastName() ?></td>
      <td><?php echo $department->getGender() ?></td>
      <td><?php echo $department->getBirthDate() ?></td>
      <td><?php echo $department->getJobTitle() ?></td>
      <td><?php echo $department->getDeanName() ?></td>
      <td><?php echo $department->getDirectorName() ?></td>
      <td><?php echo $department->getSectionNo() ?></td>
      <td><?php echo $department->getSectionLeaderName() ?></td>
      <td><?php echo $department->getProjectCode() ?></td>
      <td><?php echo $department->getProjectDirector() ?></td>
      <td><?php echo $department->getParticipantId() ?></td>
      <td><?php echo $department->getLicenseType() ?></td>
      <td><?php echo $department->getWorkExperience() ?></td>
      <td><?php echo $department->getEstablishedDate() ?></td>
      <td><?php echo $department->getCompanyOwner() ?></td>
      <td><?php echo $department->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('department/new') ?>">New</a>
