<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin: auto;
            display: table;
            background-color:salmon;
        }
        #container{
            margin: auto;
            width: 960px;
            float: left;
        }
        #topo{
            width: 960px;
            float: left;
            height: 40px;
            padding: 10px;
        }
        #menu{
            width: 960px;
            float: left;
            margin-top: 10px;
            margin-bottom: 20px;
        }
        #menu a{
            display: inline;
            text-decoration: none;
            padding: 10px;
            color: #000;
        }
        #menu a: hover{
            background-color: #E9967A;
            text-decoration: underline;
        }

    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <div id="container">
        <div class="text-center" id="topo">
            <h2> Sistema de Produtos </h2>
        </div>
        <br>
        <br>
        <br>
        <div class="text-center" id="menu">
            <a class="text-white btn btn-secondary btn-sm" href="formulario.php"> Novo Produto </a>
            <a class="text-white btn btn-info btn-sm" href="consulta_adm.php"> Consultar Produto </a>
            </br>
            </br>
            <hr>
        </div>