<?php

namespace src\Libraries;

class MathLib {

    public function sumarNaturales(int $num1, int ...$numx): int{

        $result = abs($num1);

        foreach($numx as $num)
            $result += abs($num);

        return $result;
    }

    public function sumaGaussiana(int $n): int{
        return ($n * ( $n + 1) ) / 2;
    }
    
}