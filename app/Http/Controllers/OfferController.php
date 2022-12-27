<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    $offersArr = [
        [
            'address'=> '',
            'customer' => '',
            'install_price' => '',
            'monthly_price' => '',
            'type_lm'=> '',
            'lm_checkup' => '',
            'provider_id' => '',
        ]
        ];
    

    public function index(){
        $offers = Offer::all();
        foreach($offers as $offer) {
            dump($offer);
        }
    dd('end');
    }
    public function add()
    {
        
        // view('form.blade');
        Offer::create([
            'address'=> 'Moscow, Sobyanina, 1',
            'install_price'=>'10000',
            'monthly_price'=>'200000',
            'type_lm'=>'cooper',
            'lm_checkup_id'=>'34343434',
            'provider_id' => '3'
        ]);
        dd('done');
    }
    public function update(){
        $offer = Offer::find(3);
        $offer->update([
            'address' => 'Yekaterinburg, Elcina1',
            'install_price' => 3000
        ]);
        dd('updated');
    }
    public function delete(){
        $offer=Offer::find(9);
        $offer->delete();
        dd('deleted');
    }
}
