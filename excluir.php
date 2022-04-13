<?php include_once 'topo.php';
$id = $_GET["id"];
include_once 'conexao.php';
$sql = "DELETE from cervejas WHERE idcerveja=".$id;
$result = mysqli_query($con, $sql);

if ($result){
    $msg = "Produto excluído com sucesso!";
} else {
    $msg = "Erro ao excluir!";
}
mysqli_close($con);
echo "<script>alert('".$msg."');
location.href='consulta_adm.php';
</script>";

?>