@extends('admin.layouts.master')

@section('title', 'Admin - Tambah Info')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Info</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Tambah-Info</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{route('add.info')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label>Visi Organisasi</label>
                  <textarea class="form-control @error('visi') is-invalid @enderror" name="visi" required>{{ old('visi') }}</textarea>
                  @error('visi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Misi Organisasi <span class="text-danger">*pisahkan dengan koma dan spasi ex(visi, misi, dll)</span> </label>
                  <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" required>{{ old('misi') }}</textarea>
                  @error('misi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Slogan Organisasi</label>
                  <input type="text" class="form-control @error('slogan') is-invalid @enderror" name="slogan" value="{{ old('slogan') }}" required>
                  @error('slogan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama Ketua Himpunan</label>
                  <input type="text" class="form-control @error('namaKahim') is-invalid @enderror" name="namaKahim" value="{{ old('namaKahim') }}">
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
                  <input type="text" class="form-control @error('namaWakahim') is-invalid @enderror" name="namaWakahim" value="{{ old('namaWakahim') }}" required>
                  @error('namaWakahim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Foto Wakil Ketua Himpunan</label>
                  <input type="file" name="fotoWakahim" class="form-control @error('fotoWakahim') is-invalid @enderror">
                  @error('fotoWakahim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Gambar Hero</label>
                  <input type="file" name="gambarHero" class="form-control @error('fotoWakahim') is-invalid @enderror">
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
                  <input type="text" class="form-control @error('linkProker') is-invalid @enderror" name="linkProker" value="{{ old('linkProker') }}">
                  @error('linkProker')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Link AD ART</label>
                  <input type="text" class="form-control @error('linkAdart') is-invalid @enderror" name="linkAdart" value="{{ old('linkAdart') }}">
                  @error('linkAdart')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tahun Kepengurusan</label>
                  <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" required>
                  @error('tahun')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Tambah</button>
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
