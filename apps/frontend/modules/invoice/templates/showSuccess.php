<table>
  <tbody>
    <tr>
      <th>Account:</th>
      <td>
        <a href="<?php link_to('/account/show?id='.$account_invoice->getAccount()->getDomainName());?>">
            <?php echo $account_invoice->getAccount()->getDomainName() ?>
        </a>
      </td>
    </tr>
    <tr>
      <th>Ref no:</th>
      <td><?php echo $account_invoice->getRefNo() ?></td>
    </tr>
    <tr>
      <?php if($account_invoice->getPaidOff()):?>
      <th class="paid">Ammount paid:</th>
      <?php else: ?>
      <th class="due">Ammount due:</th>
      <?php endif ?>
      <td><?php echo $account_invoice->getAmmountDue() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $account_invoice->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $account_invoice->getDateTimeObject('created_at')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $account_invoice->getDateTimeObject('updated_at')->format('M d. Y h:i a') ?></td>
    </tr>
  </tbody>
</table>

<hr />
<a href="<?php echo url_for('invoice/index') ?>">List</a>
