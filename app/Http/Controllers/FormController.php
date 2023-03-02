<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class FormController extends Controller
{
    public function index()
    {
        $data = Form::All()->sortDesc();

        return view('admin.pages.form.index', compact('data'));
    }
    //store form
    public function store(Request $request)
    {
        //validasi form
        $this->validate($request, [
            'slug' => 'required',
            'judul' => 'required|max:100',
            'deskripsi' => 'required|max:255',
            'contact' => 'required|max:255',
            'linkEmbed' => 'required',
        ]);

        //store form
        $form = new Form();
        $form->slug = Str::slug($request->slug);
        $form->judul_form = $request->judul;
        $form->deskripsi = $request->deskripsi;
        $form->contact_person = $request->contact;
        $form->link_form = $request->linkEmbed;
        $form->save();
        return redirect()->route('list.form');
    }
    //edit form
    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        $form->slug = Str::slug($request->slug);
        $form->judul_form = $request->judul;
        $form->deskripsi = $request->deskripsi;
        $form->contact_person = $request->contact;
        $form->link_form = $request->linkEmbed;
        $form->save();
        return redirect()->route('list.form');
    }
    //delete form
    public function delete($id)
    {
        $form = Form::find($id)->delete();
        return redirect()->route('list.form');
    }
}
