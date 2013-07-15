<h1>Others List</h1>

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
    <?php foreach ($others as $other): ?>
    <tr>
      <td><a href="<?php echo url_for('other/show?id='.$other->getId()) ?>"><?php echo $other->getId() ?></a></td>
      <td><?php echo $other->getTokenId() ?></td>
      <td><?php echo $other->getName() ?></td>
      <td><?php echo $other->getAlias() ?></td>
      <td><?php echo $other->getParticipantTypeId() ?></td>
      <td><?php echo $other->getStatus() ?></td>
      <td><?php echo $other->getParentId() ?></td>
      <td><?php echo $other->getLeaderParticipantId() ?></td>
      <td><?php echo $other->getParticipantContactId() ?></td>
      <td><?php echo $other->getVatNumber() ?></td>
      <td><?php echo $other->getProjectNo() ?></td>
      <td><?php echo $other->getCampusId() ?></td>
      <td><?php echo $other->getDescription() ?></td>
      <td><?php echo $other->getType() ?></td>
      <td><?php echo $other->getDeptId() ?></td>
      <td><?php echo $other->getTitle() ?></td>
      <td><?php echo $other->getFirstName() ?></td>
      <td><?php echo $other->getLastName() ?></td>
      <td><?php echo $other->getGender() ?></td>
      <td><?php echo $other->getBirthDate() ?></td>
      <td><?php echo $other->getJobTitle() ?></td>
      <td><?php echo $other->getDeanName() ?></td>
      <td><?php echo $other->getDirectorName() ?></td>
      <td><?php echo $other->getSectionNo() ?></td>
      <td><?php echo $other->getSectionLeaderName() ?></td>
      <td><?php echo $other->getProjectCode() ?></td>
      <td><?php echo $other->getProjectDirector() ?></td>
      <td><?php echo $other->getParticipantId() ?></td>
      <td><?php echo $other->getLicenseType() ?></td>
      <td><?php echo $other->getWorkExperience() ?></td>
      <td><?php echo $other->getEstablishedDate() ?></td>
      <td><?php echo $other->getCompanyOwner() ?></td>
      <td><?php echo $other->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('other/new') ?>">New</a>
