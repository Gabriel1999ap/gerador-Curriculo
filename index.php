<?php 

 require_once ("./config.php");

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body class="bodyPrincipal">
    <div id="containerPrincipal">
        <!-- <nav>
            <a class="btn btn-success" href="./admin/index.php">Admin</a>
        </nav> -->
        <center>
            <div class="box-header1">
                <h1 class="tituloH01"> -Gerador de Curriculo- </h1>
            </div>
        </center>
        
        <br>
        <center>
            <a href="./pages/novo.php" class="btn btn-default "> <img width="90" height="90" src="./img/mais.png"><br><font size="-1">Novo</font></a>
  			<a href="#" class="btn btn-default"> <img width="90" height="90" src="./img/editar (1).png"><br><font size="-1">Editar</font></a>
            <a href="./pages/consultaCurriculo.php" class="btn btn-default"> <img width="90" height="90" src="./img/lupa-arredondada.png"><br><font size="-1">Consulta</font></a>
		</center>

    </div>
</body>
</html>