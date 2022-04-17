<?php

    class database{
        var $_sql = "";
        var $_connection = null;
        var $_cursor = null;
        var $_host = "localhost";
        var $_user = "root";
        var $_pass = "";
        var $_database = "doanphp";

        function __construct() {
            $this->_connection = @mysqli_connect($this->_host, $this->_user, $this->_pass);
            if(!$this->_connection) {
                die("Can't connect Mysql");
            }
            $db = $this->_database;
            if($db != "" && !mysqli_select_db($this->_connection, $db)) {
                die("Can't open database");
            }
        }

        function setQuery($sql) {
            $this->_sql = $sql;
        }

        function query() {
            $this->_cursor = mysqli_query($this->_connection, $this->_sql);
            return $this->_cursor;
        }

        function disconnect() {
            mysqli_close($this->_connection);
        }
    }

?>