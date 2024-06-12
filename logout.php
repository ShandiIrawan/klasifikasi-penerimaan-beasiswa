<?php
include_once 'php/koneksi.php';

if (isset($_SESSION['status'])) {
    unset($_SESSION);
    session_destroy();
    echo "<script>document.location='index.php';</script>";
}
?>