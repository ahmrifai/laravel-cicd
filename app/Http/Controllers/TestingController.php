<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    //
    function testing(): int {
        $a = 10;
        $b = 20;
        $c = $a + $b;
        return $c;
    }
}
