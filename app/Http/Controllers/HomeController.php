<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth')->except('store');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $latestProducts = Product::latest()->take(3)->get();

//        return view('home',compact('home'));

        return view('home');
    }

    public function store()
    {

        $latestProducts = Product::latest()->take(8)->get();

        return view('store', compact('latestProducts'));
    }

    public function post() {

        return view('post/post');
    }

    public function chat() {

        return view('Direct-chat/chat');
    }
    public function welcome()
    {
        $latestProducts = Product::latest()->take(25)->get();

        return view('welcome', compact('latestProducts'));

    }

    public function procart()
    {
        $latestProducts = Product::latest()->take(6)->get();

        return view('welcome', compact('latestProducts'));


    }

    public function proslider()
    {
        $latestProducts = Product::latest()->take(6)->get();

        return view('welcome', compact('latestProducts'));


    }
    //    < nav >
    public function navone()
    {
        $latestProducts = Product::latest()->take()->get();

        if (session()->has('cart')) {
                $cart = new Cartm(session()->get('cart'));
            } else {
                $cart = null;
            }

            return view('layouts.navone', compact('cart'));

    }
    public function navtow()
    {
        return view('navtow');
    }
    public function navthree()
    {
        return view('navthree');
    }
    public function nav4()
    {
        return view('nav4');
    }

//    < end nav >
//  lan-long

    public function long1()
    {
            $latestProducts = Product::latest()->take( 12)->get();

            return view('lan-4.long-1', compact('latestProducts'));
    }
    public function long2()
    {
        $latestProducts = Product::latest()->take(12)->get();

              return view('lan-4.long-2', compact('latestProducts'));
}
    public function long3()
{
    $latestProducts = Product::latest()->take(12)->get();

          return view('lan-4.long-3', compact('latestProducts'));
}

    public function dashfile()
    {
        return view('file-data.dashfile');
    }

    public function dashboard()
    {
        return view('file-data.dashboard');
    }


//  end lan-long

//    public function getAddToCart(Request $request , $id) {
//        $product = Product::find($id);
//        $oldCart = Session::has('cart') ? Session::get('cart') : null;
//        $cart = new  Cart($oldCart);
//        $cart->add($product, $product->id);
//
//        $request->session()->put('cart' , $cart);
//        return redirect()->route('cart.showShopping');
//
//    }

}
