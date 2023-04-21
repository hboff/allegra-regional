<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrteController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$routes = [
    'verkehrswertverfahren',
    'impressum',
    'datenschutzerklaerung',
    'ertragswertverfahren',
    'gewerbeimmobilien',
    'grundstuecke-und-rechte',
    'landwirtschaftliche-immobilien',
    'sachwertverfahren',
    'sonderimmobilien',
    'ueber-uns',
    'wohnimmobilien',
    'startseite',
    
];

$domains = [
    'immobilienbewertung-duisburg.com' => [
        'laengengrad' => [6.26, 7.26],
        'breitengrad' => [50.93, 51.93],
        'domainort' => 'Duisburg'
    ],
    'immobilienbewertung-kiel.com' => [
        'laengengrad' => [9.63, 10.63],
        'breitengrad' => [54.82, 54.82],
        'domainort' => 'Kiel'
    ],
    'immobilienbewertung-luebeck.com' => [
        'laengengrad' => [10.18, 11.18],
        'breitengrad' => [53.36, 54.36],
        'domainort' => 'Lübeck'
    ],        
    'immobilienbewertung-rostock.com' => [
        'laengengrad' => [11.62, 12.62],
        'breitengrad' => [53.59, 54.59],
        'domainort' => 'Rostock'
    ],        
    'immobilienbewertung-braunschweig.eu' => [
        'laengengrad' => [10.02, 11.02],
        'breitengrad' => [51.76, 52.76],
        'domainort' => 'Braunschweig'
    ],        
    'immobilienbewertung-magdeburg.com' => [
        'laengengrad' => [11.13, 12.13],
        'breitengrad' => [51.63, 52.63],
        'domainort' => 'Magdeburg'
    ],        
    'immobilienbewertung-halle.com' => [
        'laengengrad' => [11.47, 12.47],
        'breitengrad' => [50.98, 51.98],
        'domainort' => 'Halle'
    ],        
    'immobilienbewertung-erfurt.eu' => [
        'laengengrad' => [10.52, 11.52],
        'breitengrad' => [50.47, 51.47],
        'domainort' => 'Erfurt'
    ],        
    'immobilienbewertung-chemnitz.com' => [
        'laengengrad' => [12.42, 13.42],
        'breitengrad' => [50.33, 51.33],
        'domainort' => 'Chemnitz'
    ],
    'immobilienbewertung-augsburg.eu' => [
        'laengengrad' => [10.39, 11.39],
        'breitengrad' => [47.86, 48.86],
        'domainort' => 'Augsburg'
    ],
    'immobilienbewertung-ludwigsburg.com' => [
        'laengengrad' => [8.68, 9.68],
        'breitengrad' => [48.39, 49.39],
        'domainort' => 'Ludwigsburg'
    ],
    'immobilienbewertung-mannheim.com' => [
        'laengengrad' => [7.96, 8.96],
        'breitengrad' => [48.98, 49.98],
        'domainort' => 'Mannheim'
    ],        
    'immobilienbewertung-saarbruecken.com' => [
        'laengengrad' => [6.49, 7.49],
        'breitengrad' => [48.73, 49.73],
        'domainort' => 'Saarbrücken'
    ],
            
    'immobilienbewertung-bielefeld.com' => [
        'laengengrad' => [8.03, 9.03],
        'breitengrad' => [51.51, 52.51],
        'domainort' => 'Bielefeld'
    ],
    'immobilienbewertung-kassel.com' => [
        'laengengrad' => [8.99, 9.99],
        'breitengrad' => [50.81, 51.81],
        'domainort' => 'Kassel'
    ],
];

foreach ($domains as $domain => $domainData) {
    Route::domain($domain)->group(function () use ($routes, $domainData) {
        Route::get('/', function() use ($domainData) {
            $data = DB::table('orteDE')
                        ->whereBetween('laengengrad', $domainData['laengengrad'])
                        ->whereBetween('breitengrad', $domainData['breitengrad'])
                        ->get();
                        
                        $expert = DB::table('orteDE')
                        ->join('gutachter2', function($join) {
                            $join->on('orteDE.laengengrad', '>=', 'gutachter2.Lon')
                                 ->on('orteDE.laengengrad', '<=', 'gutachter2.Lon2')
                                 ->on('orteDE.breitengrad', '>=', 'gutachter2.Lat')
                             ->on('orteDE.breitengrad', '<=', 'gutachter2.Lat2');
                        })
                        ->get();
            View::share('data', $data);
            return view('index', ['expert' => $expert,'domainort' => $domainData['domainort']]);
        });
        Route::get('/immobilienbewertung/{ort}', [OrteController::class, 'show'], function () use ($domainData) {});
        Route::get('/immobilienbewertungen/{region}', function($region){
            return view ('immobilienbewertungen', ['ortsname' => $region]);
    });
        Route::get('contact-us', [ContactController::class, 'index']);
        Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

    foreach ($routes as $route) {
    Route::get($route, function () use ($route, $domainData) {
    
    return view($route, ['domainort' => $domainData['domainort']]);
    });
    }
    });
    }