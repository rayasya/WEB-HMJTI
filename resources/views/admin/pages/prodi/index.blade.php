@extends('admin.layouts.master')

@section('title', 'Admin - List Prodi')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List Prodi</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">List-Prodi</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Prodi</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-prodi">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Prodi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $prodi)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$prodi->prodi}}</td>
                      <td>
                        <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#exampleModaledit{{ $loop->iteration }}"> <i class="fa fa-edit"></i> </a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $loop->iteration }}"> <i class="fa fa-trash"></i> </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Prodi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('add.prodi')}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>Prodi</label>
            <input type="text" class="form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ old('prodi') }}" required>
          </div>
          @error('prodi')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
@foreach($data as $prodi2)
<div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
          Apakah kamu yakin untuk menghapusnya ?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <a href="{{ route('delete.prodi', ['id' => $prodi2->id_prodi])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModaledit{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Prodi {{$prodi2->prodi}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update.prodi', ['id' => $prodi2->id_prodi])}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>Prodi</label>
            <input type="text" class="form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ $prodi2->prodi }}" required>
          </div>
          @error('prodi')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection
@section('js-pages')
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel-prodi').DataTable();
  });
  </script>
@endsection
