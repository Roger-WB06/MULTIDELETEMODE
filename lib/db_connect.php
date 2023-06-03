<?php
class DB
{
    function __construct()
    {
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die("connection Failed. Error: ".$mysqli->connect_error);
        $this->con = $mysqli;
    }

    function execute_query($sql)
    {
        $con = $this->con;
        $result = $con->query($sql) or die($con->connect_error);
        return $result;
    }

    function fetch_data($result)
    {
        $rs = $result->fetch_array(MYSQLI_BOTH);
        return $rs;
    }

    function get_num_rows($result)
    {
        $num_rows = $result->num_rows;
        return $num_rows;
    }
    // function get_insert_id()
    // {
    //     $con = $this->con;

    // }
}