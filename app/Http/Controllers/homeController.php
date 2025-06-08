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

function show($id,$categoria)

 {
    return view('posts.show',["post"=> $id, "categoria"=> $categoria]);
 }

 

}
