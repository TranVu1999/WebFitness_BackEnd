<?php

function get_list_invoice_cancel(){
    global $conn;
    $strquery = "SELECT * FROM  Invoice where InvoiceStatus = 0";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function restore_invoice($invoice_id){
     global $conn;
    $strquery = "UPDATE dbo.Invoice SET InvoiceStatus = 1 WHERE InvoiceId = {$invoice_id}";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    return true;
}


function delete_invoice($invoice_id){
    global $conn;
    $strquery = "DELETE dbo.InvoiceDetail WHERE InvoiceId = {$invoice_id}
                DELETE dbo.Invoice WHERE InvoiceId = {$invoice_id}";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    return true;
}
?>