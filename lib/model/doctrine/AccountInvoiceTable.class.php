<?php

/**
 * AccountInvoiceTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AccountInvoiceTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AccountInvoiceTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AccountInvoice');
    }

    public function queryAll($sort) {
        return Doctrine_Query::Create()
               ->from('AccountInvoice ai')
               ->orderBy('ai.'.$sort);
    }

    public function queryAllByAccountId($sort) {

        $account_ids = myUser::getLoggedIn()->isClient()->getAccountIds();

        return Doctrine_Query::Create()
               ->from('AccountInvoice ai')
               ->whereIn('ai.account_id',$account_ids)
               ->orderBy('ai.'.$sort);
    }

    public function getUnpaid() {
       return Doctrine_Query::Create()
               ->from('AccountInvoice ai')
               ->where('ai.paid_off = ?', false)
               ->execute(); 
    }

    public function refNoExists($refno) {
        return Doctrine_Query::Create()
               ->from('AccountInvoice ai')
               ->where('ai.ref_no = ?', $refno)
               ->limit(1)
               ->fetchOne();
    }

    public function getLastRefNo() {
        return Doctrine_Query::Create()
               ->select('ai.ref_no')
               ->from('AccountInvoice ai')
               ->orderBy('ai.id DESC')
               ->limit(1)
               ->fetchOne()->ref_no;
    }

    public function createRefNo() {
        $last = $this->getLastRefNo();
        $next = $last+1;
        while($this->refNoExists($next)) {
            $next++;
            $ref_no = $next;
        }
        return $next;
    }
}
