<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Visitor;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function visitorlist(){
        $visitors = Visitor::all();
        // dd($visitors);
        return view('admin.layouts.visitor_list',compact('visitors'));
    }

    public function visitorform(){
        return view('admin.layouts.visitor_form');
    }

    public function store(Request $request){
        Visitor::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone_number'=>$request->phone_number,
            
            'nid'=>$request->nid,
            'relation'=>$request->relation,



           
            

        

        ]);
        return redirect()->back(); 
}
}
