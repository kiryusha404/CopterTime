<div class="add_tovar_admin">
    <form action="#" method="post" enctype="multipart/form-data" class="tovar_add_form">
    <input type="text" required name="category" class="tovar_add_element" placeholder="Название категории">
    <button type="submit" class="add_but">Добавить категорию</button>
    </form>
</div>
<div class="menu_admin">
                <a href="category"><div class="element_menu_admin"><p>Удалить категорию</p></div></a>
            </div>
<?php 
    if($_POST['category']){
            $push = 'INSERT INTO `class_copter` (`id_copter`, `class_copter`) VALUES (NULL, "'.$_POST['category'].'");';
            $input = mysqli_query($db, $push);

            echo "<script>window.location.href='catalog'</script>";
    }
?>