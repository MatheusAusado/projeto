<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede de Vacinação</title>

    <link rel="stylesheet" href="css/cadastro.css">
    <script src="js/cadastro.js"></script>
</head>
<body>
    
  <div id="main-container">
      <h1>Cadastre-se</h1>
      <form name="form1" id="register-form" action="" method="POST">
        <div class="full-box">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" autocomplete="off" required="">
        </div>
        <div class="full-box">
          <label for="cpf">CPF</label>
          <input type="cpf" name="cpf" id="cpf" placeholder="000.000.000-00"  maxlength="14" autocomplete="off" onkeyup="mascara_cpf()" required=""> 
        </div>
        <div class="half-box spacing">
          <label for="data">Data de nascimento</label>
          <input type="" name="datas" id="datas" placeholder="dd/mm/aaaa" maxlength="10" autocomplete="off" onkeyup="data_nasc()" required="">
        </div>
        <div class="half-box">
          <label for="numero">Número</label>
          <input type="text" class="form-control" name="numero" id="numero" placeholder="(00) 0000-0000"  maxlength="14" autocomplete="off" onkeyup="mascara_numero()" required="" > 
        </div>   
        <div class="half-box spacing">
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" placeholder="Digite sua senha" >
          <input type="checkbox" name="agreement" id="agreement" onclick="mostrarOcultarSenha()">Mostrar a senha
        </div>
      <div class="half-box">
        <label for="psenhaconfirm">Confirmação de senha</label>
        <input type="password" name="senhaconfirm" id="senhaconfirm" placeholder="Digite novamente sua senha">
      </div>
      <div class="full-box">
        <button type="submit" name="btn">Registrar</button>
      </div>
      <div>
          <label><a href="http://localhost/TCC/login.php">Faça o login em vez disso</a></label>
      </div>
    </form>
  </div>

  <?php
    include("link.php");

    if(isset($_POST["btn"])){
      $nome = $_POST["nome"]; 
      $cpf =  $_POST["cpf"];
      $numero = $_POST["numero"];
      $datas = $_POST["datas"];
      $senhaconfirm = $_POST["senhaconfirm"];
      $senha = $_POST["senha"];

      $inserir = "INSERT INTO tcc(nome,cpf,numero,datas,senha,senhaconfirm) VALUES(:nome,:cpf,:numero,:datas,:senha,:senhaconfirm)";

      try{
        $resultado = $conect -> prepare($inserir); 
        $resultado -> bindParam(":nome",$nome,PDO::PARAM_STR); 
        $resultado -> bindParam(":cpf",$cpf,PDO::PARAM_STR);
        $resultado -> bindParam(":numero",$numero,PDO::PARAM_STR);
        $resultado -> bindParam(":datas",$datas,PDO::PARAM_STR);
        $resultado -> bindParam(":senha",$senha,PDO::PARAM_STR);
        $resultado -> bindParam(":senhaconfirm",$senhaconfirm,PDO::PARAM_STR);
        $resultado -> execute(); 

        $contar = $resultado -> rowCount();
                if($contar > 0){
                  header("Refresh: 2, login.php?page=login");                    
                }else{
                    echo '<p class="fracasso>Error! Os dados não foram enviados :(</p>';
                }
              }catch(PDOException $erro){
                echo "HOUVE UM ERRO NO CÓDIGO: " . $erro -> getMessage();
         }
      }

  ?>

</body>
</html>