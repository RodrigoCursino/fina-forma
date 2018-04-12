<?php

// Rota padrão
Route::get('slc.js', function () {
    $json = json_encode(array_merge(Slc::scriptVariables(), []));
    $js = <<<js
window.Slc = {$json};
js;
    return response($js)->header('Content-Type', 'text/javascript');
})->name('slc.js');

// Rotas
Route::group(['middleware' => ['auth', 'timezone']], function () {
    Route::get('/ ', 'Web\HomeController@index')->name('home');

    foreach (File::files(app()->path() . '/Routes/auth') as $file) {
        require $file;
    }
});

Route::group(['middleware' => ['timezone']], function () {
    foreach (File::files(app()->path() . '/Routes/guest') as $file) {
        require $file;
    }
});

