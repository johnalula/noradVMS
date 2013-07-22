<h1>Permissions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Group</th>
      <th>User</th>
      <th>Module</th>
      <th>Create action</th>
      <th>Delete action</th>
      <th>Edit action</th>
      <th>View action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($permissions as $permission): ?>
    <tr>
      <td><a href="<?php echo url_for('permission/show?id='.$permission->getId()) ?>"><?php echo $permission->getId() ?></a></td>
      <td><?php echo $permission->getGroupId() ?></td>
      <td><?php echo $permission->getUserId() ?></td>
      <td><?php echo $permission->getModuleId() ?></td>
      <td><?php echo $permission->getCreateAction() ?></td>
      <td><?php echo $permission->getDeleteAction() ?></td>
      <td><?php echo $permission->getEditAction() ?></td>
      <td><?php echo $permission->getViewAction() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('permission/new') ?>">New</a>
