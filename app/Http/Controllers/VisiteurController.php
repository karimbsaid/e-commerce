<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class VisiteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   $product=Product::get();

        $search = $request->input('search');

        if($search){
            $product = Product::whereHas('Phones', function ($query) use ($search) {
                $query->where('reference', 'like','%' . $search . '%');
            })->orWhereHas('laptops', function ($query) use ($search) {
                $query->where('reference', 'like', '%' . $search . '%');
            })->get();
            
        }
        return View('visiteur.dashboard')->with('products',$product);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $product = Product::findOrFail($id);
        $phone = $product->Phones;
        $laptop =$product->laptops;

        if($phone){
            return view('visiteur.review')->with(['id'=>$id,'product'=>$phone , 'photo'=>$product->photo , 'price'=>$product->price]);

        }
        if($laptop){
            return view('visiteur.review')->with(['id'=>$id,'product'=>$laptop, 'photo'=>$product->photo , 'price'=>$product->price]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
