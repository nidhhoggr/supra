<?php include_partial('global/indexCrud',array('module'=>'client')) ?>
<h2><?php echo link_to('Clients','client/index');?></h2>  
<?php include_partial('global/pager_header', array('pager'=>$pager,'module'=>'client')); ?>
</table>
<div id="jobs">
  <div class="clients">
    <ul>
      <?php foreach($pager->getResults() as $client):?>
        <hr />
        <li>
          <?php echo link_to($client,'client/show?id='.$client->getId()) ?>
          <div style="margin-left:50px;">
              <h4>Accounts:</h4> 
              <ul>
                 <?php foreach($client->getAccounts() as $account):?>
  
                  <li><?php echo link_to($account,'account/show?id='.$account->getId())?></li>

                  <?php endforeach ?>
              </ul>
          </div>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>

<?php include_partial('global/pager_footer', array('pager'=>$pager,'module'=>'client')); ?>
