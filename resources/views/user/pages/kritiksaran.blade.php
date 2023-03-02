@extends('user.layouts.master')
@section('content')
<main>
    <div class="section">
        <div class="title-heading">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mx-0">Kritik dan Saran</h1>
                    <ol>
                        <li><a href="/">Home</a></li>
                        <li>{{ request()->segment(1) }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section id="contact" class="contact mb-5">
            <div class="section-saran mt-5">
                <div class="wrapper-saran">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <div class="info">
                                <div class="address">
                                    <i class="far fa-map"></i>
                                    <h4>Alamat:</h4>
                                    <p>Lt. 4 Gd. Information Technology, Politeknik Negeri Jember, Lingkungan Panji,
                                        Tegalgede, Kec. Kaliwates, Kabupaten Jember, Jawa Timur 68124</p>
                                </div>
                                <div class="email">
                                    <i class="far fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p><a href="mailto:hmjti@polije.ac.id">hmjti@polije.ac.id</a></p>
                                </div>
                                <div class="phone">
                                    <i class="fab fa-whatsapp"></i>
                                    <h4>Nomor HP:</h4>
                                    <p>+62 823-3301-9451</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <form action="{{route('add.kritikSaran')}}" method="post" role="form" class="php-email-form">
                              {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-3">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                        required name="message"></textarea>
                                </div>
                                <div class="text-center mt-3"><button type="submit">Kirim</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
