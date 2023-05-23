<div class="author">
<img  src="img/main/reg.png">
<form action="#" method="post" class="form_input">

        <input type="text" tabindex="1" required name="name" class="info_input" placeholder="Имя" value="<?php echo $_POST['name'] ?>">
        <input type="text" tabindex="2" required name="surname" class="info_input" placeholder="Фамилия" value="<?php echo $_POST['surname'] ?>"> 
        <input type="text" tabindex="3" name="patronymic" class="info_input" placeholder="Отчество" value="<?php echo $_POST['patronymic'] ?>">
        <input type="text" tabindex="4" required name="login" class="info_input" placeholder="Логин" value="<?php echo $_POST['login'] ?>">
        <input type="text" tabindex="5" required name="email" class="info_input" placeholder="Емаил" value="<?php echo $_POST['email'] ?>">
        <div class="password">
	        <input type="password" tabindex="6" id="password-input2" required placeholder="Пароль" name="pass" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div>
        <div class="password">
	        <input type="password" tabindex="7" id="password-input3" required placeholder="Повторите пароль" name="pass2" class="info_input" >
	        <a href="#" class="password-control" onclick="return show_hide_password(this, 'password-input3');"></a>
        </div> 
        <div class="confirmation ">
            <input type="checkbox" required name="check" class="check" tabindex="8">
            <p>Я соглашаюсь с <a href="https://yandex.ru/legal/rules/" id="user_agreement">пользовательскими условиями</a></p>
        </div>       
        <button type="submit" id="check" class="info_input info_input_button">Зарегистрироваться</button>

    </form>
    <p class="reg_text">У вас есть аккаунт? <a href="authorization">Войти</a></p>
</div>
<script src="js/equally_pass.js"></script>
<script src="js/pass.js"></script>