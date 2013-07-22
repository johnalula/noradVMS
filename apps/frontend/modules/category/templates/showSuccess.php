<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $category->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $category->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $category->getDescription() ?></td>
    </tr>
    <tr>
      <th>Parent category:</th>
      <td><?php echo $category->getParentCategoryId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $category->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $category->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?id='.$category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>
