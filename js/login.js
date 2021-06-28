function mascara_cpf(){
    var cpf = document.getElementById('cpf');
    if(cpf.value.length == 3|| cpf.value.length == 7){
        cpf.value += ".";
    }else if(cpf.value.length == 11){
        cpf.value += "-";
    }
}
function mostrarOcultarSenha(){
    var senha = document.getElementById('senha');
    if(senha.type == "password"){
        senha.type="text";
    }else{
        senha.type="password";
    }
}