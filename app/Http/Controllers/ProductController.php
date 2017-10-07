<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\Supplier;
use App\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::select('products.*');

         /*echo "<pre>";
        print_r($products->toArray());
            die();*/

        if ($request->has('keyword')){
            $keyword = $request->keyword;
            if ($keyword == 'Search'){
                $keyword = '';
            }
            $products = $products->where('products.name', 'like' , '%' . $keyword . '%');
        }
        $products = $products->paginate(12);

        return view('product.cate', [
            'products' => $products
        ]);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $cate_id = $product->category->id;

            /*PHẦN  HIỆN  RA CÁC SẢN PHẨM LIÊN QUAN */
        $related = Product::select('products.*')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.id', $cate_id)
            ->where('products.id', '!=', $id)
            /*->get();*/
            ->paginate(2);


        /*$cmt = Comment::findOrFail($id);

        $cmt_id = $cmt->product->id;

        $comment = Comment::select('comments.*')
            ->join('products', 'comments.product_id', '=', 'products.id')
            ->where('products.id', $cmt_id)
            ->where('comments.product_id', '=', $id);

        echo "<pre>";
        print_r($image->toArray());
        die();*/

        /*$supplier = Supplier::findOrFail($id);*/



        return view('product.detail', [
            'product' => $product,
            'related' => $related,
            'id' => $id,    /* Cái chỗ id cho bình luận bằng faceboook*/
            /*'comment' => $comment,
            'supplier' => $supplier*/
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function khuyenmai()
    {
        $products = Product::select('products.*')
            ->where('discount','>', '0')
            ->paginate(12);



        return view('product.discount', [
            'products' => $products
        ]);
    }

    public function banchay()
    {
        $products = Product::select('products.*')
            ->join('orderdetails', 'products.id', '=', 'orderdetails.product_id')
            ->where('orderdetails.quantity','>', '1')
            ->paginate(12);

        return view('product.banchay', [
            'products' => $products
        ]);
    }

    public function all()
    {
        $products = Product::all();

        /*echo "<pre>";
        print_r($products->toArray());
        die();*/

        return view('product.all', [
            'products' => $products
        ]);
    }

    public function category($id)
    {
        $products = Product::select('products.*')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.id', $id)
            ->paginate(12);

        return view('product.cate', [
            'products' => $products
        ]);


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
