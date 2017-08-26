<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('keyword')){
            $keyword = $request->get('keyword');
            $order = Order::where('id' , 'like' , '%' . $keyword . '%')->paginate(5);
        }else{
            $order = Order::paginate(5);
        }


        return view('admin.order.show', [ 'order'=> $order ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order.create');
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
            'email' => 'required|email|unique:users,email',
            'note' => 'required|max:800',
            'phone' => 'required|regex:/(0)[0-9]{9,10}/',
            'address' => 'required|max:500',
            'amount' => 'required|regex:/[0-9]{2,20}/',
            'status' => 'required|max:50'
        ]);

        $c = new Order();
        $c->name = $request->name;
        $c->email = $request->email;
        $c->note = $request->note;
        $c->phone = $request->phone;
        $c->address = $request->address;
        $c->amount = $request->amount;
        $c->status = $request->status;
        $c->save();
        Session::flash('success', "Thêm mới thành công!!!");

        return redirect('admin/order');
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
        $ord = Order::findOrFail($id);
        $ord->delete();

        Session::flash('success', 'Bạn đã xóa thành công đơn hàng');
        return redirect('admin/order');
    }
}
