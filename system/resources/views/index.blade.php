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
        <div class="container">
            <!-- block -->
            <div class="row">

             <!-- Copy dari sini -->
            @foreach($list_blog as $blog)
                <div class="item mt-3">
                    <div class="row shadow">
                        <div class="col-lg-6">
                            <a href="{{url('blog')}}">
                                <img class="card-img-bottom d-block pt-3 radius-image" src="{{url('public')}}/assets/images/p3.jpg"
                                    alt="Card image cap">
                            </a>
                        </div>
                        <div class="col-lg-6 blog-details align-self pt-3 mt-lg-0 mt-sm-5 mt-4">
                            <a href="{{url('detail', $blog->id)}}" class="blog-desc-big">{{$blog->judul}}
                            </a>
                            <p>
                                {{$blog->deskripsi}}
                            </p>
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
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- Copy sampai sini -->

                <!-- Copy dari sini -->
        

            </div>
        </div>      
    </div>
            
       
    <!-- footer -->
    <footer class="w3l-footer-16">
        @include('section.footer')>

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