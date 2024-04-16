<?php

declare(strict_types=1);

namespace HogeCompany\FooProject;

class Calc
{
    public static function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public static function sub(int $a, int $b): int
    {
        return $a - $b;
    }
}
