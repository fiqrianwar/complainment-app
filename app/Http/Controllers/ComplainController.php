<?php

namespace App\Http\Controllers;

use App\Models\Complainment;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function index(){

        $data = Complainment::all();
        
        return view('pages.dashboard',compact('data'));
    }

    public function detailComplain($id){

        $data = Complainment::find($id);
        
        return view('pages.detail',compact('data'));
    }
    
    public function postComplain(Request $request){
        
        Complainment::create($request->all());
        return redirect('/dashboard');
        
    }
}
