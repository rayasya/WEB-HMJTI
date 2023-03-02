@extends('admin.layouts.master')

@section('title', 'Admin - Edit Pengurus')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit Pengurus</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Edit-Pengurus</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{route('update.pengurus', ['id' => $data->id_pengurus])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label>NIM</label>
                  <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ $data->nim }}" required>
                  @error('nim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $data->nama }}" required>
                  @error('nama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required>
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" value="{{ $data->no_hp }}" required>
                  @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Angkatan</label>
                  <select class="form-control @error('angkatan') is-invalid @enderror" name="id_angkatan" value="{{ $data->id_angkatan }}">
                    @foreach($angkatan as $angkatans)
                      @if($data->id_angkatan == $angkatans->id_angkatan)
                        <option value="{{$angkatans->id_angkatan}}" selected>{{$angkatans->angkatan}}</option>
                      @else
                        <option value="{{$angkatans->id_angkatan}}">{{$angkatans->angkatan}}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('angkatan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Prodi</label>
                  <select class="form-control @error('prodi') is-invalid @enderror" name="id_prodi" value="{{ $data->id_prodi }}">
                    @foreach($prodi as $prodis)
                      @if($data->id_prodi == $prodis->id_prodi)
                        <option value="{{$prodis->id_prodi}}" selected>{{$prodis->prodi}}</option>
                      @else
                        <option value="{{$prodis->id_prodi}}">{{$prodis->prodi}}</option>
                      @endif
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
                    <select class="form-control @error('golongan') is-invalid @enderror" name="id_golongan" value="{{ $data->id_golongan }}">
                      @foreach($golongan as $golongans)
                        @if($data->id_golongan == $golongans->id_golongan)
                          <option value="{{$golongans->id_golongan}}" selected>{{$golongans->golongan}}</option>
                        @else
                          <option value="{{$golongans->id_golongan}}">{{$golongans->golongan}}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('angkatan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="form-group">
                    <label>Periode</label>
                    <select class="form-control @error('periode') is-invalid @enderror" name="id_periode" value="{{ $data->id_periode }}">
                      @foreach($periode as $periodes)
                        @if($data->id_periode == $periodes->id_periode)
                          <option value="{{$periodes->id_periode}}" selected>{{$periodes->periode}}</option>
                        @else
                          <option value="{{$periodes->id_periode}}">{{$periodes->periode}}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('angkatan')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="form-control @error('jabatan') is-invalid @enderror" name="id_jabatan" value="{{ $data->id_jabatan }}">
                    @foreach($jabatan as $jabatans)
                      @if($data->id_jabatan == $jabatans->id_jabatan)
                        <option value="{{$jabatans->id_jabatan}}" selected>{{$jabatans->jabatan}}</option>
                      @else
                        <option value="{{$jabatans->id_jabatan}}">{{$jabatans->jabatan}}</option>
                      @endif
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
                  <select class="form-control @error('biro') is-invalid @enderror" name="id_biro" value="{{ $data->id_biro }}">
                    @foreach($biro as $biros)
                      @if($data->id_biro == $biros->id_biro)
                        <option value="{{$biros->id_biro}}" selected>{{$biros->biro}}</option>
                      @else
                        <option value="{{$biros->id_biro}}">{{$biros->biro}}</option>
                      @endif
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
                  <button type="submit" name="btn" class="btn btn-primary">Update</button>
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
