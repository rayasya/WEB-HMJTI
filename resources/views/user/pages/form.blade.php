@extends('user.layouts.master')
@section('content')

<div class="main">
    <div class="section">
        <div class="title-heading">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mx-0">Form</h1>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>{{ request()->segment(1) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <center>
            <h3 class="mt-5">{{$data->judul_form}}</h3>
            <p class="mt-3">{{$data->deskripsi}}</p>
            <div class="row">
                <div class="col-md-12">
                    <div class="wrapper">
                        {!! $data->link_form !!} <!-- belum responsive  -->

                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center bot-section3">
                <a href="https://api.whatsapp.com/send?phone={{$data->contact_person}}" target="_blank" class="btn btn-load">Contact Person</a>
            </div>
        </center>
    </div>
</div>

@endsection
