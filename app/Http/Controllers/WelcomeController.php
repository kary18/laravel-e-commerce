<?php

namespace App\Http\Controllers;

use App\Categorie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function welcome() {

        $categories = Categorie::all();

        return view('welcome')->with('categories', $categories);
    }
}
