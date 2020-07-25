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
    try{
        global $conn;
        $strquery = "UPDATE dbo.Invoice SET InvoiceStatus = 0 WHERE InvoiceId = {$invoice_id}";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    } catch (Exception $ex) {
        return false;
    }
    
}

function get_amount_row_of_invoice_at_current_date(){
    global $conn;
    $strquery = "SELECT COUNT(*) as AmountRow FROM dbo.Invoice WHERE YEAR(InvoiceTime) = YEAR(GETDATE()) AND MONTH(InvoiceTime) = MONTH(GETDATE()) AND  Day(InvoiceTime) = Day(GETDATE())";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['AmountRow'];
}

function get_amount_row_of_invoice_at_last_date($last_day){
    global $conn;
    $strquery = "SELECT COUNT(*) as AmountRow FROM dbo.Invoice WHERE YEAR(InvoiceTime) = YEAR($last_day) AND "
            . "MONTH(InvoiceTime) = MONTH($last_day) AND  Day(InvoiceTime) = Day($last_day)";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['AmountRow'];
}

function get_total_invoice_completed_at_current_date(){
    global $conn;
    $strquery = "SELECT Sum(InvoiceTotal) AS TotalCompeleted FROM dbo.Invoice 
        WHERE InvoiceSituation= 'Paid' AND YEAR(InvoiceTime) = YEAR(GETDATE()) AND MONTH(InvoiceTime) = MONTH(GETDATE()) AND  Day(InvoiceTime) = Day(GETDATE())";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['TotalCompeleted'];
}

function get_total_invoice_completed_at_last_date($last_day){
    global $conn;
    $strquery = "SELECT Sum(InvoiceTotal) AS TotalCompeleted FROM dbo.Invoice 
        WHERE InvoiceSituation= 'Paid' AND YEAR(InvoiceTime) = YEAR($last_day) AND MONTH(InvoiceTime) = MONTH($last_day) AND  Day(InvoiceTime) = Day($last_day)";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['TotalCompeleted'];
}

function get_total_invoice_pending_at_current_date(){
    global $conn;
    $strquery = "SELECT Sum(InvoiceTotal) AS TotalCompeleted FROM dbo.Invoice 
        WHERE InvoiceSituation= 'Pending' AND YEAR(InvoiceTime) = YEAR(GETDATE()) AND MONTH(InvoiceTime) = MONTH(GETDATE()) AND  Day(InvoiceTime) = Day(GETDATE())";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['TotalCompeleted'];
}

function get_total_invoice_pending_at_last_date($last_day){
    global $conn;
    $strquery = "SELECT Sum(InvoiceTotal) AS TotalCompeleted FROM dbo.Invoice 
        WHERE InvoiceSituation= 'Pending' AND YEAR(InvoiceTime) = YEAR($last_day) AND MONTH(InvoiceTime) = MONTH($last_day) AND  Day(InvoiceTime) = Day($last_day)";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['TotalCompeleted'];
}
?>