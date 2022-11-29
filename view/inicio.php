<!doctype html>
<html lang="en">
  <head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/calendar.css">
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="">
          <img src="../images/logo_utp_1_300.png" alt="" width="100" height="100" class="d-inline-block align-text-top">
          <h1>Bienvenido</h1>
        </a>
        <ul>
          <a class="nav-link p-3" href="../iniciar_sesion_usuario.php" style="background-color: #ffffff">Cerrar Sesión</a>
        </ul>
      </div>
    </nav> 
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Reserva de Salones</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="elegant-calencar d-md-flex">
              <div class="wrap-header d-flex align-items-center img">
                <p id="reset">Hoy</p>
                <div id="header" class="p-0">
                  <div class="head-info">
                    <div class="head-month"></div>
                    <div class="head-day"></div>
                  </div>
                </div>
              </div>
              <div class="calendar-wrap">
                <div class="w-100 button-wrap">
                  <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
                  <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
                </div>
                <table id="calendar">
                  <thead>
                    <tr>
                      <th>Dom</th>
                      <th>Lun</th>
                      <th>Mar</th>
                      <th>Mie</th>
                      <th>Jue</th>
                      <th>Vie</th>
                      <th>Sab</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                    </tr>
                    <tr>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                    </tr>
                    <tr>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                    </tr>
                    <tr>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                    </tr>
                    <tr>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                    </tr>
                    <tr>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                      <td OnClick="confirmacion(this.innerText)"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js+bootstrap.min.js+main.js.pagespeed.jc.y49NUCeWER.js"></script>
    <script>
      eval(mod_pagespeed_NLpI8FaOHB);
    </script>
    <script>
      eval(mod_pagespeed_4ILN6Wloig);
    </script>
    <script>
      eval(mod_pagespeed_$gk7AfUuGw);
    </script>
    <script>
      function confirmacion(selected){
        window.location.href = './confirmacion.php?day='+selected;
      }
    </script>
  </body>
</html>
