<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <script src="https://kit.fontawesome.com/581bb64942.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/shop.css">
    <link rel="stylesheet" href="assets/js/index.js">
</head>

<body>
    <!-- importing navbar -->
    <?php
    include "components/Navbar.php";
    ?>
    <div class="cont1">
        <h1>All Products</h1>
    </div>

    <?php

    include_once "conn.ini.php";

    $sqlGetProductsCat = "SELECT DISTINCT productCat from products";
    $sqlGetProducts = "SELECT * from products where productCat = ?";

    $smtmPro = $conn->prepare($sqlGetProducts);

    $result = $conn->query($sqlGetProductsCat);
    foreach ($result as $productCat) {
        $smtmPro->bind_param('s', $productCat['productCat']);
        $smtmPro->execute();
        $resultPro = $smtmPro->get_result();
        // $product = $resultPro->fetch_assoc();
    ?>
        <div class="cont1">
            <h2><?php echo $productCat['productCat']; ?></h2>
            <div class="item">

                <?php
                foreach ($resultPro as $product) {
                ?>
                    <a href="page.php?id=detail&pid=<?php echo $product['productId']; ?>&pcat=<?php echo $product['productCat']; ?>">
                        <img src="products/<?php echo $product['productCat'] . '/' . $product['productImgUrl'] ?>" alt="ERROR">
                        <h4><?php echo $product['productName'] ?></h4>
                        <p>₹<?php echo $product['productPrice'] ?></p>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>

    <?php
    }
    ?>
    <?php
    include "components/Footer.php";
    ?>

</body>

</html>