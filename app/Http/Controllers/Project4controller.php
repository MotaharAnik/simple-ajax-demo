<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project4model;

class Project4controller extends Controller
{
    public function insertform(){
    	return view('form');
    }

    public function insert(Request $request){
    	$Project4modelObj = new Project4model();
    	print_r($Project4modelObj);
    	die();
    	$Project4modelObj->name = $request->input('name');
    	$Project4modelObj->email = $request->input('email');
    	$Project4modelObj->phone = $request->input('phone');
    	$Project4modelObj->birthday = $request->input('birthday');
    	$Project4modelObj->nid = $request->input('nid');
    	$Project4modelObj->district = $request->input('district');
    	$Project4modelObj->thana = $request->input('thana');
    	$Project4modelObj->post = $request->input('post');
    	$Project4modelObj->address = $request->input('address');
    	$Project4modelObj->ocupation = $request->input('ocupation');
    	$Project4modelObj->blood = $request->input('blood');
    	$Project4modelObj->like = $request->input('like');
    	$Project4modelObj->save();
    	return view('form');
    }

    

}
