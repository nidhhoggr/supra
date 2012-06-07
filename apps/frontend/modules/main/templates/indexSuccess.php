<?php if($staff): ?>
  <h2 class="welcome">
    Welcome,
    <?php echo link_to($staff,'staff/show?id='.$staff->getId()) ?>    
  </h2>
  <div class="client_accounts">
        <h3><?php echo link_to('Incomplete Tasks','incomplete_task/index'); ?></h3>
        <div id="tasks_incomplete">
            <table>
              <tr>
                <th>Task</th>
                <th>Account</th>
              </tr>
              <?php foreach($staff->getIncompleteTasks() as $task):?>
                <tr>
                  <td><?=link_to($task->getName(),'task/show?id='.$task->getId())?></td>
                  <td><?=link_to($task->getAccount(),'account/show?id='.$task->getAccount()->getId())?></td>
                </tr>
              <?php endforeach ?>
            </table>
        </div>

        <h3><?php echo link_to('Complete Tasks','complete_task/index'); ?></h3>
        <div id="tasks_complete">
            <table>
              <tr>
                <th>Task</th>
                <th>Account</th>
              </tr>
              <?php foreach($staff->getSomeCompleteTasks() as $task):?>
              <tr>
                <td><?=link_to($task->getName(),'task/show?id='.$task->getId())?></td>
                <td><?=link_to($task->getAccount(),'account/show?id='.$task->getAccount()->getId())?></td>
              </tr>
              <?php endforeach ?>
            </table>
        </div>
  </div>
<?php elseif($client): ?>
  <h2 class="welcome">
    Welcome,
    <?php echo link_to($client,'client/show?id='.$client->getId()) ?>    
  </h2>
  <div class="client_accounts">
    <?php foreach($client->getAccounts() as $account):?>
      <h3>Account</h3>
      <div class="client_account">
         <?php include_partial('account/linkto', array('account' => $account)) ?>
      </div>
      <div class="account_details">
          <div class="client_associated">
            <?php include_partial('client/task', array('account' => $account)) ?>
            <?php include_partial('client/invoice', array('invoices' => $account->getViewableAccountInvoice())) ?>
            <?php include_partial('client/record', array('records' => $account->getAccountRecord())) ?>
            <?php include_partial('client/credentials', array('credentials' => $account->getCredential())) ?>
          </div>
      </div>
    <?php endforeach ?>
  </div>
<?php endif; ?>
