<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;
use Session;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sup = Supplier::all();

        return view('admin.supplier.show', ['supplier' => $sup]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = new Supplier();
        $c->name = $request->name;
        $c->address = $request->address;
        $c->website = $request->website;
        $c->phone = $request->phone;
        $c->email = $request->email;
        $c->save();

        Session::flash('success', "Thêm mới thành công!!!");

        return redirect('admin/supplier');
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
        $sup = Supplier::findOrFail($id);

        return view('admin.supplier.edit', ['supplier' => $sup]);
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
        $sup = Supplier::findOrFail($id);
        $sup->name = $request->name;
        $sup->address = $request->address;
        $sup->website = $request->website;
        $sup->phone = $request->phone;
        $sup->email = $request->email;
        $sup->save();

        Session::flash('success', "Cập nhật thành công!!!");

        return redirect('admin/supplier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sup = Supplier::findOrFail($id);
        $sup->delete();

        Session::flash('success', "Bạn đã xóa thành công");
        return redirect('admin/supplier');
    }
}