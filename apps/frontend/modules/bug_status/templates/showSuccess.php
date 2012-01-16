<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $bug_status->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $bug_status->getName() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('bug_status/edit?id='.$bug_status->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('bug_status/index') ?>">List</a>
