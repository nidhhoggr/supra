<div id="jobs">
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
</div>
