<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function combis()
     {

            return view('front.combis',compact('combis'));
     }

    public function veste()
    {

        return view('front.veste',compact('veste'));
    }

    public function pulle()
    {

        return view('front.pulle',compact('pulle'));
    }

    public function accessoires()
    {

        return view('front.accessoire',compact('accessoires'));
    }





}
