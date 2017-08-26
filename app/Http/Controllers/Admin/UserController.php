<?php

namespace App\Http\Controllers\Admin;

use App\Group;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash; /*thêm câu này để thêm được cái password nó có dạng md5 trong database*/

class UserController extends Controller
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
            $user = User::where('name', 'like', '%' . $keyword . '%')->paginate(5);
        }else{
            $user = User::paginate(5);
        }


        return view('admin.user.show', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group = Group::all();

        return view('admin.user.create', ['group' => $group]);
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
            'password' => 'required',
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'phone' => 'required|regex:/(0)[0-9]{9,10}/',
            'address' => 'required',
            'gender' => 'required'
        ]);

        $p = new User();
        $p->name = $request->name;
        $p->email = $request->email;
        $p->password = Hash::make($request->password); /*Được định dạng md5 trng database*/
        $p->last_name = $request->last_name;
        $p->first_name = $request->first_name;
        $p->phone = $request->phone;
        $p->address = $request->address;
        $p->gender = $request->gender;
        $p->save();

        Session::flash('success', 'Thêm mới ảnh thành công');
        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);

        /*echo "<pre>";
        print_r($users->toArray());
        die();*/

        return view('admin.user.detail', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $group = Group::all();
        $arrGr = [];
        foreach ($group as $item) {
            $arrGr[$item->id] = $item->name;
        }
        /*print_r($arrGr);*/

        return view('admin.user.edit',  [
            'user' => $user,
            'group' => $arrGr
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
        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->group_id = $request->group_id;
        $user->email = $request->email;
        $user->last_name = $request->last_name;
        $user->first_name = $request->first_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->save();

        Session::flash('success', 'Cập nhật thành công');
        return redirect('admin/user');

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
