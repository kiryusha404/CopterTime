<div class="author">
<img  src="img/main/reg.png">
<form action="#" method="post" class="form_input">

        <input type="tel" tabindex="1" required name="login" class="info_input" placeholder="Логин" value="<?php echo $_POST['login'] ?>"> 
        <div class="password">
	        <input type="password" tabindex="2" id="password-input3" required placeholder="Пароль" name="pass" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div>
        <button type="submit" class="info_input info_input_button">Войти</button>

    </form>
    <?php 
        if(!empty($_POST['login']) && !empty($_POST['pass'])){
            $push = 'SELECT id_user, pass_pass, role_user FROM users WHERE login="'.$_POST["login"].'"';
            $input = mysqli_query($db, $push);
            $row = mysqli_fetch_array($input);
                if(password_verify($_POST['pass'], $row['pass_user'])){
                   $_SESSION['role'] = $row['role_user']; 
                   $_SESSION['id_us'] = $row['id_user'];
                }
                else{
                    echo "<p class='error'>Неверный логин или пароль.</p>";
                }
        }
        ?>
    <p class="reg_text">У вас нет аккаунта? <a href="registration">Зарегистрироваться</a></p>
</div>

<script src="js/pass.js"></script>