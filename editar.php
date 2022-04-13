<?php include_once 'topo.php'; 

    $id = base64_decode($_GET["id"]);

    $sql ="select * from cervejas where idcerveja=".$id;

    include_once 'conexao.php';

    $rs = mysqli_query ($con,$sql);

    if(mysqli_num_rows($rs)==1){
        $reg = mysqli_fetch_array($rs);
    }
?>
</br>
<h3>Atualizar Produtos</h3>

<div >
<form class="form-group mb-5" action="atualizar.php" method="post">
Nome: <br>
<input type="text" name="nome" id="nome" value="<?php echo $reg["nome"]; ?>"/>
</br>
País: <br>
<input type="text" name="pais" id="pais" value="<?php echo $reg["pais"]; ?>"/>
</br>
Nota: <br>
<input type="text" name="nota" id="nota" value="<?php echo $reg["nota"]; ?>"/>
</br>
Tipo: <br>
<input type="text" name="tipo" id="tipo" value="<?php echo $reg["tipo"]; ?>"/>
</br>
Comentário: <br>
<input type="text" name="comentario" id="comentario" value="<?php echo $reg["comentario"]; ?>">            
<br>
<br>
<input type="hidden" name="id" value="<?php echo $reg["idcerveja"];?>"/>
<input type="submit" value="Cadastrar"/>
<input type="reset" value="Limpar"/>
</form>
</div>
<?php include_once 'rodape.php'; ?>