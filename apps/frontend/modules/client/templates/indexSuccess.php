<?php use_stylesheet('jobs.css') ?>
<style type="text/css">
  h2 {
    font-size: 18px;
    font-weight: bold;
  }
  h3 {
    font-size: 16px;
    font-weight: bold;
  }

  .client_accounts {
  }

  .client_account {
    margin-left: 50px;
  }

  .client_associated {
    margin-left: 100px;
  }
</style>
<div id="jobs">
  <?php if($client): ?>
  <h2 class="welcome">
    Welcome,
    <?php link_to($sf_user,'client/show?id='.$client->getId()) ?>    
  </h2>
  <h2>Accounts</h2>
  <div class="client_accounts">
    <?php foreach($client->getAccount() as $account):?>
      <div class="client_account">
         <?php include_partial('account/linkto', array('account' => $account)) ?>
      </div>
      <div class="client_associated">
        <?php include_partial('client/task', array('tasks' => $account->getTask())) ?>
        <?php include_partial('client/invoice', array('invoices' => $account->getViewableAccountInvoice())) ?>
        <?php include_partial('client/record', array('records' => $account->getAccountRecord())) ?>
        <?php include_partial('client/credentials', array('credentials' => $account->getCredential())) ?>
      </div>
    <?php endforeach ?>      
  </div>
  <?php else: ?>
  <h2>Clients</h2>
  <div class="clients">
    <ul>
      <?php foreach($clients as $client):?>
        <li>
          <?php echo link_to($client,'client/show?id='.$client->getUser()->getId()) ?>                 </li>
      <?php endforeach ?>
    </ul>
  </div>
  <?php endif ?>
</div>
