<?php
include_once "connectie.php";
/**
 * @var $connection ;
 */


if (isset($_POST["edit-item"])) {
    $sql = "UPDATE caffe_menu
        SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs
        WHERE ID = :ID";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":naam", $_POST['naam']);
    $stmt->bindParam(":beschrijving", $_POST['beschrijving']);
    $stmt->bindParam(":prijs", $_POST['prijs']);
    $stmt->bindParam(":ID", $_POST['prijs']);
    $stmt->bindParam(":ID", $_GET['id']);
    $stmt->execute();
    header("Location: admin.php");
} else {
    $sql = "SELECT * FROM caffe_menu
        WHERE ID = :ID";
    $stmt = $connection->prepare($sql);
    $stmt->bindParam(":ID", $_GET['id']);
    $stmt->execute();
    $menu = $stmt->fetch();
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
    <title>Login page</title>
</head>
<body>
<section class="edit-page">
    <h1 class="menu-txt">Edit page</h1>
    <form action="" method="post">
        <input class="edit-input" type="text" name="naam" placeholder="Name" value="<?php echo $menu['naam']; ?>">
        <input class="edit-input" type="text" name="beschrijving" placeholder="Description"
               value="<?php echo $menu['beschrijving']; ?>">
        <input class="edit-input" type="number" name="prijs" placeholder="Price" value="<?php echo $menu['prijs']; ?>">
        <input name="edit-item" type="submit">
    </form>

</section>
</body>
</html>
