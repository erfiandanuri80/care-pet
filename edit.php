<?php
session_start();
if (!isset($_SESSION["name_user"])) {
    header("location: login.php");
    exit;
}
$id_question = $_GET['id_question'];
$error = "";
$contentErr = "";
include "system/validate.php";
include "system/connect.php";
if ($_POST) {
    required($contentErr, $_POST['content_question']);
    if ($contentErr == "") {
        $statement = $db->prepare("UPDATE question SET content_question=:content_question WHERE id_question=$id_question");
        $statement->bindValue(':content_quesrion', $_POST['content_question']);
        $statement->bindValue(':id_question', $_POST['$id_question']);
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
    <title>Edit Pertanyaan | Care-pet</title>
</head>

<body>
    <?php
    include "pages/layout/userHeader.php"; ?>

    <div class="wrapper">&emsp;</div>

    <div class="container">
        <div class="question-box">
            <a href="index.php" class="btn-white">Kembali ke diskusi</a>
        </div>
        <div class="wrapper"></div>
        &emsp;&emsp;&emsp;&emsp;
        <?php
        if ($_SESSION['status'] == 1) {
            $sql = $db->query("SELECT * FROM question a, users b, topic c WHERE a.id_user=b.id_user AND c.id_topic=a.id_topic AND id_question=$id_question");
            foreach ($sql as $row) {
        ?>
                <div class="form-question">
                    <h1>Edit Pertanyaan</h1>
                    <div class="form-field">
                        <form action="edit.php" method="POST">
                            <div class="field">
                                <br>
                                <input type="text" name="id_question" value="<?php echo "{$row['id_question']}"; ?>" disabled hidden>
                            </div>
                            <div class="field">
                                <label>Topic</label>
                                <br>
                                <input type="text" name="name_topic" value="<?php echo "{$row['name_topic']}"; ?>" disabled>
                            </div>
                            <div class="field">
                                <label>Pertanyaan</label>
                                <br>
                                <textarea name="content_question" cols="30" rows="15"><?php echo "{$row['content_question']}"; ?></textarea>
                            </div>
                            <input type="submit" value="Submit" class="btn-green">
                        </form>
                    </div>
                </div>
        <?php }
        } ?>

    </div>
    <?php include "pages/layout/footer.php";
    ?>
</body>

</html>