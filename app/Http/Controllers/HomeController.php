<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produict;
use App\Models\cart;
use App\Models\email;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function LAPTOPS()
    {

        $produit = Produict::where('Type', 'laptops')->get();
        
      // dd($produit);

        return view('laptops',['produit'=>$produit]);

    }

   


    public function Accesorys()
    {

        $produit = Produict::where('Type', 'tools')->get();
        
      // dd($produit);

        return view('laptops',['produit'=>$produit]);

    }

    public function sendemail()
    {
      $email= new email();
      $email -> email = request('email');
      $email -> message = request('message');
      
      
      $email -> save();

     
      

      return view('emailstat');

    }


}
