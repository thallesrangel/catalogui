<?php

namespace App\Traits;

trait SlugValidationTrait
{
    public function slugValidation($slugName)
    {
        return strtolower(
            preg_replace('/[^A-Za-z0-9-]+/', '-', $slugName)
        );
    }
}