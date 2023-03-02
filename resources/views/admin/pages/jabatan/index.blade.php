@extends('admin.layouts.master')

@section('title', 'Admin - List Jabatan')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List jabatan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">List-Jabatan</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Jabatan</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-jabatan">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Jabatan</th>
                      {{-- <th>Periode</th> --}}
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $jabatan)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$jabatan->jabatan}}</td>
                      {{-- <td>{{$jabatan->periode}}</td> --}}
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('add.jabatan')}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan') }}" required>
          </div>
          @error('jabatan')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          {{-- <div class="form-group">
            <label>Periode</label>
            <input type="number" class="form-control @error('periode') is-invalid @enderror" name="periode" value="{{ old('periode') }}" required>
          </div>
          @error('periode')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
@foreach($data as $jabatan2)
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
          <a href="{{ route('delete.jabatan', ['id' => $jabatan2->id_jabatan])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModaledit{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit jabatan {{$jabatan2->jabatan}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update.jabatan', ['id' => $jabatan2->id_jabatan])}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>jabatan</label>
            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ $jabatan2->jabatan }}" required>
          </div>
          @error('jabatan')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="form-group">
            <label>Periode</label>
            <input type="number" class="form-control @error('periode') is-invalid @enderror" name="periode" value="{{ $jabatan2->periode }}" required>
          </div>
          @error('periode')
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
    $('#tabel-jabatan').DataTable();
  });
  </script>
@endsection
