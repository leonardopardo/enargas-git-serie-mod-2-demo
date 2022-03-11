<?php

namespace src\Libraries;

use Carbon\Carbon;

class DateLib {

    public function calcularEdad(string $fecha): int{
        return Carbon::parse($fecha)->DiffInYears(Carbon::now());
    }

}