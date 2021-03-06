<?php include_partial('global/showCrud',array('module'=>'account','object'=>$account))?>
<table>
  <tbody>
    <tr>
      <td>
        <?php echo $account->getTitle() ?>
        (
        <?php if($account->getActive()):?>
            <span class="active">Active</span>
        <?php else: ?>
            <span class="inactive">Inactive</span>
        <?php endif ?>
        )
      </td>
    </tr>
    <?php if($account->getDomainName()): ?>
    <tr>
      <th>Domain:</th>
      <td><?php echo $account->getDomainName() ?></td>
    </tr>
    <?php endif ?>
    <?php if($account->getPlanId()): ?>
    <tr>
      <th>Plan</th>
      <td><?php echo $account->getPlan()->getTitle() ?></td>
    </tr>
    <?php endif ?>
    <tr>
      <th>Description:</th>
      <td><?php echo $account->getDescription() ?></td>
    </tr>
    <tr>
      <th>Client Since:</th>
      <td><?php echo $account->getDateTimeObject('created_at')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <th>Account Updated:</th>
      <td><?php echo $account->getDateTimeObject('updated_at')->format('M d, Y h:i a') ?></td>
    </tr>
  </tbody>
</table>
<h2>Credentials</h2>
<ul style="margin-left: 50px;">
<?php foreach($account->getCredential() as $credential):?>

    <li><?php echo link_to($credential->getName(),'credential/show?id='.$credential->getId()) ?></li>

<?php endforeach;?>
</ul>
<?php echo link_to('add credential','credential/new?account_id='.$account->getId()); ?>
