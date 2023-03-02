<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\Prodi;
use App\Models\Jabatan;
use App\Models\Biro;
use App\Models\Golongan;
use App\Models\Periode;

class PengurusController extends Controller
{
  public function index()
  {
    $data = Pengurus::All();
    // dd($data);
    return view('admin.pages.pengurus.index', compact('data'));
  }
  public function create()
  {
    $prodi = Prodi::All();
    $jabatan = Jabatan::All();
    $periode = Periode::All();
    $biro = Biro::All();
    $angkatan = Angkatan::All();
    $golongan = Golongan::All();

    return view('admin.pages.pengurus.create', compact('prodi', 'jabatan', 'periode', 'biro', 'angkatan', 'golongan'));
  }
  //view edit
  public function edit($id)
  {
    $data = Pengurus::find($id);
    if (!$data) return view('error-404');
    $prodi = Prodi::All();
    $jabatan = Jabatan::All();
    $periode = Periode::All();
    $biro = Biro::All();
    $angkatan = Angkatan::All();
    $golongan = Golongan::All();

    return view('admin.pages.pengurus.edit', compact('prodi', 'jabatan', 'periode', 'biro','data', 'angkatan', 'golongan'));
  }
  //store pengurus
  public function store(Request $request)
  {
    //validasi form
    $this->validate($request, [
      'nim' => 'required',
      'nama' => 'required',
      'email' => 'required',
      'no_hp' => 'required',
      'id_angkatan' => 'required',
      'id_prodi' => 'required',
      'id_golongan' => 'required',
      'id_periode' => 'required',
      'id_jabatan' => 'required',
      'id_biro' => 'required',
    ]);

    //store pengurus
    $pengurus = new Pengurus();
    $pengurus->nim = $request->nim;
    $pengurus->nama = $request->nama;
    $pengurus->email = $request->email;
    $pengurus->no_hp = $request->no_hp;
    $pengurus->id_angkatan = $request->id_angkatan;
    $pengurus->id_prodi = $request->id_prodi;
    $pengurus->id_golongan = $request->id_golongan;
    $pengurus->id_periode = $request->id_periode;
    $pengurus->id_jabatan = $request->id_jabatan;
    $pengurus->id_biro = $request->id_biro;

    //store foto
    $imagePath = "";
    if ($request->hasFile('foto')) {
      $image = $request->foto;
      $imageName = time() . $image->getClientOriginalName();
      $image->move('foto/', $imageName);
      $imagePath = 'foto/' . $imageName;
    }
    $pengurus->foto = $imagePath;

    $pengurus->save();

    return redirect()->route('list.pengurus');
  }
  //edit pengurus
  public function update(Request $request, $id)
  {
    //validasi form
    $this->validate($request, [
      'nim' => 'required',
      'nama' => 'required',
      'email' => 'required',
      'no_hp' => 'required',
      'id_angkatan' => 'required',
      'id_prodi' => 'required',
      'id_golongan' => 'required',
      'id_periode' => 'required',
      'id_jabatan' => 'required',
      'id_biro' => 'required',
    ]);

    //store pengurus
    $pengurus = Pengurus::find($id);
    $pengurus->nim = $request->nim;
    $pengurus->nama = $request->nama;
    $pengurus->email = $request->email;
    $pengurus->no_hp = $request->no_hp;
    $pengurus->id_angkatan = $request->id_angkatan;
    $pengurus->id_prodi = $request->id_prodi;
    $pengurus->id_golongan = $request->id_golongan;
    $pengurus->id_periode = $request->id_periode;
    $pengurus->id_jabatan = $request->id_jabatan;
    $pengurus->id_biro = $request->id_biro;

    //store foto
    if (!$request->hasFile('foto')) {
        $pengurus->foto = $pengurus->foto;
      }else{
        if (file_exists($pengurus->foto)) {
            unlink($pengurus->foto);
      }
      $image = $request->foto;
      $imageName = time() . $image->getClientOriginalName();
      $image->move('foto/', $imageName);
      $imagePath = 'foto/' . $imageName;
      $pengurus->foto = 'foto/' . $imageName;
    }

    $pengurus->save();

    return redirect()->route('list.pengurus');
  }
  //delete pengurus
  public function delete($id)
  {
    $pengurus = Pengurus::where('id_pengurus', $id)->first();
    if (file_exists($pengurus->foto)) {
      unlink($pengurus->foto);
    }
    $pengurus->delete();
    return redirect()->route('list.pengurus');
  }
}
