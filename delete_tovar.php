<?php
    include('basis/session.php');
    if($_SESSION['role_us'] != 'admin'){
        header('Location: index');
    }
    $id_tovar = $_GET['id'];
    $push = 'DELETE FROM `product` WHERE `product`.`id_product` = '.$id_tovar.'';
    $add = mysqli_query($db, $push);
    echo "<script>window.location.href='catalog'</script>";
?>