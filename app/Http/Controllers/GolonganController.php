<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
  public function index()
  {
    $data = Golongan::All();

    return view('admin.pages.golongan.index', compact('data'));
  }
  //store golongan
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'golongan' => 'required',
    ]);

    //store golongan
    $golongan = new Golongan();
    $golongan->golongan = $request->golongan;
    $golongan->save();
    return redirect()->route('list.golongan');
  }
  //edit golongan
  public function update(Request $request, $id)
  {
    $golongan = Golongan::find($id);
    $golongan->golongan = $request->golongan;
    $golongan->save();
    return redirect()->route('list.golongan');
  }
  //delete golongan
  public function delete($id)
  {
    $golongan = Golongan::find($id)->delete();
    return redirect()->route('list.golongan');
  }
}
