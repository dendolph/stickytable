<?php

    // connection
    include('connect.php');

    $query = $conn->prepare("SELECT * FROM `table_data`");
    $query->execute();

    // set the resulting array to associative
    $result = $query->setFetchMode(PDO::FETCH_ASSOC);

    $html = '<tr>';

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $result=>$r) {
        //$html .= '<td>'.$r.'</td>';
        $html .= $r;
    }

    $html = '</tr>';

    $json = [
        'result' => $html
    ];
    return $json;
