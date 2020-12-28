<!--BAGIAN NAVBAR SESUDAH LOGIN-->
<div class="container">
    <nav class="navbar">
        <div class="navbar-left">
            <div class="logo">
                <a href="./index.php"><img src="assets/img/logo.png" alt="logo"></a>
            </div>
        </div>
        <div class="navbar-right">
            <ul>
                <li><a href="profile.php" class="bt-login"><?php echo $_SESSION['name_user']; ?></a></li>
            </ul>
        </div>
    </nav>
</div>