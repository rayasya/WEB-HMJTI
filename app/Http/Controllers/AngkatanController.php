<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angkatan;

class AngkatanController extends Controller
{
  public function index()
  {
    $data = Angkatan::All();

    return view('admin.pages.angkatan.index', compact('data'));
  }
  //store angkatan
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'angkatan' => 'required',
    ]);

    //store angkatan
    $angkatan = new Angkatan();
    $angkatan->angkatan = $request->angkatan;
    $angkatan->save();
    return redirect()->route('list.angkatan');
  }
  //edit angkatan
  public function update(Request $request, $id)
  {
    $angkatan = Angkatan::find($id);
    $angkatan->angkatan = $request->angkatan;
    $angkatan->save();
    return redirect()->route('list.angkatan');
  }
  //delete angkatan
  public function delete($id)
  {
    $angkatan = Angkatan::find($id)->delete();
    return redirect()->route('list.angkatan');
  }
}
