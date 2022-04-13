<div class="container text-center">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="formulario.php">Novo Produto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formulario_user.php">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consulta_adm.php">Consulta - Tabela de Cervejas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tabela_user.php">Consulta - Tabela de Usuários</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sair.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<br>
<br>
<br>
<br>
<?php include_once 'topo2.php';?>
<h3 class="text-center"> Novo produto: </h3>
    <form class="text-center" action="cadastro_cerveja.php" method="post">
    Nome: </br>
    <input type="text" name="nome" id="nome"/>
    <br> <br>
    País: </br>
    <input type="text" name="pais" id="pais"/>
    <br> <br>
    Nota: <br>
    <input type="text" name="nota" id="nota"/>
    <br> <br>
    Tipo: <br>
    <input type="text" name="tipo" id="tipo"/>
    <br> <br>
    
    <input class="text-white btn btn-info btn-sm" type="submit" value="Cadastrar Produto"/>
    <input class="text-white btn btn-danger btn-sm" type="reset" value="Limpar Campos"/>
    </form>
<?php include_once 'rodape.php';?>
</div>