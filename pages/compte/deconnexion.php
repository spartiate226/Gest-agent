<?php
if (isset($_GET['deconnexion'])) {
    session_destroy();
    header('location:../../index.php');
}