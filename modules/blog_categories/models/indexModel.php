<?php


function get_list_post_type() {
    global $conn;
    $strquery = "SELECT * FROM dbo.POSTTYPE";
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
