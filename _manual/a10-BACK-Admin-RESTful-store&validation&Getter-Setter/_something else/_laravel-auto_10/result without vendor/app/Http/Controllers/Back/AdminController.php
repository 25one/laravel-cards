<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\ {
   Http\Controllers\Controller,
   Repositories\AdminRepository,
   Http\Controllers\Traits\Indexable,
   Http\Requests\AutoRequest

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
     * Create a new view for creating a new auto in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */    
    public function create()
    {
       return view('back.autos.create');
    }

    /**
     * Upload a new image for creating a new auto in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;         
        $filecontent = $file->openFile()->fread($file->getSize());  
        $filename = date('YmdHis') . $file->getClientOriginalName();  
        $file->move(public_path() . '/images/', $filename);
        return view('back.autos.create', ['image' => $filename]);
    }    

    /**
     * Store a newly created auto in storage.
     *
     * @param  \App\Http\Requests\AutoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AutoRequest $request)
    {
       $this->repository->store($request); 
       return redirect(route('dashboard'))->with('auto-ok', 'New auto has been successlully created...');
    }    

}
