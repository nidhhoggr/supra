<div class="client_invoice">
  <h3>Invoices</h3>
  <?php foreach($invoices as $invoice): ?>
  <?php if(!$invoice->getIsViewable()) continue; ?>
  <div>
      <a href="<?php echo url_for('invoice/show?id='.$invoice->getId())?>">
        <?php echo $invoice->getRefNo() ?>
      </a>
  </div>
  <?php endforeach ?>
  <?php if($invoices->count() >= 5): ?>
  <div class="view_more">
      View More(<?php echo $invoices->count() ?>)
  </div>
  <?php endif ?>
</div>

