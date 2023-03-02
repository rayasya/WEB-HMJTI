@extends('admin.layouts.master')

@section('title', 'Admin - List Artikel')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List Artikel</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">List-Artikel</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="{{route('tambah.artikel')}}" class="btn btn-primary">Tambah Artikel</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-artikel">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Judul</th>
                      {{-- <th>Isi Artikel</th> --}}
                      <th>Kategori</th>
                      <th>Penulis</th>
                      <th>Tanggal Penulisan</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $artikel)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$artikel->judul}}</td>
                      {{-- <td>{!! $artikel->isi !!}</td> --}}
                      <td>{{$artikel->kategori->kategori}}</td>
                      <td>{{$artikel->penulis}}</td>
                      <td>{{Carbon::parse($artikel->tanggal_penulisan)->format('d-m-y H:i')}}</td>
                      <td><img src="{{asset($artikel->gambar)}}" alt="foto" width="50px" height="50px"></td>
                      <td>
                        <a href="{{route('edit.artikel', ['id' => $artikel->id_artikel])}}" class="btn btn-warning"> <i class="fa fa-edit"></i> </a>
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
@foreach($data as $artikel2)
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
          <a href="{{ route('delete.artikel', ['id' => $artikel2->id_artikel])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
@endforeach
@endsection
@section('js-pages')
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel-artikel').DataTable();
  });
  </script>
@endsection
