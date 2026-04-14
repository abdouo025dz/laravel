<?php
use Illuminate\Support\Facades\Route; // <--- ADD THIS LINE

use Illuminate\Support\Facades\Cache;

Route::get('/cache-set', function (){
    Cache::put('nom9', 'Archimed', now()->addMinutes(10));
    return "La valeu0r a ete stockee dans le cache .";
});

Route::get('/cache-get', function(){
    $valeur = Cache::get('nom', 'Valeur non trouvee');
    return "valeur dans le cache : " . $valeur;
});

Route::get('/cache-has', function () {
    if (Cache::has('nom')) {
        return "la cle 'nom' existe dans le cache . ";
    }else{
        return "la cle 'nom' n'existe pas dans le cache .";
    }
});

Route::get('/cache-forget', function () {
    Cache::forget('nom');
    return "La cle nom a ete supprimee de cache . ";
});

Route::get('/cache-forever', function () {
    Cache::forever('site', 'laravel22');
    return "La valeur a ete stockee en cache pour toujours.";
});

Route::get('/cache-flush', function () {
    Cache::flush();
    return "Tout le cache a ete vide";
});

Route::get('/cache-has-site', function () {
    if (Cache::has('site')) {
        return "la cle 'site' existe dans le cache . ";
    }else{
        return "la cle 'site' n'existe pas dans le cache .";
    }
});

Route::get('/cache-get-site', function(){
    $valeur2 = Cache::get('site', 'Valeur non trouvee');
    return "valeur dans le cache : " . $valeur2;
});


Route::get('/welcome/{name}', function($name){
    return Welcome::greet($name);
});
Route::get('/index',[UserController::class,"index"]);
