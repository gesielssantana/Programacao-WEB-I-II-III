function logar (){

    var email = document.getElementById('emailDigitado').value;
    var senha = document.getElementById('senhaDigitada').value;

    if(email == 'gesielsantos25@outlook.com' && senha == 'admin123'){
        alert('LOGIN OK - SEJA BEM VINDO!'); 
    }else{
        alert('USUÁRIO OU SENHA INCORRETOS')
    }

}