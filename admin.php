<?php
include_once "connectie.php";
/**
 * @var $connection ;
 */

session_start();
if (isset($_SESSION['username'])) {

} else {
    header("Location: login-page.php");
}

if (isset($_POST["add-item"])) {
    $sql = "INSERT INTO caffe_menu (naam, beschrijving, prijs)
        VALUE(:naam, :beschrijving, :prijs)";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->execute();

}

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
    <title>Admin panel</title>
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
            <div class="logout-btn">
                <img src="photos/login.png" alt="login button" height="25px">
                <li><a href="logout.php">Logout</a></li>
            </div>
        </ul>
    </div>
</nav>

<section class="admin-panel">
    <div class="crud-container">
        <h1 class="menu-txt admin-txt">Café Admin</h1>
        <div class="category-contaier admin-filter">
            <div class="coffee-filter">



                <div class="box2">
                    <input type="text" placeholder="Search...">
                    <a href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </div>



                <a class="add-items-btn" href="#popup_add"><i class="bi bi-plus"></i>Add items</a>
                <div id="popup_add" class="overlay">

                    <div class="popup">
                        <a class="close" href="#">&times;</a>
                        <div class="content">
                            <form action="admin.php" method="post">
                                <input class="add-input" type="text" name="naam" placeholder="Name">
                                <input class="add-input" type="text" name="beschrijving" placeholder="Description">
                                <input class="add-input" type="number" name="prijs" placeholder="Price">
                                <input name="add-item" type="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        echo "<div class='table-header'>" .
            "<p>Name</p>" .
            "<p>Description</p>" .
            "<p>Price</p>" .
            "<p>Action</p>" .
            "</div>";

        $stmt = $connection->query("SELECT * FROM `caffe_menu`");

        while ($menu = $stmt->fetch()) {
            echo "<div class='table-body'>" .
                "<p>" . $menu['naam'] . "</p>" .
                "<p class='beschrijving-txt'>" . $menu['beschrijving'] . "</p>" .
                "<p>" . $menu['prijs'] . " Euro" . "</p>" .
                "<div class='edit-container'><button class='add-items-btn'><a href='edit-item.php?id=" . $menu['id'] . "'>Edit</a></button>".
                "<button class='add-items-btn'><a href='delete-item.php?id=" . $menu['id'] . "'>Delete</a></button>".

                "</div>" .
                "</div>";
        }


        ?>

    </div>
</section>

</body>
</html>
