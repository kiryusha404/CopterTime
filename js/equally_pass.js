document.getElementById('check').onclick = function (){
    var pass1 = document.getElementById('password-input3').value;
    var pass2 = document.getElementById('password-input2').value;
    if(pass1.value != pass2.value){
        window.alert('пароли не совпадают');
    }
}