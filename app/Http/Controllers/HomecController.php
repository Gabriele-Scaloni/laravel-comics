<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPUnit\Framework\Test;

class HomecController extends Controller
{
    public function home() {
        $cardPage =config('data.test');
        return view('pages.card');
    }
}
