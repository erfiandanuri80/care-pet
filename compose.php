<?php
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION["name_user"])) {
    header("location: login.php");
    exit;
}
include "system/validate.php";
include "system/connect.php";

$error = "";
$contentErr = "";

if ($_POST) {
    required($contentErr, "content_question");
    if ($contentErr = "") {
        $statementTopic = $db->prepare("INSERT INTO topic (name_topic) VALUES (:name_topic)");
        $statementTopic->bindValue(":name_topic", $_POST['name_topic']);
        $statementTopic->execute();
        $statementIdTopic = $db->query("SELECT * FROM topic ORDER BY id_topic DESC LIMIT 1");
        foreach ($statementIdTopic as $row) {
            $statement = $db->prepare("INSERT INTO question (id_user, id_topic, content_question) VALUES (:id_user ,:id_topic, :content_question)");
            $statement->bindValue(':id_user', $_SESSION['id_user']);
            $statement->bindValue(':id_topic', $row['id_topic']);
            $statement->bindValue(':content_question', nl2br($_POST['content_question']));
            $statement->execute();
        }
        $statementIdQuestion = $db->query("SELECT * FROM ORDER BY id_question DESC LIMIT 1");
        foreach ($statementIdQuestion as $row1) {
            $statementAnswer = $db->prepare("INSERT INTO answer (id_user,id_question) VALUES (2,:id_question)");
            $statementAnswer->bindValue(":id_question", $row1['id_question']);
            $statementAnswer->execute();
        }

        header("location: index.php");
        exit();
    } else {
        echo $error;
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pertanyaan | Care-pet</title>
</head>

<body>
    <?php
    include "pages/layout/userHeader.php"; ?>

    <div class="wrapper">&emsp;</div>

    <div class="container">
        <div class="question-box">
            <a href="index.php" class="btn-white">kembali ke diskusi</a>
        </div>
        <div class="wrapper"></div>
        &emsp;&emsp;&emsp;&emsp;
        <?php include "pages/client/addQuestion.php"; ?>
    </div>

    <?php include "pages/layout/footer.php";
    ?>
</body>

</html>