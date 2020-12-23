<?php
session_start();
if (!isset($_SESSION["name_user"])) {
    header("location: login.php");
    exit;
}

include "system/validate.php";
include "system/connect.php";

$error = "";
$usernameErr = $phoneErr = $passErr = $cpassErr = ""; //deklarasi variabel validasi inputan login


if ($_POST) {

    validUsername($usernameErr, 'name_user');
    validPhone($phoneErr, 'phone_user');
    validPassword($passErr, 'password_user');

    if ($usernameErr == "" && $phoneErr == "" && $passErr == "") {
        $statement = $db->prepare("UPDATE users SET name_user=:name_user, phone_user=:phone_user, password_user= SHA2(:password_user,0) WHERE id_user=:id_user");
        $statement->bindValue(":name_user", $_POST['name_user']);
        $statement->bindValue(":id_user", $_POST['id_user']);
        $statement->bindValue(":phone_user", $_POST['phone_user']);
        $statement->bindValue(":password_user", $_POST['password_user']);
        $statement->execute();

        header("location: index.php");
        exit();
    } else {
        echo "<b>gagal</b>";
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
    <div class="container">
        <div class="content-left">
            <a href="index.php"><img src="assets/img/logo.png"></a>
            <div class="title">PRO- <br>FILE</div>
        </div>
        <?php
        include "system/connect.php";
        $name_session = $_SESSION['name_user'];
        $statement = $db->prepare("SELECT * FROM users WHERE name_user=:name_user");
        $statement->bindValue(":name_user", $name_session);
        $statement->execute();

        foreach ($statement as $row) {

        ?>
            <div class="content-right">
                <div class="form">
                    <form action="editprofile.php" method="POST">
                        <div class="field">
                            <input type="text" name="name_user" class="inp" value="<?php echo "{$row['id_user']}"; ?>" hidden>
                        </div>
                        <div class="field">
                            <label>Username</label>
                            <br>
                            <input type="text" name="name_user" class="inp" value="<?php echo "{$row['name_user']}"; ?>">
                        </div>
                        <div class="field">
                            <label>Phone Number</label>
                            <br>
                            <input type="text" name="phone_user" class="inp" value="<?php echo "{$row['phone_user']}"; ?>">
                        </div>
                        <div class="field">
                            <label>Email Address</label>
                            <br>
                            <input type="text" name="email_user" class="inp" value="<?php echo "{$row['email_user']}"; ?>" disabled>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <br>
                            <input type="password" name="password_user" class="inp" placeholder="&emsp;********">
                        </div>

                        <input type="submit" name="submit" value="Submit" class="btn-blue"><br>
                    </form>
                <?php } ?>

                </div>
            </div>
    </div>
</body>

</html>