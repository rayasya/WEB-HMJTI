@extends('admin.layouts.master')

@section('title', 'Admin - List Kirik dan Saran')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>List Kirik dan Saran</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kategori</a></div>
        <div class="breadcrumb-item">List-Kirik-Saran</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="tabel-kritikSaran">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Isi Kritik dan Saran</th>
                      <th>Tanggal</th>
                      @if(auth()->user()->role == 'admin')
                      <th>Hapus</th>
                      @endif
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $kritikSaran)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$kritikSaran->nama}}</td>
                      <td>{{$kritikSaran->email}}</td>
                      <td>{{$kritikSaran->kritiksaran}}</td>
                      <td>{{date('d M Y', strtotime($kritikSaran->tanggal))}}</td>
                      @if(auth()->user()->role == 'admin')
                      <td>
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
@foreach($data as $kritikSaran2)
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
          <a href="{{ route('delete.kritikSaran', ['id' => $kritikSaran2->id_kritiksaran])}}" type="submit" class="btn btn-danger">Hapus</a>
        </div>
    </div>
  </div>
</div>
@endforeach
@endsection
@section('js-pages')
<script type="text/javascript">
  $(document).ready(function() {
    $('#tabel-kritikSaran').DataTable();
  });
  </script>
@endsection
