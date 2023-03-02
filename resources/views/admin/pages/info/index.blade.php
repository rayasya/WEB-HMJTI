@extends('admin.layouts.master')

@section('title', 'Admin - List Info')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List Info</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">List-Info</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{route('create.info')}}" class="btn btn-primary">Tambah Info</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-info">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th>Slogan</th>
                      <th>Kahim</th>
                      <th>Foto Kahim</th>
                      <th>Wakahim</th>
                      <th>Foto Wakahim</th>
                      <th>Gambar Hero</th>
                      <th>Foto Struktur</th>
                      <th>Link Proker</th>
                      <th>Link AD ART</th>
                      <th>Tahun</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $info)
                    <tr>
                      <td>{{$info->id}}</td>
                      <td>{{$info->visi}}</td>
                      <td>{{$info->misi}}</td>
                      <td>{{$info->slogan}}</td>
                      <td>{{$info->nama_kahim}}</td>
                      <td><img src="{{asset($info->foto_kahim)}}" alt="foto" width="50px" height="50px"></td>
                      <td>{{$info->nama_wakahim}}</td>
                      <td><img src="{{asset($info->foto_wakahim)}}" alt="foto" width="50px" height="50px"></td>
                      <td><img src="{{asset($info->gambar_hero)}}" alt="foto" width="50px" height="50px"></td>
                      <td><img src="{{asset($info->foto_struktur)}}" alt="foto" width="50px" height="50px"></td>
                      <td>{{$info->link_proker}}</td>
                      <td>{{$info->link_adart}}</td>
                      <td>{{$info->tahun}}</td>
                      <td>
                        <a href="{{route('edit.info', ['id' => $info->id])}}" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
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
@foreach($data as $info2)
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
          <a href="{{ route('delete.info', ['id' => $info2->id])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
@endforeach
@endsection
@section('js-pages')
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel-info').DataTable();
  });
  </script>
@endsection
