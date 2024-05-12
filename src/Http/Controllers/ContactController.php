<?php

namespace Cosmo\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index() {
        $parametroConfig = config('contact.esempio_di_parametro_configurazione'); //Restituisce "valore_parametro_configurazione"
        return view('contact::contact');
    }
}