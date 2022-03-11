<?php

namespace src\Facade;

use src\Libraries\DateLib;

class Date {

  public static function CalcularEdad (string $fecha): int {
    $lib = new DateLib;
    return $lib->calcularEdad($fecha);
  }

}
