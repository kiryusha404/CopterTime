<?php
    $push = "select * from class_copter";
    $class = mysqli_query($db, $push);
?>
<div class="add_tovar_admin">
    <form action="add_file" method="post" enctype="multipart/form-data" class="tovar_add_form">
    <input type="file" required name="img" class="tovar_add_element" placeholder="Фото">
    <input type="text" required name="name" class="tovar_add_element" placeholder="Название">
    <select name="class" class="tovar_add_element">
    <?php 
        while($row = mysqli_fetch_array($class)){
    ?>
     <option value="<?php echo $row['id_copter']; ?>"><?php echo $row['class_copter']; ?></option>
     <?php } ?>
   </select>
    <input type="text" required name="price" class="tovar_add_element" placeholder="Цена">
    <input type="text" required name="brand" class="tovar_add_element" placeholder="Фирма-изготовитель">
    <input type="text" required name="mass" class="tovar_add_element" placeholder="Вес дрона в граммах">
    <input type="text" required name="time" class="tovar_add_element" placeholder="Время полёта">
    <button type="submit" class="add_but">Добавить</button>
    </form>
</div>