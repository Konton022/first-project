<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;



class ProviderController extends Controller
{
    public $providers = ['rostelecom', 'orange', 'beeline', 'mts', 'motiv', 'mefagon', 'er-telecom', 'insis', 'komtechcentre', 'ttk'];

    public function index() {
        $providers = Provider::all();
        foreach($providers as $provider) {
            dump($provider);
        }
    dd('end');
    }
    public function add(){
        foreach($this->providers as $provider) {
            Provider::firstOrCreate(['name'=> $provider]);
        };
        dd($this->providers);

    }
}
