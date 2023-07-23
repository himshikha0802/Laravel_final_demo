<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Carbon;

class ServiceController extends Controller
{
    public $uploadPath="uploads/user";

    public function index(){
        $services=Service::get();
        return view('admin.service.index',compact('services'));
    }
    public function create(){
        $services=Service::get();
        return view('admin.service.create',compact('services'));
    }
    public function store(Request $request){
        // $rules=array{
        //     'SpecialistType' => 'required',
        // };
        // $request->validate($rules);
        $request->validate([
            "title"=>'required',
        ]);
        $fileName=null;
        if($request->file('image')){
        $fileName=strtotime(Carbon::now());
         $fileName= $fileName.".".$request->file('image')->extension();
        $uploadPath=(public_path($this->uploadPath."/".$fileName));
         move_uploaded_file($request->file('image'), $uploadPath);

        }
        $service=new Service();
        $service->title=$request->get('title');
        $service->description=$request->get('description') ?? "";
        $service->image=$fileName;
        $service->save();
        return redirect()->route('service.index');
    }
    public function edit($id){
        $service=Service::find($id);
        return view('admin.service.edit',compact('service'));
    }
    public function update($id,Request $request){
        //  dd($request->all());
        $fileName=null;
        if($request->file('image')){
        $fileName=strtotime(Carbon::now());
         $fileName= $fileName.".".$request->file('image')->extension();
        $uploadPath=(public_path($this->uploadPath."/".$fileName));
         move_uploaded_file($request->file('image'), $uploadPath);
        }
        $request->validate([
            "title"=>'required',
        ]);
        $service=Service::find($id);
        $service->title=$request->get('title');
        $service->description=$request->get('description') ?? "";
        $service->image=$fileName;
        $service->save();
        return redirect()->route('service.index');
    }
    public function delete($id){
        $service=Service::find($id);
        if(!empty($service))
        $service->delete();
        return redirect()->route('service.index');
    }
}
