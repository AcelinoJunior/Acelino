<?php include_once 'topo.php'; 

    $id = base64_decode($_GET["id"]);

    $sql ="select * from usuario where iduser=".$id;

    include_once 'conexao.php';

    $rs = mysqli_query ($con,$sql);

    if(mysqli_num_rows($rs)==1){
        $reg = mysqli_fetch_array($rs);
    }
?>
</br>
<h3>Atualizar Usuários</h3>

<div >
<form class="form-group mb-5" action="atualizar_user.php" method="post">
Nome: <br>
<input type="text" name="nome" id="nome" value="<?php echo $reg["nome"]; ?>"/>
</br>
Login: <br>
<input type="text" name="login" id="login" value="<?php echo $reg["login"]; ?>"/>
</br>
Senha: <br>
<input type="password" name="senha" id="senha" value="<?php echo $reg["senha"]; ?>"/>
</br>
Perfil: <br>
<select name="perfil" id="perfil" >
<option value="<?php echo $reg["categoria"]; ?>"/></option>
<option value="adm">Admin</option>
<option value="user">Usuário</option> 
</br>        
<br>
<br>
<input type="hidden" name="id" value="<?php echo $reg["iduser"];?>"/>
<input type="submit" value="Cadastrar"/>
<input type="reset" value="Limpar"/>
</form>
</div>
<?php include_once 'rodape.php'; ?>