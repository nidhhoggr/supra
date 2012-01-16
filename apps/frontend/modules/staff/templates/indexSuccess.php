<h1>Staffs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Title</th>
      <th>Bio</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($staffs as $staff): ?>
    <tr>
      <td><a href="<?php echo url_for('staff/show?id='.$staff->getId()) ?>"><?php echo $staff->getId() ?></a></td>
      <td><?php echo $staff->getUserId() ?></td>
      <td><?php echo $staff->getFirstname() ?></td>
      <td><?php echo $staff->getLastname() ?></td>
      <td><?php echo $staff->getTitle() ?></td>
      <td><?php echo $staff->getBio() ?></td>
      <td><?php echo $staff->getCreatedAt() ?></td>
      <td><?php echo $staff->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('staff/new') ?>">New</a>
