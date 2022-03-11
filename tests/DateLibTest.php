<?php

use src\Libraries\DateLib;
use PHPUnit\Framework\TestCase;

class DateLibTest extends TestCase {
    
    private $ob;

    public function setUp(): void {
        $this->ob = new DateLib;
    }

    public function test_debe_calcular_la_edad_desde_una_fecha_de_nacimiento(): void{
        $this->assertEquals(40, $this->ob->calcularEdad('12/06/1981'));
    }
}