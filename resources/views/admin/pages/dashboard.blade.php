@extends('admin.layouts.master')

@section('title', 'Admin - Dashboard')
@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Halo {{Auth::user()->name}} </h1>
    </div>

    <div class="section-body">
    </div>
  </section>
</div>

@endsection
