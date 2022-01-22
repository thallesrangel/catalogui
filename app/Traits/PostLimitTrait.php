<?php

namespace App\Traits;

trait PostLimitTrait
{
    public function checkPostLimit($number)
    {
        if ($number >= 12) {
            return true;
        }
    }
}