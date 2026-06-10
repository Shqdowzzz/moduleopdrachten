<?php

function db()
{

    return mysqli_connect("localhost", "root", "" , "vuurwerk");
}

function getVuurwerk()
{

    $con = db();
    $sql = "SELECT * FROM vuurwerk";

    $result = mysqli_query($con, $sql);

    $rows = null;

    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[]= $row;
    }
    return $rows;   
}

?>
