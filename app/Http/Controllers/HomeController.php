<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\User;

class HomeController extends Controller
{
    private $_data;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
        $this->_data = array();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*echo Auth::user()->name;
        die();*/
        $this->_data['products'] = Product::all();

        $this->_data['pro'] = Product::select('products.*')
            ->where('discount','>', '0')
            ->paginate(12);

        return view('home', $this->_data);
    }



}
