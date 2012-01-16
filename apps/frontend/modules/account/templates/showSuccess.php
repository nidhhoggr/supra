<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $account->getId() ?></td>
    </tr>
    <tr>
      <th>Client:</th>
      <td><?php echo $account->getClientId() ?></td>
    </tr>
    <tr>
      <th>Domain name:</th>
      <td><?php echo $account->getDomainName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $account->getDescription() ?></td>
    </tr>
    <tr>
      <th>Active:</th>
      <td><?php echo $account->getActive() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $account->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $account->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('account/edit?id='.$account->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('account/index') ?>">List</a>
