  <?php foreach ($pager->getResults() as $object): ?>
    <tr>
        <?php foreach($pager->getFields() as $field): ?>
            <td>
                <?php
                  $getter = $field['getter'];
                  $route  = $field['route'];
                  $returntype = $field['returntype'];
                  $displaylink = $object->{$getter}();
          
                  switch($getter) {
                      case "getCreatedAt":
                          $displaylink = $object->getDateTimeObject('created_at')->format('M d, Y h:i:s a');
                      break;
                      case "getUpdatedAt":
                          $displaylink = $object->getDateTimeObject('updated_at')->format('M d, Y h:i:s a');
                      break;
                      default:
                          $displaylink = $object->{$getter}();
                  }

                  if(!empty($getter)) {
                      if(is_object($object->{$getter}())) {
                          $id = $object->{$getter}()->getId();
                      }
                      else if($returntype == "bool") {
                          $id = $object->getId();
                          $postfix = ($displaylink) ? "true" : "false";
                          $displaylink = '<div id="bool_' . $postfix . '"></div>';
                      }
                      else {
                          $id = $object->getId();
                      }

                      echo link_to($displaylink,$route.'/show?id='.$id); 
                  }
                  else {
                      echo link_to($object,$route.'/show?id='.$object->getId()); 
                  }
                ?>
            </td>
        <?php endforeach ?>
    </tr>
  <?php endforeach; ?>
</table>

