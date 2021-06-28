<?php
  ob_start();
  session_start();
  if(!isset($_SESSION["cpf"]) && !isset($_SESSION["senha"])){
  }
  include_once("sair.php"); 
?>

<?php
             include("link.php");

             $cpf = $_SESSION["cpf"];
             $senha = $_SESSION["senha"];
             $select = "SELECT * FROM tcc WHERE cpf=:cpf AND senha=:senha";

             try{
                 $resultado = $conect -> prepare($select);
                 $resultado -> bindParam(":cpf", $cpf, PDO::PARAM_STR);
                 $resultado -> bindParam(":senha", $senha, PDO::PARAM_STR);
                 $resultado -> execute();
     
                 $contar = $resultado -> rowCount();
                 if($contar > 0){
                     while($mostrar = $resultado -> FETCH(PDO::FETCH_OBJ)){
                         $id = $mostrar -> id;
                         $nome = $mostrar -> nome;
                         $datas = $mostrar -> datas;
                         $cpf = $mostrar -> cpf;
                         $numero = $mostrar -> numero; 
                     }
                 }else{
                     echo '<div class="alert alert-danger" style="text-aling=center">
                         Não exitem dados pra esse perfil!
                     </div>';
                     exit;
                 }
             }catch(PDOException $error){
                 echo "<strong>ERRO DE PDO</strong>" . $error -> getMessage();
             } 
         ?>

    
<?php
    include_once("header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rede de Vacinação</title>
   
    <link rel="stylesheet" href="css/crud.css">

</head>
<body>
    <h1>Perfil</h1>
        <hr>

        <div id="main-container3">
            <img src="img/Logo2.png" class="pi">
    </div>
    
    <div id="main-container2">
        <form name="form1" id="register-form" action="" method="POST">

            <h2>Nome:</h2>  <hr class="nome">
            <p class="lindo"><?php echo $nome;?></p>
        
            <h2>CPF:</h2>
            <hr class="cpf">
            <p class="lindo"><?php echo $cpf?></p>
            <h2>Número:</h2>
            <hr class="numero">
            <p class="lindo"><?php echo $numero?></p>
            <h2>Data de Nascimento:</h2>
            <hr class="data">
            <p class="lindo"><?php echo $datas?></p>
        
        <div class="vala">
            <a href="comp/editar.php?id=<?php echo  $id;?>" class="editar"><i class="fas fa-edit"></i></a> 
            <a href="comp/deletar.php?id=<?php echo $id;?>" class="deletar" onclick="return confirm('Deseja remover esse contado?')"><i class="fas fa-trash-alt"></i></a>
        </div>
        <div>
          <label><a href="homeantigo.php" class="voltar">Voltar</a></label>
        </div>

        </form>    
        
    </div>

        <?php
            include_once("rodape.php");
        ?>
</body>
</html>