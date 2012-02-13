<?php

/**
 * Deduction form.
 *
 * @package    supra
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DeductionForm extends BaseDeductionForm
{
  public function configure()
  {
    $this->unsetTimestampable();
  }
}
