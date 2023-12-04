<!-- //Cuando se trabaja solo con php no es necesario cerrar la etiqueta php -->

<?php
class Area{
    public $radio;
    public $resultado;


    //Metodo para calcular el area del circulo
    public function calcularAreaCirculo($r){
        $this->radio = $r;
        $this->resultado = pi() * pow($this->radio,2);
        print '<script>
        Swal.fire({
            title: "La respuesta es",
            html:`<h1>'.$this->resultado.'</h1>`,
          });          
          </script>';
        
    }
}
