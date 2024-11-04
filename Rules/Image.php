<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Image implements Rule
{
    public function passes($attribute, $value)
    {
        $mimeType = $value->getMimeType();
        return in_array($mimeType, ['image/jpeg', 'image/png', 'image/jpg']);
    }

    public function message()
    {
        return 'should be an image file (jpeg, jpg, png).';
    }
}
