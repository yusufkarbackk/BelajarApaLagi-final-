<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        return view('pages.checkout');
    }

    public function success()
    {
        return view('pages.success');
    }
}
