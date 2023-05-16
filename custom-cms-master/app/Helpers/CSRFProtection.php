<?php

namespace App\Helpers;

use App\Helpers\Str;


//Cross Site Request Forgery um den User vor HTTP anfragen zu schützen
class CSRFProtection {
    public static function token()
    {
        $csrfToken = Str::token();
        $_SESSION['csrfToken'] = $csrfToken;

        return $csrfToken;
    }
}
