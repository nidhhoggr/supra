<?php include_partial('global/showCrud',array('module'=>'staff','object'=>$staff)) ?>
<table>
  <tbody>
    <tr>
      <td><?php echo $staff . ' - ' . $staff->getTitle() ?></td>
    </tr>
    <tr>
      <th>Bio:</th>
      <td><?php echo $staff->getBio() ?></td>
    </tr>
    <tr>
      <th>Employed Since:</th>
      <td><?php echo $staff->getDateTimeObject('created_at')->format('M d, Y') ?></td>
    </tr>

    <tr>
      <th>Skillset</th>
      <td>
        <ul>
        <?php foreach($staff->getStaffTaskWork() as $task_work):?>
          <li><?php include_partial('work/linkto',array('work'=>$task_work->getTaskWork()))?></li>
        <?php endforeach ?>
        </ul>
      </td>
    </tr>
    <tr>
      <th>Total Task Logs</th>
      <td><?php echo $total_task_logs ?></td>
    </tr>
    <tr>
      <th>Total Hours</th>
      <td><?php echo $hours ?></td> 
    </tr>
    <tr>
      <th>Tasks Completed</th>
      <td><?php echo $tasks_complete ?></td>
    </tr>
    <tr>
      <th>Tasks Pending</th>
      <td><?php echo $tasks_incomplete?></td>
    </tr>
</table>
