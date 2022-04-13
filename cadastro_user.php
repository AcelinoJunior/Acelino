<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin: auto;
            display: table;
            background-color:salmon;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container text-center">
<br>
<h2> Novo usuário!</h2>
    <?php
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = md5($_POST["senha"]);
        $perfil = $_POST["perfil"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
       
    
        
        echo'<br> Nome: '.$nome;
        echo'<br> Login: '.$login;
        echo'<br> Perfil: '.$perfil;
        echo'<br> cep: '.$cep;
        echo'<br> rua: '.$rua;
        echo'<br> bairro: '.$bairro;
        echo'<br> cidade: '.$cidade;
       
    
        if ($nome != "" &&  $login != "" && $senha != "" && $perfil != "" && $cep != "" && $rua != "" && $bairro != "" && $cidade != "" && $estado != "" ){
            $sql= "INSERT into usuario values (null,'".$nome."','".$login."','".$senha."','".$perfil."','".$cep."','".$rua."','".$bairro."','".$cidade."','".$estado."')";
            $conexao = mysqli_connect("localhost","root","","projetophp") or die("Erro ao conectar com o banco.");
            $result = mysqli_query($conexao, $sql);
                
                if ($result){
                    echo "<br> Usuário gravado com sucesso!";
                }else{
                    echo "<br> Erro ao gravar!";
                }
                mysqli_close($conexao);
            }else{
            echo"<br> Preenche os campos corretamente!";
        }
        
    ?>
    <br>
    <br>
    <a class="text-white text-center btn btn-primary btn-sm" href="index.php">Voltar</a>
    <?php include_once 'rodape.php';?>
    </body>
    </html>