<?php
/**
 * @return mysqli
 */
function getConnection()
{
    $user     = "root";
    $password  = "Letellier14760";
    $host     = "localhost";
    $db       = "user";
    $mysqli = new mysqli($host, $user, $password, $db);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die();
    }
    return $mysqli;
}

/**
 * @param $mysqli
 * @param $sql
 * @return mixed
 */
function execSql($mysqli, $sql)
{
    if (!$result = $mysqli->query($sql)){
        echo "failed to run query : (" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
}