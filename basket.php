<?php
    include('basis/session.php');
    if(!$_SESSION['id_us']){
        header('Location: index');
    }
    include('basis/header.php');
    include('content/basket.php');
    include('basis/footer.php');
?>