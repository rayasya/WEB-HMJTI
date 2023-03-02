<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Info;
use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class UserController extends Controller
{
    public function index()
    {
        $info = Info::orderBy('id', 'desc')->limit(1)->get();
        $misi = explode(", " , $info['0']->misi);
        $data = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        return view('user.pages.home', compact('data', 'info', 'misi'));
    }

    public function blog()
    {
        $blogs = Artikel::orderBy('id_artikel', 'desc')->paginate(3);
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogKategori = Kategori::all();

        $data = [
            'blogs' => $blogs,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori

        ];
        return view('user.pages.blog', compact('data'));
    }

    public function getBlog(Artikel $artikel)
    {
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogKategori = Kategori::all();
        $data = [
            'blog' => $artikel,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori
        ];
        return view('user.pages.blog-detail', compact('data'));
    }

    public function getBlogWithCategory(Kategori $kategori)
    {
        $getKategori = $kategori['kategori'];
        $blogKategori = Kategori::all();

        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogWithCategory = Artikel::whereHas('kategori', function ($q) use ($getKategori) {
            return $q->where('kategori', '=', $getKategori);
        })->orderBy('id_artikel', 'desc')->paginate(3);
        $data = [
            'kategori' => $getKategori,
            'blogs' => $blogWithCategory,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori
        ];
        return view('user.pages.blog-kategori', compact('data'));
    }

    public function cariBlog(Request $request)
    {
        // dd($request->q);

        $data = Artikel::orderBy('judul', 'desc')->where("judul", "LIKE", "%" . $request->q . "%")->get();
        if (!$request->q) $data = [];
        $blogsTab = Artikel::orderBy('id_artikel', 'desc')->limit(6)->get();
        $blogKategori = Kategori::all();

        $data = [
            'blogs' => $data,
            'blogsTab' => $blogsTab,
            'blogKategori' => $blogKategori,
            'keywords'  => $request->q

        ];
        return view('user.pages.blog-cari', compact('data'));
    }

    public function profile()
    {
      $pengurus = DB::table('tb_pengurus')->leftJoin('tb_periode', 'tb_periode.id_periode', '=', 'tb_pengurus.id_periode')->select('tb_pengurus.nama', 'tb_pengurus.foto')->where('tb_periode.status', '=', 'aktif')->orderBy('id_pengurus', 'asc')->get();
      $info = Info::orderBy('id', 'desc')->limit(1)->get();
      $misi = explode(", " , $info['0']->misi);

      return view('user.pages.profile', compact('info', 'misi', 'pengurus'));
    }

    public function form($slug)
    {
      $data = Form::where('slug', $slug)->firstOrFail();
      return view('user.pages.form', compact('data'));
    }

public function forbiden()
    {
      return view('error-404');
    }


    public function kritiksaran()
    {
        return view('user.pages.kritiksaran');
    }
}
