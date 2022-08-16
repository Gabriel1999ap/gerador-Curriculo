<?php 

 require_once ("../config.php");
 require_once ("../src/Curriculo.php");

 $curriculo = new Curriculo($mysql);
 $curriculos = $curriculo -> exibirTodos();
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta - Curriculo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body class="bodyPrincipal">
    <div id="containerPrincipal">
        <nav>
        
            <h1  class="tituloH1" >
            <a class="btn btn-secondary btnH1" href="../index.php">Voltar </a>
             -Consulta Curriculos-
            </h1>  
        </nav> 
        <center>
            <div class="box-header1">               
            </div>
        </center>
        <br>
        <?php foreach($curriculos as $curriculo) :?>
            <div>
            <div class="consultaCurriculo">
                <p class="curriculoInd"> <?php echo $curriculo['nome'] ," ", $curriculo['sobrenome']; ?></p>
                <nav>
                <a class="btn btn-warning" href="./editar-artigo.php?id=<?php echo $art['id']; ?> " >Editar</a>
                <a class="btn btn-danger" href="./excluir-artigo.php?id=<?php echo $art ['id']; ?>">Excluir</a>
                </nav>
            </div>
            <?php endforeach ?>

    </div>
</body>
</html>