<?php
    $id_tovar = $_GET['id'];
    $push = 'Select * from product where id_product = '.$id_tovar.'';
    $tovar = mysqli_query($db, $push);
    $row = mysqli_fetch_array($tovar);
?>