<?php
class Terreno{
    public $A;
    public $B;
    public $C;
    public $areaTriangulo;
    public $areaRectangulo;
    public $areaTerreno;

    public function calcularAreaTriangulo($a,$b,$c){
        $this->A = $a;
        $this->B = $b;
        $this->C = $c;
        $this->areaTriangulo = ($b*($a-$c))/2;
        return $this->areaTriangulo;
    }
    
    public function calcularAreaRectangulo($b,$c){        
        $this->B = $b;
        $this->C = $c;
        $this->areaRectangulo = $c*$b;
        return $this->areaRectangulo;
    }

    public function calcularAreaTerreno(){
        $this->areaTerreno = $this->areaTriangulo + $this->areaRectangulo;
        print '<script>
        Swal.fire({
            title: "El área del terreno es:",
            html:`<h1>'.$this->areaTerreno.'</h1>`,            
          });          
          </script>';      
    }
}