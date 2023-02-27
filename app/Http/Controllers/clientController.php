<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produict;
use App\Models\cart;
use App\Models\computer;
use App\Models\bank;
use App\Models\email;




class clientController extends Controller
{
    
    public function index()
    {
        

        return view('client/ClientHome');

    }


    public function contact()
    {
        

        return view('client/sendemail');

    }


    public function produit()
    {
        
        $produit = Produict::where('Type', 'laptops')->get();


        return view('client/laptop',['produit'=>$produit]);

    }


    public function accesorys()
    {
        
        $produit = Produict::where('Type', 'tools')->get();


        return view('client/accessory',['produit'=>$produit]);

    }



    public function show_cart()
    {


      //  $ids= Session::get('client')[0]['id'];
    
        $cart = cart::where('idu',2)->get();


        return view('client/cart',['produit'=>$cart]);

    }



    public function add_cart()
    {

        
        // dd(request('subject'));
        //$ids= Session::get('client')[0]['id'];
        
        $array = Produict::where('Id', request('subject'))->get()->toArray();

        // dd($array[0]["name"]);


        $cart= new cart();
        $cart -> idu =2;
        $cart -> name = $array[0]["name"];
        $cart -> price = $array[0]["price"];
        
        $cart -> description = $array[0]["description"];

        $cart -> save();

        
        return redirect('/client/cart');

    }


    public function show_build()
    {


      


        return view('client/buildPc');

    }


    public function build()
    {
       
       $mother = computer::select('price','name')->where('name', request('mother'))->get();
       $DISK = computer::select('price','name')->where('name', request('DISK'))->get();
       $CPU = computer::select('price','name')->where('name', request('CPU'))->get();
       $GPU = computer::select('price','name')->where('name', request('GPU'))->get();
       $RAM = computer::select('price','name')->where('name', request('RAM'))->get();
      
       $mothern=$mother[0]["name"];
       
       $DISKn=$DISK[0]["name"];
      
       $CPUn=$CPU[0]["name"];
       
       $GPUn=$GPU[0]["name"];
       $RAMn=$RAM[0]["name"]; 

       
        $price =$mother[0]["price"]+$DISK[0]["price"]+$CPU[0]["price"]+$GPU[0]["price"]+$RAM[0]["price"];
      
        $desc=("your pc have:$mothern--$DISKn--$CPUn--$GPUn--$RAMn.");
      

        $named='costume desktop';
       
        $cart= new cart();
        $cart -> idu =2;
        $cart -> name = $named;
        $cart -> price = $price;
        
        $cart -> description = $desc;
         
        $cart -> save();



        return redirect('/client/cart');

    }


    public function delete_cart()
    {

     //dd(request('Id'));

     $Id= request('Id') ;
     
  
      $Produict = cart::where('Id', $Id)
      ->delete();
      


      return redirect('/client/cart');

    }




    public function buy()
    {

     //dd(request('total'));

    
     
  
     $balance = bank::select('balance')->where('cvv', request('cvv'))->where('card', request('card'))->get();
     
     if($balance->isEmpty())
{return view('client/CARDPROB');}
else
{


     $Mybalance= $balance[0]["balance"] ;
  
      if($Mybalance >= request('total') )
      {
        $x=$Mybalance - request('total');
 
        $update = bank::where('card', request('card'))->update(array('balance' => $x));

        return view('client/thnx');

      }else
      
      {
        return redirect('/client/cart');

      }

      ;}
    

    }






    public function sendemail()
    {

      
      $email= new email();
      $email -> email = request('email');
      $email -> message = request('message');
      
      
      $email -> save();

     
      

      return view('client/emails');

    }


}
