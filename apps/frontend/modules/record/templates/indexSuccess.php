<h1>Account records List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Account</th>
      <th>Name</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($account_records as $account_record): ?>
    <tr>
      <td><a href="<?php echo url_for('record/show?id='.$account_record->getId()) ?>"><?php echo $account_record->getId() ?></a></td>
      <td><?php echo $account_record->getAccountId() ?></td>
      <td><?php echo $account_record->getName() ?></td>
      <td><?php echo $account_record->getDescription() ?></td>
      <td><?php echo $account_record->getCreatedAt() ?></td>
      <td><?php echo $account_record->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('record/new') ?>">New</a>
