@extends('user.layouts.master')

@section('content')
<main class="blog-detail">
    <div class="section">
        <div class="title-heading">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mx-0">Berita HMJTI</h1>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>{{ request()->segment(1) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">

        <div class="row py-3 ">
            <div class="col-md-8 col-sm-12 ">
               <div class="blog_detail">
                   <h1>{{$data['blog']['judul']}}</h1>
               </div>

                <div class="d-flex justify-content-start align-items-center my-2">
                    <img src="{{ asset('user/img/user-default.png') }}" class="img-artikel" alt="">
                    <div class="ms-2 blog_detail_caption">
                        <span class="d-block fw-bold">{{$data['blog']['penulis']}}</span>
                        <span class="d-block">Added at: {{  \Carbon::parse($data['blog']['tanggal_penulisan'])->format('d m Y')}}</span>
                        <span class="d-block">Updated at: {{  \Carbon::parse($data['blog']['tanggal_update'])->format('d m Y')}}</span>
                    </div>
                </div>

                <div class="blog_detail_img">
                <img src=" {{ asset($data['blog']['gambar']) }}" class="card-img-top" style="width: 100%; height: 400px; object-position: center; object-fit: cover" alt="...">
                </div>

                <hr>


                <div class="mt-4 mb-5 text-left blog_detail ">
                    <p>{!!$data['blog']['isi']!!}</p>

                </div>
            </div>



            @include('user.layouts.blog-sidebar')

        </div>

    </div>

</main>
@endsection
