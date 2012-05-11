<?php include_partial('global/showCrud',array('module'=>'client','object'=>$client)); ?>
<table>
  <tbody>
    <tr>
      <th>Username:</th>
      <td><?php echo $client->getUser()->getUsername() ?></td>
    </tr>
    <tr>
      <th>Full Name:</th>
      <td><?php echo $client->getFullName() ?></td>
    </tr>
    <tr>
      <th>Track record:</th>
      <td><?php echo $client->getTrackRecord() ?></td>
    </tr>
  </tbody>
</table>

