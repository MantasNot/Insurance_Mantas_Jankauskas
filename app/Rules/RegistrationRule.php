<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RegistrationRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Your validation logic here
        // For example, check if the registration number matches the format "XXX 000"
        return preg_match('/^[A-Z]{3}\s\d{3}$/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be in the format "XXX 000".';
    }
}
