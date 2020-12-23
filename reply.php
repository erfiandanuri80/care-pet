<?php
session_start();
if (!isset($_SESSION["name_user"])) {
    header("location: login.php");
    exit;
}
include "system/connect.php";
include "system/validate.php";

$error = "";
$answerErr = "";
if ($_POST) {
    required($answerErr, 'content_answer');
    if ($answerErr == "") {
        $statement = $db->prepare("UPDATE answer SET content_answer=:content_answer WHERE id_question=:id_question");
        $statement->bindValue(':id_question', $_POST['id_question']);
        $statement->bindValue(':content_answer', $_POST['content_answer']);
        $statement->execute();

        header("location: index.php");
        exit();
    }
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
    include "pages/layout/userHeader.php"; ?>

    <div class="wrapper">&emsp;</div>

    <div class="container">
        <div class="question-box">
            <a href="index.php" class="btn-white">Back to Disscussion</a>
        </div>
        <div class="wrapper"></div>
        &emsp;&emsp;&emsp;&emsp;

        <?php
        include "pages/expert/replyQuestion.php"; ?>
    </div>

    <div class="container">
        <div class="footer">
            <p>Copyright@2020 Care-Pet.Ltd <br> PAW2020-1-A05</p>

        </div>
    </div>
</body>

</html>