<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $account_record->getId() ?></td>
    </tr>
    <tr>
      <th>Account:</th>
      <td><?php echo $account_record->getAccountId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $account_record->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $account_record->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $account_record->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $account_record->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('account_record/edit?id='.$account_record->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('account_record/index') ?>">List</a>
