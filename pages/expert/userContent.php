<div class="container">
    <div class="user-content">
        <div class="cont-left" style="width: 94%;">
            <div class="text1">
                <h1>Selamat Datang, <?php echo $_SESSION['name_user']; ?> ! </h1>
                <p>Web Care-Pet forum berperan sebagai konsultasi hewan peliharaan.
                    Melalui web ini dokter dapat membantu untuk menjawab pertanyaan seputar kesehatan hewan para owner pemilik pet.
                </p>
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
        <h1>Semua Pertanyaan</h1>
        <a href="manage.php" class="btn-white">Lihat Pertanyaan yang telah anda jawab</a>
    </div>
    <?php include "pages/layout/disscussion.php"; ?>
</div>