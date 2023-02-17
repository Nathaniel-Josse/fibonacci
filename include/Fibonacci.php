<?php

class Fibonacci {
    protected $f0 = 0;
    protected $f1 = 1;
    protected $fRes;
    public function calcul(){
        $this->fRes = 0;
        echo "<p>";
        echo "1er terme : " . $this->f0 . "<br>";
        echo "2e terme : " . $this->f1 . "<br>";
        for ($i=0; $i < 38; $i++) { 
            $this->fRes = $this->f0 + $this->f1;
            $this->f0 = $this->f1;
            $this->f1 = $this->fRes;
            echo $i+3 . "e terme : " . $this->fRes . "<br>";
        };
        echo "</p>";
    }
}