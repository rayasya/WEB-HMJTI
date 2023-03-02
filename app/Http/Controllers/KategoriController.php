<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::All();

        return view('admin.pages.kategori.index', compact('data'));
    }
    //store kategori
    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'kategori' => 'required',
        ]);

        //store kategori
        $kategori = new Kategori();
        $kategori->kategori = $request->kategori;
        $kategori->save();
        return redirect()->route('list.kategori');
    }
    //edit Kategori
    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->kategori = $request->kategori;
        $kategori->save();
        return redirect()->route('list.kategori');
    }
    //delete kategori
    public function delete($id)
    {
        $kategori = Kategori::find($id)->delete();
        return redirect()->route('list.kategori');
    }
}
