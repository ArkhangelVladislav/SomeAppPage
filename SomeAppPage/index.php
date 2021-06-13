<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main | SomeAppPage</title>
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/owl.carousel.js"></script>
</head>
<body>
    <header>
        <div class="row">
            <div class="container">
                <a href="#description" class="header__logo">SomeAppPage</a>
                <nav class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item item-1 active"><a href="#">Home</a></li>
                        <li class="header__menu-item item-2"><a href="#">About</a></li>
                        <li class="header__menu-item item-3"><a href="#">Work</a></li>
                        <li class="header__menu-item item-3"><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="description">
            <div class="container flex-box">
                <div class="left"><img src="/images/description_img.png" alt=""></div>
                <div class="right">
                    <h1>We design iOS apps</h1>
                    <p><span>Ut In Nulla Enim. Phasellus Molestie Magna Non Est Bibendum Non Venenatis ut In Nulla Enim. Phasellus Molestie.</span></p>
                    <p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie tempor. Suspendisse dictum feugiat.</p>
                    <div class="flex-box">
                        <a href="#" class="btn btn-blue"><span>Request a quote</span></a>
                        <p>or</p>
                        <a class="see" href="#">See our recent work</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="clients">
            <div class="container flex-box">
                <img src="/images/clients_icon-1.png" alt="">
                <img src="/images/clients_icon-2.png" alt="">
                <img src="/images/clients_icon-3.png" alt="">
                <img src="/images/clients_icon-4.png" alt="">
                <img src="/images/clients_icon-5.png" alt="">
            </div>
        </section>
        <section class="services">
            <div class="container flex-box">
                <div>
                    <img src="/images/services_img-1.png" alt="">
                    <h5>Engaging interfaces</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis.</p>
                    <a href="#" class="btn btn-blue"><span>Read more</span></a>
                </div>
                <div>
                    <img src="/images/services_img-2.png" alt="">
                    <h5>Usable designs</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis.</p>
                    <a href="#" class="btn btn-blue"><span>Read more</span></a>
                </div>
                <div>
                    <img src="/images/services_img-3.png" alt="">
                    <h5>Solid development</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis.</p>
                    <a href="#" class="btn btn-blue"><span>Read more</span></a>
                </div>
            </div>
        </section>
        <section class="projects">
                <div class="container">
                    <h2>Selected projects</h2>
                    <div class="projects-slider arrows owl-carousel">
                        <a href="#" class="partners-slider-items"><img src="/images/projects_img-1.png" alt=""></a>
                        <a href="#" class="partners-slider-items"><img src="/images/projects_img-2.png" alt=""></a>
                        <a href="#" class="partners-slider-items"><img src="/images/projects_img-3.png" alt=""></a>
                        <a href="#" class="partners-slider-items"><img src="/images/projects_img-4.png" alt=""></a>
                        <a href="#" class="partners-slider-items"><img src="/images/projects_img-1.png" alt=""></a>
                        <a href="#" class="partners-slider-items"><img src="/images/projects_img-2.png" alt=""></a>
                    </div>
                </div>
        </section>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.projects-slider').owlCarousel({
                    pagination: false,
                    nav: true,
                    autoplay: false,
                    autoplayTimeout: 200000,
                    itemsDesktop: false,
                    itemsMobile: false,
                    center: false,
                    navText: false,
                    margin: 20,
                    dots: false,
                    loop: true,
                    responsive : {
                        500 : {
                            items: 2,
                            margin: 10
                        },
                        700 : {
                            items: 3,
                            margin: 10
                        },
                        1100 : {
                            items: 4,
                            margin: 10
                        },
                        1300 : {
                            items: 5
                        }
                    }
                });
            });
        </script>
        <section class="blog">
            <div class="container flex-box">
                <div class="left page">
                    <h2>From our blog</h2>
                    <div class="items item-1 flex-box">
                        <img src="/images/blog_img-1.png" alt="" class="left">
                        <div class="text">
                            <h5>Our work process reviewed</h5>
                            <p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus mauris.<a href="#">Read more...</a></p>
                            <span class="time">01/01/13 - 10:21 AM</span>
                        </div>
                    </div>
                    <div class="items item-2 flex-box">
                        <img src="/images/blog_img-2.png" alt="" class="left">
                        <div class="text">
                            <h5>Who we are at Appcompany</h5>
                            <p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus mauris.<a href="#">Read more...</a></p>
                            <span class="time">01/01/13 - 10:21 AM</span>
                        </div>
                    </div>
                    <div class="items item-3 flex-box">
                        <img src="/images/blog_img-1.png" alt="" class="left">
                        <div class="text">
                            <h5>Our work process reviewed</h5>
                            <p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus mauris.<a href="#">Read more...</a></p>
                            <span class="time">01/01/13 - 10:21 AM</span>
                        </div>
                    </div>
                    <div class="items item-4 flex-box">
                        <img src="/images/blog_img-2.png" alt="" class="left">
                        <div class="text">
                            <h5>Who we are at Appcompany</h5>
                            <p>Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus mauris.<a href="#">Read more...</a></p>
                            <span class="time">01/01/13 - 10:21 AM</span>
                        </div>
                    </div>
                    <span onclick="$(this).parents('.left').toggleClass('open'); var html = $(this).html(); $(this).html($(this).attr('data-content')); $(this).attr('data-content',html);" data-content="Close">Read more</span>
                </div>
                <div class="right page">
                    <h2>Our Twitter feed</h2>
                    <div class="items">
                        <p><span>@Apptastico:</span> In <a href="">pellentesque.com</a> faucibus vestibulum. Nulla at nulla justo, eget Duis aliquet egestas <a href="">#purus</a> in <a href="">#blandit.</a></p>
                        <span class="time">01/01/13 - 10:21 AM</span>
                    </div>
                    <div class="items">
                        <p><span>@Apptastico:</span> In <a href="">pellentesque.com</a> faucibus vestibulum. Nulla at nulla justo, eget Duis aliquet egestas <a href="">#purus</a> in <a href="">#blandit.</a></p>
                        <span class="time">01/01/13 - 10:21 AM</span>
                    </div>
                    <div class="items">
                        <p><span>@Apptastico:</span> In <a href="">pellentesque.com</a> faucibus vestibulum. Nulla at nulla justo, eget Duis aliquet egestas <a href="">#purus</a> in <a href="">#blandit.</a></p>
                        <span class="time">01/01/13 - 10:21 AM</span>
                    </div>
                    <a href="#">Follow us on Twitter</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container flex-box">
            <span></span>
            <p>© some name at some year</p>
            <div class="links">
                <a href="#" class="link fb" target="_blank"></a>
                <a href="#" class="link tw" target="_blank"></a>
                <a href="#" class="link in" target="_blank"></a>
                <a href="#" class="link dr" target="_blank"></a>
            </div>
        </div>
    </footer>
</body>
</html>