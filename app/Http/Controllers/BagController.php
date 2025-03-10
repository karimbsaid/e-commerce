<?php

namespace App\Http\Controllers;
use App\Models\Bag;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class BagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $user = Auth::user();

        $bag = $request->session()->get('cart');
        if($bag){
            $product = Product::whereIn('id', $bag)->get();
            return View('visiteur.bag')->with('product',$product);

        }else{
            return View('visiteur.bag')->with('product',null);

        }
        
  
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
        $userId = Auth::id();
        $cart = $request->session()->get('cart', []);

        $productId = $request->input('product_id');
        if (!in_array($productId, $cart)) {
            $request->session()->push('cart', $productId);

        }
        
        /*
        $existingBagEntry = Bag::where('user_id', $userId)->where('product_id', $productId)->first();
    
        if (!$existingBagEntry) {
            $bag = Bag::create([
                'product_id' => $productId,
                'user_id' => $userId,
            ]);
        }*/
    
        return redirect()->route('bag.index');

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
    public function destroy(Request $request,string $id)
    {   
        $sessionData = $request->session()->get('cart', []); 
        foreach ($sessionData as $key => $value) {
        if ($value === $id) {
            $request->session()->forget("cart.$key");
        }
}

        
        
        return redirect()->route('bag.index');
    }
}
