<!doctype html>
<html lang="en">

<head>
  <title>Volunti PET</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- Material Kit CSS -->
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css"/>
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="assets\css\tienda.css"/>
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="danger" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="../index.php" class="simple-text logo-normal">
          Volunti PET
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="casos.php">
              <i class="material-icons">pets</i>
              <p>Casos</p>
            </a>
          </li>
          <li class="nav-item active  ">
            <a class="nav-link" href="servicios.html">
              <i class="material-icons">bookmark</i>
              <p>Servicios</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="btn btn-danger" href="servicios.html">Apoya con un servicio para Calvin</a>
              </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link">
                  <i class="material-icons">notifications</i> Notificaciones
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php">
                  Cerrar sesión
                </a>
              </li>
              <!-- your navbar here -->
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header card-header-icon card-header-rose">
                      <h4 class="card-title">Actualizar caso</h4>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Descripción</label>
                              <div class="form-group bmd-form-group">
                                <label class="bmd-label-floating"> ¿Cómo Calvin ha sido atendido?</label>
                                <textarea class="form-control" rows="5"></textarea>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-danger pull-right">Update Profile</button>
                        <div class="clearfix"></div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-product" data-count="9">
                        <div class="card-header card-header-image" data-header-animation="true">
                          <a href="#pablo">
                            <img class="img" src="./assets\img\perros\1.jpg">
                          </a>
                        </div>
                        <div class="card-body">
                          <div class="card-actions text-center">
                            <button type="button" class="btn btn-danger btn-link fix-broken-card">
                              <i class="material-icons">build</i> Fix Header!
                            </button>
                            <button type="button" class="btn btn-default btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="View">
                              <i class="material-icons">art_track</i>
                            </button>
                            <button type="button" class="btn btn-success btn-link" rel="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                              <i class="material-icons">add_alert</i>
                            </button>
                          </div>
                          <h4 class="card-title">
                            <a href="#texto=registro">Calvin</a>
                          </h4>
                          <div class="card-description">
                              Calvin es un cachorro que fue visto en el parque Kennedy de la Zona Industrial, parece desorientado. Ya le dimos comida y agua.
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="price">
                            <h4>21 de mayo</h4>
                          </div>
                          <div class="stats">
                            <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain</p>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            <div class="row">
                <div class="col-md-12">
                  <h3>Actualizaciones</h3>
                  <div class="card card-timeline card-plain">
                    <div class="card-body">
                      <ul class="timeline">
                        <li class="timeline-inverted">
                          <div class="timeline-badge danger">
                          </div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <span class="badge badge-pill badge-danger">Some Title</span>
                            </div>
                            <div class="timeline-body">
                              <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for making my family We just had fun with the “future” theme !!! It was a fun night all together ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.</p>
                            </div>
                            <h6>
                              <i class="ti-time"></i> 11 hours ago
                            </h6>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-badge success">
                          </div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <span class="badge badge-pill badge-success">Another One</span>
                            </div>
                            <div class="timeline-body">
                              <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s the first album to go number 1 off of streaming!!! I love you Ellen and also my number one design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-inverted">
                          <div class="timeline-badge info">
                          </div>
                          <div class="timeline-panel">
                            <div class="timeline-heading">
                              <span class="badge badge-pill badge-info">Another Title</span>
                            </div>
                            <div class="timeline-body">
                              <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                              <hr>
                            </div>
                            <div class="timeline-footer">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-badge warning">
                          </div>
                          <div class="timeline-panel">
                            <div class="timeline-heading" id="texto=registro">
                              <span class="badge badge-pill badge-warning">Registro</span>
                            </div>
                            <div class="timeline-body">
                              <p>Calvin es un cachorro que fue visto en el parque Kennedy de la Zona Industrial, parece desorientado. Ya le dimos comida y agua.</p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          <!-- your content here -->
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.voluntipet.com">
                  Volunti PET
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, VoluntiPET . Todos los derechos reservados.
          </div>
          <!-- your footer here -->
        </div>
      </footer>
    </div>
  </div>
</body>

</html>