<h1>Centers List</h1>

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
    <?php foreach ($centers as $center): ?>
    <tr>
      <td><a href="<?php echo url_for('center/show?id='.$center->getId()) ?>"><?php echo $center->getId() ?></a></td>
      <td><?php echo $center->getTokenId() ?></td>
      <td><?php echo $center->getName() ?></td>
      <td><?php echo $center->getAlias() ?></td>
      <td><?php echo $center->getParticipantTypeId() ?></td>
      <td><?php echo $center->getStatus() ?></td>
      <td><?php echo $center->getParentId() ?></td>
      <td><?php echo $center->getLeaderParticipantId() ?></td>
      <td><?php echo $center->getParticipantContactId() ?></td>
      <td><?php echo $center->getVatNumber() ?></td>
      <td><?php echo $center->getProjectNo() ?></td>
      <td><?php echo $center->getCampusId() ?></td>
      <td><?php echo $center->getDescription() ?></td>
      <td><?php echo $center->getType() ?></td>
      <td><?php echo $center->getDeptId() ?></td>
      <td><?php echo $center->getTitle() ?></td>
      <td><?php echo $center->getFirstName() ?></td>
      <td><?php echo $center->getLastName() ?></td>
      <td><?php echo $center->getGender() ?></td>
      <td><?php echo $center->getBirthDate() ?></td>
      <td><?php echo $center->getJobTitle() ?></td>
      <td><?php echo $center->getDeanName() ?></td>
      <td><?php echo $center->getDirectorName() ?></td>
      <td><?php echo $center->getSectionNo() ?></td>
      <td><?php echo $center->getSectionLeaderName() ?></td>
      <td><?php echo $center->getProjectCode() ?></td>
      <td><?php echo $center->getProjectDirector() ?></td>
      <td><?php echo $center->getParticipantId() ?></td>
      <td><?php echo $center->getLicenseType() ?></td>
      <td><?php echo $center->getWorkExperience() ?></td>
      <td><?php echo $center->getEstablishedDate() ?></td>
      <td><?php echo $center->getCompanyOwner() ?></td>
      <td><?php echo $center->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('center/new') ?>">New</a>
