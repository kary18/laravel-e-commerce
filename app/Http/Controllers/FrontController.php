<?php
namespace App\Http\Controllers;
use App\Categorie;
use App\Produit;
use Illuminate\Http\Request;
class FrontController extends Controller
{
    public function categorie($id)
    {
        $products = Produit::where('categories_id', $id)->get();
        $categorie = Categorie::find($id);

        return view('front.products', compact('products', 'categorie'));
    }


    public function combis()
    {
        $combis = Produit::where('categories_id', 3)->get();
        return view('front.combis',compact('combis'));
    }

    public function veste()
    {
        $vestes = Produit::where('categories_id', 2)->get();
        return view('front.veste',compact('vestes'));
    }

    public function pulls()
    {
        $pulls = Produit::where('categories_id', 1)->get();
        return view('front.pulls',compact('pulls'));
    }

    public function accessoires()
    {
        $accessoires = Produit::where('categories_id', 4)->get();
        return view('front.accessoires',compact('accessoires'));
    }
}
