<h1>Bug statuss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($bug_statuss as $bug_status): ?>
    <tr>
      <td><a href="<?php echo url_for('bug_status/show?id='.$bug_status->getId()) ?>"><?php echo $bug_status->getId() ?></a></td>
      <td><?php echo $bug_status->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('bug_status/new') ?>">New</a>
