<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $user->getId() ?></td>
    </tr>
    <tr>
      <th>Username:</th>
      <td><?php echo $user->getUsername() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $user->getPassword() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $user->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Group:</th>
      <td><?php echo $user->getGroupId() ?></td>
    </tr>
    <tr>
      <th>Is active:</th>
      <td><?php echo $user->getIsActive() ?></td>
    </tr>
    <tr>
      <th>Is blocked:</th>
      <td><?php echo $user->getIsBlocked() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $user->getStatus() ?></td>
    </tr>
    <tr>
      <th>Permission type:</th>
      <td><?php echo $user->getPermissionType() ?></td>
    </tr>
    <tr>
      <th>Ui theme color setting:</th>
      <td><?php echo $user->getUiThemeColorSetting() ?></td>
    </tr>
    <tr>
      <th>Ui language setting:</th>
      <td><?php echo $user->getUiLanguageSetting() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('user/edit?id='.$user->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('user/index') ?>">List</a>
