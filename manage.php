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
    <title>Home | Care-pet</title>
</head>

<body>
    <?php
    include "pages/layout/userHeader.php";
    ?>

    <div class="wrapper">&emsp;</div>
    <div class="container">
        <div class="question-box">
            <a href="index.php" class="btn-white">kembali ke Diskusi</a>
        </div>
        <?php include "pages/layout/admDisscussion.php"; ?>
    </div>



    <?php include "pages/layout/footer.php"; ?>
</body>

</html>