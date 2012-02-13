<?php

/**
 * TestClient form base class.
 *
 * @method TestClient getObject() Returns the current form's model object
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTestClientForm extends sfGuardUserForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['track_record'] = new sfWidgetFormTextarea();
    $this->validatorSchema['track_record'] = new sfValidatorString(array('required' => false));

    $this->widgetSchema->setNameFormat('test_client[%s]');
  }

  public function getModelName()
  {
    return 'TestClient';
  }

}
