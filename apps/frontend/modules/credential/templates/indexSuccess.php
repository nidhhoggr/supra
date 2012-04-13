<h1>Credentials List</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Account</th>
      <th>Credential type</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($credentials as $credential): ?>
    <tr>
      <td><?php echo $credential->getName() ?></td>
      <td><?php include_partial('account/linkto',array('account'=>$credential->getAccount())) ?></td>
      <td><?php echo $credential->getCredentialType() ?></td>
      <td>
          <?php echo link_to('edit','credential/edit?id='.$credential->getId()) ?>
          <?php echo link_to('show','credential/show?id='.$credential->getId()) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('credential/new') ?>">New</a>
