<?php

function usd($price) {
    return '$'. sprintf("%01.2f",$price);
}
?>
<table>
  <tbody>
    <tr>
      <th>Account:</th>
      <td><?php include_partial('account/linkto',array('account'=>$account_invoice->getAccount()))?></td>
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
      <td><?php echo usd($total) ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $account_invoice->getDescription() ?></td>
    </tr>
    <?php foreach($account_invoice->getAccountInvoiceTask() as $inv_task): ?>
    <tr>
      <th>Tasks</th>
      <td>
          <?php 
            $task = $inv_task->getTask(); 
            $work = $task->getTaskWork();
          ?>
          <p><?php echo link_to($task->getName(),'task/show?id='.$task->getId()) ?></p>
          <p><?php echo $task->getDescription() ?>
      </td>
    </tr>
    <tr>
      <th>Work Completed</th>
      <td>
        <ol>
          <?php foreach($task->getTaskLog() as $log):?>
          <li>
            <p>
              <?php echo $log->getTitle() . ' - '; ?>
              <?php include_partial('staff/linkto', array('staff' => $log->getStaff())) ?>
            </p>
            <p>
              <?php echo $log->getDescription() ?>
            </p>
            <p>
              <?php echo $log->getHours() . ' hours of ' . link_to($work->getName(),'work/show?id='. $work->getId()).' at '.usd($work->getRate());?>/hr = <?php echo usd(round($log->getHours() * $work->getRate(),2)) ?>
            </p>
          </li>
          <?php endforeach ?>
        </ol>
        <hr />
        <p>Total: <?php echo usd($total) ?></p>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<hr />
<a href="<?php echo url_for('invoice/index') ?>">List</a>
