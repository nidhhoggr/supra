<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('account_invoice_deduction', 'account_invoice_deduction_deduction_id_deduction_id', array(
             'name' => 'account_invoice_deduction_deduction_id_deduction_id',
             'local' => 'deduction_id',
             'foreign' => 'id',
             'foreignTable' => 'deduction',
             ));
        $this->addIndex('account_invoice_deduction', 'account_invoice_deduction_deduction_id', array(
             'fields' => 
             array(
              0 => 'deduction_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('account_invoice_deduction', 'account_invoice_deduction_deduction_id_deduction_id');
        $this->removeIndex('account_invoice_deduction', 'account_invoice_deduction_deduction_id', array(
             'fields' => 
             array(
              0 => 'deduction_id',
             ),
             ));
    }
}