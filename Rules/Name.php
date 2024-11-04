<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Name implements Rule
{
    public function passes($attribute, $value)
    {
        return strlen($value) === 5;
    }

    public function message()
    {
        return "hould be exactly 5 characters long.";
    }
}