<?php

class DB {

    var $_dbConn = 0;
    var $_queryResource = 0;

    function DB() {
        //do nothing
    }

    function connect_db($host, $user, $pwd, $dbname) {
        $dbConn = mysqli_connect($host, $user, $pwd, $dbname);
        if (!$dbConn)
            die("MySQL Connect Error");
        mysqli_query($dbConn, "SET NAMES utf8");
        if (!mysqli_select_db($dbConn, $dbname))
            die("MySQL Select DB Error");
        $this->_dbConn = $dbConn;
        return true;
    }

    function query($sql) {
        if (!$queryResource = mysqli_query($this->_dbConn, $sql))
            die("MySQL Query Error");
        $this->_queryResource = $queryResource;
        return $queryResource;
    }

    /** Get array return by MySQL */
    function fetch_array() {
        return mysqli_fetch_array($this->_queryResource, MYSQL_ASSOC);
    }

    function get_num_rows() {
        return mysql_num_rows($this->_queryResource);
    }

    /** Get the cuurent id */
    function get_insert_id() {
        return mysql_insert_id($this->_dbConn);
    }

}
