<?php
    $page = $_REQUEST['id'];
    
    if ($page != "detail"){
        if ($page == "contact") {
            include "contact/contact.php";
        } else if ($page == "shop") {
            include "page/shop.php";
        } else {
            echo "page not found";
        }
    } else {
        $product = $_REQUEST['pid'];
        if ($page == "detail"){
            include "page/productDetails.php";
        } else {
            include "page/productDetails.php";
            echo "page not found";
        }
    }
?>