<?php
    include('basis/session.php');
    if($_SESSION['role_us'] != 'admin'){
        header('Location: index');
    }
    include('basis/header.php');
    include('content/add_category.php');
    include('basis/footer.php');
?>s