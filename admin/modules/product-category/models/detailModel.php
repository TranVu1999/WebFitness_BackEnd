<?php
function get_prod_cate_by_id($prod_cate_id){
    global $conn;
    $strquery = "SELECT * FROM dbo.ProductCate WHERE ProductCateId = $prod_cate_id";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0];
}

function get_amount_product_belong_prod_cate($prod_cate_id){
    global $conn;
    $strquery = "SELECT COUNT(*) AS AmountRow FROM dbo.Product WHERE ProductCateId = $prod_cate_id";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['AmountRow'];
}

function edit_prod_cate($prod_cate_id, $prod_cate_title, $prod_cate_desc, $prod_cate_avatar, $prod_cate_alias){
    global $conn;
    $strquery = "UPDATE dbo.ProductCate SET ProductCateTitle = '$prod_cate_title', ProductCateDesc = '$prod_cate_desc', ProductAvatar = '$prod_cate_avatar',
        ProductCateAlias = '$prod_cate_alias', ModifiedDate = GETDATE() WHERE ProductCateId = $prod_cate_id";

    $getResuld = $conn->prepare($strquery);
    $getResuld->execute();
    $results = $getResuld -> fetchAll(PDO::FETCH_ASSOC);
    return $results[0]['AmountRow'];
}
?>