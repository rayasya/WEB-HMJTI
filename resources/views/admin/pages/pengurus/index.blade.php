@extends('admin.layouts.master')

@section('title', 'Admin - List Pengurus')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List Pengurus</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">List-Pengurus</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                @if(auth()->user()->role == 'admin')
              <a href="{{route('tambah.pengurus')}}" class="btn btn-primary">Tambah Pengurus</a>
              @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-pengurus">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>No HP</th>
                      <th>Jabatan</th>
                      <th>Biro</th>
                      <th>Departemen</th>
                      <th>Periode</th>
                      <th>Foto</th>
                      <th>Prodi</th>
                      <th>Angkatan</th>
                      <th>Golongan</th>
                      <th>Status</th>
                      @if(auth()->user()->role == 'admin')
                      <th>Aksi</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $pengurus)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$pengurus->nim}}</td>
                      <td>{{$pengurus->nama}}</td>
                      <td>{{$pengurus->email}}</td>
                      <td>{{$pengurus->no_hp}}</td>
                      <td>{{$pengurus->jabatan->jabatan}}</td>
                      <td>{{$pengurus->biro->biro}}</td>
                      <td>{{$pengurus->biro->departemen->departemen}}</td>
                      <td>{{$pengurus->periode->periode}}</td>
                      <td><img src="{{asset($pengurus->foto)}}" alt="foto" width="50px" height="50px"></td>
                      <td>{{$pengurus->prodi->prodi}}</td>
                      <td>{{$pengurus->angkatan->angkatan}}</td>
                      <td>{{$pengurus->golongan->golongan}}</td>
                      <td>{{ucwords($pengurus->periode->status)}}</td>
                      @if(auth()->user()->role == 'admin')
                      <td>
                        <a href="{{route('edit.pengurus', ['id' => $pengurus->id_pengurus])}}" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{ $loop->iteration }}"> <i class="fa fa-trash"></i> </a>
                      </td>
                      @endif
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
@foreach($data as $pengurus2)
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
          <a href="{{ route('delete.pengurus', ['id' => $pengurus2->id_pengurus])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
@endforeach
@endsection
@section('js-pages')
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel-pengurus').DataTable();
  });
  </script>
@endsection
