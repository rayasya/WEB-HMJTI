<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KritikSaran;

class KritikSaranController extends Controller
{
    public function index()
    {
        $data = KritikSaran::orderBy('id_kritiksaran', 'desc')->get();
        // $data = KritikSaran::All()->sortDesc();

        return view('admin.pages.kritikSaran.index', compact('data'));
    }
    //store kritikSaran
    public function store(Request $request)
    {

        //validasi form
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        //store kritikSaran
        $kritikSaran = new KritikSaran();
        $kritikSaran->nama = $request->name;
        $kritikSaran->email = $request->email;
        $kritikSaran->subject = $request->subject;
        $kritikSaran->kritikSaran = $request->message;
        $kritikSaran->save();
        return redirect()->route('kritiksaran');
    }
    //edit kritikSaran
    // public function update(Request $request, $id)
    // {
    //   $kritikSaran = KritikSaran::find($id);
    //   $kritikSaran->nama = $request->nama;
    //   $kritikSaran->email = $request->email;
    //   $kritikSaran->kritikSaran = $request->kritikSaran;
    //   $kritikSaran->tanggal = $request->time();
    //   $kritikSaran->save();
    //   return redirect()->route('list.kritikSaran');
    // }
    //delete kritikSaran
    public function delete($id)
    {
        $kritikSaran = KritikSaran::find($id)->delete();
        return redirect()->route('list.kritikSaran');
    }
}
