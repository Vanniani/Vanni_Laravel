<?php

namespace App\Http\Controllers;

use App\Model_Laki2020;
use Illuminate\Http\Request;

class ControllerLaki2020 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $laki2020 = Model_Laki2020::paginate(5);
    return view('lakilaki2020.lakilaki2020',['laki2020' => $laki2020]);
    }

    public function flaki2020() //method index
    {
      $flaki2020 = Model_Laki2020::paginate(5);
      return view('frontend.flaki2020',['flaki2020' => $flaki2020]);
    }

    public function cariflaki2020(Request $request)
    {
      $keyword = $request->get('keyword');
          $flaki2020 = Model_Laki2020::paginate(10);

         if ($keyword) {
         $flaki2020 = Model_Laki2020::where("nama","LIKE","%$keyword%")->get();
      }

          return view ('frontend.cariflaki2020', compact('flaki2020'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('lakilaki2020.tambah_laki2020');
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

  Model_Laki2020::create($input);

  return redirect('/lakilaki2020');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Laki2020 $laki2020)
    {
        return view('lakilaki2020.lihat_laki2020', compact('laki2020'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Laki2020 $laki2020)
    {
        return view('lakilaki2020.edit_laki2020', compact('laki2020'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Laki2020 $laki2020)
    {
      Model_Laki2020::where('id', $laki2020->id)
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

 $laki2020->update($input);

return redirect('/lakilaki2020');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Laki2020 $laki2020)
    {
      Model_Laki2020::destroy ($laki2020->id);
      return redirect('/lakilaki2020');
    }
}
