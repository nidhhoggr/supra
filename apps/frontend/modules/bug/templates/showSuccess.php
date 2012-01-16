<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $bug->getId() ?></td>
    </tr>
    <tr>
      <th>Account:</th>
      <td><?php echo $bug->getAccountId() ?></td>
    </tr>
    <tr>
      <th>Staff:</th>
      <td><?php echo $bug->getStaffId() ?></td>
    </tr>
    <tr>
      <th>Bug status:</th>
      <td><?php echo $bug->getBugStatusId() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $bug->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $bug->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $bug->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('bug/edit?id='.$bug->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('bug/index') ?>">List</a>
