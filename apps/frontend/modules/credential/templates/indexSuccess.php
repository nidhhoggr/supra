<h1>Credentials List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Account</th>
      <th>Credential type</th>
      <th>Name</th>
      <th>Internal ip</th>
      <th>External ip</th>
      <th>Device</th>
      <th>Url</th>
      <th>User</th>
      <th>Pass</th>
      <th>Notes</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($credentials as $credential): ?>
    <tr>
      <td><a href="<?php echo url_for('credential/show?id='.$credential->getId()) ?>"><?php echo $credential->getId() ?></a></td>
      <td><?php echo $credential->getAccountId() ?></td>
      <td><?php echo $credential->getCredentialTypeId() ?></td>
      <td><?php echo $credential->getName() ?></td>
      <td><?php echo $credential->getInternalIp() ?></td>
      <td><?php echo $credential->getExternalIp() ?></td>
      <td><?php echo $credential->getDevice() ?></td>
      <td><?php echo $credential->getUrl() ?></td>
      <td><?php echo $credential->getUser() ?></td>
      <td><?php echo $credential->getPass() ?></td>
      <td><?php echo $credential->getNotes() ?></td>
      <td><?php echo $credential->getCreatedAt() ?></td>
      <td><?php echo $credential->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('credential/new') ?>">New</a>
