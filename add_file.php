<?php
    include('basis/session.php');
    if($_SESSION['role_us'] != 'admin'){
        header('Location: index');
    }
    if($_FILES['img'] && $_POST['name'] && $_POST['class'] && $_POST['price'] && $_POST['brand'] && $_POST['mass'] && $_POST['time']){

        $img = $_FILES['img'];
        $url = $img['name'];
        $pathfile = __DIR__ .'/img/copter/'.$url;

        if(!move_uploaded_file($img['tmp_name'], $pathfile)){
            echo 'Файл не смог загрузиться';
        }

        $push = 'INSERT INTO `product` (`id_product`, `img_product`, `name_product`, `class_product_fk`, `price_product`, `brand_product`, `mass_product`, `time_product`, `amount_product`) VALUES (NULL, "img/copter/'.$url.'", "'.$_POST['name'].'", "'.$_POST['class'].'", "'.$_POST['price'].'", "'.$_POST['brand'].'", "'.$_POST['mass'].'", "'.$_POST['time'].'", "1");';
        $add = mysqli_query($db, $push);
    }
    echo "<script>window.location.href='catalog'</script>";
?>