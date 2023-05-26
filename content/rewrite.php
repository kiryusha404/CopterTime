<?php
    $id_tovar = $_GET['id'];
    $push = 'Select * from product where id_product = '.$id_tovar.'';
    $push = "select * from class_copter";
    $class = mysqli_query($db, $push);
    $push = "select * from product where id_product = ".$id_tovar."";
    $data = mysqli_query($db, $push);
    $res = mysqli_fetch_array($data);   
?>
<div class="add_tovar_admin">
    <form action="rewrite_tovar?id=<?php echo $id_tovar;?>" method="post" enctype="multipart/form-data" class="tovar_add_form">
    <input type="file" name="img" class="tovar_add_element" placeholder="Фото" value="">
    <input type="text" name="name" class="tovar_add_element" placeholder="Название" value="<?php echo $res['name_product'];?>">
    <select name="class" class="tovar_add_element">
    <?php 
        while($row = mysqli_fetch_array($class)){
    ?>
     <option value="<?php echo $row['id_copter']; ?>"><?php echo $row['class_copter']; ?></option>
     <?php } ?>
   </select>
    <input type="text" name="price" class="tovar_add_element" placeholder="Цена" value="<?php echo $res['price_product'];?>">
    <input type="text" name="brand" class="tovar_add_element" placeholder="Фирма-изготовитель" value="<?php echo $res['brand_product'];?>">
    <input type="text" name="mass" class="tovar_add_element" placeholder="Вес дрона в граммах" value="<?php echo $res['mass_product'];?>">
    <input type="text" name="time" class="tovar_add_element" placeholder="Время полёта" value="<?php echo $res['time_product'];?>">
    <input type="text" name="amount" class="tovar_add_element" placeholder="количество" value="<?php echo $res['amount_product'];?>">
    <button type="submit" class="add_but">Изменить</button>
    </form>
</div>