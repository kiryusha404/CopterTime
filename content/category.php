<?php
    $push = "select * from class_copter";
    $class = mysqli_query($db, $push);
?>
<div class="add_tovar_admin">
    <form action="#" method="post" enctype="multipart/form-data" class="tovar_add_form">
    <select name="class" class="tovar_add_element">
    <?php 
        while($row = mysqli_fetch_array($class)){
    ?>
     <option value="<?php echo $row['id_copter']; ?>"><?php echo $row['class_copter']; ?></option>
     <?php } ?>
   </select>
    <button type="submit" class="add_but">Удалить категорию</button>
    </form>
</div>
<div class="menu_admin">
                <a href="add_category"><div class="element_menu_admin"><p>+ Добавить категорию</p></div></a>
</div>
<?php 
    if($_POST['class']){
            $push = 'DELETE FROM `class_copter` WHERE `class_copter`.`id_copter` = '.$_POST['class'].';';
            $input = mysqli_query($db, $push);

            echo "<script>window.location.href='catalog'</script>";
    }
?>