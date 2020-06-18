<?php

function get_list_invoice(){
    global $conn;
    $strquery = "SELECT * FROM  Invoice where InvoiceStatus = 1";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function disable_invoice($invoice_id){
    global $conn;
    $strquery = "UPDATE dbo.Invoice SET InvoiceStatus = 0 WHERE InvoiceId = {$invoice_id}";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    return true;
}
?>