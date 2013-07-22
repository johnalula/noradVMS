<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $section->getId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $section->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $section->getName() ?></td>
    </tr>
    <tr>
      <th>Alias:</th>
      <td><?php echo $section->getAlias() ?></td>
    </tr>
    <tr>
      <th>Participant type:</th>
      <td><?php echo $section->getParticipantTypeId() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $section->getStatus() ?></td>
    </tr>
    <tr>
      <th>Parent:</th>
      <td><?php echo $section->getParentId() ?></td>
    </tr>
    <tr>
      <th>Leader participant:</th>
      <td><?php echo $section->getLeaderParticipantId() ?></td>
    </tr>
    <tr>
      <th>Participant contact:</th>
      <td><?php echo $section->getParticipantContactId() ?></td>
    </tr>
    <tr>
      <th>Vat number:</th>
      <td><?php echo $section->getVatNumber() ?></td>
    </tr>
    <tr>
      <th>Project no:</th>
      <td><?php echo $section->getProjectNo() ?></td>
    </tr>
    <tr>
      <th>Campus:</th>
      <td><?php echo $section->getCampusId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $section->getDescription() ?></td>
    </tr>
    <tr>
      <th>Type:</th>
      <td><?php echo $section->getType() ?></td>
    </tr>
    <tr>
      <th>Dept:</th>
      <td><?php echo $section->getDeptId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $section->getTitle() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $section->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $section->getLastName() ?></td>
    </tr>
    <tr>
      <th>Gender:</th>
      <td><?php echo $section->getGender() ?></td>
    </tr>
    <tr>
      <th>Birth date:</th>
      <td><?php echo $section->getBirthDate() ?></td>
    </tr>
    <tr>
      <th>Job title:</th>
      <td><?php echo $section->getJobTitle() ?></td>
    </tr>
    <tr>
      <th>Dean name:</th>
      <td><?php echo $section->getDeanName() ?></td>
    </tr>
    <tr>
      <th>Director name:</th>
      <td><?php echo $section->getDirectorName() ?></td>
    </tr>
    <tr>
      <th>Section no:</th>
      <td><?php echo $section->getSectionNo() ?></td>
    </tr>
    <tr>
      <th>Section leader name:</th>
      <td><?php echo $section->getSectionLeaderName() ?></td>
    </tr>
    <tr>
      <th>Project code:</th>
      <td><?php echo $section->getProjectCode() ?></td>
    </tr>
    <tr>
      <th>Project director:</th>
      <td><?php echo $section->getProjectDirector() ?></td>
    </tr>
    <tr>
      <th>Participant:</th>
      <td><?php echo $section->getParticipantId() ?></td>
    </tr>
    <tr>
      <th>License type:</th>
      <td><?php echo $section->getLicenseType() ?></td>
    </tr>
    <tr>
      <th>Work experience:</th>
      <td><?php echo $section->getWorkExperience() ?></td>
    </tr>
    <tr>
      <th>Established date:</th>
      <td><?php echo $section->getEstablishedDate() ?></td>
    </tr>
    <tr>
      <th>Company owner:</th>
      <td><?php echo $section->getCompanyOwner() ?></td>
    </tr>
    <tr>
      <th>Company license type:</th>
      <td><?php echo $section->getCompanyLicenseType() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('section/edit?id='.$section->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('section/index') ?>">List</a>
