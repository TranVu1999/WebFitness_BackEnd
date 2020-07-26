<?php

function get_list_invoice_by_id($invoide_id){
    global $conn;
    $strquery = "SELECT Invoice.InvoiceId, InvoiceTotal, InvoiceTime,  InvoiceAddress, InvoiceSituation, InvoiceReceiver, LastModified, InvoiceDetail.AmountProduct, InvoiceDetail.ProductPrice, Product.ProductId, ProductTitle, Email FROM  Invoice, InvoiceDetail, Product, Account WHERE Invoice.InvoiceId = InvoiceDetail.InvoiceId and InvoiceDetail.ProductId = Product.ProductId and Invoice.AccountId = Account.AccountId and Invoice.InvoiceId = '$invoide_id'";
    
    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results;
}

function update_situation_invoice($invoide_id, $invoice_situation){
    try{
        global $conn;
        $strquery = "UPDATE dbo.Invoice SET InvoiceSituation = '$invoice_situation' WHERE InvoiceId = $invoide_id";

        $getResuld = $conn->prepare($strquery);
        $getResuld->execute();
        return true;
    } catch (Exception $ex) {
        return false;
    }
    
}

