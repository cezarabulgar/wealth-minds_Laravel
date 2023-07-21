
<?php
require_once 'Calculator.php';

class AdvancedCalculator extends Calculator {
    public function multiply($x, $y){
        $rezultat = $x * $y;
        echo $x . ' inmultit la ' . $y . ' este egal cu ' . $rezultat;
        return $rezultat;
    }

    public function intdiv ($x, $y){
        $rezultat = $x / $y;
        echo $x . ' de impartit la ' . $y . ' este egal cu ' . $rezultat;
        return $rezultat;
    }

    public function pow($x, $y){
        $rezultat = $x ** $y;
        echo $x . ' la puterea ' . $y . ' este egal cu ' . $rezultat;
        return $rezultat;
    }
}



