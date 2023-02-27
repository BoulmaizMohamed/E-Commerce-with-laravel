<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        return view('admin/adminhome');

    }


    public function produit()
    {

        $produit= Produict::all();


        return view('Commercer/produit',['produit'=>$produit]);

    }


    public function add_produit()
    {
        $produit= new Produict();

        $produit -> name = request('name');
        $produit -> price = request('price');
     
    
        $produit -> save();
    
        return redirect('/produit');

    }


    public function  commands()
    {

        $produit= commands::all();


        return view('Commercer/produit',['produit'=>$produit]);

    }




}
