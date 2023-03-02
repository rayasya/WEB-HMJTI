<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::All();

        return view('admin.pages.jabatan.index', compact('data'));
    }
    //store jabatan
    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'jabatan' => 'required',
            // 'periode' => 'required',
        ]);

        //store jabatan
        $jabatan = new Jabatan();
        $jabatan->jabatan = $request->jabatan;
        // $jabatan->periode = $request->periode;
        $jabatan->save();
        return redirect()->route('list.jabatan');
    }
    //edit jabatan
    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->jabatan = $request->jabatan;
        // $jabatan->periode = $request->periode;
        $jabatan->save();
        return redirect()->route('list.jabatan');
    }
    //delete jabatan
    public function delete($id)
    {
        $jabatan = Jabatan::find($id)->delete();
        return redirect()->route('list.jabatan');
    }
}
