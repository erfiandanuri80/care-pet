<div class="container">
    <div class="user-content">
        <div class="cont-left" style="width: 94%;">
            <div class="text1">
                <h1>Selamat Datang, <?php echo $_SESSION['name_user']; ?> ! </h1>
                <p>Web Care-Pet forum berperan sebagai konsultasi untuk hewan peliharaan. Melalui website ini para pemilik hewan dapat bertanya maupun konsultasi seputar permasalahan yang tengah dihadapi. Pertanyaan-pertanyaan yang masuk akan segera dijawab oleh dokter-dokter hewan.</p>
                <br>

                <input type="text" name="searchtopic" id="searchtopic">

                <a href="#">Search</a>

            </div>

        </div>

    </div>
</div>
<div class="wrapper">&emsp;</div>
<div class="container">
    <div class="question-box">
        <h1>Tanyakan Sesuatu</h1>
        <a href="compose.php" class="btn-white">Buat Pertanyaan</a>
        <a href="manage.php" id="filterUser" class=" btn-blue">Lihat Pertanyaan yang anda buat</a>
    </div>
    <?php
    include "pages/layout/disscussion.php"; ?>
</div>