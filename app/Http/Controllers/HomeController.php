<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postmodel;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Project4modelObj = postmodel::all();
        return view('table',compact('Project4modelObj'));
    }

    public function postform(){
        return view('post');
    }

    public function postinsert(Request $request){
        $request->validate([
        'title' => 'required|max:10',
        'post' => 'required',
        ]);
        $Project4modelObj = new postmodel();
        $Project4modelObj->title = $request->input('title');
        $Project4modelObj->post = $request->input('post');
        $Project4modelObj->save();
        return $Project4modelObj;
    }

    

    public function tableview(){
        $Project4modelObj = postmodel::all();
        return view('table',compact('Project4modelObj'));
    }

    public function editview(Request $request){
        $Project4modelObj = postmodel::where('id',$request->get('id') )->first();
        return $Project4modelObj;
    }

    public function editok(Request $request){
        $Project4modelObj = postmodel::find($request->get('id'));
        $Project4modelObj->title = $request->input('title');
        $Project4modelObj->post = $request->input('post');
        $Project4modelObj->save();
        return $Project4modelObj;
        // return Redirect::back('table');
    }

    public function detailview(Request $request){
        $Project4modelObj = postmodel::where('id',$request->get('id'))->first();
        return $Project4modelObj;
    }

    public function delete(Request $request){
        $id = $request->get('id');
        if($id){
            $Project4modelObj = postmodel::find($id);
            $Project4modelObj->delete();
            return $Project4modelObj;
            // return redirect()->back();
        }
    }
}
