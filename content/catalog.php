<div class="list_tovar">
<?php 
    $push = "select * from product where amount_product > 0";
    $input = mysqli_query($db, $push);
    while($row = mysqli_fetch_array($input)){
        ?>
        <a href="" class="index_tovar">
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