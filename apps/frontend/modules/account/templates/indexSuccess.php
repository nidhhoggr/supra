<h1>Accounts List</h1>

<table>
  <thead>
    <tr>
      <th>Client</th>
      <th>Title</th>
      <th>Domain name</th>
      <th>Active</th>
      <th>Created at</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($accounts as $account): ?>
    <tr>
      <td><?php include_partial('client/linkto',array('client'=>$account->getClient())) ?></td>
      <td><?php echo $account->getTitle() ?></td>
      <td><?php echo $account->getDomainName() ?></td>
      <td><?php echo $account->getActive()?'yes':'no' ?></td>
      <td><?php echo $account->getDateTimeObject('created_at')->format('M d, Y') ?></td>
      <td>
          <?php echo link_to('edit','account/edit?id='.$account->getId()) ?>
          <?php echo link_to('show','account/show?id='.$account->getId()) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('account/new') ?>">New</a>
