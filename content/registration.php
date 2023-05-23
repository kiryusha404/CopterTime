<div class="author">
<img  src="img/main/reg.png">
<form action="#" method="post" class="form_input">

        <input type="text" tabindex="1" required name="name" class="info_input" placeholder="Имя" value="<?php echo $_POST['login'] ?>">
        <input type="text" tabindex="2" required name="surname" class="info_input" placeholder="Фамилия" value="<?php echo $_POST['login'] ?>"> 
        <input type="text" tabindex="3" required name="patronymic" class="info_input" placeholder="Отчество" value="<?php echo $_POST['login'] ?>">
        <input type="text" tabindex="4" required name="login" class="info_input" placeholder="Логин" value="<?php echo $_POST['login'] ?>">
        <input type="text" tabindex="5" required name="email" class="info_input" placeholder="Емаил" value="<?php echo $_POST['login'] ?>">
        <div class="password">
	        <input type="password" tabindex="6" id="password-input3" required placeholder="Пароль" name="pass" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div>
        <div class="password">
	        <input type="password" tabindex="7" id="password-input3" required placeholder="Повторите пароль" name="pass2" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div>        
        <button type="submit" class="info_input info_input_button">Зарегистрироваться</button>

    </form>
    <p class="reg_text">У вас есть аккаунт? <a href="authorization">Войти</a></p>
</div>

<script src="js/pass.js"></script>