<?php
    ob_start();
    session_start();
    if(isset($_SESSION["cpf"]) && isset($_SESSION["senha"])){
        header("Location: homeantigo.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede de Vacinação</title>
    
    <link rel="stylesheet" href="css/botin.css">
    <script src="js/login.js"></script>

</head>
<body>
    
    <div id="main-container">
        <h1>Login</h1>
            <form id="register-form" method="POST">
                 <div class="full-box">
                    <label for="Nome">CPF</label>
                        <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"  maxlength="14" autocomplete="off" onkeyup="mascara_cpf()" required="">
                </div>
                <div class="full-box">
                <div class="half-box spacing">
                 <label for="lastname">Senha</label>
                 <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required="">
                 <input type="checkbox" name="agreement" id="agreement" onclick="mostrarOcultarSenha()">Mostrar a senha
                </div>
                 <div class="full-box">
                     <button type="submit" name="btn">Login</button>
                </div>
                <div>
                    <p><a href="http://localhost/TCC/cadastro.php">Criar conta</a></p>
                </div>

                <?php
                     include("link.php");
                     if(isset($_GET["pg"])){
                         $pg = $_GET["pg"];
                         if($pg === "negado"){
                             header("Refresh: 2; login.php");
                             echo '<p class="negado">Acesso Negado! Faça Login!';
                         }elseif($pg === "sair"){
                            header("Refresh: 2; login.php"); 
                            echo '<p class="saiu">Você saiu do sistema!';
                         }     
                     }
                     if(isset($_GET["page"])){
                        $parametro = $_GET["page"];
                        if($parametro == "login"){
                            header("Refresh: 2; login.php");
                            echo '<p class="entrou">Cadastro feito com sucesso! Faça login para continuar!</p>';
                        }
                 }
                     if(isset($_POST["btn"])){
                         $cpf = filter_input(INPUT_POST, "cpf", FILTER_DEFAULT);
                         $senha= filter_input(INPUT_POST, "senha", FILTER_DEFAULT);
                         $select = "SELECT * FROM tcc WHERE cpf=:cpf AND senha=:senha";
     
                         try{
                             $resultado = $conect -> prepare($select);
                             $resultado -> bindParam(":cpf", $cpf,PDO::PARAM_STR);
                             $resultado -> bindParam(":senha", $senha,PDO::PARAM_STR);
                             $resultado -> execute();
     
                             $contar = $resultado -> rowCount();
                             if($contar > 0){
                                 $cpf = $_POST["cpf"];
                                 $senha = $_POST["senha"];
                                 $_SESSION["cpf"] = $cpf;
                                 $_SESSION["senha"] = $senha;
                                 echo '<p class="entrou">Login Feito com Sucesso! Você será redirecionado';
                                 header("Refresh: 3, homeantigo.php");
                             }
                             else{
                                 header("Refresh: 5, login.php");
                                 echo '<p class="fracassou">Login Falhou! Email e/ou Senha incorreta';
                             }
                         }catch(PDOException $erro){
                             echo "Houve um Erro" . $erro -> getMessage();
                         }
                     }                   
                 ?>
            </form>
     </div>


</body>
</html>