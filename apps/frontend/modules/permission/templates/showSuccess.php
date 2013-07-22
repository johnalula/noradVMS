<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $permission->getId() ?></td>
    </tr>
    <tr>
      <th>Group:</th>
      <td><?php echo $permission->getGroupId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $permission->getUserId() ?></td>
    </tr>
    <tr>
      <th>Module:</th>
      <td><?php echo $permission->getModuleId() ?></td>
    </tr>
    <tr>
      <th>Create action:</th>
      <td><?php echo $permission->getCreateAction() ?></td>
    </tr>
    <tr>
      <th>Delete action:</th>
      <td><?php echo $permission->getDeleteAction() ?></td>
    </tr>
    <tr>
      <th>Edit action:</th>
      <td><?php echo $permission->getEditAction() ?></td>
    </tr>
    <tr>
      <th>View action:</th>
      <td><?php echo $permission->getViewAction() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('permission/edit?id='.$permission->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('permission/index') ?>">List</a>
