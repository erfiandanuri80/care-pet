<?php
session_start();
if (!isset($_SESSION["name_user"])) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    include "pages/layout/userHeader.php";
    ?>

    <div class="wrapper">&emsp;</div>
    <div class="container">
        <div class="question-box">
            <a href="index.php" class="btn-white">Back to Disscussion</a>
        </div>
        <?php include "pages/layout/admDisscussion.php"; ?>
    </div>



    <div class="container">
        <div class="footer">

            <p>Copyright@2020 Care-Pet.Ltd <br> PAW2020-1-A05 <br>
                <?php
                echo $_SESSION['id_user'];
                echo $_SESSION['status'];
                echo $_SESSION['name_user']; ?></p>

        </div>
    </div>
</body>

</html>