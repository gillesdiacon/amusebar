<?php

class StaffService extends DbService {
    
    function __construct() {
        parent::__construct();
    }

    function login($userName, $userPass){
        $query  = "select id, username, password, first_name, last_name";
        $query .= " from staff";
        $query .= " where (username='$userName' and password='$userPass')";

        $result = $this->mysqli->query($query) or die("error with table staff");
        $staff = parent::fillObjectWithSQLResult("Staff",$result);
        
        return $staff[0];
    }
}

?>