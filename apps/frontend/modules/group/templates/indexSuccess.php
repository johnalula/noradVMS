<h1>User groups List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Token</th>
      <th>Name</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($user_groups as $user_group): ?>
    <tr>
      <td><a href="<?php echo url_for('group/show?id='.$user_group->getId()) ?>"><?php echo $user_group->getId() ?></a></td>
      <td><?php echo $user_group->getTokenId() ?></td>
      <td><?php echo $user_group->getName() ?></td>
      <td><?php echo $user_group->getDescription() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('group/new') ?>">New</a>
