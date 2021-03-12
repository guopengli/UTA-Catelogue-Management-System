<?php

namespace App\Http\Controllers;
use DB;
use App\Course;
use App\Users;
use App\Feedback;
use App\Enroll;
use Illuminate\Http\Request;

class studentController extends Controller
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


    public function getstudenthome($id)
    {
        $sql = "SELECT * FROM users WHERE uid={$id}";
        $data = DB::select($sql);
        $id = Users::where(['uid' => $id])->first();
        return view('studenthome' , compact('data','id'));
    }
    
    public function getstudentlist($id)
    {
        $sql = "SELECT * FROM course WHERE ctype='u'";
        $course = DB::select($sql);
        $id = Users::where(['uid' => $id])->first();
        return view('studentlist' , compact('course','id'));
    }

    public function getstudentfeedback($id)
    {
        $id = Users::where(['uid' => $id])->first();
        return view('studentfeedback' , compact('id'));
    }

    public function storestudentfeedback(Request $request, $id)
    {
        $request->validate([
            'email'     => 'required|email',
            'cnum'      => 'required',
            'ctitle'    => 'required',
            'message'   => 'required'
        ]);
        $feedback = new Feedback;
        $feedback->email        =  $request->email;
        $feedback->cnum         =  $request->cnum;
        $feedback->ctitle       =  $request->ctitle;
        $feedback->message      =  $request->message;
        $feedback->save();
        $id = Users::where(['uid' => $id])->first();
        return redirect()->route('studentfeedback',$id)->with('success',' Feedback send successfully');
    }

    
    public function getstudentrequest($id)
    {
        $id = Users::where(['uid' => $id])->first();
        return view('studentrequest' , compact('id'));
    }

    public function storestudentrequest(Request $request, $id)
    {
        $request->validate([
            'email'     => 'required|email',
            'cnum'      => 'required',
            'sname'   => 'required'
        ]);
        $enroll = new Enroll;
        $enroll->email        =  $request->email;
        $enroll->cnum         =  $request->cnum;
        $enroll->sname       =  $request->sname;
        $enroll->save();
        $id = Users::where(['uid' => $id])->first();
        return redirect()->route('studentrequest',$id)->with('success',' Request send successfully');
    }

    

    public function studentchat($id)
    {
        $id = Users::where(['uid' => $id])->first();
        return view('studentchat', compact('id'));

    }
}
