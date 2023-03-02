@extends('admin.layouts.master')

@section('title', 'Admin - List Biro')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List biro</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">List-Biro</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Biro</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-biro">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Biro</th>
                      <th>Nama Departemen</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $biro)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$biro->biro}}</td>
                      <td>{{$biro->departemen->departemen}}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah biro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('add.biro')}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>Biro</label>
            <input type="text" class="form-control @error('biro') is-invalid @enderror" name="biro" value="{{ old('biro') }}" required>
          </div>
          @error('biro')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="form-group">
            <label>Departemen</label>
            <select class="form-control @error('id_departemen') is-invalid @enderror" name="id_departemen" value="{{ old('id_departemen') }}">
              @foreach($departemen as $departemens)
              <option value="{{$departemens->id_departemen}}">{{$departemens->departemen}}</option>
              @endforeach
            </select>
            @error('id_departemen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
@foreach($data as $biro2)
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
          <a href="{{ route('delete.biro', ['id' => $biro2->id_biro])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModaledit{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit biro {{$biro2->biro}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update.biro', ['id' => $biro2->id_biro])}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>biro</label>
            <input type="text" class="form-control @error('biro') is-invalid @enderror" name="biro" value="{{ $biro2->biro }}" required>
          </div>
          @error('biro')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <div class="form-group">
            <label>Departemen</label>
            <select class="form-control @error('id_departemen') is-invalid @enderror" name="id_departemen" value="{{ old('id_departemen') }}">
              @foreach($departemen as $departemens2)
              <option value="{{$departemens2->id_departemen}}">{{$departemens2->departemen}}</option>
              @endforeach
            </select>
            @error('id_departemen')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
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
    $('#tabel-biro').DataTable();
  });
  </script>
@endsection
