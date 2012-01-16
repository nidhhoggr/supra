<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $account_invoice->getId() ?></td>
    </tr>
    <tr>
      <th>Account:</th>
      <td><?php echo $account_invoice->getAccountId() ?></td>
    </tr>
    <tr>
      <th>Ref no:</th>
      <td><?php echo $account_invoice->getRefNo() ?></td>
    </tr>
    <tr>
      <th>Ammount due:</th>
      <td><?php echo $account_invoice->getAmmountDue() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $account_invoice->getDescription() ?></td>
    </tr>
    <tr>
      <th>Paid off:</th>
      <td><?php echo $account_invoice->getPaidOff() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $account_invoice->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $account_invoice->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('invoice/edit?id='.$account_invoice->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('invoice/index') ?>">List</a>
