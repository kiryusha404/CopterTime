<?php
    include('basis/session.php');
    if($_SESSION['role_us'] != 'admin'){
        header('Location: index');
    }
    include('basis/header.php');
    include('content/admin.php');
    include('basis/footer.php');
?>