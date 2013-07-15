<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $user_group->getId() ?></td>
    </tr>
    <tr>
      <th>Token:</th>
      <td><?php echo $user_group->getTokenId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $user_group->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $user_group->getDescription() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('group/edit?id='.$user_group->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('group/index') ?>">List</a>
