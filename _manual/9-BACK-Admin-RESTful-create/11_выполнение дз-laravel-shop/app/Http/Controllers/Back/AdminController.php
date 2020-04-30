<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
   Http\Controllers\Controller, 
   Repositories\AdminRepository,
   Http\Controllers\Traits\Indexable

};

class AdminController extends Controller
{
    use Indexable;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AdminRepository $repository)
    {
        //$this->middleware('auth');
        $this->repository = $repository;
        $this->namespace = 'back';
    }     

    /**
     * Create a new view for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */              
    public function create()
    {
       return view('back.products.create');
    }

    /**
     * Upload a new image for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;         
        $filecontent = $file->openFile()->fread($file->getSize());  
        $filename = date('YmdHis') . $file->getClientOriginalName();  
        $file->move(public_path() . '/img/bg-img/', $filename);      //!!!/img/bg-img/ - custom
        return view('back.products.create', ['image' => $filename]);
    }    
        
}
