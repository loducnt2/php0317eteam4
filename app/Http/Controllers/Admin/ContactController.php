<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('keyword')){
            $keyword = $request->get('keyword');
            $contact = Contact::where('name', 'like', '%' .$keyword . '%')->paginate(5);
        }else{
            $contact = Contact::paginate(5);
        }



        return view('admin.contact.show', ['contact' => $contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
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
            'message' => 'required|max:500'
        ]);

        $c = new Contact();
        $c->name = $request->name;
        $c->phone = $request->phone;
        $c->email = $request->email;
        $c->message = $request->message;
        $c->save();
        Session::flash('success', "Thêm mới thành công!!!");

        return redirect('admin/contact');
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
        $contact = Contact::findOrFail($id);

        return view('admin.contact.edit', ['contact' => $contact]);
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
        $cate = Contact::findOrFail($id);
        $cate->name = $request->name;
        $cate->phone = $request->phone;
        $cate->email = $request->email;
        $cate->message = $request->message;
        $cate->save();

        Session::flash('success', "Cập nhật thành công!!!");

        return redirect('admin/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = Contact::findOrFail($id);
        $cate->delete();

        Session::flash('success', "Bạn đã xóa thành công");
        return redirect('admin/contact');
    }
}
