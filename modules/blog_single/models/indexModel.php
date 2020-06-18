<?php

function get_post_by_id($post_id) {
    global $conn;
    $strquery = "SELECT * FROM dbo.POST where Id = " . $post_id;
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld->fetchAll(PDO::FETCH_ASSOC);
    return $results[0];
}

function get_list_ask_post_by_post_id($post_id) {
    global $conn;
    $strquery = "SELECT * FROM dbo.POSTASKQUESTION WHERE PostId = " . $post_id . " AND Status = 1";
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld->fetchAll(PDO::FETCH_ASSOC);
    return $results;
}
?>
