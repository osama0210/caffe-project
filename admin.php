<?php
include_once "connectie.php";
/**
 * @var $connection ;
 */


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="script.js">
    <title>Document</title>
</head>
<body>
<nav>
    <div class="logo"><img src="photos/logo.png" alt="" height="35px"> COFFEE</div>
    <div class="li-container">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About</a></li>
            <li><a href="index.php">Menu</a></li>
            <li><a href="index.php">Contact Us</a></li>
            <a href="login.php"><img src="photos/login.png" alt="login button" height="25px"></a>
        </ul>
    </div>
</nav>

<section class="admin-panel">

    <div class="crud-container">
        <h1 class="menu-txt admin-txt">Café Admin</h1>
        <div class="category-contaier admin-filter">
            <div class="coffee-filter">
                <div class="box box2">
                    <input type="text" placeholder="Search...">
                    <a href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </div>
                <button class="add-items-btn"><i class="bi bi-plus"></i>Add items</button>
            </div>
        </div>

        <div class="tabel-container">
            <table>
                <thead>
                <tr>
                    <th>PRODUCT</th>
                    <th>description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody id="itemTable">
                <tr>
                    <td>latte</td>
                    <td>---------</td>
                    <td>3</td>
                    <td>
                        <div class="edit-button-container flex">
                            <a class="edit-button" href="#popup"><i class="bi bi-pencil-square"></i>Edit</a>
                        </div>
                        <div id="popup" class="overlay">
                            <div class="popup">
                                <a class="close" href="#game-creators">&times;</a>
                                <div class="content">


                                    <?php
                                    $sql = "INSERT INTO caffe_menu (naam, beschrijving, prijs)
                                    values (:naam, :beschrijving, :prijs)";

                                    $stmt = $connection->prepare($sql);
                                    $stmt->bindParam(":naam", $_POST['name']);
                                    $stmt->bindParam(":beschrijving", $_POST['description']);
                                    $stmt->bindParam(":prijs", $_POST['price']);

                                    ?>

                                    <form action="admin.php" method="post">
                                        <input class="edit-input" type="text" name="name" placeholder="Name">
                                        <input class="edit-input" type="text" name="description"
                                               placeholder="Description">
                                        <input class="edit-input" type="number" name="price" placeholder=Price>
                                        <input type="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

</body>
</html>
