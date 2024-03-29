<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SYS - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="valida_login.php" method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Senha</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Lembrar Senha
              </label>
            </div>
          </div>
    
          <!-- Erro de LOGIN -->
          
          <?php if(isset($_GET['login'])){ 
              if($_GET['login'] == 'erro'){ ?>
            <div class="text-danger">
            Usuário e/ou senha inválido(s)
            </div>
              <?php }
              else{ ?>
            <div class="text-danger">
            Você deve fazer o login
            </div>
              <?php }
          } ?>

          <!-- Fim do Erro de LOGIN -->

          <button class="btn btn-primary btn-block" type="submit">Entrar</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="cadastro.php">Cadastre-se</a>
          <a class="d-block small" href="forgot-password.php">Esqueceu a Senha?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
