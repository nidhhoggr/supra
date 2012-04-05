<div id="jobs">
  <?php if($staff): ?>
  <?php include_partial('staff/staffnav') ?>
  <h2 class="welcome">
    Welcome,
    <?php echo link_to($sf_user,'staff/show?id='.$staff->getId()) ?>    
  </h2>
  <h2>Accounts</h2>
  <div class="client_accounts">

    <h3>Incomplete</h3>
    <?php foreach($staff->getIncompleteTasks() as $task):?>
        <div id="tasks_incomplete">
            <?=link_to($task->getName(),'task/show?id='.$task->getId())?>
            <?=link_to($task->getAccount(),'account/show?id='.$task->getAccount()->getId())?>
        </div>
    <?php endforeach ?>

    <h3>Complete</h3>
    <?php foreach($staff->getSomeCompleteTasks() as $task):?>
        <div id="tasks_complete">
            <?=link_to($task->getName(),'task/show?id='.$task->getId())?>
            <?=link_to($task->getAccount(),'account/show?id='.$task->getAccount()->getId())?>
        </div>
    <?php endforeach ?>

  </div>
  <?php else: ?>

<h1>Employees</h1>
<table>
  <thead>
    <tr>
      <th>Employee</th>
      <th>Title</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($staffs as $staff): ?>
    <tr>
      <td><?php echo $staff ?></td>
      <td><?php echo $staff->getTitle() ?></td>
      <td>
          <?php echo link_to('show','staff/show?id='.$staff->getId()) ?>
          <?php echo link_to('edit','staff/edit?id='.$staff->getId()) ?>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('staff/new') ?>">New</a>

  <?php endif ?>
</div>
