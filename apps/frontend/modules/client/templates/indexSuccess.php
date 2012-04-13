<div id="jobs">
  <h2>Clients</h2>
  <div class="clients">
    <ul>
      <?php foreach($clients as $client):?>
        <li>
          <?php echo link_to($client,'client/show?id='.$client->getUser()->getId()) ?>
          <ul style="margin-left:50px;">
              <?php foreach($client->getAccount() as $account):?>

                 <li><?php echo link_to($account,'account/show?id='.$account->getId())?></li>

              <?php endforeach ?>
          </ul>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</div>
