<h1>Sections List</h1>

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
    <?php foreach ($sections as $section): ?>
    <tr>
      <td><a href="<?php echo url_for('section/show?id='.$section->getId()) ?>"><?php echo $section->getId() ?></a></td>
      <td><?php echo $section->getTokenId() ?></td>
      <td><?php echo $section->getName() ?></td>
      <td><?php echo $section->getAlias() ?></td>
      <td><?php echo $section->getParticipantTypeId() ?></td>
      <td><?php echo $section->getStatus() ?></td>
      <td><?php echo $section->getParentId() ?></td>
      <td><?php echo $section->getLeaderParticipantId() ?></td>
      <td><?php echo $section->getParticipantContactId() ?></td>
      <td><?php echo $section->getVatNumber() ?></td>
      <td><?php echo $section->getProjectNo() ?></td>
      <td><?php echo $section->getCampusId() ?></td>
      <td><?php echo $section->getDescription() ?></td>
      <td><?php echo $section->getType() ?></td>
      <td><?php echo $section->getDeptId() ?></td>
      <td><?php echo $section->getTitle() ?></td>
      <td><?php echo $section->getFirstName() ?></td>
      <td><?php echo $section->getLastName() ?></td>
      <td><?php echo $section->getGender() ?></td>
      <td><?php echo $section->getBirthDate() ?></td>
      <td><?php echo $section->getJobTitle() ?></td>
      <td><?php echo $section->getDeanName() ?></td>
      <td><?php echo $section->getDirectorName() ?></td>
      <td><?php echo $section->getSectionNo() ?></td>
      <td><?php echo $section->getSectionLeaderName() ?></td>
      <td><?php echo $section->getProjectCode() ?></td>
      <td><?php echo $section->getProjectDirector() ?></td>
      <td><?php echo $section->getParticipantId() ?></td>
      <td><?php echo $section->getLicenseType() ?></td>
      <td><?php echo $section->getWorkExperience() ?></td>
      <td><?php echo $section->getEstablishedDate() ?></td>
      <td><?php echo $section->getCompanyOwner() ?></td>
      <td><?php echo $section->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('section/new') ?>">New</a>
