<?php
    include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/agendar.css">

</head>
<body>
 
        <h1>Agendamento</h1>
        <hr>
       <div class="flex">
       <div id="main-container">
            <form  name="form1" id="register-form" action="" method="POST">
                <h2>Pessoas com deficiência permamente?</h2>
                <select name="a" id="select" required="">
                <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <h2>Teve COVID recentemente?</h2>
                <select name="b" id="select">
                <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <h2>Faz uso de imunoglobulina humana?</h2>
                <select name="c" id="select">
                <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <h2>Pessoa institucionalizada?</h2>
                <select name="d" id="select">
                <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <h2>Pessoa restrita ao leito(Acamado)?</h2>
                <select name="e" id="select">
                <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <h2>Pertence a outro grupo prioritário?</h2>
                <select name="f" id="select">
                <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <h2>Paciente oncológico, transplantado?</h2>
                <select name="g" id="select">
                <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <h2>Demais pacientes imunossuprimidos?</h2>
                <select name="h" id="select2">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
                <div class="full-box">
                    <button type="submit" name="btn">Agendar</button>
                </div>
                <div class="half-box">
                    <label class="recado">Recado:</label>
                    <p class="ler">Se você teve COVID recentemente a vacinação deve ser adiada até a recuperação clínica total e pelo menos (04) quatro semanas após o início dos sintomas, ou quatro semanas a partir da primeira amostra de PCR positiva em pessoas assintomáticas</p>
                </div>
                <div>
                     <label><a href="homeantigo.php" class="voltar">Voltar</a></label>
                </div>
                 
            </form>  
        
        </div>
        <div id="main-container2">
            <form  name="form1" id="register-form" action="" method="POST">
                <h1 class="titulo">Resultado</h1>
                <?php
            include("link.php");

        if(isset($_POST["btn"])){
            if($_POST["a"] == 1||$_POST["c"] == 1||$_POST["d"] == 1||$_POST["e"] == 1||$_POST["f"] == 1||$_POST["g"] == 1||$_POST["h"] ==1){
                    echo'Sua vacinação poderá ser ajendada visite o site<a href"https://vacinacaocovid.saude.ce.gov.br/">https://vacinacaocovid.saude.ce.gov.br/</a>para fazer seu agendamento';
            }elseif($_POST["b"] == 1){
                    echo"Desculpe mas sua Vacinação terá que esperar pelo menos 4 semanas após sua recuperação clinica";
            }else{
                    echo"No momento sua região ainda não iniciou a vacinação do seu grupo";
            }
        }
        ?>
        </form>
        </div>
            </div> 
      


      
</body>
</html>

<?php
    include_once("rodape.php");
?>