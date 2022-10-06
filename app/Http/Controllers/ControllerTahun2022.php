<?php

namespace App\Http\Controllers;

use App\Model_Tahun2022;
use Illuminate\Http\Request;

class ControllerTahun2022 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tahun2022 = Model_Tahun2022::paginate(5);
    return view('2022.duadua',['tahun2022' => $tahun2022]);
    }

    public function f2022() //method index
    {
      $f2022 = Model_Tahun2022::paginate(5);
      return view('frontend.f2022',['f2022' => $f2022]);
    }

    public function carif2022(Request $request)
    {
      $keyword = $request->get('keyword');
          $f2022 = Model_Tahun2022::paginate(10);

         if ($keyword) {
         $f2022 = Model_Tahun2022::where("nama","LIKE","%$keyword%")->get();
      }

          return view ('frontend.carif2022', compact('f2022'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('2022.tambah_2022');
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

  Model_Tahun2022::create($input);

  return redirect('/duadua');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Tahun2022 $tahun2022)
    {
        return view('2022.lihat_2022', compact('tahun2022'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Tahun2022 $tahun2022)
    {
        return view('2022.edit_2022', compact('tahun2022'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Tahun2022 $tahun2022)
    {
      Model_Tahun2022::where('id', $tahun2022->id)
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

 $tahun2022->update($input);

return redirect('/duadua');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Tahun2022 $tahun2022)
    {
      Model_Tahun2022::destroy ($tahun2022->id);
      return redirect('/duadua');
    }
}
