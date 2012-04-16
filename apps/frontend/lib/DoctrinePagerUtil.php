<?php

class DoctrinePagerUtil extends sfDoctrinePager {

    private $sort;
    private $pager;

    public function __construct($class, $ppm = 10) {
        parent::__construct($class,$ppm);
    }

    public function getPager($args) {
        $request = $args['request'];
        $this->setQuery($args['query']);
        $this->setPage($request->getParameter('page', 1));
        $this->init();
        return $this;
    }

    public function getSort($request) {
        $sort = $request->getParameter('sort', false);
        if(!$sort) $sort = "asc";
        $this->sort = $sort;
        return $sort;
    }

    public function getSortable() {
        return ($this->sort == "asc") ? "desc" : "asc";
    }

}
