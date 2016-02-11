<?php

    // connection
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sticky_table";

    $dbc = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);