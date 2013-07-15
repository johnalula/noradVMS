<h1>Offices List</h1>

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
    <?php foreach ($offices as $office): ?>
    <tr>
      <td><a href="<?php echo url_for('office/show?id='.$office->getId()) ?>"><?php echo $office->getId() ?></a></td>
      <td><?php echo $office->getTokenId() ?></td>
      <td><?php echo $office->getName() ?></td>
      <td><?php echo $office->getAlias() ?></td>
      <td><?php echo $office->getParticipantTypeId() ?></td>
      <td><?php echo $office->getStatus() ?></td>
      <td><?php echo $office->getParentId() ?></td>
      <td><?php echo $office->getLeaderParticipantId() ?></td>
      <td><?php echo $office->getParticipantContactId() ?></td>
      <td><?php echo $office->getVatNumber() ?></td>
      <td><?php echo $office->getProjectNo() ?></td>
      <td><?php echo $office->getCampusId() ?></td>
      <td><?php echo $office->getDescription() ?></td>
      <td><?php echo $office->getType() ?></td>
      <td><?php echo $office->getDeptId() ?></td>
      <td><?php echo $office->getTitle() ?></td>
      <td><?php echo $office->getFirstName() ?></td>
      <td><?php echo $office->getLastName() ?></td>
      <td><?php echo $office->getGender() ?></td>
      <td><?php echo $office->getBirthDate() ?></td>
      <td><?php echo $office->getJobTitle() ?></td>
      <td><?php echo $office->getDeanName() ?></td>
      <td><?php echo $office->getDirectorName() ?></td>
      <td><?php echo $office->getSectionNo() ?></td>
      <td><?php echo $office->getSectionLeaderName() ?></td>
      <td><?php echo $office->getProjectCode() ?></td>
      <td><?php echo $office->getProjectDirector() ?></td>
      <td><?php echo $office->getParticipantId() ?></td>
      <td><?php echo $office->getLicenseType() ?></td>
      <td><?php echo $office->getWorkExperience() ?></td>
      <td><?php echo $office->getEstablishedDate() ?></td>
      <td><?php echo $office->getCompanyOwner() ?></td>
      <td><?php echo $office->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('office/new') ?>">New</a>
