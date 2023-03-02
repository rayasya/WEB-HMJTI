@extends('admin.layouts.master')

@section('title', 'Admin - Tambah Pengurus')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tambah Pengurus</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Tambah-Pengurus</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{route('add.pengurus')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" required>
                  @error('nim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required>
                  @error('nama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ old('no_hp') }}" required>
                  @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Angkatan</label>
                  <select class="form-control @error('angkatan') is-invalid @enderror" name="id_angkatan" value="{{ old('angkatan') }}">
                    @foreach($angkatan as $angkatans)
                    <option value="{{$angkatans->id_angkatan}}">{{$angkatans->angkatan}}</option>
                    @endforeach
                  </select>
                  {{-- <input type="text" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" value="{{ old('angkatan') }}" required> --}}
                  @error('angkatan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Prodi</label>
                  <select class="form-control @error('prodi') is-invalid @enderror" name="id_prodi" value="{{ old('prodi') }}">
                    @foreach($prodi as $prodis)
                    <option value="{{$prodis->id_prodi}}">{{$prodis->prodi}}</option>
                    @endforeach
                  </select>
                  @error('prodi')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                    <label>Golongan</label>
                    <select class="form-control @error('golongan') is-invalid @enderror" name="id_golongan" value="{{ old('golongan') }}">
                      @foreach($golongan as $golongans)
                      <option value="{{$golongans->id_golongan}}">{{$golongans->golongan}}</option>
                      @endforeach
                    </select>
                    {{-- <input type="text" class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" value="{{ old('angkatan') }}" required> --}}
                    @error('angkatan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="form-group">
                    <label>Periode</label>
                    <select class="form-control @error('periode') is-invalid @enderror" name="id_periode" value="{{ old('periode') }}">
                      @foreach($periode as $periodes)
                      <option value="{{$periodes->id_periode}}">{{$periodes->periode}}</option>
                      @endforeach
                    </select>
                    @error('periode')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control @error('jabatan') is-invalid @enderror" name="id_jabatan" value="{{ old('jabatan') }}">
                    @foreach($jabatan as $jabatans)
                    <option value="{{$jabatans->id_jabatan}}">{{$jabatans->jabatan}}</option>
                    @endforeach
                  </select>
                  @error('jabatan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Biro</label>
                  <select class="form-control @error('biro') is-invalid @enderror" name="id_biro" value="{{ old('biro') }}">
                    @foreach($biro as $biros)
                    <option value="{{$biros->id_biro}}">{{$biros->biro}}</option>
                    @endforeach
                  </select>
                  @error('biro')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="btn" class="btn btn-primary">Tambah</button>
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
