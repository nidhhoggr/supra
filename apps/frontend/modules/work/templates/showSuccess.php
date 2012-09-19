<?php include_partial('global/showCrud',array('module'=>'work','object'=>$task_work))?>
<table>
  <tbody>
    <tr>
      <th>Name:</th>
      <td><?php echo $task_work->getName() ?></td>
    </tr>
    <tr>
      <th>Rate:</th>
      <td><?php echo $task_work->getRate() ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $task_work->getDescription() ?></td>
    </tr>
  </tbody>
</table>
