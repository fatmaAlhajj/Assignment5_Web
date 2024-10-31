<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ImageOnly implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

        if (!in_array($value->getMimeType(), $allowedMimeTypes)) {
            $fail("The {$attribute} must be an image file.");
        }

        if ($value->getSize() > 1024 * 1024) { 
            $fail("The {$attribute} must be less than 1 MB.");
        }
    }

}
