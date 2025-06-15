<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
 function index()
 {
    return view('posts.index');
 }

 function create()
 {
   return view('posts.create');
 }

 function edit()
 {
   return view('posts.edit');
 }

   public function show($id, $categoria)
    {
        // Aquí simplemente se pasa la info a la vista
        return view('posts.show', compact('id', 'categoria'));
    }
}
 


