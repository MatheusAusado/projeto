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
    var senhaconfirm = document.getElementById('senhaconfirm');
    if(senha.type == "password" || senhaconfirm.type == "password"){
        senha.type="text";
        senhaconfirm.type="text";
    }else{
        senha.type="password";
        senhaconfirm.type="password";
    }
}
function mascara_numero(){
    var numero = document.getElementById('numero');
    if(numero.value.length == 0){
        numero.value += "(";
    }
    if(numero.value.length == 3){
        numero.value += ")";
    }
    else if(numero.value.length == 9){
        numero.value += "-";
    }
}
function data_nasc(){
    var datas = document.getElementById('datas'); 
    if(datas.value.length == 2 || datas.value.length == 5){
        datas.value += "/";
    }
}
/*Recados no cadastro*/
