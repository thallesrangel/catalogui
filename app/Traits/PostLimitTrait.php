<?php

namespace App\Traits;

trait PostLimitTrait
{
    public function checkPostLimit($number)
    {
        if ($number >= 3) {
            return true;
        }
    }
}