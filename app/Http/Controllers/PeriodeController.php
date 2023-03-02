<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periode;


class PeriodeController extends Controller
{
  public function index()
  {
    $data = Periode::All();

    return view('admin.pages.periode.index', compact('data'));
  }
  //store periode
  public function store(Request $request)
  {
    // dd($request);
    //validasi form
    $this->validate($request, [
      'periode' => 'required',
      'status' => 'required',
    ]);

    //store periode
    $periode = new Periode();
    $periode->periode = $request->periode;
    $periode->status = $request->status;

    $periode->save();
    return redirect()->route('list.periode');
  }
  //edit periode
  public function update(Request $request, $id)
  {
    $periode = Periode::find($id);
    $periode->periode = $request->periode;
    $periode->status = $request->status;

    $periode->save();
    return redirect()->route('list.periode');
  }
  //delete periode
  public function delete($id)
  {
    $periode = Periode::find($id)->delete();
    return redirect()->route('list.periode');
  }
}
