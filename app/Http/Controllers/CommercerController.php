<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produict;
use App\Models\DB;
use App\Models\computer;
use App\Models\email;


class CommercerController extends Controller
{

    public function login()
    {
        return view('login1');

    }


    public function index()
    {
        return view('Main' , ['client'=>'mohamed']);

    }


    public function email()
    {
        $email = email::all();

        return view('admin/email' , ['email'=>$email]);

    }


    public function produit()
    {
        
        $produit = Produict::where('Type', 'laptops')->get();


        return view('admin/produit',['produits'=>$produit]);

    }


    public function accesorys()
    {
        
        $produit = Produict::where('Type', 'tools')->get();


        return view('admin/accesory',['produits'=>$produit]);

    }


    
    public function adminbuild()
    {
        
    


        return view('admin/buildPC');

    }


    public function add_produit(Request $request )
    {   
        //dd($request->file());
        $produit= new Produict();
        $image = $request ->file('image')->getClientOriginalName();
        $produit -> name = request('name');
        $produit -> price = request('price');
        $produit -> description = request('desc');
        $produit -> Type = request('Type');
       
        $produit -> image = $request ->file('image')->getClientOriginalName();
        $request ->file('image')->storeAs('public\storage',$image);
        $request ->file('image')->storeAs('storage\app\public',$image);
        $produit -> save();
    
        return redirect('/produit');

    }
    




    public function add_chip( )
    {   
        //dd($request->file());
        $computer= new computer();
        $computer -> name = request('name');
        $computer -> price = request('price');
        $computer -> save();
    
        return redirect('/admin/build');

    }


    
    public function add_accesory(Request $request )
    {   
        //dd($request->file());
        $produit= new Produict();
        $image = $request ->file('image')->getClientOriginalName();
        $produit -> name = request('name');
        $produit -> price = request('price');
        $produit -> description = request('desc');
        $produit -> Type = request('Type');
       
        $produit -> image = $request ->file('image')->getClientOriginalName();
        $request ->file('image')->storeAs('public\storage',$image);
        $request ->file('image')->storeAs('storage\app\public',$image);
        $produit -> save();
    
        return redirect('/admin/accesorys');

    }



    public function Delete_produit()
{
     
//dd(request('Id'));
    $Id= request('Id') ;
   // dd($Id);

    $Produict = Produict::where('Id', $Id)
    ->delete();
   

    return redirect('/produit');

}


public function Delete_acc()
{
     
//dd(request('Id'));
    $Id= request('Id') ;
   // dd($Id);

    $Produict = Produict::where('Id', $Id)
    ->delete();
   

    return redirect('/admin/accesorys');

}


public function Update_produit()
{

    $Id= request('Id') ;
    // dd($Id);
 

    Produict::where('Id', request('Id'))
    ->update(array(
              'name'=>request('name'),
              'price'=>request('price'),
              'description'=>request('desc')
     ));




    


    return redirect('/produit');

}


public function Update_acc()
{

    $Id= request('Id') ;
    // dd($Id);
 

    Produict::where('Id', request('Id'))
    ->update(array(
              'name'=>request('name'),
              'price'=>request('price'),
              'description'=>request('desc')
     ));




    


    return redirect('/admin/accesorys');

}




    public function  commands()
    {

        $produit= commands::all();


        return view('admin/produit',['produit'=>$produit]);

    }





}
