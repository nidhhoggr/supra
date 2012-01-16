<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $staff->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $staff->getUserId() ?></td>
    </tr>
    <tr>
      <th>Firstname:</th>
      <td><?php echo $staff->getFirstname() ?></td>
    </tr>
    <tr>
      <th>Lastname:</th>
      <td><?php echo $staff->getLastname() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $staff->getTitle() ?></td>
    </tr>
    <tr>
      <th>Bio:</th>
      <td><?php echo $staff->getBio() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $staff->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $staff->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('staff/edit?id='.$staff->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('staff/index') ?>">List</a>
