<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/validacao.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
</head>
<style>
        body{
            margin: auto;
            display: table;
            background-color:salmon;
        }
.container{
    text-align: center;
}
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
#floatingInput {
    color: #DAA520;
}
#floatingPassword {
    color: #DAA520;
}
#nomeLogin {
    color:blue;
}
</style>
<body>
<div class="container">
<main class="form-signin">
  <form action="login.php" method="post">
  <br>
    <h1 id="nomeLogin" class="h3 mb-3 fw-normal">Login</i> 
  <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg> Cervejaria Acelino</h1>

    <div class="form-floating">
      <input type="text" name ="login" class="form-control" id="floatingInput">
      <label for="floatingInput">Login</label>
    </div>
    <div class="form-floating">
      <input type="password" name="senha" class="form-control" id="floatingPassword">
      <label for="floatingPassword">Senha</label>
    </div>
    <br>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Mantenha-me logado
      </label>
      
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" value="login">Entrar</button>
    <br><br>
    <a class="w-100 btn btn-lg btn-primary" href="formulario_user.php">Cadastre</a>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
<?php 
if(isset($_GET["msg"])){
echo $_GET["msg"];
}
?>
</main>


</div>
</body>
</html>