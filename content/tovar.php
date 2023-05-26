<?php
    $id_tovar = $_GET['id'];
    $push = 'Select * from product where id_product = '.$id_tovar.'';
    $tovar = mysqli_query($db, $push);
    $row = mysqli_fetch_array($tovar);
?>
<div class="tovar_page">
<h1><?php echo $row['name_product']; ?></h1>
<img src="<?php echo $row['img_product']; ?>" alt="фото товара">
<p>Фирма-производитель: <?php echo $row['brand_product']; ?></p>
<p>Масса квадрокоптера: <?php echo $row['mass_product']; ?> г.</p>
<p>Время полёта: <?php echo $row['time_product']; ?></p>
<p>Цена: <?php echo $row['price_product']; ?> руб.</p>
<?php 
    if($_SESSION['role_us'] == 'admin'){
        echo '<div class="menu_admin">
                <a href="rewrite?id='.$id_tovar.'"><div class="element_menu_admin"><p>Редактировать информацию</p></div></a>
                <a href="delete_tovar?id='.$id_tovar.'"><div class="element_menu_admin"><p>Удалить товар</p></div></a>
              </div>';
    }
?>
</div>
