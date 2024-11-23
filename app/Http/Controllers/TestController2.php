<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController2 extends Controller
{
    public function __invoke(){
        return 'Test page';
    }
}
