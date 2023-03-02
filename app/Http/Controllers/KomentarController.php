<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;
use Illuminate\Support\Facades\DB;

class KomentarController extends Controller
{
  public function index()
  {
    $data = DB::table('tb_komentar')->leftJoin('tb_artikel', 'tb_artikel.id_artikel', '=', 'tb_komentar.id_artikel')->select('tb_komentar.*', 'tb_artikel.judul')->get();

    return view('admin.pages.komentar.index', compact('data'));
  }
  //store komentar
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'nama' => 'required',
      'email' => 'required',
      'komentar' => 'required',
    ]);

    //store komentar
    $komentar = new Komentar();
    $komentar->id_artikel = $request->idArtikel;
    $komentar->nama = $request->nama;
    $komentar->email = $request->email;
    $komentar->komentar = $request->komentar;
    $komentar->status = 0;
    $komentar->save();
    return redirect()->route('list.komentar');
  }
  //edit komentar
  public function update(Request $request, $id)
  {
    $komentar = Komentar::find($id);
    $komentar->status = $request->status;
    $komentar->save();
    return redirect()->route('list.komentar');
  }
  //delete komentar
  public function delete($id)
  {
    $komentar = Komentar::find($id)->delete();
    return redirect()->route('list.komentar');
  }
}
