function logar(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    if(email == "admin" && senha == "1122"){
        alert('Sucesso');
    }else{
        alert('E-mail ou senha incorretos');
    }
}