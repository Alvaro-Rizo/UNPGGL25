<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;


Route::view('/tarea2/ejercicio1', 'tarea2.ejercicio1');
Route::view('/tarea2/ejercicio2', 'tarea2.ejercicio2');
Route::view('/tarea2/ejercicio3', 'tarea2.ejercicio3');
Route::view('/tarea2/ejercicio4', 'tarea2.ejercicio4');


Route::get('/', function () {
    return view('welcome');
});


// esto es para comprobar si funciona  /math/sum/8/2 , /math/subtract/9/4 ,  /math/multiply/3/5
use App\Http\Controllers\MathController;
Route::get('/math/sum/{a}/{b}', [MathController::class, 'sum']);
Route::get('/math/subtract/{a}/{b}', [MathController::class, 'subtract']);
Route::get('/math/multiply/{a}/{b}', [MathController::class, 'multiply']);


// esto para comprobar si funciona /student/Alvaro Rizo/21
use App\Http\Controllers\StudentController;
Route::get('/student/{name}/{age}', [StudentController::class, 'show']);


// esto para comprobar si funciona/age/2000
use App\Http\Controllers\AgeCalculatorController;
Route::get('/age/{birthYear}', [AgeCalculatorController::class, 'calculate']);







Route::get('/posts', [homeController::class, "index"] 
);

Route::get('/post/create', [homeController::class, "create"] 
);

Route::get('/post/edit', [homeController::class, "edit"] 
);

Route::get('/post/{id}/{categoria}', [homeController::class, "show"] 

);
//ruta asignada con un controlador 
/*
Route::get('/post', [homeController::class, "mensaje"] 
);

Route::get('/post/create', [homeController::class, "create"] 
);

Route::get('/post/{id}', [homeController::class, "post"] 
);



Route::get('/item/{id}', function ($id) {
    if (is_numeric($id)) {
        return 'El ID del item es: ' . $id;
    } else {
        return 'Error: El parámetro ID debe ser un número.';
    }
})->where('id', '[0-9]+');

Route::get('/producto/{categoria}/{id}', function ($categoria, $id) {
    return "categoria   ".$categoria.'ID  :'.$id;
});


Route::get('/saludo/{nombre}', function ($nombre){
    return "Hola como estas  ".$nombre;
});

Route::get('/Acerca_de', function () {
    return "Esta es la pagina web que mostrara los post";
});

son corchetes los que se ocupan no son parentesis em lo de saludo /nombre 

Route::get('/Bienvenidos', function () {
    return "Bienvenido a laravel 11";
});



Route::get('/post/(id)', function ($id,) {
    return "Esta es la informacion del post".$id;
});

Route::get('/post/create', function () {
    return "Aca se mostrara un formulario para crear post ";
});


/*
Route::get('/post/(id)/(categoria)', function ($id, $categoria): string {
    return "Esta es la informacion del post".$id. "y su categoria es".$categoria;
});

Route::get('/post/(id)/(categoria)', function ($id, $categoria=null) {
    if ($categoria)
    {
        return "el post es " .$id. "y su categoria es : ".$categoria;
    }
        else 
        {
        return "el post".$id. "no posee categoria "
        }

});
*/
