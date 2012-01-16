<h1>Account invoices List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Account</th>
      <th>Ref no</th>
      <th>Ammount due</th>
      <th>Description</th>
      <th>Paid off</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($account_invoices as $account_invoice): ?>
    <tr>
      <td><a href="<?php echo url_for('invoice/show?id='.$account_invoice->getId()) ?>"><?php echo $account_invoice->getId() ?></a></td>
      <td><?php echo $account_invoice->getAccountId() ?></td>
      <td><?php echo $account_invoice->getRefNo() ?></td>
      <td><?php echo $account_invoice->getAmmountDue() ?></td>
      <td><?php echo $account_invoice->getDescription() ?></td>
      <td><?php echo $account_invoice->getPaidOff() ?></td>
      <td><?php echo $account_invoice->getCreatedAt() ?></td>
      <td><?php echo $account_invoice->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('invoice/new') ?>">New</a>
