<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function() {
    return view('welcome');

});
//rout GET simpele
Route::get('/welcom',function() {
    return "bienvenue sur laravele !";

});
//Route POST simple
Route::post('submit',function(){
    return "Donnèes envoyèes avec succès!";
});
Route:: match(['get','post','put','delete'],'/multi',function(){
    return"Cette route accept GET,POST,PUT,DELETE,";
});

Route ::any('/any-rout',function(){
    return"Cette rout accepte n'importe quel avebe  HTTP";
});
Route::get('/user/{id}',function($id){
    return "Utilisateur ID: ".$id;
});
Route::get('/profile/{nom?}',function($nom='invité'){
    return "Bienvene, ".$nom;
});
Route::get ('/dashborad',function(){
return "bienvenue sur le tableau de bord";
})->name('dashboard');


