<!-- Requerimento de acesso-->
<?php require_once('valida_acesso.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SYS - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <style>
  
    div#grupos{
      margin: 20px 0px 0px 0px;
    }

    div#listaGrupos{
      margin: 15px 0px 0px 0px;
    }
  
  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="home.php">Painel de Controle</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Pesquisar por..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger"></span>
          <i class="fas fa-bell fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">

          <a class="dropdown-item" href=""><strong>Notificações</strong></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sem notificações</a>

        </div>
      </li>

      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger"></span>
          <i class="fas fa-envelope fa-fw"></i>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          
          <a class="dropdown-item" href=""><strong>Mensagens</strong></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Sem mensagens</a>

       </div>
      </li>

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href=""><strong>Usuário</strong></a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="usuarios.php">Configurações</a>
          <a class="dropdown-item" href="#">Atividade</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logoff.php" data-toggle="modal" data-target="#logoutModal">Sair</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Início</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="acionamento.php">
          <i class="fas fa-fw fa-play-circle"></i>
          <span>Acionamento</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="suporte.php">
          <i class="fas fa-fw fa-info"></i>
          <span>Suporte</span></a>
      </li>

    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="home.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Acionamento</li>
        </ol>

        <!-- Page Content -->
        <h2>Configurações de acionamento</h2>
        <hr>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#group-config">
          Criar Grupo
        </button>
        <hr>
        <div id="grupos">Você ainda não possui nenhum grupo. Para acionar o sistema crie um novo grupo.</div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © SYS 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

    </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pressione "Sair" abaixo se você deseja encerrar a sessão.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="logoff.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Lista de Solenóides-->
  <div class="modal fade" id="group-config" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Grupo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nome do grupo:</label>
              <input type="text" class="form-control" id="nome-grupo">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Escolha os setores:</label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Check1" value="1">
                <label class="form-check-label" for="Check1">Setor 1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Check2" value="1">
                <label class="form-check-label" for="Check2">Setor 2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="Check3" value="1">
                <label class="form-check-label" for="Check3">Setor 3</label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary" id="criaGrupo">Salvar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Acionamento Modal-->
    <div class="modal fade" id="acionamento_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja começar a irrigar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pressione "Acionar" abaixo se você deseja começar o processo de irrigação.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="">Acionar</a>
        </div>
      </div>
    </div>
  </div>

  <script>
    var a = document.querySelector("button#criaGrupo")
    a.addEventListener('click', criaGrupo)

    function criaGrupo(){
      var b = document.querySelector("div#grupos")
      var nomeGrupo = document.querySelector("input#nome-grupo")

      if(b.innerHTML == "Você ainda não possui nenhum grupo. Para acionar o sistema crie um novo grupo.")
      {
      b.innerHTML =
      `<div id="listaGrupos">
        <button type="button" class="btn btn-info">${nomeGrupo.value}</button>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#acionamento_Modal"><i class="fas fa-play"></i></button>
        <button type="button" class="btn btn-secondary"><i class="fas fa-cog"></i></button>
        <button type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
        </div>
      </div>`
      }else{
        b.innerHTML +=
        `<div id="listaGrupos">
        <button type="button" class="btn btn-info">${nomeGrupo.value}</button>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-success data-toggle="modal" data-target="#acionamento_Modal""><i class="fas fa-play"></i></button>
        <button type="button" class="btn btn-secondary"><i class="fas fa-cog"></i></button>
        <button type="button" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
        </div>
      </div>`
      }
    }
  </script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
