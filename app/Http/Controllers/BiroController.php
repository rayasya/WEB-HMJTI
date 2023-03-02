<?php

namespace App\Http\Controllers;

use App\Models\Biro;
use App\Models\Departemen;
use Illuminate\Http\Request;

class BiroController extends Controller
{
  public function index()
  {
    $data = Biro::All();
    $departemen = Departemen::All();

    return view('admin.pages.biro.index', compact('data', 'departemen'));
  }
  //store biro
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'id_departemen' => 'required',
      'biro' => 'required',
    ]);

    //store biro
    $biro = new Biro();
    $biro->id_departemen = $request->id_departemen;
    $biro->biro = $request->biro;
    $biro->save();
    return redirect()->route('list.biro');
  }
  //edit biro
  public function update(Request $request, $id)
  {
    $biro = Biro::find($id);
    $biro->id_departemen = $request->id_departemen;
    $biro->biro = $request->biro;
    $biro->save();
    return redirect()->route('list.biro');
  }
  //delete biro
  public function delete($id)
  {
    $biro = Biro::find($id)->delete();
    return redirect()->route('list.biro');
  }
}
