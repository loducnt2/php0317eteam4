<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orderdetail;
use Session;
use App\Product;

class OrderdetailController extends Controller
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
            $orderdetail = Orderdetail::where('order_id', 'like', '%' . $keyword . '%')->paginate(5);
        }else{
            $orderdetail = Orderdetail::paginate(5);
        }


        return view('admin.orderdetail.show', ['orderdetail' => $orderdetail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();

        return view('admin.orderdetail.create', ['products' => $products]);
    }

    public function khuyenmai()
    {
        $order = Orderdetail::select('orderdetails.*')
            ->where('quantity','>', '2')
            ->paginate(12);



        return view('product.discount', [
            'order' => $order
        ]);
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
            'quantity' => 'required|regex:/[0-9]{1,100}/'
        ]);

        $p = new Orderdetail();
        $p->product_id = $request->product_id;
        $p->quantity = $request->quantity;
        $p->save();

        Session::flash('success', 'Thêm mới ảnh thành công');
        return redirect('admin/orderdetail');
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
        $cate = Orderdetail::findOrFail($id);
        $cate->delete();

        Session::flash('success', "Bạn đã xóa thành công!!!");

        return redirect('admin/orderdetail');
    }
}
