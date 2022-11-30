<!doctype html>
<html lang="en">
  <head>
    <title>Confirmacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Su reserva ha sido confirmada!</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 ">
          <p>Detalle de su reserva:</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3">
          <table width="300px">
            <tr>
                <td style="border: 1px solid gray">Sede:</td>
                <td style="border: 1px solid gray">Panamá</td>
            </tr>
            <tr>
                <td style="border: 1px solid gray">Salón:</td>
                <td style="border: 1px solid gray">3-315</td>
            </tr>
            <tr>
                <td style="border: 1px solid gray">Fecha:</td>
                <td style="border: 1px solid gray">11 - OCT - 2022</td>
            </tr>
            <tr>
                <td style="border: 1px solid gray">Hora Inicio:</td>
                <td style="border: 1px solid gray">10:00 pm</td>
            </tr>
            <tr>
                <td style="border: 1px solid gray">Hora Final:</td>
                <td style="border: 1px solid gray">11:00 pm</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-sm-12 text-center">
          <button id="btnSearch" class="btn btn-primary btn-md center-block" Style="width: 200px;" OnClick="volver_inicio()">Volver a Inicio</button>
          <button id="btnClear" class="btn btn-danger btn-md center-block" Style="width: 200px;" OnClick="btnClear_Click" >Cancelar Reserva</button>
        </div>
      </div>
    </div>
    <script>
      function volver_inicio(){
        window.location.href = './inicio.php';
      }
    </script>
  </body>
</html>