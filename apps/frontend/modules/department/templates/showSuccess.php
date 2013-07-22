<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $department->getId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $department->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $department->getName() ?></td>
    </tr>
    <tr>
      <th>Alias:</th>
      <td><?php echo $department->getAlias() ?></td>
    </tr>
    <tr>
      <th>Participant type:</th>
      <td><?php echo $department->getParticipantTypeId() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $department->getStatus() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $department->getParentId() ?></td>
    </tr>
    <tr>
      <th>Leader participant:</th>
      <td><?php echo $department->getLeaderParticipantId() ?></td>
    </tr>
    <tr>
      <th>Participant contact:</th>
      <td><?php echo $department->getParticipantContactId() ?></td>
    </tr>
    <tr>
      <th>Vat number:</th>
      <td><?php echo $department->getVatNumber() ?></td>
    </tr>
    <tr>
      <th>Project no:</th>
      <td><?php echo $department->getProjectNo() ?></td>
    </tr>
    <tr>
      <th>Campus:</th>
      <td><?php echo $department->getCampusId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $department->getDescription() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $department->getType() ?></td>
    </tr>
    <tr>
      <th>Dept:</th>
      <td><?php echo $department->getDeptId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $department->getTitle() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $department->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $department->getLastName() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $department->getGender() ?></td>
    </tr>
    <tr>
      <th>Birth date:</th>
      <td><?php echo $department->getBirthDate() ?></td>
    </tr>
    <tr>
      <th>Job title:</th>
      <td><?php echo $department->getJobTitle() ?></td>
    </tr>
    <tr>
      <th>Dean name:</th>
      <td><?php echo $department->getDeanName() ?></td>
    </tr>
    <tr>
      <th>Director name:</th>
      <td><?php echo $department->getDirectorName() ?></td>
    </tr>
    <tr>
      <th>Section no:</th>
      <td><?php echo $department->getSectionNo() ?></td>
    </tr>
    <tr>
      <th>Section leader name:</th>
      <td><?php echo $department->getSectionLeaderName() ?></td>
    </tr>
    <tr>
      <th>Project code:</th>
      <td><?php echo $department->getProjectCode() ?></td>
    </tr>
    <tr>
      <th>Project director:</th>
      <td><?php echo $department->getProjectDirector() ?></td>
    </tr>
    <tr>
      <th>Participant:</th>
      <td><?php echo $department->getParticipantId() ?></td>
    </tr>
    <tr>
      <th>License type:</th>
      <td><?php echo $department->getLicenseType() ?></td>
    </tr>
    <tr>
      <th>Work experience:</th>
      <td><?php echo $department->getWorkExperience() ?></td>
    </tr>
    <tr>
      <th>Established date:</th>
      <td><?php echo $department->getEstablishedDate() ?></td>
    </tr>
    <tr>
      <th>Company owner:</th>
      <td><?php echo $department->getCompanyOwner() ?></td>
    </tr>
    <tr>
      <th>Company license type:</th>
      <td><?php echo $department->getCompanyLicenseType() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('department/edit?id='.$department->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('department/index') ?>">List</a>
