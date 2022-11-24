@extends('frontpage.layout.app')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(frontpage-assets/img/slide/LFA1.jpg)"></div>
                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(frontpage-assets/img/slide/LFA2.jpg)"></div>
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(frontpage-assets/img/slide/LFA3.jpg)"></div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                    <p>Lajnah Falakiyah Annuqayah merupakan instansi di bawah naungan Pondok Pesantren Annuqayah yang secara
                        khusus mengembangkan keilmuan falak serta memberikan pelatihan tentang ilmu falak.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="frontpage-assets/img/LFA-About.jpg" class="img-fluid" alt="LFA-About">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        Lajnah Falakiyah Annuqayah merupakan instansi di bawah naungan Pondok Pesantren Annuqayah yang
                        secara khusus mengembangkan keilmuan falak serta memberikan pelatihan tentang ilmu falak.
                        <ul class="mt-2">
                            <li>
                                <strong>VISI</strong>
                                <p>Menjadikan alam semesta sebagai media dzikir untuk selalu mengingat
                                    ke-Mahakuasaan
                                    Allah.</p>
                            </li>
                            <li>
                                <strong>MISI</strong>
                                <ul>
                                    <li>
                                        1. Melakukan perhitungan dan pengamatan pada objek langit untuk menyusun mawaqit
                                        ibadah.
                                    </li>
                                    <li>
                                        2. Melakukan penelitian dan pengamatan perihal kajian Ilmu Falak
                                    </li>
                                    <li>
                                        3. Mendidik dan melatih peserta agar kompeten dalam melakukan Hisab Rukyat
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1"
                                class="purecounter"></span>

                            <p><strong>Pengurus</strong> Lajnah Falakiyah Annuqayah</p>
                            {{-- <a href="#">Find out more &raquo;</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Anggota</strong> Lajnah Falakiyah Annuqayah</p>
                            {{-- <a href="#">Find out more &raquo;</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Anggota</strong> Terdaftar Aplikasi Lajnah Falakiyah Annuqayah</p>
                            {{-- <a href="#">Find out more &raquo;</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Penghargaan</strong> Yang dimiliki Lajnah Falakiyah Annuqayah</p>
                            {{-- <a href="#">Find out more &raquo;</a> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pustaka" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pustaka LFA</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="300">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <span class="advanced">Advanced</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Departments Section ======= -->
        <section id="articel" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Yuk, Baca Artikel!</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Cardiology</h4>
                                    <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Neurology</h4>
                                    <p>Voluptas vel esse repudiandae quo excepturi.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Hepatology</h4>
                                    <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                    <h4>Pediatrics</h4>
                                    <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Cardiology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="frontpage-assets/img/departments-1.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet
                                    eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus
                                    nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Neurology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="frontpage-assets/img/departments-2.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet
                                    eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus
                                    nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Hepatology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="frontpage-assets/img/departments-3.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet
                                    eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus
                                    nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <h3>Pediatrics</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde
                                    sonata raqer a videna mareta paulona marka</p>
                                <img src="frontpage-assets/img/departments-4.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos
                                    ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet
                                    eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus
                                    nostrum rem vero</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="academy" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Falak Academy</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="container" data-aos="fade-up" data-aos-delay="400">

                        <div class="testimonials-slider swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="member">
                                            <div class="member-img">
                                                <img src="frontpage-assets/img/doctors/doctors-1.jpg" class="img-fluid"
                                                    width="300px" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-chevron-double-right"></i> Learn
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Walter White</h4>
                                                <span>Chief Medical Officer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="member">
                                            <div class="member-img">
                                                <img src="frontpage-assets/img/doctors/doctors-2.jpg" class="img-fluid"
                                                    width="300px" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-chevron-double-right"></i> Learn
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Sarah Jhonson</h4>
                                                <span>Anesthesiologist</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="member">
                                            <div class="member-img">
                                                <img src="frontpage-assets/img/doctors/doctors-3.jpg" class="img-fluid"
                                                    width="300px" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-chevron-double-right"></i> Learn
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>William Anderson</h4>
                                                <span>Cardiology</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="member">
                                            <div class="member-img">
                                                <img src="frontpage-assets/img/doctors/doctors-4.jpg" class="img-fluid"
                                                    width="300px" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-chevron-double-right"></i> Learn
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Amanda Jepson</h4>
                                                <span>Neurosurgeon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="member">
                                            <div class="member-img">
                                                <img src="frontpage-assets/img/doctors/doctors-1.jpg" class="img-fluid"
                                                    width="300px" alt="">
                                                <div class="social">
                                                    <a href=""><i class="bi bi-chevron-double-right"></i> Learn
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="member-info">
                                                <h4>Amanda Jepson</h4>
                                                <span>Neurosurgeon</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                            </div>

                            <br>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Doctors Section -->

        {{-- ========= Join ========== --}}
        <section id="join" class="appointment section-bg">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2>Bergabung ke LFA</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <form action="forms/appointment.php" method="post" role="form"
                    class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="alamat" id="alamat"
                                placeholder="Alamat" required="">
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="pelatihan" id="pelatihan"
                                placeholder="Pelatihan yang pernah anda ikuti" required="">
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Tujuan bergabung" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Selamat anda berhasil mendaftar sebagai anggota LFA!</div>
                    </div>
                    <div class="text-center"><button type="submit">Daftar</button></div>
                </form>

            </div>
        </section>
        {{-- ======== End Join ======== --}}

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                        fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

            </div>

            <div>
                {{-- <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d699.953981127032!2d113.67336526962386!3d-7.0634821143618645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9deac3da5b347%3A0x5b03c73b7aa70683!2sPondok%20Pesantren%20Annuqayah!5e0!3m2!1sid!2sid!4v1640328605159!5m2!1sid!2sid"
                    frameborder="0" allowfullscreen></iframe> --}}
            </div>

            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>PP ANNUQAYAH</h3>
                                    <p>Guluk Guluk, Sumenep, 69463</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email</h3>
                                    <p style="font-size: 75%">lf.annuqayah@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Kontak</h3>
                                    <p style="font-size: 75%">+62 852-3505-4727</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info-box mt-4 mb-4">
                                    <i class='bx bx-info-circle'></i>
                                    <h3>Sosmed</h3>
                                    <a href="https://facebook.com/lf.ppa"><i class="bx bxl-facebook"></i></a>
                                    <a href="https://www.instagram.com/lajnah_falakiyah_annuqayah/"><i
                                            class="bx bxl-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCwXQzX9WVACLOOmHeWiQ95Q"><i
                                            class='bx bxl-youtube'></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col form-group">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
