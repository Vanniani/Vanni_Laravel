<?php

namespace App\Http\Controllers;

use App\Model_Tahun2021;
use Illuminate\Http\Request;

class ControllerTahun2021 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tahun2021 = Model_Tahun2021::paginate(5);
    return view('2021.duasatu',['tahun2021' => $tahun2021]);
    }

    public function f2021() //method index
    {
      $f2021 = Model_Tahun2021::paginate(5);
      return view('frontend.f2021',['f2021' => $f2021]);
    }

    public function carif2021(Request $request)
    {
      $keyword = $request->get('keyword');
          $f2021 = Model_Tahun2021::paginate(10);

         if ($keyword) {
         $f2021 = Model_Tahun2021::where("nama","LIKE","%$keyword%")->get();
      }

          return view ('frontend.carif2021', compact('f2021'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('2021.tambah_2021');
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

  Model_Tahun2021::create($input);

  return redirect('/duasatu');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Tahun2021 $tahun2021)
    {
        return view('2021.lihat_2021', compact('tahun2021'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Tahun2021 $tahun2021)
    {
        return view('2021.edit_2021', compact('tahun2021'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Tahun2021 $tahun2021)
    {
      Model_Tahun2021::where('id', $tahun2021->id)
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

 $tahun2021->update($input);

return redirect('/duasatu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Tahun2021 $tahun2021)
    {
      Model_Tahun2021::destroy ($tahun2021->id);
      return redirect('/duasatu');
    }
}
