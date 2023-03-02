<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;
use App\Models\Angkatan;
use App\Models\Golongan;

class ProdiController extends Controller
{
  public function index()
  {
    $data = Prodi::All();

    return view('admin.pages.prodi.index', compact('data'));
  }
  //store prodi
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'prodi' => 'required',
    ]);

    //store prodi
    $prodi = new Prodi();
    $prodi->prodi = $request->prodi;

    $prodi->save();
    return redirect()->route('list.prodi');
  }
  //edit prodi
  public function update(Request $request, $id)
  {
    $prodi = Prodi::find($id);
    $prodi->prodi = $request->prodi;

    $prodi->save();
    return redirect()->route('list.prodi');
  }
  //delete prodi
  public function delete($id)
  {
    $prodi = Prodi::find($id)->delete();
    return redirect()->route('list.prodi');
  }
}
