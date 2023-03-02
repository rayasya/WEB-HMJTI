@extends('admin.layouts.master')

@section('title', 'Admin - List Komentar')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List Komentar</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Komentar</a></div>
        <div class="breadcrumb-item">List-Komentar</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-komentar">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Judul Artikel</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Isi Komentar</th>
                      <th>tanggal</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $komentar)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$komentar->judul}}</td>
                      <td>{{$komentar->nama}}</td>
                      <td>{{$komentar->email}}</td>
                      <td>{{$komentar->komentar}}</td>
                      <td>{{$komentar->tanggal}}</td>
                      @if($komentar->status == 0)
                      <td>Pending</td>
                      @else
                      <td>Approved</td>
                      @endif
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
@foreach($data as $komentar2)
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
          <a href="{{ route('delete.komentar', ['id' => $komentar2->id_komentar])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModaledit{{ $loop->iteration }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Komentar {{$komentar2->komentar}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update.komentar', ['id' => $komentar2->id_komentar])}}" method="post">
        <div class="modal-body">
          {{csrf_field()}}
          <div class="form-group">
            <label>Komentar</label>
            @if($komentar2->status == 0)
            <input type="text" name="status" value="1">
            @else
            <input type="text" name="status" value="0">
            @endif
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
    $('#tabel-komentar').DataTable();
  });
  </script>
@endsection
