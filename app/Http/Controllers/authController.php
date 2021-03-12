<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use DB;

class authController extends Controller
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
        //
    }

    public function getregister()
    {
        return view('register');
    }
    public function storeregister(Request $request)
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
        return redirect()->route('register')->with('success','Sign up successfully');

        // return view('register');
    }

    public function getlogin()
    {
        return view('login');
    }
    public function logincheck(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:10|regex:/^[A-Za-z0-9@$!%*#?&]{8,10}$/'
        ]);
        $username = $request->username;
        $password = $request->password;


        $auth = DB::table('users')
                ->where(['username'=>$username,'password'=>$password])->get();
        if(count($auth)<=0)
        {

            return redirect()->route('login')->with('loginerror','Make sure your password and username are correct!');
        }
        else
        {
            $role = DB::table('users')->select('role')->where('username','=', $username)->first();
            $id = DB::table('users')->select('uid')->where('username','=', $username)->first();


            if ($role->role == 'student')
            {
                return redirect('studenthome/'.$id->uid);
            }
            else if ($role->role == 'staff')
            {
                return redirect('staffhome/'.$id->uid);
            }
            else if ($role->role == 'admin')
            {
                return redirect('adminhome');
            }
        }
    }
    
}
