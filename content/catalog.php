<?php 
    if($_SESSION['role_us'] == 'admin'){
        echo '<div class="menu_admin">
                <a href="add_tovar"><div class="element_menu_admin"><p>+ Добавить товар</p></div></a>
                <a href=""><div class="element_menu_admin"><p>Изменить категории</p></div></a>
              </div>';
    }
?>
<div class="list_tovar">
<?php 
    $push = "select * from product where amount_product > 0 order by id_product desc";
    $input = mysqli_query($db, $push);
    while($row = mysqli_fetch_array($input)){
        ?>
        <a href="tovar?id=<?php echo $row['id_product']; ?>" class="index_tovar">
            <div class="tovar_cart">
            <img src='<?php echo $row['img_product']; ?>' alt="фото товара">
            <h3> <?php echo $row['name_product']; ?></h3>
            <div>
                <p> Цена: <?php echo $row['price_product']; ?> руб.</p>
            </div>
        </div></a>
<?php
    }
?>
</div>