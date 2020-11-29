<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
            <div class="container">
                <a class="navbar-brand" href="{{url('index')}}">
                    <span class="fa fa-pencil-square-o"></span> Design Blog</a>
                <!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="{{url('public')}}/image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('index')}}"><i class="fa fa-home"></i> Beranda</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html"><i class="fa fa-info"></i> Info</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('login')}}"><i class="fa fa-lock"></i> Login</a>
                        </li>

                    </ul>

                    <!--/search-right-->
                    <div class="search-right mt-lg-0 mt-2">
                        <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
                        <!-- search popup -->
                        <div id="search" class="pop-overlay">
                            <div class="popup">

                                <h3 class="hny-title two">Cari Blog</h3>
                                <form action="#" method="Get" class="search-box">
                                    <input type="search" placeholder="Cari Blog Terbaru" name="search"
                                        required="required" autofocus="">
                                    <button type="submit" class="btn">Cari</button>
                                </form>
                                <a class="close" href="#close">×</a>
                            </div>
                        </div>
                        <!-- /search popup -->
                    </div>
                    <!--//search-right-->

                    <!-- author -->
                    <div class="header-author d-flex ml-lg-4 pl-2 mt-lg-0 mt-3">
                        <a class="img-circle img-circle-sm" href="#author">
                            <img src="{{url('public')}}/assets/images/author.jpg" class="img-fluid" alt="...">
                        </a>
                        <div class="align-self ml-3">
                            <a href="#author">
                                <h5>Sunardi</h5>
                            </a>
                            <span>Penulis</span>
                        </div>
                    </div>
                    <!-- // author-->
                </div>

                <!-- toggle switch for light and dark theme -->
                <div class="mobile-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </div>
        </nav>