<?php
    function get_product($product_id){
        global $conn;
        $strquery = "SELECT * FROM dbo.Product WHERE ProductId = $product_id";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
        return $results[0];
    }
?>
