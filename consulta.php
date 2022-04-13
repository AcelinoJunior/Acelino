<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta de Cervejas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin: auto;
            display: table;
            background-color:#87CEEB;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container text-center">
    <br>
    <h3> Lista de Produtos </h3>
    <br>
    <a class="text-white text-center btn btn-primary btn-sm" href="painel.php">Voltar</a>
    <hr>
    <?php
    echo "<script>
        function excluir(id){
            if (confirm ('Deseja realmente excluir este produto?')){
            location.href='excluir.php?id='+id;
            }
        }
    </script>";
     $con = mysqli_connect("localhost","root","","projetophp");
     $sql = "select * from cervejas ORDER BY nome ASC";    
     $rs = mysqli_query($con,$sql);    
     if(mysqli_num_rows($rs) > 0){

    ?>
        <table table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>País</th>
                <th>Nota</th>
                <th>Tipo</th>
                               
            <tr>               
        <?php        
        while($linha = mysqli_fetch_array($rs)){
        ?>
            <tr>
                <td><?php echo $linha["nome"]; ?></td>
                <td><?php echo $linha["pais"]; ?></td>
                <td><?php echo $linha["nota"]; ?></td>
                <td><?php echo $linha["tipo"]; ?></td>
                
        </tr>
        <?php } ?>
        </table>
        <?php
     }else{
        echo "Não existe produto cadastrado";     
    }
     mysqli_close($con);
     ?>
    </div>
    </body>
    </html>