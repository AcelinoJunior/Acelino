<?php
include_once 'topo.php'; 
$id = $_POST["id"];
$nome = $_POST["nome"];
$pais = $_POST["pais"];
$nota = $_POST["nota"];
$tipo = $_POST["tipo"];


include_once 'conexao.php';
$sql = "UPDATE cervejas SET nome ='".$nome."',
pais = '".$pais."',
nota = '".$nota."',
tipo = '".$tipo."',


$rs = mysqli_query($con,$sql);
if ($rs){
    $msg = "<h4 class='text-center'>Produto atualizado com sucesso!</h4>";
} else {
    $msg = "Erro ao atualizar!";
}

mysqli_close($con);
echo "<script>alert('".$msg."');
location.href='consulta_adm.php';
</script>";
include_once 'rodape.php';
?>