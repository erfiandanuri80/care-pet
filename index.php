<?php
//PENGECEKAN PEMULAIAN SESI(KARENA DIBUAT DI PHP V8 MAKA HARUS ADA KONDISI AGAR TIDAK ADA NOTICE)
//Notice: session_start(): Ignoring session_start() because a session is already active
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['name_user'])) {
    // HALAMAN DASAR USER SETELAH LOGIN
    include "home.php";
} else {
    //  HALAMAN DASAR/UTAMA WEB  
    include "landingPage.php";
}
