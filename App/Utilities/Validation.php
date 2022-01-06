<?php

namespace App\Utilities;

class Validation 
{
    public static function isValidEmail(string $email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;

        return false;
    }

    public static function isValidMobileNumber(string|int $mobileNumber)
    {
        $match = preg_match('/^09\d{9}$/', $mobileNumber);

        if($match)
            return true;

        return false;
    }
}