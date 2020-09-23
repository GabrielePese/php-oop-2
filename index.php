<!-- GOAL: nell'ottica di quanto visto a lezione definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto
NOTE: 
area quadrato: lato * lato
perimetro quadrato: 4 * lato
volume cubo: lato * lato * lato
superficie cubo: 6 * lato * lato
N.B.: definire ogni variabile e metodo pubblico come detto in classe -->
<?php
class Square{
    public $lato;

    public function __construct($lato) {
        $this -> lato = $lato;
    }

    public function calcoloAreaSquare (){
        return $this -> lato * $this -> lato;
    }
    public function calcoloPerimetroSquare(){
        return 4 * $this -> lato;
    }

    public function __toString(){
      return  "Area Quadrato: " .$this -> calcoloAreaSquare()
      ."<br>". "Perimetro Quadrato: ".$this -> calcoloPerimetroSquare()."<br>";
    }
}

class Cube extends Square{
    public function __construct($lato){
        parent:: __construct($lato);
    }
    public function calcoloCubeVolume (){
        return $this -> lato * $this -> lato * $this -> lato;
    }
    public function calcoloCubeSuperfice (){
        return 6 * $this -> lato * $this -> lato;
     }
    public function __toString(){
        return  "Volume Cubo: " .$this -> calcoloCubeVolume()
        ."<br>". "Superfice Cubo: ".$this -> calcoloCubeSuperfice()."<br>";
    }
}

$Square1 = new Square(4);
$cubo1 = new Cube(10);

echo $Square1."<br>".$cubo1."<br>";