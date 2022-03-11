<?php

use src\Libraries\MathLib;
use PHPUnit\Framework\TestCase;

class MathLibTest extends TestCase {

    private $ob;

    public function setUP(): void {
        $this->ob = new MathLib;
    }

    public function test_debe_sumar_dos_numeros_positivos(): void{
        $this->assertEquals(12, $this->ob->sumarNaturales(7,5));
    }

    public function test_debe_sumar_dos_numeros_negativos_y_retornar_positivo(): void{
        $this->assertEquals(12, $this->ob->sumarNaturales(-7,-5));
    }

    public function test_debe_sumar_varios_numeros(): void{
        $this->assertEquals(15, $this->ob->sumarNaturales(1,2,3,4,5));
    }

    public function test_suma_gaussiana_de_los_5_primeros_numeros(): void{
        $this->assertEquals(15, $this->ob->sumaGaussiana(5));
    }

}