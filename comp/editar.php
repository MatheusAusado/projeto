<?php
    include("../link.php");
    
    if(!isset($_GET["id"])){
      header("Location: ../comp/crud.php");
      exit; //comando que não mostra nada abaixo
    }else{
        $id = filter_input(INPUT_GET,"id",FILTER_DEFAULT);
        $selecionar = "SELECT * FROM tcc WHERE id=:id";

        try{
            $resultado = $conect -> prepare($selecionar);
            $resultado -> bindParam(":id",$id,PDO::PARAM_INT);
            $resultado -> execute();

            $contar = $resultado -> rowCount();
            if($contar > 0){
              while($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){
                  $nomeRetornado = $mostrar -> nome;
                  $cpf = $mostrar -> cpf;
                  $numero = $mostrar -> numero;
                  $data = $mostrar -> datas;
                  $senha = $mostrar -> senha;
                  $senhaconfirm = $mostrar -> senhaconfirm; 
              }
            }else{
              exit;
            }
        }catch(PDOException $erro){
          echo "HOUVE UM ERRO" . $erro -> getMessage();
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede de vacinação</title>
    <link rel="stylesheet" href="../css/editar.css">
    <script src="../js/editar.js"></script>

</head>
<body>

<div id="main-container">
      <h1>Editar contato</h1>
      <form id="register-form" action="" method="POST">
        <div class="full-box">
            <label for="lastname">Nome Completo</label>
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome completo" autocomplete="off" value="<?php echo $nomeRetornado;?>">
        </div>
        <div class="full-box">
          <label for="email">CPF</label>
          <input type="cpf" name="cpf" id="cpf" placeholder="000.000.000-00"  maxlength="14" autocomplete="off" onkeyup="mascara_cpf()" value="<?php echo $cpf;?>"> 
        </div>
        <div class="full-box">
          <label for="numero">Número</label>
          <input type="text" class="form-control" name="numero" id="numero" placeholder="(00) 0000-0000"  maxlength="14" autocomplete="off" onkeyup="mascara_numero()" value="<?php echo $numero;?>"> 
        </div>  
        <div class="half-box spacing">
          <label for="lastname">Senha</label>
          <input type="password" name="senha" id="senha" placeholder="Digite sua senha"  value="<?php echo $senha;?>">
          <input type="checkbox" name="agreement" id="agreement" onclick="mostrarOcultarSenha()">Mostrar a senha
        </div>
      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="senhaconfirm" id="senhaconfirm" placeholder="Digite novamente sua senha"  value="<?php echo $senhaconfirm?>">
      </div>
      <div class="full-box">
        <button type="submit" name="btn-update">Finalizar edição</button>
      </div>
      <div>
          <label><a href="http://localhost/TCC2/crud.php">Retornar a página anterior</a></label>
      </div>
  </form>

    <?php
      if(isset($_POST["btn-update"])){
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $numero = $_POST["numero"];
        $senha = $_POST["senha"];
        $senhaconfirm = $_POST["senhaconfirm"];

        $editar = "UPDATE tcc SET nome=:nome,cpf=:cpf,numero=:numero,senha=:senha,senhaconfirm=:senhaconfirm WHERE id=:id";//query para atualização de dados
        try{
            $resultado = $conect -> prepare($editar);
            $resultado -> bindParam(":nome",$nome,PDO::PARAM_STR);
            $resultado -> bindParam(":numero",$numero,PDO::PARAM_STR);
            $resultado -> bindParam(":cpf",$cpf,PDO::PARAM_STR);
            $resultado -> bindParam(":senha",$senha,PDO::PARAM_STR);
            $resultado -> bindParam(":senhaconfirm",$senhaconfirm,PDO::PARAM_STR);
            $resultado -> bindParam(":id",$id,PDO::PARAM_INT);
            $resultado -> execute();

            $contar = $resultado -> rowCount();
            if($contar > 0){
              session_destroy();
              header("Refresh: 2 ../login.php");
            }else{
              echo '<p class="fracasso">Os dados não foram atualizados</p>';
            }
        }catch(PDOException $erro){
          echo "ERRO DE UPDATE" . $erro -> getMessage();
        }
      }
    ?>

</body>
</html>