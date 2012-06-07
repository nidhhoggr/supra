<?php

/**
 * sfGuardUserAdminForm for admin generators
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardUserAdminForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardUserCustomForm extends BasesfGuardUserAdminForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
      if(!sfContext::getInstance()->getUser()->getCredentials('superadmin')) {
          unset(
              $this['groups_list'],
              $this['is_active'],
              $this['is_super_admin']
          );
      }

      unset($this['permissions_list']);

      if($this->getObject()->exists()) {

          unset($this['password'],$this['password_again']);

      }
  }
}
