<?php
    // GET = PEGA VALORES NA URL
    include("../link.php");

    if(isset($_GET["id"])){ //se existe esse parâmetro na URL
        $id = $_GET["id"]; //pega o id na URL
        
        $deletar = "DELETE FROM tcc WHERE id=:id"; //QUERY SQL -> DELETAR O ID ESPECÍFICO
        try{
            $resultadoDelete = $conect -> prepare($deletar);
            $resultadoDelete -> bindValue(":id",$id,PDO::PARAM_INT); //id é um valor inteiro
            $resultadoDelete -> execute();

            $contarDelete = $resultadoDelete -> rowCount();
            if($contarDelete > 0){
                header("Location: ../crud.php"); //comando de redirecionamento de página
            }else{
                header("Location: ../crud.php");
            }
        }catch(PDOException $erro){
            echo "HOUVE UM ERRO" . $erro -> getMessage();
        }       
    }else{
        header("Location: ../home.php");
    }
?>