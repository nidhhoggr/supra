<?php

/**
 * TestClient filter form base class.
 *
 * @package    supra
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTestClientFormFilter extends sfGuardUserFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema   ['track_record'] = new sfWidgetFormFilterInput();
    $this->validatorSchema['track_record'] = new sfValidatorPass(array('required' => false));

    $this->widgetSchema->setNameFormat('test_client_filters[%s]');
  }

  public function getModelName()
  {
    return 'TestClient';
  }

  public function getFields()
  {
    return array_merge(parent::getFields(), array(
      'track_record' => 'Text',
    ));
  }
}
