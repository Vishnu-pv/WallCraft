<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Images;


class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
        return view('addimage');
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
        $data = request()->validate([
            'imagename' => 'required',
            'tags' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
    ]);

    $imagePath = request('image')->store( 'uploads', 'public' );  

    $image = Image::make(public_path("storage/{$imagePath}"))->resize(1920,1080);

    $image->save();

    Images::create([

         'imagename' => $data['imagename'],
         'tags'=>$data['tags'],
         'image' => $imagePath,

     ]);

  

     return view('addimage');
}

public function fetchimage()
{
    $data = Images::latest()->paginate(12);
     return view('welcome',["data"=>$data]);
}




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image =  Images::find($id);
        return view('images')->with('image',$image);

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
}
