<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Botstrap Versión 5.3.2 -->
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript --> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Sweet alert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container mt-3">
    <h3>Calcular el área del Terreno</h3>
    <img src="terreno.jpg" alt="">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Calcular
    </button>
  </div>
  <?php
  include_once 'class.terreno.php';
  // Verificar si se han enviado los valores de A, B y C
  if (isset($_POST['A'], $_POST['B'], $_POST['C'])) {
    // Obtener valores de A, B y C desde el formulario
    $a = $_POST['A'];
    $b = $_POST['B'];
    $c = $_POST['C'];
  }
  //Instanciar la clase
  $areaTerreno = new Terreno();

  // Calcular área del triángulo y del rectángulo
  $areaTriangulo = $areaTerreno->calcularAreaTriangulo($a, $b, $c);
  $areaRectangulo = $areaTerreno->calcularAreaRectangulo($c, $b);

  // Calcular área total del terreno
  $areaTotal = $areaTerreno->calcularAreaTerreno();
  ?>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Area del Terreno</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container mt-3">
            <form action="index.php" method="POST">
              <div class="mb-3">
                <label for="radio">Ingrese el valor de A</label>
                <input type="text" class="form-control" id="A" placeholder="Valor de A" name="A">
              </div>
              <div class="mb-3">
                <label for="radio">Ingrese el valor de B</label>
                <input type="text" class="form-control" id="B" placeholder="Valor de B" name="B">
              </div>
              <div class="mb-3">
                <label for="radio">Ingrese el valor de C</label>
                <input type="text" class="form-control" id="C" placeholder="Valor de C" name="C">
              </div>
              <button type="submit" class="btn btn-primary">Calcular</button>
            </form>
          </div>         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


</body>

</html>

<!-- http://localhost/ejerciciocanchabeisbol/ejercicioTerreno/index.php -->