<h1>Institutions List</h1>

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
    <?php foreach ($institutions as $institution): ?>
    <tr>
      <td><a href="<?php echo url_for('institution/show?id='.$institution->getId()) ?>"><?php echo $institution->getId() ?></a></td>
      <td><?php echo $institution->getTokenId() ?></td>
      <td><?php echo $institution->getName() ?></td>
      <td><?php echo $institution->getAlias() ?></td>
      <td><?php echo $institution->getParticipantTypeId() ?></td>
      <td><?php echo $institution->getStatus() ?></td>
      <td><?php echo $institution->getParentId() ?></td>
      <td><?php echo $institution->getLeaderParticipantId() ?></td>
      <td><?php echo $institution->getParticipantContactId() ?></td>
      <td><?php echo $institution->getVatNumber() ?></td>
      <td><?php echo $institution->getProjectNo() ?></td>
      <td><?php echo $institution->getCampusId() ?></td>
      <td><?php echo $institution->getDescription() ?></td>
      <td><?php echo $institution->getType() ?></td>
      <td><?php echo $institution->getDeptId() ?></td>
      <td><?php echo $institution->getTitle() ?></td>
      <td><?php echo $institution->getFirstName() ?></td>
      <td><?php echo $institution->getLastName() ?></td>
      <td><?php echo $institution->getGender() ?></td>
      <td><?php echo $institution->getBirthDate() ?></td>
      <td><?php echo $institution->getJobTitle() ?></td>
      <td><?php echo $institution->getDeanName() ?></td>
      <td><?php echo $institution->getDirectorName() ?></td>
      <td><?php echo $institution->getSectionNo() ?></td>
      <td><?php echo $institution->getSectionLeaderName() ?></td>
      <td><?php echo $institution->getProjectCode() ?></td>
      <td><?php echo $institution->getProjectDirector() ?></td>
      <td><?php echo $institution->getParticipantId() ?></td>
      <td><?php echo $institution->getLicenseType() ?></td>
      <td><?php echo $institution->getWorkExperience() ?></td>
      <td><?php echo $institution->getEstablishedDate() ?></td>
      <td><?php echo $institution->getCompanyOwner() ?></td>
      <td><?php echo $institution->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('institution/new') ?>">New</a>
