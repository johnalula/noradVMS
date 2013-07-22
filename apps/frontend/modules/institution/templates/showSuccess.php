<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $institution->getId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $institution->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $institution->getName() ?></td>
    </tr>
    <tr>
      <th>Alias:</th>
      <td><?php echo $institution->getAlias() ?></td>
    </tr>
    <tr>
      <th>Participant type:</th>
      <td><?php echo $institution->getParticipantTypeId() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $institution->getStatus() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $institution->getParentId() ?></td>
    </tr>
    <tr>
      <th>Leader participant:</th>
      <td><?php echo $institution->getLeaderParticipantId() ?></td>
    </tr>
    <tr>
      <th>Participant contact:</th>
      <td><?php echo $institution->getParticipantContactId() ?></td>
    </tr>
    <tr>
      <th>Vat number:</th>
      <td><?php echo $institution->getVatNumber() ?></td>
    </tr>
    <tr>
      <th>Project no:</th>
      <td><?php echo $institution->getProjectNo() ?></td>
    </tr>
    <tr>
      <th>Campus:</th>
      <td><?php echo $institution->getCampusId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $institution->getDescription() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $institution->getType() ?></td>
    </tr>
    <tr>
      <th>Dept:</th>
      <td><?php echo $institution->getDeptId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $institution->getTitle() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $institution->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $institution->getLastName() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $institution->getGender() ?></td>
    </tr>
    <tr>
      <th>Birth date:</th>
      <td><?php echo $institution->getBirthDate() ?></td>
    </tr>
    <tr>
      <th>Job title:</th>
      <td><?php echo $institution->getJobTitle() ?></td>
    </tr>
    <tr>
      <th>Dean name:</th>
      <td><?php echo $institution->getDeanName() ?></td>
    </tr>
    <tr>
      <th>Director name:</th>
      <td><?php echo $institution->getDirectorName() ?></td>
    </tr>
    <tr>
      <th>Section no:</th>
      <td><?php echo $institution->getSectionNo() ?></td>
    </tr>
    <tr>
      <th>Section leader name:</th>
      <td><?php echo $institution->getSectionLeaderName() ?></td>
    </tr>
    <tr>
      <th>Project code:</th>
      <td><?php echo $institution->getProjectCode() ?></td>
    </tr>
    <tr>
      <th>Project director:</th>
      <td><?php echo $institution->getProjectDirector() ?></td>
    </tr>
    <tr>
      <th>Participant:</th>
      <td><?php echo $institution->getParticipantId() ?></td>
    </tr>
    <tr>
      <th>License type:</th>
      <td><?php echo $institution->getLicenseType() ?></td>
    </tr>
    <tr>
      <th>Work experience:</th>
      <td><?php echo $institution->getWorkExperience() ?></td>
    </tr>
    <tr>
      <th>Established date:</th>
      <td><?php echo $institution->getEstablishedDate() ?></td>
    </tr>
    <tr>
      <th>Company owner:</th>
      <td><?php echo $institution->getCompanyOwner() ?></td>
    </tr>
    <tr>
      <th>Company license type:</th>
      <td><?php echo $institution->getCompanyLicenseType() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('institution/edit?id='.$institution->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('institution/index') ?>">List</a>
