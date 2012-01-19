<table>
  <tbody>
    <tr>
      <td><?php echo $bug->getName() . ' - ' . $bug->getRefNo() ?></td>
    </tr>
    <tr>
      <th>Account</th>
      <td>
        <a href="<?php echo url_for('account/show?id='.$bug->getAccountId())?>">
        <?php echo $bug->getAccount()->getDomainName()?>
        </a>
      </td>
    </tr>
    <tr>
      <th>Assigned To:</th>
      <td>      
        <a href="<?php echo url_for('staff/show?id='.$bug->getStaffId())?>"> 
        <?php echo $bug->getStaff()->getFirstName() . ' ' . $bug->getStaff()->getLastName() ?></td>
        </a>
      </td>
    </tr>
    <tr>
      <th>Bug Type:</th>
      <td><?php echo $bug->getBugType()->getName() ?></td>
    </tr>
    <tr>
      <th>Bug Status:</th>
      <td><?php echo $bug->getBugStatus()->getName() ?></td>
    </tr>
    <tr>
      <th>Bug Priority:</th>
      <td><?php echo $bug->getBugPriority()->getName() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $bug->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $bug->getDateTimeObject('created_at')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $bug->getDateTimeObject('updated_at')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <td><h3>Comments</h3></td>
    </tr>
    <?php foreach($bug->getBugComment() as $comment):?>
    <tr>
      <td>
      <?php echo $comment->getStaff()->getFirstName() . ' ' . $comment->getStaff()->getLastName() ?>
      wrote on
      <?php echo $comment->getDateTimeObject('created_at')->format('M d, Y h:i a') ?>
      </td>
    </tr>
    <tr>
      <td>
        <?php
         echo $comment->getTitle();
         echo $comment->getComment();
        ?>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('bug/edit?id='.$bug->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('bug/index') ?>">List</a>
