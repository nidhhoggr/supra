<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $client->getId() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $client->getUserId() ?></td>
    </tr>
    <tr>
      <th>Firstname:</th>
      <td><?php echo $client->getFirstname() ?></td>
    </tr>
    <tr>
      <th>Lastname:</th>
      <td><?php echo $client->getLastname() ?></td>
    </tr>
    <tr>
      <th>Track record:</th>
      <td><?php echo $client->getTrackRecord() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $client->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $client->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('client/edit?id='.$client->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('client/index') ?>">List</a>
