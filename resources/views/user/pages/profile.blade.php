@extends('user.layouts.master')

@section('content')
<main>
    <div class="section text-center">
        <div class="section">
            <div class="title-heading">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>profil HMJTI</h1>
                        <ol>
                            <li><a href="/">Home</a></li>
                            <li>{{ request()->segment(1) }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 daftar-pengurus">
            <div class="row">
                <div class="col-md-12">
                    <div class="img-wrapper"><img class="struktur-img" src="{{asset($info['0']->foto_struktur)}}"
                        alt="image">
                </div>
                <div class="col-md-12 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <h2 class="title-section center-line">
                                    VISI HMJ TEKNOLOGI INFORMASI
                                </h2>
                                <div class="subtitle-section">
                                    <p class="subtitle-section-text py-3">
                                      {{$info['0']->visi}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 pt-3">
                                <h2 class="title-section center-line">
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
                <div class="col-md-12 ">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 pt-3">
                                <h2 class="title-section center-line">
                                    MOTO HMJ TEKNOLOGI INFORMASI 2021
                                </h2>
                                <div class="subtitle-section">
                                    <p class="subtitle-section-text py-3">“{{$info['0']->slogan}}”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!--@if(count($pengurus) == 45)-->
            <!-- KAHIM dan WAKAHIM -->
            <div class="row justify-content-center">
                <div class="col-md-12 py-3">
                    <h2 class="title-section center-line">
                        STRUKTUR ORGANISASI HMJ TI 2021
                    </h2>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[0]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[0]->nama}}</p>
                        <p class="subtitle-caption">Ketua HMJTI 2021</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[1]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[1]->nama}}</p>
                        <p class="subtitle-caption">Wakil Ketua HMJTI 2021</p>
                    </div>
                </div>
            </div>
            <hr>






            <!-- SEKRETARIS DAN BEDAHARA -->
            <div class="row">
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[2]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class=" caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[2]->nama}}</p>
                        <p class="subtitle-caption">Sekretaris 1</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[3]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[3]->nama}}</p>
                        <p class="subtitle-caption">Sekretaris 2</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[4]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class=" caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[4]->nama}}</p>
                        <p class="subtitle-caption">Bendahara</p>
                    </div>
                </div>
            </div>
            <hr>









            <!-- DEPT. Administrasi -->
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[5]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[5]->nama}}</p>
                        <p class="subtitle-caption">Kepala Departemen Administrasi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 img-caption order-1 order-md-1 mt-3">
                    <div class="img-wrapper"><img src="{{asset($pengurus[6]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[6]->nama}}</p>
                        <p class="subtitle-caption">CO Biro Kesekretariatan</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-4 order-md-2 mt-3">
                    <div class="img-wrapper"><img src="{{asset($pengurus[7]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[7]->nama}}</p>
                        <p class="subtitle-caption">Co Biro Sarpras</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-2 order-md-3">
                    <div class="img-wrapper"><img src="{{asset($pengurus[8]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[8]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Kesekretariatan</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-3 order-md-4">
                    <div class="img-wrapper"><img src="{{asset($pengurus[9]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[9]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Kesekretariatan</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-5 order-md-5">
                    <div class="col-md-6">
                        <div class="img-wrapper"><img src="{{asset($pengurus[10]->foto) }}" class="foto-pengurus struktur"
                            data-aos="fade-down" alt=""></div>
                        <div class="caption py-1" data-aos="fade-in">
                            <p class="title-caption">{{$pengurus[10]->nama}}</p>
                            <p class="subtitle-caption">Anggota Biro Sarpras</p>
                        </div>
                    </div>
                </div>
            </div>
            <hr>







            <!-- DEPT. Keilmuan -->
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[11]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[11]->nama}}</p>
                        <p class="subtitle-caption">Kepala Departemen Keilmuan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 img-caption order-sm-1 order-md-1 mt-5">
                    <div class="img-wrapper"><img src="{{asset($pengurus[12]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[12]->nama}}</p>
                        <p class="subtitle-caption">CO Biro Multimedia</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption order-sm-4 order-md-2 mt-5">
                    <div class="img-wrapper"><img src="{{asset($pengurus[13]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[13]->nama}}.</p>
                        <p class="subtitle-caption">CO Biro Sistem Informasi</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption order-sm-7 order-md-3 mt-5">
                    <div class="img-wrapper"><img src="{{asset($pengurus[14]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[14]->nama}}</p>
                        <p class="subtitle-caption">Co Biro Gamedev</p>
                    </div>
                </div>

                <div class="col-md-2 img-caption order-sm-2 order-md-4 ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[15]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[15]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Multimedia</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-3 order-md-5 ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[16]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[16]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Multimedia</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-5 order-md-6 ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[17]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[17]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Sistem Informasi</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-6 order-md-7 ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[18]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[18]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Sistem Informasi</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-8 order-md-8 ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[19]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[19]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Gamedev</p>
                    </div>
                </div>
                <div class="col-md-2 img-caption order-sm-9 order-md-9 ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[20]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[20]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Gamedev</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 img-caption order-sm-1 order-md-1 mt-5">
                    <div class="img-wrapper"><img src="{{asset($pengurus[21]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[21]->nama}}</p>
                        <p class="subtitle-caption">Co Biro Hardware</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-sm-4 order-md-2 mt-5">
                    <div class="img-wrapper"><img src="{{asset($pengurus[22]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[22]->nama}}</p>
                        <p class="subtitle-caption">CO Biro IT Support</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-2 order-md-3">
                    <div class="img-wrapper"><img src="{{asset($pengurus[23]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[23]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Hardware</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-3 order-md-4">
                    <div class="img-wrapper"><img src="{{asset($pengurus[24]->foto)}}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[24]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Hardware</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-5 order-md-5">
                    <div class="img-wrapper"><img src="{{asset($pengurus[25]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[25]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro IT Support</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-6 order-md-6">
                    <div class="img-wrapper"><img src="{{asset($pengurus[26]->foto) }}" class="foto-pengurus struktur"
                        data-aos="fade-down" alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[26]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro IT Support</p>
                    </div>
                </div>
            </div>
            <hr>





            <!-- DEPT. PERHUBUNGAN -->
            <div class="row">
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[27]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[27]->nama}}</p>
                        <p class="subtitle-caption">Kepala Departemen Perhubungan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[28]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[28]->nama}}</p>
                        <p class="subtitle-caption">CO Biro Eksternal</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[29]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[29]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Eksternal</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[30]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[30]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Eksternal</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[31]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[31]->nama}}</p>
                        <p class="subtitle-caption">Biro Internal MIF</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[32]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[32]->nama}}</p>
                        <p class="subtitle-caption">Biro Internal TIF</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption ">
                    <div class="img-wrapper"><img src="{{asset($pengurus[33]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[33]->nama}}</p>
                        <p class="subtitle-caption">Biro Internal TKK</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[34]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[34]->nama}}</p>
                        <p class="subtitle-caption">Co Biro Kominfo</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[35]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[35]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Kominfo</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[36]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[36]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Kominfo</p>
                    </div>
                </div>
                <div class="col-md-4 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[37]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[37]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Kominfo</p>
                    </div>
                </div>
            </div>
            <hr>








            <!-- DEPT. KEWIRAUSAHAAN -->
            <div class="row">
                <div class="col-md-12 img-caption">
                    <div class="img-wrapper"><img src="{{asset($pengurus[38]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[38]->nama}}</p>
                        <p class="subtitle-caption">Kepala Departemen Kewirausahaan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 img-caption order-sm-1 order-md-1">
                    <div class="img-wrapper"><img src="{{asset($pengurus[39]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[39]->nama}}</p>
                        <p class="subtitle-caption">CO Biro Kewirausahaan</p>
                    </div>
                </div>
                <div class="col-md-6 img-caption order-sm-4 order-md-2">
                    <div class="img-wrapper"><img src="{{asset($pengurus[40]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class=" title-caption">{{$pengurus[40]->nama}}</p>
                        <p class="subtitle-caption">Co Biro Usaha</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-2 order-md-3">
                    <div class="img-wrapper"><img src="{{asset($pengurus[41]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[41]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Kewirausahaan</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-3 order-md-4">
                    <div class="img-wrapper"><img src="{{asset($pengurus[42]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[42]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Kewirausahaan</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-5 order-md-5">
                    <div class="img-wrapper"><img src="{{asset($pengurus[43]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[43]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Usaha</p>
                    </div>
                </div>
                <div class="col-md-3 img-caption order-sm-6 order-md-6">
                    <div class="img-wrapper"><img src="{{asset($pengurus[44]->foto) }}" class="foto-pengurus struktur" data-aos="fade-down"
                        alt=""></div>
                    <div class="caption py-1" data-aos="fade-in">
                        <p class="title-caption">{{$pengurus[44]->nama}}</p>
                        <p class="subtitle-caption">Anggota Biro Usaha</p>
                    </div>
                </div>
            </div>
            <!--@endif-->
        </div>
    </div>
</main>
@endsection
