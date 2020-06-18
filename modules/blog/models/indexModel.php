<?php

function get_list_post($post_type_id) {
    global $conn;
    $strquery = "SELECT * FROM dbo.POST WHERE PostTypeId = " .$post_type_id;
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function get_alias_of_post_type($post_type_id) {
    global $conn;
    $strquery = "SELECT Alias FROM dbo.POSTTYPE WHERE Id = " .$post_type_id;
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld->fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['Alias'];
}