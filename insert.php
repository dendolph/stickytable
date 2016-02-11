<?php

    // connection
    include('connect.php');


    $data = @$_POST['data'];
    $q = "INSERT INTO table_data(`data`) VALUES(:data)";

    $query = $dbc->prepare($q);
    $query->bindParam(':data', $data);
    $results = $query->execute();