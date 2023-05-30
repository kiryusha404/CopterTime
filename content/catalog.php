<?php 
    if($_SESSION['role_us'] == 'admin'){
        echo '<div class="menu_admin">
                <a href="add_tovar"><div class="element_menu_admin"><p>+ Добавить товар</p></div></a>
                <a href="category"><div class="element_menu_admin"><p>Изменить категории</p></div></a>
              </div>';
    }
    if(($_POST['cat'] == 0 && $_POST['class'] == 0) || (!$_POST['cat'] && !$_POST['class'])){
    $push = "select * from product where amount_product > 0 order by id_product desc";
    }
    else{
        if($_POST['class'] != 0){
            $class = " where class_product_fk = ".$_POST['class']."";
        }
        if($_POST['class'] == 0){
            $class = "";
        }
        if($_POST['cat'] == 0){
            $sort = "";
        }
        if($_POST['cat'] == 1){
            $sort = " order by brand_product desc";
        }
        if($_POST['cat'] == 2){
            $sort = " order by price_product desc";
        }
        if($_POST['cat'] == 3){
            $sort = " order by mass_product desc";
        }
        $push = "select * from product".$class."".$sort."";
    }
    $input = mysqli_query($db, $push);
?>
<div class="add_tovar_admin">
<?php
    $push = "select * from class_copter";
    $class = mysqli_query($db, $push);
?>
    <form action="#" method="post" enctype="multipart/form-data" class="tovar_add_form">
    <p>Выбрать сортировку</p>
    <select name="cat" class="tovar_add_element" value="<?php echo $_POST['class']; ?>">
    <option value="0">Не сортировать</option>
    <option value="1">По фирме изготовителю</option>
    <option value="2">По цене</option>
    <option value="3">По массе</option>
    </select>
        <p>Выбрать категорию коптера</p>
    <select name="class" class="tovar_add_element">
    <option value="0">Все категории</option>
    <?php 
        while($row = mysqli_fetch_array($class)){
    ?>
     <option value="<?php echo $row['id_copter']; ?>"><?php echo $row['class_copter']; ?></option>
     <?php } ?>
   </select>
    <button type="submit" class="add_but">Применить фильтры</button>
    </form>
</div>
<div class="list_tovar">
<?php 

    while($row = mysqli_fetch_array($input)){
        ?>
            <div class="tovar_cart">
            <a href="tovar?id=<?php echo $row['id_product']; ?>" class="index_tovar">
            <img id="LCI<?php echo $row['id_product']; ?>" src='<?php echo $row['img_product']; ?>' alt="фото товара">
            <h3 id="LCN<?php echo $row['id_product']; ?>"> <?php echo $row['name_product']; ?></h3>
            <div>
                <p> Цена: <?php echo $row['price_product']; ?> руб.</p>
                <p id="LCC<?php echo $row['id_product']; ?>" style="display: none;"><?php echo $row['price_product']; ?></p>
            </div>
            </a>
            <?php if($_SESSION['id_us']){ ?>
            <button class="circle" onclick="ArrAdd(<?php echo $row['id_product']; ?>);">Добавить в корзину</button>
            <?php } ?>
        </div></a>
<?php
    }
?>
<script src="js/basket.js"></script>
</div>