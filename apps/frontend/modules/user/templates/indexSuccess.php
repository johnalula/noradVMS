<h1>Users List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Username</th>
      <th>Password</th>
      <th>Token</th>
      <th>Group</th>
      <th>Is active</th>
      <th>Is blocked</th>
      <th>Status</th>
      <th>Permission type</th>
      <th>Ui theme color setting</th>
      <th>Ui language setting</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user): ?>
    <tr>
      <td><a href="<?php echo url_for('user/show?id='.$user->getId()) ?>"><?php echo $user->getId() ?></a></td>
      <td><?php echo $user->getUsername() ?></td>
      <td><?php echo $user->getPassword() ?></td>
      <td><?php echo $user->getTokenId() ?></td>
      <td><?php echo $user->getGroupId() ?></td>
      <td><?php echo $user->getIsActive() ?></td>
      <td><?php echo $user->getIsBlocked() ?></td>
      <td><?php echo $user->getStatus() ?></td>
      <td><?php echo $user->getPermissionType() ?></td>
      <td><?php echo $user->getUiThemeColorSetting() ?></td>
      <td><?php echo $user->getUiLanguageSetting() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('user/new') ?>">New</a>
