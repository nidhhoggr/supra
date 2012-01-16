<h1>Bugs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Account</th>
      <th>Staff</th>
      <th>Bug status</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($bugs as $bug): ?>
    <tr>
      <td><a href="<?php echo url_for('bug/show?id='.$bug->getId()) ?>"><?php echo $bug->getId() ?></a></td>
      <td><?php echo $bug->getAccountId() ?></td>
      <td><?php echo $bug->getStaffId() ?></td>
      <td><?php echo $bug->getBugStatusId() ?></td>
      <td><?php echo $bug->getDescription() ?></td>
      <td><?php echo $bug->getCreatedAt() ?></td>
      <td><?php echo $bug->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('bug/new') ?>">New</a>
