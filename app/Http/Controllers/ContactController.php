<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;
use App\Product;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.show');
    }

    public function gioithieu()
    {
        return view('contact.gioithieu');
    }

    public function doitra()
    {
        return view('contact.doitra');
    }

    public function khuyenmai()
    {
        $products = Product::select('products.*')
            ->where('discount','>', '0')
            ->paginate(12);

        return view('contact.doitra', [
            'products' => $products
        ]);
    }

    public function blog()
    {
        return view('contact.blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required|regex:/(0)[0-9]{9,10}/',
            'email' => 'required|email|unique:users,email',
            'message' => 'required'
        ]);

        $c = new Contact();
        $c->name = $request->name;
        $c->phone = $request->phone;
        $c->email = $request->email;
        $c->message = $request->message;
        $c->save();

        Session::flash('success', "Cảm ơn bạn !!!");

        return redirect('contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
