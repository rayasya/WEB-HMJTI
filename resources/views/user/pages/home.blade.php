@extends('user.layouts.master')

@section('contentcss')
<style media="screen">
    .section-1 {
        position: relative;
        height: 96vh;
        margin: 0;
        background-image: url("{{asset($info['0']->gambar_hero)}}");
        background-size: cover;
        background-attachment: fixed;
        background-position-x: center;
        text-align: center;
        color: #FFFFFF;
        display: flex;
        align-items: center;
        letter-spacing: 0.1rem;
        border-radius: 0 0 0 220px;
        z-index: -10;
    }

</style>
@endsection

@section('content')
<main>
    <!-- <div class="container-fluid"> -->
    <div class="section-1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="display">
                        <h1 class="title title-section-1">SELAMAT DATANG DI WEBSITE HMJTI POLIJE</h1>
                        <p class="subtitle-section-1">“{{$info['0']->slogan}}”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <div class="section-2 ">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2 class="center title-section px-5">HMJ TEKNOLOGI INFORMASI POLITEKNIK NEGERI JEMBER</h2>
                    <p class="subtitle-section">Himpunan Mahasiswa Jurusan Teknologi Informasi adalah organisasi
                        kemahasiswaan yang lahir dari kemauan yang kuat dan didasarkan pada persamaan persepsi, tanggung
                        jawab serta rasa saling memiliki untuk mengembangkan Teknologi Informasi yang berada di bawah
                        naungan Jurusan Teknologi Informasi Politeknik Negeri Jember</p>
                </div>
            </div>
        </div>
        <div class="class-visi">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="title-section">
                            VISI HMJ TEKNOLOGI INFORMASI
                        </h2>
                        <p class="subtitle-section-2">
                            {{$info['0']->visi}}
                        </p>
                    </div>
                    <div class="col-md-6 img-caption">
                        <img src="{{asset($info['0']->foto_kahim)}}" class="foto-pengurus " data-aos="fade-left" alt="">
                        <div class="caption" data-aos="fade-up">
                            <p class="title-caption">{{$info['0']->nama_kahim}}</p>
                            <p class="subtitle-caption">Ketua HMJTI {{$info['0']->tahun}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="class-misi">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 img-caption">
                        <img src="{{asset($info['0']->foto_wakahim)}}" class="foto-pengurus " data-aos="fade-right"
                            alt="">
                        <div class="caption" data-aos="fade-up">
                            <p class="title-caption">{{$info['0']->nama_wakahim}}</p>
                            <p class="subtitle-caption">Wakil Ketua HMJTI {{$info['0']->tahun}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 pt-3">
                        <h2 class="title-section">
                            MISI HMJ TEKNOLOGI INFORMASI
                        </h2>
                        @foreach($misi as $misis)
                        <div class="subtitle-section">
                            <span>{{$loop->iteration}}.</span>
                            <div class="subtile-section-text">{{$misis}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-3" id="section-3">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-6">
                    <h2 class="center title-section px-5">BERITA TERBARU</h2>
                </div>
            </div>

            <div class="row py-3 justify-content-center">
                @foreach ($data as $artikel)
                <div class="col-md-4 col-sm-10 my-3">
                    <div class="card border-0 shadow">
                        <a href="blog/{{ $artikel->slug }}"><img src=" {{asset($artikel->gambar)}}" class="card-img-top"
                                alt="..."
                                style="width: 100%;height: 300px; object-fit: cover; object-position: center"></a>
                        <div class="card-body">
                            <div class="card-head d-flex justify-content-between">
                                <a class="news-tag"
                                    href="{{route('blog.kategori', ['kategori' => Str::lower($artikel->kategori->kategori)])}}">{{ $artikel->kategori->kategori }}</a>
                                <p class="news-date">
                                    @if (Carbon::now()->diffInDays($artikel->tanggal_penulisan) > 14)
                                    {{ Carbon::parse($artikel->tanggal_penulisan)->format('d-m-Y') }}
                                    @else
                                    {{ Carbon::parse($artikel->tanggal_penulisan)->diffForHumans() }}
                                    @endif
                                </p>
                            </div>
                            <h5 class="card-title"><a href="blog/{{ $artikel->slug }}">{{ $artikel->judul}}</a></h5>

                            <p class="card-text">{{ Str::substr(strip_tags($artikel->isi), 0, 100) }}....</p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <p class="publisher"><i
                                        class="fas fa-user fa-sm"></i>&nbsp<span>{{ $artikel->penulis}}</span></p>
                                <a href="blog/{{ $artikel->slug }}" class="card-foot">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @if(count($data) < 1)
                <div class="alert alert-primary text-center">
                    <strong>Maaf!</strong> Data Artikel Kosong.
                </div>
                @else
                <div class="col-md-12 d-flex justify-content-center bot-section3">
                    <a href="/blog" class="btn btn-load">Load More</a>
                </div>
                @endif
        </div>
    </div>
    </div>
</main>
@endsection
