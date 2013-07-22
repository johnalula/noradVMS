<h1>Projects List</h1>

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
    <?php foreach ($projects as $project): ?>
    <tr>
      <td><a href="<?php echo url_for('project/show?id='.$project->getId()) ?>"><?php echo $project->getId() ?></a></td>
      <td><?php echo $project->getTokenId() ?></td>
      <td><?php echo $project->getName() ?></td>
      <td><?php echo $project->getAlias() ?></td>
      <td><?php echo $project->getParticipantTypeId() ?></td>
      <td><?php echo $project->getStatus() ?></td>
      <td><?php echo $project->getParentId() ?></td>
      <td><?php echo $project->getLeaderParticipantId() ?></td>
      <td><?php echo $project->getParticipantContactId() ?></td>
      <td><?php echo $project->getVatNumber() ?></td>
      <td><?php echo $project->getProjectNo() ?></td>
      <td><?php echo $project->getCampusId() ?></td>
      <td><?php echo $project->getDescription() ?></td>
      <td><?php echo $project->getType() ?></td>
      <td><?php echo $project->getDeptId() ?></td>
      <td><?php echo $project->getTitle() ?></td>
      <td><?php echo $project->getFirstName() ?></td>
      <td><?php echo $project->getLastName() ?></td>
      <td><?php echo $project->getGender() ?></td>
      <td><?php echo $project->getBirthDate() ?></td>
      <td><?php echo $project->getJobTitle() ?></td>
      <td><?php echo $project->getDeanName() ?></td>
      <td><?php echo $project->getDirectorName() ?></td>
      <td><?php echo $project->getSectionNo() ?></td>
      <td><?php echo $project->getSectionLeaderName() ?></td>
      <td><?php echo $project->getProjectCode() ?></td>
      <td><?php echo $project->getProjectDirector() ?></td>
      <td><?php echo $project->getParticipantId() ?></td>
      <td><?php echo $project->getLicenseType() ?></td>
      <td><?php echo $project->getWorkExperience() ?></td>
      <td><?php echo $project->getEstablishedDate() ?></td>
      <td><?php echo $project->getCompanyOwner() ?></td>
      <td><?php echo $project->getCompanyLicenseType() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('project/new') ?>">New</a>
