<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class RedirectController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        return redirect()->route('ShrineChoose');
    }
}
