<?php
include_once 'topo.php'; 
$id = $_POST["id"];
$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = md5($_POST["senha"]);
$perfil = $_POST["perfil"];

include_once 'conexao.php';
$sql = "UPDATE usuario SET nome ='".$nome."',
login = '".$login."',
senha = '".$senha."',
perfil = '".$perfil."' WHERE iduser =".$id;

$rs = mysqli_query($con,$sql);
if ($rs){
    $msg = "<h4 class='text-center'>Usuário atualizado com sucesso!</h4>";
} else {
    $msg = "Erro ao atualizar!";
}

mysqli_close($con);
echo "<script>alert('".$msg."');
location.href='consulta_adm.php';
</script>";
include_once 'rodape.php';
?>