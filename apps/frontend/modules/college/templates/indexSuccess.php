<h1>Colleges List</h1>

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
    <?php foreach ($colleges as $college): ?>
    <tr>
      <td><a href="<?php echo url_for('college/show?id='.$college->getId()) ?>"><?php echo $college->getId() ?></a></td>
      <td><?php echo $college->getTokenId() ?></td>
      <td><?php echo $college->getName() ?></td>
      <td><?php echo $college->getAlias() ?></td>
      <td><?php echo $college->getParticipantTypeId() ?></td>
      <td><?php echo $college->getStatus() ?></td>
      <td><?php echo $college->getParentId() ?></td>
      <td><?php echo $college->getLeaderParticipantId() ?></td>
      <td><?php echo $college->getParticipantContactId() ?></td>
      <td><?php echo $college->getVatNumber() ?></td>
      <td><?php echo $college->getProjectNo() ?></td>
      <td><?php echo $college->getCampusId() ?></td>
      <td><?php echo $college->getDescription() ?></td>
      <td><?php echo $college->getType() ?></td>
      <td><?php echo $college->getDeptId() ?></td>
      <td><?php echo $college->getTitle() ?></td>
      <td><?php echo $college->getFirstName() ?></td>
      <td><?php echo $college->getLastName() ?></td>
      <td><?php echo $college->getGender() ?></td>
      <td><?php echo $college->getBirthDate() ?></td>
      <td><?php echo $college->getJobTitle() ?></td>
      <td><?php echo $college->getDeanName() ?></td>
      <td><?php echo $college->getDirectorName() ?></td>
      <td><?php echo $college->getSectionNo() ?></td>
      <td><?php echo $college->getSectionLeaderName() ?></td>
      <td><?php echo $college->getProjectCode() ?></td>
      <td><?php echo $college->getProjectDirector() ?></td>
      <td><?php echo $college->getParticipantId() ?></td>
      <td><?php echo $college->getLicenseType() ?></td>
      <td><?php echo $college->getWorkExperience() ?></td>
      <td><?php echo $college->getEstablishedDate() ?></td>
      <td><?php echo $college->getCompanyOwner() ?></td>
      <td><?php echo $college->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('college/new') ?>">New</a>
