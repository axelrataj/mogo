<!DOCTYPE html>
<html xml:lang="pl" lang="pl">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title></title>

    <!-- CSS -->
    <link rel="stylesheet" href="/assets/css/style.css"/>

    <!-- JS -->
    <script src="/assets/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700|Roboto:300i,400&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>

    <header class="header-main">
        <div class="container clearfix">

            <h1 class="logo">MoGo</h1>
            <div class="nav-main-container">
                <nav class="nav-main">
                    <ul>
                        <li><a href="">About</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Work</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact</a></li>
                        <li><a href=""><img src="/assets/gfx/header/icons/search.png" alt=""></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>

    <section class="slider-section">
        <img src="/assets/gfx/banner-section/banner.jpg" class="img-responsive" alt="">
    </section>

    <section class="about-section section">
        <div class="container">

            <header class="header-section">
                <h2>
                    What we do
                    <strong>Story about us</strong>
                </h2>
                <div class="separator"></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat.
                </p>
            </header>

            <div class="row">
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/about/img-1.jpg" class="img-responsive" alt="">
                        <div class="hover">
                            <div class="bg"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/assets/gfx/about/icons/user.png" alt="">
                                    <p>Super Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/about/img-2.jpg" class="img-responsive" alt="">
                        <div class="hover">
                            <div class="bg"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/assets/gfx/about/icons/user.png" alt="">
                                    <p>Super Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/about/img-3.jpg" class="img-responsive" alt="">
                        <div class="hover">
                            <div class="bg"></div>
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/assets/gfx/about/icons/user.png" alt="">
                                    <p>Super Team</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="counters section hidden-xs">
            <div class="container">

                <ul class="clearfix">
                    <li>
                        <strong data-end-count="90">0</strong>
                        <p>web design projects</p>
                    </li>
                    <li>
                        <strong data-end-count="123">0</strong>
                        <p>happy client</p>
                    </li>
                    <li>
                        <strong data-end-count="15">0</strong>
                        <p>award winner</p>
                    </li>
                    <li>
                        <strong data-end-count="99">0</strong>
                        <p>cup of coffee</p>
                    </li>
                    <li>
                        <strong data-end-count="24">0</strong>
                        <p>members</p>
                    </li>
                </ul>

            </div>
        </div>
    </section>

    <script>
        (function() {

            var counter = $('.about-section .counters ul li');

            counter.each(function () {

                $(this).find('strong').prop('Counter', 0).animate({
                    Counter: $(this).find('strong').attr('data-end-count')
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });

            });

            /*counter.each(function (i, e) {

                var countContainer = $($(e).find('strong')),
                    endCount = countContainer.attr('data-end-count');


                setTimeout(function () {
                for(var i = 0; i < endCount; i++ ) {


                    countContainer.html(i);

                }


                }, 800);
               /!*

                console.log(endCount);*!/

            });*/

        })();
    </script>

    <section class="services-section section">
        <div class="container">

            <header class="header-section">
                <h2>
                    We work with
                    <strong>Amazing Services</strong>
                </h2>
                <div class="separator"></div>
            </header>

            <div class="row">
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/services-section/icons/photography.png" alt="">
                        <p>
                            <strong>Photography</strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/services-section/icons/web-design.png" alt="">
                        <p>
                            <strong>Web design</strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/services-section/icons/creativity.png" alt="">
                        <p>
                            <strong>Creativity</strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="clearfix hidden-xs"></div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/services-section/icons/seo.png" alt="">
                        <p>
                            <strong>seo</strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/services-section/icons/css-html.png" alt="">
                        <p>
                            <strong>css/html</strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box">
                        <img src="/assets/gfx/services-section/icons/digital.png" alt="">
                        <p>
                            <strong>Digital</strong>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="devices-section section">
        <div class="container">



        </div>
    </section>

</body>
</html>
