<?php

// Used to fetch product data 
class Product {

    public $db = null;

    public function __construct(DBController $db) {
        if(!isset($db->con)) return null;
        $this->db=$db;
    }

    // Fetch product data 
    public function getData($table = 'product'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }
}