<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ProductController extends Controller
{

    private $_cates =[];
    public function __construct()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            $this->_cates[$category->id] = $category->title;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('keyword')){
            $keyword = $request->get('keyword');
            $product = Product::where('name','like', '%' . $keyword . '%')->paginate(5);
        }else{
            $product = Product::paginate(5);
        }

        /*echo "<pre>";
        print_r($product->toArray());
        die();*/

        return view('admin.product.show', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$categories = Category::all();*/
        $product = Product::all();

        return view('admin.product.create',
            ['categories' => $this->_cates],
            ['product' => $product]
        );
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
            'price' => 'required|regex:/[0-9]{1,20}/',
            'discount' => 'required|regex:/[0-9]{1,100}/',
            'description' => 'required|max:800',
            'thumbnail' => 'image|mimes:jpg,png,gif',
        ]);


        $thumbnail = 'no-image.jpg';
        if ($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $path = public_path('uploads/product');
            $file->move($path, $thumbnail);
        }

        $p = new Product();
        $p->name = $request->name;
        $p->category_id = $request->category_id;
        $p->price = $request->price;
        $p->discount = $request->discount;
        $p->description = $request->description;
        $p->status = $request->status;
        $p->thumbnail = $thumbnail;
        $p->save();

        Session::flash('success', "Thêm mới thành công!!!");

        return redirect('admin/product');
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
        $product = Product::findOrFail($id);

        /*echo "<pre>";
        print_r($product->toArray());
        die();*/
        return view('admin.product.edit',
            ['product' => $product],
            ['categories' => $this->_cates]
        );
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
        $product = Product::findOrFail($id);

        $thumbnail = $product->thumbnail;

        if ($request->hasFile('thumbnail')){
            $file = $request->file('thumbnail');
            $thumbnail = $file->getClientOriginalName();
            $path = public_path('uploads/product');
            $file->move($path, $thumbnail);
        }

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->thumbnail = $thumbnail;
        $product->save();

        Session::flash('success', "Cập nhật sản phẩm thành công!!!");

        return redirect('admin/product');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::findOrFail($id);
        $pro->delete();

        Session::flash('success', "Bạn đã xóa thành công");
        return redirect('admin/product');
    }
}
