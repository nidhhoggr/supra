  <?php foreach ($pager->getResults() as $object): ?>
    <tr>
        <?php foreach($pager->getFields() as $field): ?>
            <td>
                <?php
                  $getter = $field['getter'];
                  $route  = $field['route'];

                  if(!empty($getter)) {
                      if(is_object($object->{$getter}())) {
                          $id = $object->{$getter}()->getId();
                      }
                      else {
                          $id = $object->getId();
                      }

                      echo link_to($object->{$getter}(),$route.'/show?id='.$id); 
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

