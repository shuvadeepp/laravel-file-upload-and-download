<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\file_upload;

use DB;

class Anocontroller extends Controller
{
   
    public function filepage()
    {
        //
        return view ('/index',);
    }
    public function index()
    {
        //
        return view ('/welcome',);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        // return $request;
        $data = new file_upload();
        
        $file = $request->file_upload;
        $filename = time().'.'.$file->getClientOriginalExtension();
        
        $request->file_upload->move('assets', $filename);

        $data->file_upload = $filename;
        $data->file_name = $request->file_name;
        $data->file_desc = $request->file_desc;

        $data-> save();
        return redirect()->back();

    }

    
    public function show()
    {
        $data = file_upload::all();
        // $input = $request->id;
        return view('file_detailes', ['data'=>$data]);

    }

    
    public function download(Request $request, $file)
    {
        return response()->download(public_path('assets/' .$file));
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
