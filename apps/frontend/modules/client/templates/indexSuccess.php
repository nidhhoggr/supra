<div id="jobs">
  <h2><?php echo link_to('Clients','client/index?sort=1');?></h2>  
  <div class="clients">
    <ul>
      <?php foreach($pager->getResults() as $client):?>
        <hr />
        <li>
          <?php echo link_to($client,'client/show?id='.$client->getUser()->getId()) ?>
          <div style="margin-left:50px;">
              <h4>Accounts:</h4> 
              <ul>
                 <?php foreach($client->getAccount() as $account):?>
  
                  <li><?php echo link_to($account,'account/show?id='.$account->getId())?></li>

                  <?php endforeach ?>
              </ul>
          </div>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<?php include_partial('global/pager', array('pager'=>$pager,'module'=>'client')); 
