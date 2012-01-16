<h1>Accounts List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Client</th>
      <th>Domain name</th>
      <th>Description</th>
      <th>Active</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($accounts as $account): ?>
    <tr>
      <td><a href="<?php echo url_for('account/show?id='.$account->getId()) ?>"><?php echo $account->getId() ?></a></td>
      <td><?php echo $account->getClientId() ?></td>
      <td><?php echo $account->getDomainName() ?></td>
      <td><?php echo $account->getDescription() ?></td>
      <td><?php echo $account->getActive() ?></td>
      <td><?php echo $account->getCreatedAt() ?></td>
      <td><?php echo $account->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('account/new') ?>">New</a>
