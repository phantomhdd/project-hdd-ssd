<?php

namespace App\Http\Controllers;

use App\Photo as Photo;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //
        if ($request->hasFile('files')) {
            $image = $request->file('files');
            $extension = $image->getClientOriginalExtension();
            $filename  = time();

            $data = [
                'id' => $filename,
                'uploader' => '@mhadid_22',
                'caption' => $request->caption,
                'file_path' => '/img/photos/'.$filename.'.'.$extension,
                'upload_time' => date("Y-m-d H:i:s"),
            ];
            $upload = Photo::insert($data);

            if($upload){
                $paths   = $image->storeAs('/img/photos/', $filename.'.'.$extension, "uploads");
            }
            return redirect()->back()->withInput();
        }else{

            return redirect('/failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(){
        //
        $photos = Photo::all();
        return view('index', ['photos' => $photos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo){
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo){
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request){
        //
    }
}
