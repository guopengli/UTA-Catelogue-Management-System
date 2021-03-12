<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Course;
use App\Users;
class staffController extends Controller
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
    public function destroy($id,$cid)
    {
        $data = Course::find($cid);
        $data->delete();
        return redirect()->route('staffview',$id);
    }

    
    public function getstaffhome($id)
    {
        $sql = "SELECT * FROM users WHERE uid={$id}";
        $data = DB::select($sql);
        $id = Users::where(['uid' => $id])->first();
        return view('staffhome' , compact('data','id'));
    }


    public function getstaffadd($id)
    {
        $id = Users::where(['uid' => $id])->first();
        return view('staffadd' , compact('id'));
    }

    public function getstaffview($id)
    {
        $sql = "SELECT * FROM course";
        $course = DB::select($sql);
        $id = Users::where(['uid' => $id])->first();
        return view('staffview' , compact('course','id'));
    }

    public function storestaffadd(Request $request, $id)
    {
        $request->validate([
            'cnum' => 'required',
            'ctitle' => 'required',
            'ctype' => 'required'
        ]);
        $course = new Course;
        $course->cnum =  $request->cnum;
        $course->ctitle =  $request->ctitle;
        $course->ctype    =  $request->ctype;
        $course->save();
        $id = Users::where(['uid' => $id])->first();
        return redirect()->route('storestaffadd',$id)->with('success',' Add successfully');
    }
    public function getstaffviewu($id)
    {
        $sql = "SELECT * FROM course WHERE ctype='u'";
        $course = DB::select($sql);
        $id = Users::where(['uid' => $id])->first();
        return view('staffviewu' , compact('course','id'));
    }
    public function getstaffedit($id,$cid)
    {
        $course = Course::where(['cid' => $cid])->first();
        $id = Users::where(['uid' => $id])->first();
        return view('staffedit' , compact('course','id'));
    }

    public function storestaffedit(Request $request, $id,$cid)
    {
        $request->validate([
            'cnum' => 'required',
            'ctitle' => 'required',
            'ctype' => 'required'
        ]);
        $course = Course::find($cid);
        $course->cnum= $request->get('cnum');
        $course->ctitle= $request->get('ctitle');
        $course->ctype= $request->get('ctype');
        $course -> save();
        $id = Users::where(['uid' => $id])->first();

        return redirect()->route('staffedit',[$id,$cid])->with('success','Updated successfully');
    }
    public function getstaffviewfeedback($id)
    {
        $sql = "SELECT * FROM feedback";
        $feedback = DB::select($sql);
        $id = Users::where(['uid' => $id])->first();
        return view('staffviewfeedback' , compact('feedback','id'));
    }
    public function staffchat($id)
    {
        $id = Users::where(['uid' => $id])->first();
        return view('staffchat', compact('id'));

    }
}
