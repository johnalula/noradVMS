<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $other->getId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $other->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $other->getName() ?></td>
    </tr>
    <tr>
      <th>Alias:</th>
      <td><?php echo $other->getAlias() ?></td>
    </tr>
    <tr>
      <th>Participant type:</th>
      <td><?php echo $other->getParticipantTypeId() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $other->getStatus() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $other->getParentId() ?></td>
    </tr>
    <tr>
      <th>Leader participant:</th>
      <td><?php echo $other->getLeaderParticipantId() ?></td>
    </tr>
    <tr>
      <th>Participant contact:</th>
      <td><?php echo $other->getParticipantContactId() ?></td>
    </tr>
    <tr>
      <th>Vat number:</th>
      <td><?php echo $other->getVatNumber() ?></td>
    </tr>
    <tr>
      <th>Project no:</th>
      <td><?php echo $other->getProjectNo() ?></td>
    </tr>
    <tr>
      <th>Campus:</th>
      <td><?php echo $other->getCampusId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $other->getDescription() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $other->getType() ?></td>
    </tr>
    <tr>
      <th>Dept:</th>
      <td><?php echo $other->getDeptId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $other->getTitle() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $other->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $other->getLastName() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $other->getGender() ?></td>
    </tr>
    <tr>
      <th>Birth date:</th>
      <td><?php echo $other->getBirthDate() ?></td>
    </tr>
    <tr>
      <th>Job title:</th>
      <td><?php echo $other->getJobTitle() ?></td>
    </tr>
    <tr>
      <th>Dean name:</th>
      <td><?php echo $other->getDeanName() ?></td>
    </tr>
    <tr>
      <th>Director name:</th>
      <td><?php echo $other->getDirectorName() ?></td>
    </tr>
    <tr>
      <th>Section no:</th>
      <td><?php echo $other->getSectionNo() ?></td>
    </tr>
    <tr>
      <th>Section leader name:</th>
      <td><?php echo $other->getSectionLeaderName() ?></td>
    </tr>
    <tr>
      <th>Project code:</th>
      <td><?php echo $other->getProjectCode() ?></td>
    </tr>
    <tr>
      <th>Project director:</th>
      <td><?php echo $other->getProjectDirector() ?></td>
    </tr>
    <tr>
      <th>Participant:</th>
      <td><?php echo $other->getParticipantId() ?></td>
    </tr>
    <tr>
      <th>License type:</th>
      <td><?php echo $other->getLicenseType() ?></td>
    </tr>
    <tr>
      <th>Work experience:</th>
      <td><?php echo $other->getWorkExperience() ?></td>
    </tr>
    <tr>
      <th>Established date:</th>
      <td><?php echo $other->getEstablishedDate() ?></td>
    </tr>
    <tr>
      <th>Company owner:</th>
      <td><?php echo $other->getCompanyOwner() ?></td>
    </tr>
    <tr>
      <th>Company license type:</th>
      <td><?php echo $other->getCompanyLicenseType() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('other/edit?id='.$other->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('other/index') ?>">List</a>
