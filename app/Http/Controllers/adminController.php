<?php

namespace App\Http\Controllers;
use App\Users;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = Users::find($id);
        $data->delete();
        return redirect()->route('adminhome');
    }
    public function getadminhome()
    {
        $users = Users::all()->toArray();
        return view('adminhome',compact('users'));
    }

    public function getadminadd()
    {
        return view('adminadd');
    }
    
    public function storeadminadd(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:10|required_with:password_confirmation|same:password_confirmation|regex:/^[A-Za-z0-9@$!%*#?&]{8,10}$/',
            'password_confirmation' => 'required|min:8|max:10|regex:/^[A-Za-z0-9@$!%*#?&]{8,10}$/',
            'email' => 'required|email',
            'role' => 'required'
        ]);
        $user = new Users;
        $user->username =  $request->username;
        $user->password =  $request->password;
        $user->email    =  $request->email;
        $user->role     =  $request->role;
        $user -> save();
        return redirect()->route('adminadd')->with('success','Create user successfully');
    }

    public function getadminedit($id)
    {
        $user = Users::where(['uid' => $id])->first();
        return view('adminedit', compact('user'));
    }
    public function storeadminedit(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'role' => 'required'
        ]);
        $user = Users::find($id);
        $user->username= $request->get('username');
        $user->email= $request->get('email');
        $user->role= $request->get('role');
        $user -> save();
        return redirect()->route('adminedit',[$id])->with('success','Updated successfully');
    }

    
}
