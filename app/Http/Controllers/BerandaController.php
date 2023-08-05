<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Provision a new web server.
     */
    public function __invoke()
    {
        return redirect()->route('peserta.pendaftaran');
    }
}