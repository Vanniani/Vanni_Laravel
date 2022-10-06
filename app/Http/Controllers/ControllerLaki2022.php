<?php

namespace App\Http\Controllers;

use App\Model_Laki2022;
use Illuminate\Http\Request;

class ControllerLaki2022 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $laki2022 = Model_Laki2022::paginate(5);
    return view('lakilaki2022.lakilaki2022',['laki2022' => $laki2022]);
    }

    public function flaki2022() //method index
    {
      $flaki2022 = Model_Laki2022::paginate(5);
      return view('frontend.flaki2022',['flaki2022' => $flaki2022]);
    }

    public function cariflaki2022(Request $request)
    {
      $keyword = $request->get('keyword');
          $flaki2022 = Model_Laki2022::paginate(10);

         if ($keyword) {
         $flaki2022 = Model_Laki2022::where("nama","LIKE","%$keyword%")->get();
      }

          return view ('frontend.cariflaki2022', compact('flaki2022'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('lakilaki2022.tambah_laki2022');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
      'nama' => 'required',
      'nik' => 'required',
      'alamat' => 'required',
      'jabatan' => 'required',
      'gaji' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
  ]);

  $input = $request->all();

  if ($image = $request->file('image')) {
      $destinationPath = 'image/';
      $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
      $image->move($destinationPath, $profileImage);
      $input['image'] = "$profileImage";
  }

  Model_Laki2022::create($input);

  return redirect('/lakilaki2022');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Laki2022 $laki2022)
    {
        return view('lakilaki2022.lihat_laki2022', compact('laki2022'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Laki2022 $laki2022)
    {
        return view('lakilaki2022.edit_laki2022', compact('laki2022'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Laki2022 $laki2022)
    {
      Model_Laki2022::where('id', $laki2022->id)
  ->update([
      'nama' => $request->nama,
      'nik' => $request->nik,
      'alamat' => $request->alamat,
      'jabatan' => $request->jabatan,
      'gaji' => $request->gaji,
      'image' => $request->image
  ]);

  $input = $request->all();

 if ($image = $request->file('image')) {
     $destinationPath = 'image/';
     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
     $image->move($destinationPath, $profileImage);
     $input['image'] = "$profileImage";
 }else{
     unset($input['image']);
 }

 $laki2021->update($input);

return redirect('/lakilaki2022');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Laki2022 $laki2022)
    {
      Model_Laki2022::destroy ($laki2022->id);
      return redirect('/lakilaki2022');
    }
}
