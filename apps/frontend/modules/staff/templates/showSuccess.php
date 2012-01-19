<table>
  <tbody>
    <tr>
      <td><?php echo $staff->getFirstname() . ' ' . $staff->getLastname() . ' - ' . $staff->getTitle() ?></td>
    </tr>
    <tr>
      <th>Bio:</th>
      <td><?php echo $staff->getBio() ?></td>
    </tr>
    <tr>
      <th>Employed Since:</th>
      <td><?php echo $staff->getDateTimeObject('created_at')->format('M d, Y') ?></td>
    </tr>
</table>

<hr />
<a href="<?php echo url_for('staff/index') ?>">List</a>
