<?php

class DbService {

    public $mysqli;

    public function __construct(){
        $this->mysqli = new mysqli("yethichmzqyethi.mysql.db", "yethichmzqyethi", "rg2g9UK2shDXUX");
        $this->mysqli->select_db("yethichmzqyethi");
        $this->mysqli->set_charset("utf8");
    }

    function fillObjectWithSQLResult($className,$result){
        $array = array();
        
        while($object=$result->fetch_object($className)){
            $array []= $object;
        }
        
        return $array;
    }

}

?>