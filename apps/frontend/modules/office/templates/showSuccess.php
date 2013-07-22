<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $office->getId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $office->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $office->getName() ?></td>
    </tr>
    <tr>
      <th>Alias:</th>
      <td><?php echo $office->getAlias() ?></td>
    </tr>
    <tr>
      <th>Participant type:</th>
      <td><?php echo $office->getParticipantTypeId() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $office->getStatus() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $office->getParentId() ?></td>
    </tr>
    <tr>
      <th>Leader participant:</th>
      <td><?php echo $office->getLeaderParticipantId() ?></td>
    </tr>
    <tr>
      <th>Participant contact:</th>
      <td><?php echo $office->getParticipantContactId() ?></td>
    </tr>
    <tr>
      <th>Vat number:</th>
      <td><?php echo $office->getVatNumber() ?></td>
    </tr>
    <tr>
      <th>Project no:</th>
      <td><?php echo $office->getProjectNo() ?></td>
    </tr>
    <tr>
      <th>Campus:</th>
      <td><?php echo $office->getCampusId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $office->getDescription() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $office->getType() ?></td>
    </tr>
    <tr>
      <th>Dept:</th>
      <td><?php echo $office->getDeptId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $office->getTitle() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $office->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $office->getLastName() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $office->getGender() ?></td>
    </tr>
    <tr>
      <th>Birth date:</th>
      <td><?php echo $office->getBirthDate() ?></td>
    </tr>
    <tr>
      <th>Job title:</th>
      <td><?php echo $office->getJobTitle() ?></td>
    </tr>
    <tr>
      <th>Dean name:</th>
      <td><?php echo $office->getDeanName() ?></td>
    </tr>
    <tr>
      <th>Director name:</th>
      <td><?php echo $office->getDirectorName() ?></td>
    </tr>
    <tr>
      <th>Section no:</th>
      <td><?php echo $office->getSectionNo() ?></td>
    </tr>
    <tr>
      <th>Section leader name:</th>
      <td><?php echo $office->getSectionLeaderName() ?></td>
    </tr>
    <tr>
      <th>Project code:</th>
      <td><?php echo $office->getProjectCode() ?></td>
    </tr>
    <tr>
      <th>Project director:</th>
      <td><?php echo $office->getProjectDirector() ?></td>
    </tr>
    <tr>
      <th>Participant:</th>
      <td><?php echo $office->getParticipantId() ?></td>
    </tr>
    <tr>
      <th>License type:</th>
      <td><?php echo $office->getLicenseType() ?></td>
    </tr>
    <tr>
      <th>Work experience:</th>
      <td><?php echo $office->getWorkExperience() ?></td>
    </tr>
    <tr>
      <th>Established date:</th>
      <td><?php echo $office->getEstablishedDate() ?></td>
    </tr>
    <tr>
      <th>Company owner:</th>
      <td><?php echo $office->getCompanyOwner() ?></td>
    </tr>
    <tr>
      <th>Company license type:</th>
      <td><?php echo $office->getCompanyLicenseType() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('office/edit?id='.$office->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('office/index') ?>">List</a>
