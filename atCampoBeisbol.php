<?php
class FiguraGeometrica {
    //variables
    private $radio;
    private $hipotenusa;
    private $cateto;
    private $areaTriangular;
    private $areaCircular;
    private const PI = 3.1416;

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function setHipotenusa($hipotenusa) {
        $this->hipotenusa = $hipotenusa;
    }

    public function calcularCateto() {
        $this->cateto = sqrt($this->hipotenusa * $this->hipotenusa - $this->radio * $this->radio);
    }

    public function calcularAreaTriangular() {
        $this->areaTriangular = 2 * ($this->radio * $this->cateto) / 2;
    }

    //solo necesitamos la mitad del circulo
    public function calcularAreaCircular() {
        $this->areaCircular = (self::PI * $this->radio * $this->radio) / 2;
    }

    public function calcularAreaTotal() {
        $areaTotal = $this->areaTriangular + $this->areaCircular;
        echo "El área total de la figura es: $areaTotal\n";
    }
}

// Verificar si se enviaron datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $figura = new FiguraGeometrica();
    // Obtener valores del formulario
    //condición ternaria si el valor es verdadero o falso
    $radio = isset($_POST['radio']) ? (float)$_POST['radio'] : 0;
    $hipotenusa = isset($_POST['hipotenusa']) ? (float)$_POST['hipotenusa'] : 0;

    // Establecer valores en la instancia de la clase
    $figura->setRadio($radio);
    $figura->setHipotenusa($hipotenusa);

    // Calcular cateto, áreas y área total
    $figura->calcularCateto();
    $figura->calcularAreaTriangular();
    $figura->calcularAreaCircular();
    $figura->calcularAreaTotal();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Calculadora de Áreas</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f8ff; 
        }

        .card {
            background-color: #ffffff; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 8px; 
            padding: 20px;
            max-width: 400px;
            margin: auto;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input {
            padding: 8px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Calculadora de Áreas</h1>   

        <form method="post" action="">
            <label for="radio">Ingrese el valor de Radio de la cancha:</label>
            <input type="text" name="radio" id="radio" required>
            <label for="hipotenusa">Ingrese el valor de la hipotenusa:</label>
            <input type="text" name="hipotenusa" id="hipotenusa" required>
            <input type="submit" value="Calcular">
            <div>        
        </div>
        <?php if (isset($areaTotal)): ?>
            <p>El área total de la figura es: <?php echo $areaTotal; ?></p>
        <?php endif; ?>
        </form>        
    </div>
</body>
<!-- http://localhost/ejerciciocanchabeisbol/atCampoBeisbol.php -->
</html>

