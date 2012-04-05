<form action="<?php echo url_for('timequery/index') ?>" method="POST">
  <table>
    <?php echo $form ?>
    <tr>
      <td colspan="2">
        <input type="submit" />
      </td>
    </tr>
  </table>
 
  <?php 
     if($total) echo "Total hours: " . $total['h'] . " hours " . $total['m'] . " minutes";
  ?>
</form>
