@extends('admin.layouts.master')

@section('title', 'Admin - Edit User')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Edit User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Edit-User</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="{{route('update.user', ['id' => $data->id_users])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $data->username }}" required>
                  @error('username')
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
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $data->role }}">
                        @if($data->role == $data->role)
                        <option value="{{$data->role}}" selected>{{ucfirst($data->role)}}</option>
                      @endif
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="departemen">Departemen</option>
                        <option value="biro">Biro</option>

                    </select>
                    @error('role')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                <div class="form-group">
                  <button type="submit" name="btn" class="btn btn-primary">Edit</button>
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
