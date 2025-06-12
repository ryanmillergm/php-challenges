<?php
namespace App;

require 'Exception\AgeException.php';


use AgeException;

$user_age = 17;

try {
    if ($user_age < 18) {
        throw new AgeException("Must be 18 or older");
    } else {
        echo "Don't go crazy cuz you are over 18";
    }
} catch(AgeException $e) {
    print_r($e->showErrorMessage());
}

