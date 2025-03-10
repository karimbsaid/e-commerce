<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Phone;
use App\Models\Laptop;
use App\Models\PhonesName;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $product=Product::get();
        
        
        return view('magazin.showproduct')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('magazin.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
    
        $productType = $request->input('product_type');
        if ($productType === 'phone') {
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'capacity' => 'required|integer',
                'rom' => 'required|integer',
                'back-camera' => 'required|integer',
                'front-camera' => 'required|integer',
                'capteur' => 'required',
                'reference'=> 'required',
                'price'=>'required|integer',
                'nombre' =>'required|integer',


            ]);
            $phonesNameId = $request->input('class_type_id');
            $photoFile = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/images/',$photoFile);
            $phone = Phone::create([
                'capacity' => $request->input('capacity'),
                'rom' => $request->input('rom'),
                'front_camera' => $request->input('front-camera'),
                'back_camera' => $request->input('back-camera'),
                'capteur' => $request->input('capteur'),
                'reference' => $request->reference,
            ]);
            $product = Product::create([
                'users_id' => auth()->user()->id,
                'phones_id' => $phone->id, 
                'laptops_id' => null,
                'photo' => $photoFile,
                'nombre' => $request->nombre,
                'price' => $request->price,
            ]);
            return redirect()->route('magazin.index');

        }
    
        // Handle laptop creation
        elseif ($productType === 'laptop') {
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'ram' => 'required|integer',
                'rom' => 'required|integer',
                'carte-graphique' => 'required',
                'processeur' => 'required',
                'reference'=> 'required',
                'price' => 'required|integer',
                'nombre' => 'required|integer',


            ]);
            $phonesNameId = $request->input('class_type_id');
            $photoFile = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/images/',$photoFile);
            $phone = Laptop::create([
                'ram' => $request->input('ram'),
                'rom' => $request->input('rom'),
                'processeur' => $request->input('processeur'),
                'carte_graphique' => $request->input('carte-graphique'),
                'reference' => $request->reference,
            ]);
            $product = Product::create([
                'users_id' => auth()->user()->id,
                'phones_id' => null, 
                'laptops_id' => $phone->id,
                'photo' => $photoFile,
                'nombre' => $request->nombre,
                'price' => $request->price,

            ]);

            return redirect()->route('magazin.index');

        }
        dd('ok');


        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        
        $phone = $product->Phones;
        $laptop = $product->laptops;
        
        if($phone){
            return view('layouts.editphone')->with(['phone'=>$phone,'product'=>$product]);
        }
        if($laptop){
            return view('layouts.editlaptop')->with(['laptop'=>$laptop,'product'=>$product]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id  )
    {
        $productType = $request->input('product_type');
        if ($productType === 'phone') {
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'capacity' => 'required|integer',
                'rom' => 'required|integer',
                'back-camera' => 'required|integer',
                'front-camera' => 'required|integer',
                'capteur' => 'required',
                'reference'=> 'required',


            ]);
            $phonesNameId = $request->input('class_type_id');
            if ($request->hasFile('file')) {
                $photoFile = $request->file('file')->getClientOriginalName() ;
                $request->file('file')->storeAs('public/images/', $photoFile);
            }

    
            // Retrieve the Phone instance by its ID
            $phone = Phone::findOrFail($id);
            // Update the attributes of the Phone instance
            $phone->update([
                'capacity' => $request->input('capacity'),
                'rom' => $request->input('rom'),
                'front_camera' => $request->input('front-camera'),
                'back_camera' => $request->input('back-camera'),
                'capteur' => $request->input('capteur'),
                'reference' => $request->reference,
            ]);
            
    
            // Update the associated Product instance
            $product = $phone->products;
            $product->first->update([
                'photo' => $photoFile,
                'nombre'=>$request->nombre,
                'price' => $request->price,

            ]);
        }
    
        // Handle laptop creation
        elseif ($productType === 'laptop') {
            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'ram' => 'required|integer',
                'rom' => 'required|integer',
                'carte-graphique' => 'required',
                'processeur' => 'required',
                'reference'=> 'required',


            ]);
            $laptopsNameId = $request->input('class_type_id');
            $photoFile = $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs('public/images/',$photoFile);
            $laptop = Laptop::findOrFail($id);
            $laptop->update([
                'ram' => $request->input('ram'),
                'rom' => $request->input('rom'),
                'processeur' => $request->input('processeur'),
                'carte_graphique' => $request->input('carte-graphique'),
                'reference' => $request->reference,
            ]);
            $product = $laptop->products;
            $product->first->update([
                'photo' => $photoFile,
                'nombre'=>$request->nombre,
                'price' => $request->price,

            ]);
        }
        return redirect()->route('magazin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{   
    
    $product = Product::findOrFail($id);
    // Retrieve the associated phone
    $phone = $product->Phones;
    $laptop =$product->laptops;

    // If a phone is associated, delete it as well
    if ($phone) {
        $phone->delete();
    }
    if($laptop){
        $laptop->delete();
    }

    // Delete the product
    $product->delete();

    return redirect()->route('magazin.index');
}
}
