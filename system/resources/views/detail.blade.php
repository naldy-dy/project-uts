<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My-Blog</title>

    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('public')}}/assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header class="w3l-header">
        <!--/nav-->
        @include('section.header')
        <!--//nav-->
    </header>
    <!-- //header -->

    <div class="w3l-homeblock1 py-5">
        <div class="container pt-md-4">
            <!-- block -->
             <!-- block -->
                <div class="item">
                    <div class="row shadow">
                        <div class="col-lg-3">
                            <a href="#blog-single">
                                <img class="card-img-bottom pt-4 d-block radius-image" src="{{url('public')}}/assets/images/p3.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-lg-9 blog-details align-self p-3 mt-lg-0 mt-sm-5 mt-4">
                            <a href="{{url('blog')}}" class="blog-desc-big">Disni adalah judul blog penulis
                            </a>
                            <p>Ini adalah diskripsi penulis dari latar isi blog Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <div class="author align-items-center mt-4 mb-1">
                                <a href="#author">Johnson smith</a> in <a href="#url">Design</a>
                            </div>
                            <ul class="blog-meta">
                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"> April 13, 2020 </span>
                                </li>
                                <li class="meta-item blog-students">
                                    <span class="meta-value"> 6min read</span>
                                </li>
                            </ul> <hr>
                    </div>
                </div>

                <div class="row pt-5">
                    <div class="col-md-12 card-header">
                        <h4>Komentar</h4>
                    </div>
                </div>
                <div class="col-md-6 shadow pt-3 mt-3">
                         <div class="card">
                            <div class="card-body">
                                 <form>
                                     <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nama">
                                     </div>
                                     <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email">
                                     </div>
                                     <div class="form-group">
                                         <textarea class="form-control" placeholder="Komentar"></textarea>
                                    </div>
                                    <button class="btn btn-primary float-right"><i class="fa fa-paper-plane-o"></i> Kirim</button>
                                </form>
                             </div>
                        </div>
                    </div> 
                </div>

                <div class="row pt-5">
                    <div class="col-md-12 card-header">
                        <h4>Lihat Komentar Lainnya</h4>
                    </div>
                </div>
                <div class="row pt-3 pb-3">
                 <!-- isi komentar -->
        <!-- COpy Komentar dari sini -->
                <div class="card shadow col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 40px; border-radius: 50%;" alt="..."> Rahmad Ardianto</h5>
                        <p class="card-text" style="font-size: 13px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                    </div>
                        <strong style="font-size: 13px"><a href="{{url('balas')}}" class="float-right pb-3"><i class="fa fa-reply" aria-hidden="true"></i> Balas Komentar</a></strong>
                    <!-- Balas Komentar -->
                    <div class="card-body">
                        <h6 class="card-title float-right">Rahmad Ardianto <img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 30px; border-radius: 50%;" alt="..."></h6>
                        <p class="card-text float-right" style="font-size: 11px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                        <small class="text-muted float-right" style="font-size: 11px;"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>

                        <small class="text-muted float-right"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>
            <!-- COpy Komentar dari sini -->

              <!-- COpy Komentar dari sini -->
                <div class="card shadow col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 40px; border-radius: 50%;" alt="..."> Rahmad Ardianto</h5>
                        <p class="card-text" style="font-size: 13px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                    </div>
                        <strong style="font-size: 13px"><a href="{{url('balas')}}" class="float-right pb-3"><i class="fa fa-reply" aria-hidden="true"></i> Balas Komentar</a></strong>
                    <!-- Balas Komentar -->
                    <div class="card-body">
                        <h6 class="card-title float-right">Rahmad Ardianto <img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 30px; border-radius: 50%;" alt="..."></h6>
                        <p class="card-text float-right" style="font-size: 11px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                        <small class="text-muted float-right" style="font-size: 11px;"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>

                        <small class="text-muted float-right"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>
            <!-- COpy Komentar dari sini -->

              <!-- COpy Komentar dari sini -->
                <div class="card shadow col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 40px; border-radius: 50%;" alt="..."> Rahmad Ardianto</h5>
                        <p class="card-text" style="font-size: 13px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                    </div>
                        <strong style="font-size: 13px"><a href="{{url('balas')}}" class="float-right pb-3"><i class="fa fa-reply" aria-hidden="true"></i> Balas Komentar</a></strong>
                    <!-- Balas Komentar -->
                    <div class="card-body">
                        <h6 class="card-title float-right">Rahmad Ardianto <img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 30px; border-radius: 50%;" alt="..."></h6>
                        <p class="card-text float-right" style="font-size: 11px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                        <small class="text-muted float-right" style="font-size: 11px;"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>

                        <small class="text-muted float-right"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>
            <!-- COpy Komentar dari sini -->

              <!-- COpy Komentar dari sini -->
                <div class="card shadow col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 40px; border-radius: 50%;" alt="..."> Rahmad Ardianto</h5>
                        <p class="card-text" style="font-size: 13px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                    </div>
                        <strong style="font-size: 13px"><a href="{{url('balas')}}" class="float-right pb-3"><i class="fa fa-reply" aria-hidden="true"></i> Balas Komentar</a></strong>
                    <!-- Balas Komentar -->
                    <div class="card-body">
                        <h6 class="card-title float-right">Rahmad Ardianto <img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 30px; border-radius: 50%;" alt="..."></h6>
                        <p class="card-text float-right" style="font-size: 11px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                        <small class="text-muted float-right" style="font-size: 11px;"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>

                        <small class="text-muted float-right"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>
            <!-- COpy Komentar dari sini -->

              <!-- COpy Komentar dari sini -->
                <div class="card shadow col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 40px; border-radius: 50%;" alt="..."> Rahmad Ardianto</h5>
                        <p class="card-text" style="font-size: 13px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                    </div>
                        <strong style="font-size: 13px"><a href="{{url('balas')}}" class="float-right pb-3"><i class="fa fa-reply" aria-hidden="true"></i> Balas Komentar</a></strong>
                    <!-- Balas Komentar -->
                    <div class="card-body">
                        <h6 class="card-title float-right">Rahmad Ardianto <img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 30px; border-radius: 50%;" alt="..."></h6>
                        <p class="card-text float-right" style="font-size: 11px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                        <small class="text-muted float-right" style="font-size: 11px;"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>

                        <small class="text-muted float-right"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>
            <!-- COpy Komentar dari sini -->

              <!-- COpy Komentar dari sini -->
                <div class="card shadow col-md-3">
                    <div class="card-body">
                        <h5 class="card-title"><img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 40px; border-radius: 50%;" alt="..."> Rahmad Ardianto</h5>
                        <p class="card-text" style="font-size: 13px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                    </div>
                        <strong style="font-size: 13px"><a href="{{url('balas')}}" class="float-right pb-3"><i class="fa fa-reply" aria-hidden="true"></i> Balas Komentar</a></strong>
                    <!-- Balas Komentar -->
                    <div class="card-body">
                        <h6 class="card-title float-right">Rahmad Ardianto <img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" style="height: 30px; border-radius: 50%;" alt="..."></h6>
                        <p class="card-text float-right" style="font-size: 11px;">" This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. "</p>
                        <small class="text-muted float-right" style="font-size: 11px;"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>

                        <small class="text-muted float-right"><i class="fa fa-calendar" aria-hidden="true"></i> Jumat, 25 November 2020</small>
                    </div>
            <!-- COpy Komentar dari sini -->

                </div>
            </div>
                
        </div>
            <!-- //block -->
<!-- ambil------------------------------------------------------------------------------------------------------------------------------ -->

            
       
    <!-- footer -->
    <footer class="w3l-footer-16">
       @include('section.footer')

        <!-- move top -->
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function () {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
        <!-- //move top -->
    </footer>
    <!-- //footer -->

    <!-- Template JavaScript -->
 @include('section.js')

</body>

</html>