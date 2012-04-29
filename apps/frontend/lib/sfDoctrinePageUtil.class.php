<?php

class sfDoctrinePagerUtil extends sfDoctrinePager {

    private $sort;
    private $pager;
    private $fields;
    private $sorted_field;
    private $default_sort_dir   = "asc";
    private $default_sort_field = "id";

    public function __construct($class, $ppm = 10) {
        parent::__construct($class,$ppm);
    }

    public function getPager($args) {
        $request = $args['request'];
        $this->setQuery($args['query']);
        $this->setFields($args['fields']);
        $this->setPage($request->getParameter('page', 1));
        $this->init();
        return $this;
    }

    /*
    *   returns a string of a field and row to sort by and sets an private var array of sort
    */

    public function getSort($request) {
        $sort = array();
        $sort_dir   = $request->getParameter('sort_dir', $this->default_sort_dir);
        $sort_field = $request->getParameter('sort_field', $this->default_sort_field);
        $sort['dir'] = $sort_dir;
        $sort['field'] = $sort_field;
        $this->sorted_field = $sort['field'];
        $this->sort = $sort;
        return $sort['field'] . ' ' . $sort['dir'];
    }

    private function setFields($fields) {
        $i = 0;
        foreach($fields as $k=>$field) {
            $field_arr[$i]['name']    = $k;
            $field_arr[$i]['display'] = $field[0];
            @$field_arr[$i]['route']   = ($field[1]) ? $field[1] : null;
            @$field_arr[$i]['getter']  = ($field[2]) ? $field[2] : null;
            $i++;
        }
        $this->fields = $field_arr;
    }

    public function getFields() {
        return $this->fields;
    }

    public function getSortedField() {
        return $this->sorted_field;
    }

    public function isSorted($field) {
        return ($this->getSortedField() == $field) ? true : false;
    }
    /*
    *   returns a the opposite direction to sort by
    */

    public function getSortDir($field) {
        if($this->isSorted($field))
           return $this->sort['dir'];
        else
           return "decc";
    }     

    public function getSortableDir($field) {
        if($this->isSorted($field))
           return ($this->sort['dir'] == "asc") ? "desc" : "asc";
        else
           return "desc";
    }

}
