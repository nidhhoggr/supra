<table>
  <tbody>
    </tr>
      <td><?php echo $account_record->getName() ?></td>
    </tr>
    <tr>
      <th>Account</th>
      <td>
        <a href="<?php echo url_for('account/show?id='.$account_record->getAccountId())?>">
        <?php echo $account_record->getAccount()->getDomainName()?>
        </a>
      </td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $account_record->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $account_record->getDateTimeObject('created_at')->format('M d, Y h:i:s a') ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $account_record->getDateTimeObject('updated_at')->format('M d, Y h:i:s a') ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('account_record/edit?id='.$account_record->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('account_record/index') ?>">List</a>
