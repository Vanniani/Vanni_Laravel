<?php

namespace App\Http\Controllers;

use App\Model_Laki2021;
use Illuminate\Http\Request;

class ControllerLaki2021 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $laki2021 = Model_Laki2021::paginate(5);
    return view('lakilaki2021.lakilaki2021',['laki2021' => $laki2021]);
    }

    public function flaki2021() //method index
    {
      $flaki2021 = Model_Laki2021::paginate(5);
      return view('frontend.flaki2021',['flaki2021' => $flaki2021]);
    }

    public function cariflaki2021(Request $request)
    {
      $keyword = $request->get('keyword');
          $flaki2021 = Model_Laki2021::paginate(10);

         if ($keyword) {
         $flaki2021 = Model_Laki2021::where("nama","LIKE","%$keyword%")->get();
      }

          return view ('frontend.cariflaki2021', compact('flaki2021'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('lakilaki2021.tambah_laki2021');
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

  Model_Laki2021::create($input);

  return redirect('/lakilaki2021');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Laki2021 $laki2021)
    {
        return view('lakilaki2021.lihat_laki2021', compact('laki2021'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Laki2021 $laki2021)
    {
        return view('lakilaki2021.edit_laki2021', compact('laki2021'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Laki2021 $laki2021)
    {
      Model_Laki2021::where('id', $laki2021->id)
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

return redirect('/lakilaki2021');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Laki2021 $laki2021)
    {
      Model_Laki2021::destroy ($laki2021->id);
      return redirect('/lakilaki2021');
    }
}
