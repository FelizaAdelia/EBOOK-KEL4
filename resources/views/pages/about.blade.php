@extends('layouts.tes')

@section('title')
<title>EBookJunction - About</title>
@endsection

@section('banner')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Tentang EBookJunction</h2>
                        <span>Tempat di mana pengetahuan, imajinasi, dan cerita bertemu dalam bentuk digital.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
@endsection

@section('content')
    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/about2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>Tentang Kami</h4>
                        <span></span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>EbookJunction adalah rumah bagi ribuan ebook berkualitas 
                                dari berbagai genre, membawa Anda ke dalam dunia yang tak 
                                terbatas dari kata-kata. Di EbookJunction, kami memahami bahwa 
                                setiap pembaca memiliki preferensi uniknya sendiri. Oleh karena 
                                itu, kami menawarkan berbagai kategori ebook yang memenuhi segala 
                                minat. Dari kisah romantis yang memilukan hingga pengetahuan 
                                mendalam tentang dunia ilmiah, kami memiliki sesuatu untuk setiap orang.</p>
                        </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->


    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Pelayanan Kami</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Koleksi Diversifikasi</h4>
                        <br>
                        <p>Apakah Anda mencari petualangan fantasi, panduan bisnis praktis, atau pengetahuan mendalam tentang ilmu pengetahuan? kami memiliki apa yang Anda butuhkan.
                            <span> Lorem ipsum dolor, sit amet </span></p>
                        <img src="assets/images/service-01.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Pembayaran Aman dan Mudah</h4>
                        <p>EbookJunction menawarkan opsi pembayaran yang aman dan nyaman, memungkinkan Anda untuk membeli ebook favorit Anda dengan cara yang paling sesuai dengan Anda. 
                            <span>Lorem ipsum dolor sit amet.</span></p>
                        <img src="assets/images/service-02.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Pembaruan Berkala</h4>
                        <br>
                        <p>Koleksi kami terus berkembang dengan penambahan ebook baru secara berkala. Jangan lewatkan peluang untuk menemukan karya-karya terbaru dari penulis terkenal dan bakat baru di dunia literatur digital!</p>
                        <img src="assets/images/service-03.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>By Subscribing To Our Newsletter You Can Get 30% Off</h2>
                        <span>Details to details is what makes Hexashop different from the other themes.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Store Location:<br><span>Sunny Isles Beach, FL 33160, United States</span></li>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Office Location:<br><span>North Miami Beach</span></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li>Work Hours:<br><span>07:30 AM - 9:30 PM Daily</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->
@endsection