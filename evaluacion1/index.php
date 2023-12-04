<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación 1</title>

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
    <h3>Calcular el área de Campo de Beisbol</h3>    
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Calcular
</button>
</div>

<?php
include_once 'class.area.php';
if(isset($_POST['radio'])){
    //Instanciar la clase
$areaCirculo = new Area();
$areaCirculo->calcularAreaCirculo($_POST['radio']);
}

?>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="container mt-3">
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="radio">Ingrese el radio del campo de Beisbol</label>
                <input type="text" class="form-control" id="radio" placeholder="Ingrese el radio" name="radio">
            </div>
            

            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
      </div>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</body>



<!-- http://localhost/ejerciciocanchabeisbol/evaluacion1/index.php -->
</html>