<?php

class accessControlFilter extends sfFilter {

    public function execute ($filterChain) {

        $context = $this->getContext();

        $action = $context->getActionName();

        $module = $context->getModuleName();

        if($this->accessController($module,$action))
            $context->getController()->redirect($context->getRequest()->getReferer());

        $filterChain->execute();
 
    }

   /**
    * if a module is specified in niether set of rules
    *     the user is allowd to access the action
    * if a module is specified in one set of rules
    *     it must be ommitted in the other
   */  
     

    private function getAccessRules() {

       $rules['forbidden'] = 
                       array(
                       );
 
       $rules['allowed'] = 
                       array(
                           'client'=>array(
                               'account'=>array('index','show'),
                               'client'=>array('show','edit','update'),
                               'staff'=>array('show','index'),
                               'invoice'=>array('index','show'),
                               'work'=>array('index','show'),
                           )
                       );
       
       return $rules;

    }

    private function accessController($module,$action) {

        $access_rules    = $this->getAccessRules();

        $forbidden_rules = $access_rules['forbidden'][$this->getUserType];

        $allowed_rules   = $access_rules['allowed'][$this->getUserType];

        if(in_array($allowed_rules[$module][$action]))
            return false;
            
        if(!in_array($allowed_rules[$module][$action]))
            return false;
    }
}
