<?php
  ob_start();
  session_start();
  if(!isset($_SESSION["cpf"]) && !isset($_SESSION["senha"])){
  }
  include_once("sair.php"); 
?>

<!DOCTYPE html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rede de Vacinação</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../agenda/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../agenda/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../agenda/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../agenda/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../agenda/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../agenda/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../agenda/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../agenda/plugins/summernote/summernote-bs4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../agenda/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../agenda/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/home2.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed">
<!-- Site wrapper -->
<div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="homeantigo.php" class="nav-link">
        <i class="fas fa-home"></i>
        </a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
</button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="crud.php" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title dropdown-footer">
                  <i class="fas fa-user-edit" id="bagulho"></i>Perfil
                </h3>
              </div>
            </div>
            <!-- Message End -->
          </a>
            <!-- Message End -->
          </a>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="?sair" class="dropdown-item dropdown-footer"><i class="fas fa-sign-out-alt" id="bagulho"></i>Sair</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link">
          <i class="fas fa-people-arrows"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/Logo1.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rede de vacinação</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Acesso à informação
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="grupoderisco.php" class="nav-link">
                  <i class="far fas fa-user-md nav-icon"></i>
                  <p>Grupo de risco</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sobreavacina.php" class="nav-link">
                  <i class="far fas fa-syringe nav-icon"></i>
                  <p>Sobre a vacina</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="prevencao.php" class="nav-link">
                  <i class="far fas fa-head-side-mask nav-icon"></i>
                  <p>Prevenção Covid-19</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="graficos.php" class="nav-link">
                  <i class="far fas fa-chart-line nav-icon"></i>
                  <p>Gráficos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="agendar.php" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Agendamento
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="agendar.php" class="nav-link">
                  <i class="far fa-calendar-alt nav-icon"></i>
                  <p>Agendar minha vacinação</p>
                </a>
              </li>

              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

     <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
        <div class="slide first">
            <img src="img/011.jpg" alt="">
        </div>
        <div class="slide">
            <img src="img/2.jpg" alt="">
        </div>
        <div class="slide">
            <img src="img/fofis.jpg" alt="">
        </div>
        <div class="slide">
            <img src="img/tomasuasafada.jpg" alt="">
        </div>
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>

        </div>
     </div> 
  
     <script type="text/javascript">
        var counter = 1;
        setInterval(function(){
          document.getElementById('radio' + counter).checked = true;
          counter++;
          if(counter > 4){
            counter = 1;
          }
        }, 5000);
     </script>

        <!--Conteúdos-->

    <form id="register-form">
        <div  id="main-container">
        <h1>Disque saúde 136</h1>
        <hr>
        <p>Se, ao invés de ler, você preferir ouvir as orientações, basta pegar o celular ou telefone fixo e ligar gratuitamente para o número 136. Você será guiado, por meio de um menu em mensagem de voz, para as possibilidades existentes, de acordo com as suas dúvidas ou necessidades.</p>
        </div>
        <div  id="main-container">
        <h1>Aviso</h1>
        <hr>
        <p>A <strong>Rede de Vacinação</strong> foi criada para permitir que às pessoas obtenham informações sobre qual grupo de risco pertencem, agendar sua vacinação e conhecer as medidas preventivas contra o <strong>COVID-19</strong>. Para que os cidadãos possam à procura de um <strong>hospital</strong> ou <strong>posto</strong> de vacinação mais próximo.</p>
        </div>
        <div id="main-container">
        <h1>Agendar</h1>
        <hr>
        <p>Se você quiser agendar sua vacinação com segurança, aqui é o lugar perfeito para isso. Vá em direção ao menu <strong>Agendamento</strong> depois clique em <strong>Agendar minha vacinação</strong> e lá terá as orientações necessárias.</p>
        </div>
     </form>
<br>

  <footer class="main-footer"> 
    <strong>Copyright &copy; 2021 Rede de Vacinação. Todos os Direitos Reservados.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../agenda/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../agenda/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../agenda/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../agenda/dist/js/demo.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../agenda/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../agenda/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../agenda/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../agenda/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../agenda/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../agenda/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../agenda/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../agenda/plugins/summernote/summernote-bs4.min.css">

</body>
</html>
