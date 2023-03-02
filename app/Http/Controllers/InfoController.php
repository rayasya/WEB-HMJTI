<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index()
    {
        $data = Info::All();

        return view('admin.pages.info.index', compact('data'));
    }
    //store info
    public function store(Request $request)
    {
        //validasi info
        $this->validate($request, [
            'visi' => 'required',
            'misi' => 'required',
            'slogan' => 'required|max:50',
            'namaKahim' => 'required|max:50',
            'namaWakahim' => 'required|max:50',
            'tahun' => 'required|max:4',
            'gambarHero' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fotoKahim' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fotoWakahim' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fotoStruktur' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        //store info
        $info = new Info();
        $info->visi = $request->visi;
        $info->misi = $request->misi;
        $info->slogan = $request->slogan;
        $info->nama_kahim = $request->namaKahim;
        $info->nama_wakahim = $request->namaWakahim;
        $info->tahun = $request->tahun;
        $info->link_proker = $request->linkProker;
        $info->link_adart = $request->linkAdart;

        // store foto
        $imagePathHero = "";
        $imagePathKahim = "";
        $imagePathWakahim = "";
        $imagePathStruktur = "";
        if ($request->hasFile('gambarHero') && $request->hasFile('fotoKahim') && $request->hasFile('fotoWakahim') && $request->hasFile('fotoStruktur')) {
          $imageHero = $request->gambarHero;
          $imageKahim = $request->fotoKahim;
          $imageWakahim = $request->fotoWakahim;
          $imageStruktur = $request->fotoStruktur;
          $imageNameHero = time() . $imageHero->getClientOriginalName();
          $imageNameKahim = time() . $imageKahim->getClientOriginalName();
          $imageNameWakahim = time() . $imageWakahim->getClientOriginalName();
          $imageNameStruktur = time() . $imageStruktur->getClientOriginalName();
          $imageHero->move('user/img/', $imageNameHero);
          $imageKahim->move('user/img/', $imageNameKahim);
          $imageWakahim->move('user/img/', $imageNameWakahim);
          $imageStruktur->move('user/img/', $imageNameStruktur);
          $imagePathHero = 'user/img/' . $imageNameHero;
          $imagePathKahim = 'user/img/' . $imageNameKahim;
          $imagePathWakahim = 'user/img/' . $imageNameWakahim;
          $imagePathStruktur = 'user/img/' . $imageNameStruktur;
        }
        $info->gambar_hero = $imagePathHero;
        $info->foto_kahim = $imagePathKahim;
        $info->foto_wakahim = $imagePathWakahim;
        $info->foto_struktur = $imagePathStruktur;
        $info->save();
        return redirect()->route('list.info');
    }

    //edit info
    public function edit($id)
    {
      $data = Info::find($id);
      return view('admin.pages.info.edit', compact('data'));
    }

    //edit info
    public function update(Request $request, $id)
    {
        $info = Info::find($id);
        $this->validate($request, [
            'visi' => 'required',
            'misi' => 'required',
            'slogan' => 'required|max:50',
            'namaKahim' => 'required|max:50',
            'namaWakahim' => 'required|max:50',
            'tahun' => 'required|max:4',
            'gambarHero' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fotoKahim' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fotoWakahim' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'fotoStruktur' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);


        $info->visi = $request->visi;
        $info->misi = $request->misi;
        $info->slogan = $request->slogan;
        $info->nama_kahim = $request->namaKahim;
        $info->nama_wakahim = $request->namaWakahim;
        $info->tahun = $request->tahun;
        $info->link_proker = $request->linkProker;
        $info->link_adart = $request->linkAdart;

        //store foto
        $imagePathHero = "";
        $imagePathKahim = "";
        $imagePathWakahim = "";
        $imagePathStruktur = "";

        if (!$request->hasFile('gambarHero')) $info->gambar_hero = $info->gambar_hero;
        else{
            if (file_exists($info->gambar_hero)) unlink($info->gambar_hero);
            $imageHero = $request->gambarHero;
            $imageNameHero = time() . $imageHero->getClientOriginalName();
            $imageHero->move('user/img/', $imageNameHero);
            $imagePathHero = 'user/img/' . $imageNameHero;
            $info->gambar_hero = $imagePathHero;
        }
        if (!$request->hasFile('fotoKahim')) $info->fotoKahim = $info->fotoKahim;
        else{
            if(file_exists($info->foto_kahim))  unlink($info->foto_kahim);
            $imageKahim = $request->fotoKahim;
            $imageNameKahim = time() . $imageKahim->getClientOriginalName();
            $imageKahim->move('user/img/', $imageNameKahim);
            $imagePathKahim = 'user/img/' . $imageNameKahim;
            $info->foto_kahim = $imagePathKahim;

        }
        if (!$request->hasFile('fotoWakahim')) $info->fotoWakahim = $info->fotoWakahim;
        else{
            if(file_exists($info->foto_wakahim)) unlink($info->foto_wakahim);
            $imageWakahim = $request->fotoWakahim;
            $imageNameWakahim = time() . $imageWakahim->getClientOriginalName();
            $imageWakahim->move('user/img/', $imageNameWakahim);
            $imagePathWakahim = 'user/img/' . $imageNameWakahim;
            $info->foto_wakahim = $imagePathWakahim;

        }
        if (!$request->hasFile('fotoStruktur')) $info->fotoStruktur = $info->fotoStruktur;
        else{
            if (file_exists($info->foto_struktur)) {
                unlink($info->foto_struktur);
              }
              $imageStruktur = $request->fotoStruktur;
              $imageNameStruktur = time() . $imageStruktur->getClientOriginalName();
              $imageStruktur->move('user/img/', $imageNameStruktur);
              $imagePathStruktur = 'user/img/' . $imageNameStruktur;

              $info->foto_struktur = $imagePathStruktur;
        }
        $info->save();
        return redirect()->route('list.info');
    }
    //delete info
    public function delete($id)
    {
      $info = Info::find($id);
      if (file_exists($info->gambar_hero) && file_exists($info->foto_kahim) && file_exists($info->foto_wakahim) && file_exists($info->foto_struktur)) {
        unlink($info->gambar_hero);
        unlink($info->foto_kahim);
        unlink($info->foto_wakahim);
        unlink($info->foto_struktur);
      }
      $info->delete();
      return redirect()->route('list.info');
    }
}
