<?php

namespace App\Http\Controllers;

use App\Model_Tahun2020;
use Illuminate\Http\Request;

class ControllerTahun2020 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tahun2020 = Model_Tahun2020::paginate(5);
    return view('2020.duapuluh',['tahun2020' => $tahun2020]);
    }

    public function f2020() //method index
    {
      $f2020 = Model_Tahun2020::paginate(5);
      return view('frontend.f2020',['f2020' => $f2020]);
    }

    public function carif2020(Request $request)
    {
      $keyword = $request->get('keyword');
          $f2020 = Model_Tahun2020::paginate(10);

         if ($keyword) {
         $f2020 = Model_Tahun2020::where("nama","LIKE","%$keyword%")->get();
      }

          return view ('frontend.carif2020', compact('f2020'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('2020.tambah_2020');
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

  Model_Tahun2020::create($input);

  return redirect('/duapuluh');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Tahun2020 $tahun2020)
    {
        return view('2020.lihat_2020', compact('tahun2020'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Tahun2020 $tahun2020)
    {
        return view('2020.edit_2020', compact('tahun2020'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Tahun2020 $tahun2020)
    {
      Model_Tahun2020::where('id', $tahun2020->id)
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

 $tahun2020->update($input);

return redirect('/duapuluh');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Tahun2020 $tahun2020)
    {
     Model_Tahun2020::destroy ($tahun2020->id);
     return redirect('/duapuluh');
    }
}
