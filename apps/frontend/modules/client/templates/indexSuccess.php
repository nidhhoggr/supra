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
  <h2 class="welcome">
    Welcome, 
    <a href="<?php echo url_for('client/show?id='.$client->getId()) ?>">
    <?php echo $client->getFirstname() . ' ' . $client->getLastname(); ?>
    </a>
  </h2>
  <h2>Accounts</h2>
  <div class="client_accounts">
    <?php foreach($client->getAccount() as $account):?>
      <div class="client_account">
         <a href="<?php echo url_for('account/show?id='.$account->getId())?>">
           <?php echo $account->getDomainName(); ?>
         </a>
      </div>
      <div class="client_associated">
        <?php include_partial('client/bug', array('bugs' => $account->getBug())) ?>
        <?php include_partial('client/invoice', array('invoices' => $account->getAccountInvoice())) ?>
        <?php include_partial('client/record', array('records' => $account->getAccountRecord())) ?>
      </div>
    <?php endforeach ?>      
  </div>
</div>
