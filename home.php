<?php
if (!isset($_SESSION)) {
    session_start();
}
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
    if ($_SESSION['status'] == 2) {
        include "pages/expert/userContent.php";
    } else {
        include "pages/client/userContent.php";
    }
    ?>

    <div class="wrapper">&emsp;</div>



    <div class="container">
        <div class="footer">

            <p>Copyright@2020 Care-Pet.Ltd <br> PAW2020-1-A05 <br>
                <?php
                //echo $_SESSION['id_user'];
                //echo $_SESSION['status'];
                //echo $_SESSION['name_user']; 
                ?></p>

        </div>
    </div>
</body>

</html>