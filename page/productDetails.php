<?php
$pid = $_REQUEST['pid'];
$pcat = $_REQUEST['pcat'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/581bb64942.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <link rel="stylesheet" href="./assets/css/details.css">
    <link rel="stylesheet" href="./assets/css/details.scss">
    <link rel="stylesheet" href="./assets/js/index.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- importing navbar -->
    <?php
    include "components/Navbar.php";
    include_once "page/conn.ini.php";

    $sqlGetProducts = "SELECT * from products where productCat = ?";
    $smtmPro = $conn->prepare($sqlGetProducts);
    $smtmPro->bind_param('s', $pcat);
    $smtmPro->execute();
    $resultPro = $smtmPro->get_result();

    foreach ($resultPro as $row) {
        if ($row['productId'] == $pid) {
    ?>
            <div class="cont1 single-product ">
                <div class="rows">
                    <div class="col image">
                        <img src="products/<?php echo $row['productCat'] . '/' . $row['productImgUrl'] ?>" alt="ERROR">
                    </div>
                    <div class="col">
                        <p>Home / <?php echo $row['productCat']; ?></p>
                        <h1><?php echo $row['productName']; ?></h1>
                        <h4>₹<?php echo $row['productPrice']; ?></h4>
                        <select>
                            <option>Available size options</option>
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                        <h3>Product Details <i class="fa fa-indent"></i></h3>
                        <br>
                        <p><?php echo $row['productDesc']; ?></p>
                        <a type="button" class="btn btn-info" href="page.php?id=contact&p=<?php echo $pid;?>">Inquery</a>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>
    
    <div class="cont1">
        <div class="rows rows-2">
            <h2>Related Products</h2>
        </div>
    </div>
    <div class="cont1">
        <div class="item">
            <?php
            foreach ($resultPro as $product) {
                if ($product['productId'] != $pid) {
            ?>
                <a href="page.php?id=detail&pid=<?php echo $product['productId']; ?>&pcat=<?php echo $product['productCat']; ?>">
                    <img src="products/<?php echo $product['productCat'] . '/' . $product['productImgUrl'] ?>" alt="ERROR">
                    <h4><?php echo $product['productName'] ?></h4>
                    <p>₹<?php echo $product['productPrice'] ?></p>
                </a>
            <?php
                }
            }
            ?>
        </div>
    </div>


    <!-- importing footer -->
    <?php
    include "components/Footer.php";
    ?>

</body>

</html>