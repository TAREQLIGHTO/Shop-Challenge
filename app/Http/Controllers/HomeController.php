<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cookie;
use App\Product;
use App\User;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    
    public function index(){
        // Get all shops sorted by distance
        $products = Product::orderBy('distance')->get();
        return view('home')->with('products' , $products);
    }

    public function logout(){
        Auth::logout();
        return redirect('/home');
    }

    public function like($productID){
        // Get current user and make sure it's not yet likes the product to associate it
        $user = User::find(Auth::id());
        if (!count($user->likes()->find($productID)))
            $user->likes()->attach($productID);
        return back();
    }

    public function removelike($productID){
        // Get current user and make sure hi likes the product and dettach
        $user = User::find(Auth::id());
        if (count($user->likes()->find($productID)))
            $user->likes()->detach($productID);
        return back();
    }

    public function dislike($productID){
        // Create local storage with cookies with time 120 min == 2 hours
        Cookie::queue('disliked'.$productID, true, 120);
        return back();
    }

    public function preferred(){
        $user = User::find(Auth::id());
        $products = $user->likes()->get();
        return view('preferred')->with('products' , $products);
    }

}
