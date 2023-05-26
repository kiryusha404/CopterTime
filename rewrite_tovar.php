<?php
    include('basis/session.php');
    if($_SESSION['role_us'] != 'admin'){
        header('Location: index');
    }
    $id_tovar = $_GET['id'];
    $img = $_FILES['img'];

    if($_POST['name']){
        $push = 'UPDATE `product` SET `name_product` = "'.$_POST['name'].'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    if($_POST['class']){
        $push = 'UPDATE `product` SET `class_product` = "'.$_POST['class'].'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    if($_POST['price']){
        $push = 'UPDATE `product` SET `price_product` = "'.$_POST['price'].'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    if($_POST['brand']){
        $push = 'UPDATE `product` SET `brand_product` = "'.$_POST['brand'].'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    if($_POST['mass']){
        $push = 'UPDATE `product` SET `mass_product` = "'.$_POST['mass'].'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    if($_POST['time']){
        $push = 'UPDATE `product` SET `time_product` = "'.$_POST['time'].'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    if($_POST['amount']){
        $push = 'UPDATE `product` SET `amount_product` = "'.$_POST['amount'].'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    if($img['name']){
        var_dump($_FILES);
        $url = $img['name'];
        $pathfile = __DIR__ .'/img/copter/'.$url;

        if(!move_uploaded_file($img['tmp_name'], $pathfile)){
            echo 'Файл не смог загрузиться';
        }

        $push = 'UPDATE `product` SET `brand_product` = "img/copter/'.$url.'" WHERE `product`.`id_product` = '.$id_tovar.';';
        $res = mysqli_query($db, $push);
    }

    echo "<script>window.location.href='tovar?id=".$id_tovar."'</script>";
?>