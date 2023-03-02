<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemen;

class DepartemenController extends Controller
{
  public function index()
  {
    $data = Departemen::All();

    return view('admin.pages.departemen.index', compact('data'));
  }
  //store departemen
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'departemen' => 'required',
    ]);

    //store departemen
    $departemen = new Departemen();
    $departemen->departemen = $request->departemen;
    $departemen->save();
    return redirect()->route('list.departemen');
  }
  //edit departemen
  public function update(Request $request, $id)
  {
    $departemen = Departemen::find($id);
    $departemen->departemen = $request->departemen;
    $departemen->save();
    return redirect()->route('list.departemen');
  }
  //delete departemen
  public function delete($id)
  {
    $departemen = Departemen::find($id)->delete();
    return redirect()->route('list.departemen');
  }
}
