<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\OrderController;
use App\Order;
use App\Orderdetail;
use App\Product;
use Illuminate\Http\Request;
use Cart;
use Session;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.show');
    }

    public function checkout()
    {
        return view('cart.checkout');
    }


    public function save(Request $request){
        if(Cart::content()->count() <= 0) {
            Session::flash('error', 'Không có san phẩm nào trong giỏ hàng - Không thể đặt hàng!!!');

            return redirect()->back();
        }

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'note' => 'required'
        ]);
        // lat lam theo cho cac truong khac vao no se tu bat loi em nhe

        //luu thong thong tin nguoi nhan vao bang order
        $order = new Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->note = $request->note;
        $order->amount = 0;
        $order->status = 1;

        if(Auth::check()) {
            $order->user_id = Auth::user()->id;
        }

        $order->save();

        //luu thong tin chi tiet hoa don
        $totalAmount = 0;
        foreach (Cart::content() as $key => $item){
            $orderDetail = new Orderdetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_id = $item->id;
            $orderDetail->price = $item->price;
            $orderDetail->quantity = $item->qty;
            $orderDetail->save();

            $totalAmount += ($item->price * $item->qty);
        }

        $order->amount = $totalAmount;
        $order->save();

        //xoa gio hang
        Cart::destroy();

        //tao message
        Session::flash('success', 'Đặt hàng thành công!!!');

        //chuyen ve trang nao do, co the la trang chu
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $product = Product::findOrFail($id);

        /*echo "<pre>";
        print_r($product->toArray());
        die();*/

        if ($product->id != null){
            Cart::add(
                [
                    'id' => $product->id,
                    'name' => $product->name,
                    'qty' => 1,
                    'price' => $product->price,
                    'options' => [
                        'thumbnail' => $product->thumbnail
                    ]
                ]
            );
            Session::flash('success', 'Them moi san pham vao gio hang thành công!!!');
        }else {
            Session::flash('error', 'Sản phẩm đã hết hàng!!!');
        }

        return redirect()->back();
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
        $product = Product::findOrFail($id);

        if ($product->id != null){
            foreach (Cart::content() as $key => $item){
                if ($item->id == $product->id){
                    Cart::remove($key);
                    break;
                }
            }
        }
        return redirect()->back();
    }
}
