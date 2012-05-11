<?php include_partial('global/showCrud',array('module'=>'credential','object'=>$credential))?>
<table>
  <tbody>
    <tr>
      <th>Account:</th>
      <td><?php echo $credential->getAccount() ?></td>
    </tr>
    <tr>
      <th>Credential type:</th>
      <td><?php echo $credential->getCredentialType() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $credential->getName() ?></td>
    </tr>
    <tr>
      <th>Internal ip:</th>
      <td><?php echo $credential->getInternalIp() ?></td>
    </tr>
    <tr>
      <th>External ip:</th>
      <td><?php echo $credential->getExternalIp() ?></td>
    </tr>
    <tr>
      <th>Device:</th>
      <td><?php echo $credential->getDevice() ?></td>
    </tr>
    <tr>
      <th>Url:</th>
      <td><?php echo $credential->getUrl() ?></td>
    </tr>
    <tr>
      <th>User:</th>
      <td><?php echo $credential->getUser() ?></td>
    </tr>
    <tr>
      <th>Pass:</th>
      <td><?php echo $credential->getPass() ?></td>
    </tr>
    <tr>
      <th>Notes:</th>
      <td><?php echo $credential->getNotes() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $credential->getDateTimeObject('created_at')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $credential->getDateTimeObject('updated_at')->format('M d, Y h:i a') ?></td>
    </tr>
  </tbody>
</table>
