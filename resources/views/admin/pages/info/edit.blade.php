@extends('admin.layouts.master')

@section('title', 'Admin - Edit Info')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Info</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Edit-Info</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{route('update.info', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Visi Organisasi</label>
                  <textarea type="text" class="form-control @error('visi') is-invalid @enderror" name="visi" rows="5" required>{{ $data->visi }}</textarea>
                  @error('visi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Misi Organisasi <span class="text-danger">*pisahkan dengan koma dan spasi ex(visi, misi, dll)</span></label>
                  <textarea type="text" class="form-control @error('misi') is-invalid @enderror" name="misi" rows="5" required>{{ $data->misi }}</textarea>
                  @error('misi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Slogan Organisasi</label>
                  <input type="text" class="form-control @error('slogan') is-invalid @enderror" name="slogan" value="{{ $data->slogan }}" required>
                  @error('slogan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama Ketua Himpunan</label>
                  <input type="text" class="form-control @error('namaKahim') is-invalid @enderror" name="namaKahim" value="{{ $data->nama_kahim }}" required>
                  @error('namaKahim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Foto Ketua Himpunan</label>
                  <input type="file" name="fotoKahim" class="form-control @error('fotoKahim') is-invalid @enderror">
                  @error('fotoKahim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama Wakil Ketua Himpunan</label>
                  <input type="text" class="form-control @error('namaWakahim') is-invalid @enderror" name="namaWakahim" value="{{ $data->nama_wakahim }}" required>
                  @error('namaWakahim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Foto Wakil Ketua Himpunan</label>
                  <input type="file" name="fotoWakahim" class="form-control @error('fotoWakahim') is-invalid @enderror">
                  @error('fotoWakahimkahim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Gambar Hero</label>
                  <input type="file" name="gambarHero" class="form-control @error('gambarHero') is-invalid @enderror">
                  @error('gambarHero')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Foto Struktur Organisasi</label>
                  <input type="file" name="fotoStruktur" class="form-control @error('fotoStruktur') is-invalid @enderror">
                  @error('fotoStruktur')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Link Proker</label>
                  <input type="text" class="form-control @error('linkProker') is-invalid @enderror" name="linkProker" value="{{ $data->link_proker }}">
                  @error('linkProker')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Link AD ART</label>
                  <input type="text" class="form-control @error('linkAdart') is-invalid @enderror" name="linkAdart" value="{{ $data->link_adart }}">
                  @error('linkAdart')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tahun Kepengurusan</label>
                  <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ $data->tahun }}" required>
                  @error('tahun')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
