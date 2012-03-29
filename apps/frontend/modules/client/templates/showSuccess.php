<table>
  <tbody>
    <tr>
      <th>Username:</th>
      <td><?php echo $client->getUser()->getUsername() ?></td>
    </tr>
    <tr>
      <th>Full Name:</th>
      <td><?php echo $client->getFullName() ?></td>
    </tr>
    <tr>
      <th>Track record:</th>
      <td><?php echo $client->getTrackRecord() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('client/edit?id='.$client->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('client/index') ?>">List</a>
