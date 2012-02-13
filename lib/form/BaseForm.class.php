<?php

/**
 * Base project form.
 * 
 * @package    supra
 * @subpackage form
 * @author     Joseph Persie
 * @version    SVN: $Id: BaseForm.class.php 20147 2009-07-13 11:46:57Z FabianLange $
 */
class BaseForm extends sfFormSymfony
{
    protected function unsetTimeStampable() {
        unset(
            $this['created_at'],
            $this['updated_at']
        );
    } 

    protected function embedUser() {
        unset($this['user_id']);
        $formUser = new SfGuardUserAdminForm($this->getObject()->getUser());
        $this->embedForm('User',$formUser);
    }
}
