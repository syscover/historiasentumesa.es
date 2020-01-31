<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class WebController extends Controller
{
    public $products = [
        'aceite-de-magina',
        'carne-de-avila',
        'citricos-valencianos',
        'jabugo',
        'los-pedroches',
        'peras-de-rincon-de-soto',
        'pimenton-de-la-vera',
        'platano-de-canarias',
        'priego-de-cordoba',
        'queso-cabrales',
        'queso-de-mahon',
        'queso-manchego',
        'sobrasada-de-mallorca',
        'ternera-de-extremadura',
        'ternera-de-navarra',
        'ternera-gallega',
        'torta-del-casar',
        'turron-de-jijona',
        'uva-vinalopo',
        'vinagre-de-jerez'
    ];

    public function home(Request $request)
    {               
        $data = [
            'products'  => collect($this->products),
            'map'       => File::get(public_path('img/map.svg'))
        ];     

        return view('home', $data);   
    }
    

    public function product(Request $request, $slug)
    { 
        return view('products.contents.' . $slug);
    }
}
