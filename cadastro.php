<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin: auto;
            display: table;
            background-color:#00BFFF;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container text-center">
<br>
<h2> Novo produto!</h2>
    <?php
        $nome = $_POST["nome"];
        $pais = $_POST["pais"];
        $nota = $_POST["nota"];
        $tipo = $_POST["tipo"];
        
        
        echo'<br> Nome: '.$nome;
        echo'<br> País de origem: '.$pais;
        echo'<br> Nota: '.$nota;
        echo'<br> Tipo: '.$tipo;
        
    
        if ($nome != "" &&  $pais != "" && $nota != "" && $tipo != ""){
            $sql= "INSERT into cervejas values (null,'".$nome."','".$pais."','".$nota."','".$tipo."')";
            $conexao = mysqli_connect("localhost","root","","projetophp") or die("Erro ao conectar com o banco.");
            $result = mysqli_query($conexao, $sql);
                
                if ($result){
                    echo "<br> Gravado com sucesso!";
                }else{
                    echo "<br> Erro ao gravar!";
                }
                mysqli_close($conexao);
            }else{
            echo'Preenche os campos corretamente!';
        }
    ?>
    <?php include_once 'rodape.php';?>
    </body>
    </html>