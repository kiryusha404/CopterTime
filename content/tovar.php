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
<p>Масса квадрокоптера: <?php echo $row['mass_product']; ?></p>
<p>Время полёта: <?php echo $row['time_product']; ?></p>
<p>Цена: <?php echo $row['price_product']; ?> руб.</p>
</div>