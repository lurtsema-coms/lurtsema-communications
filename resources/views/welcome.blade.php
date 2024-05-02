<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lurtsema Communications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav-bar.css')}}">
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @php
        $background_url = asset('images/BG.png');
        $font_url = asset('font/Bebas Neue.ttf');
    @endphp
    <style>
        @font-face {
            font-family: "Bebas Neue";
            src: url("{{ $font_url }}") format("truetype");
        }

        .besbas {
            font-family: "Bebas Neue", sans-serif;
        }

        .arial {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body style="background-image: url('{{ $background_url }}'); background-repeat: repeat; background-size: cover;">
    <div id="hero-background">
        <img id="hero-background-image" src="{{ asset('images/KNYA6641.jpg') }}" alt="">
    </div>
    <div id="nav-bar-container" class="sticky-top">
        <div class="container">
            @include('components.nav-bar')
        </div>
    </div>
    <div class="container d-flex flex-column justify-content-center align-items-center gap-5">
        <section id="hero-section mx-5 my-5">
                <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
                    <img id="hero-text" src="{{ asset('images/hero-message.png') }}" alt="">
                </div>
                <div id="client-number" class="row row-cols-sm-1 row-cols-md-3 justify-content-center align-items-center flex-wrap">
                    <img class="number-figure col img-fluid" src="{{ asset('images/number-clients.png') }}" alt="">
                    <img class="number-figure col img-fluid" src="{{ asset('images/number-customers.png') }}" alt="">
                    <img class="number-figure col img-fluid" src="{{ asset('images/number-campaigns.png') }}" alt="">
                </div>
        </section>
        <section id="about" class="d-flex flex-column align-items-center my-5">
            <h2 class="text-white fw-bold mb-3 text-center">About Lurtsema Communications</h2>
            <p class="text-white fs-5 text-center mb-4">
            Lurtsema Communications understands the power of words and the impact of a strong digital presence.
            Whether you're looking to sway voters, boost your business' brand, or captivate an audience from the
            stage, our team is dedicated to elevating your message and amplifying your voice.
            </p>
            <a href="#" class="text-decoration-none text-white rounded-pill border border-white px-4 py-1">Find out more</a>
        </section>
        <section id="founder" class="d-flex flex-column align-items-center">
            <div id="founder-box" class="row rounded-5 py-5 px-3">
                <div id="founder-photo-wrapper" class="col-md-4 position-relative">
                    <img id="founder-photo" class="img-fluid position-absolute" src="{{ asset('images/founder.png') }}" alt="">
                </div>
                <div id="founder-details" class="col-md-8 p-5">
                    <h2 class="text-white fw-bold">Joe Lurtsema</h2>
                    <h5 class="text-white fw-semi-bold mb-4 besbas">CEO/FOUNDER OF LURTSEMA COMMUNICATIONS</h5>
                    <p class="text-white mb-4">
                        Joseph Lurtsema is an award-winning Business Development Consultant that specializes in Digital Marketing & Professional Sales. He helps business leaders make exceptional decisions for reaching their Marketing & Sales goals using modern technological tools that help companies grow their revenue while increasing their margins.
                    </p>
                    <a href="#" class="text-decoration-none text-white rounded-pill border border-white px-4 py-1 my-5">Consult now!</a>
                </div>
            </div>
        </section>
        <section id="services" class="my-5 mb-5">
            <h1 class="text-white fw-bold">Our services</h1>
            <p class="text-white mb-3">
                We specialize in delivering comprehensive marketing solutions and creative services </br>
                tailored to elevate your brands's presence in today's competetive landscape.
            </p>
            <div id="service-card-wrapper" class="row row-cols-xl-5 justify-content-center gap-5 my-5">
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_5.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_6.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">Business Consulting</h5>
                    <p class="text-white service-description">Let our team of experts help your business operations and maximize your profits.</p>
                </div>
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_13.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_14.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">Social Media Marketing</h5>
                    <p class="text-white service-description">We can hep you utilize all the social media out there to grow your business and connect with your audience.</p>
                </div>
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_3.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_4.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">Website Development</h5>
                    <p class="text-white service-description">We can help you build an awesome website that will get traffic and clicks to your content.</p>
                </div>
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_17.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_18.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">SEO Optimization</h5>
                    <p class="text-white service-description">Our SEO specialists can help you rank higher on search engines and drive more organic traffic to your website.</p>
                </div>
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_9.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_10.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">Political Outreach</h5>
                    <p class="text-white service-description">Let our team of experts help your business operations and maximize your profits.</p>
                </div>
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_15.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_16.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">Videography</h5>
                    <p class="text-white service-description">We offer professional videography services for everything from corporate videos to social media content.</p>
                </div>
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_11.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_12.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">Google Ads</h5>
                    <p class="text-white service-description">We can help you create and run effective Google Ads campagins that drive traffic and increase selling conversions.</p>
                </div>
                <div class="service-card d-flex flex-column align-items-start gap-2 col-sm-4 flex-grow-1 border border-light rounded-4 p-4">
                    <div class="service-img-wrapper mb-3">
                        <img class="img-fluid show" src="{{ asset('images/Icons/Icons_7.png') }}" alt="">
                        <img class="img-fluid hide" src="{{ asset('images/Icons/Icons_8.png') }}" alt="">
                    </div>
                    <h5 class="text-white fw-semibold">Graphic Design</h5>
                    <p class="text-white service-description">Our talented designers can help you create and develop beautiful graphics to elevate your brand.</p>
                </div>
            </div>
        </section>
        <section id="awards" class="row my-5">
            <div class="col-md-1"></div>
            <div class="award-title col-md-4 d-flex flex-col justify-content-center align-items-center position-relative">
                <img class="img-fluid" src="{{ asset('images/award-left.png') }}" alt="">
            </div>
            <div class="award-photo col-md-2">
                <img src="{{ asset('images/Award.png') }}" alt="">
            </div>
            <div class="award-title col-md-4 d-flex flex-col justify-content-center align-items-center position-relative">
                <img class="img-fluid" src="{{ asset('images/award-right.png') }}" alt="">
            </div>
            <div class="col-md-1"></div>
        </section>
        {{-- <section id="reels" class="my-5">
            <div class="d-flex flex-row flex-wrap justify-content-around align-items-center gap-3">
                <div class="reel-wrapper d-flex justify-content-center align-items-center bg-black text-white p-5 text-center rounded-3"><p>POLITICAL REEL HERE</p></div>
                <div class="reel-wrapper d-flex justify-content-center align-items-center bg-black text-white p-5 text-center rounded-3"><p>BUSINESS REEL HERE</p></div>
            </div>
        </section> --}}
    </div>
    <div id="connect-container" class="p-2 my-5">
        <div class="container">
            <section id="connect" class="d-flex flex-column justify-content-center align-items-center my-5">
                <h1 class="text-center text-white fw-bold">Let's Connect</h1>
                <h2 class="text-white text-center fw-semibold">Ready to elevate your communication strategy?</h2>
                <p class="text-center text-white">Contact us today to schedule a consultation</p>
                <a href="#" id="contact-us-btn" class="text-decoration-none text-white rounded-pill px-4 py-1">Contact us</a>
            </section>
        </div>
    </div>
    set
    <div class="container my-5">
        <section id="clients" class="mt-5">
            <h1 class="text-white text-center fw-bold">Our Awesome Clients</h1>
            <div id="business-clients" class="client-type my-5 d-flex flex-column justify-content-center align-items-center">
                <div class="client-type-line"></div>
                <div class="client-type-text text-center text-white px-4 py-1 rounded-pill">BUSINESS CLIENTS</div>
            </div>
            <div class="row mt-5">
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/business-logo-white/Alaska Soda Jerk.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/business-logo-white/Cut Loose AK.jpg') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/business-logo-white/ATOM Center.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/business-logo-white/Muldoon Pizza1.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/business-logo-white/Mile 5.2 Greenhouse.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/business-logo-white/Everett\'s Restaurant.png') }}" alt="">
                </div>
            </div>
            <div id="political-clients" class="client-type my-3 mt-5 d-flex flex-column justify-content-center align-items-center">
                <div class="client-type-line"></div>
                <div class="client-type-text text-center text-white px-4 py-1 rounded-pill">POLITICAL CLIENTS</div>
            </div>
            <div class="row mt-5">
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/political-logo-white/Craig Johnson.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/political-logo-white/Doug Massie.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/political-logo-white/Kelly Merrick.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/political-logo-white/Cathy Tilton.jpg') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/political-logo-white/Forrest Wolfe.png') }}" alt="">
                </div>
                <div class="col-md-2">
                    <img class="img-fluid client-photo mx-auto d-block" src="{{ asset('images/political-logo-white/Alina Rubeo.jpg') }}" alt="">
                </div>
            </div>
        </section>
    </div>
    <footer>
        <div id="footer-top">
            <div class="container py-5">
                <div class="row row-cols-1 row-cols-xl-2">
                    <div class="col row row-cols-1 row-cols-md-3">
                        <div class="col mt-3">
                            <h4 class="text-white fw-semibold mb-3">Marketing</h4>
                            <p class="text-white mb-2">Business Consulting</p>
                            <p class="text-white mb-2">Social Media Marketing</p>
                            <p class="text-white mb-2">Google Ads</p>
                            <p class="text-white mb-2">SEO Optimization</p>
                            <p class="text-white mb-2">Political Outreach</p>
                        </div>
                        <div class="col mt-3">
                            <h4 class="text-white fw-semibold mb-3">Creatives</h4>
                            <p class="text-white mb-2">Videography</p>
                            <p class="text-white mb-2">Photography</p>
                            <p class="text-white mb-2">Website Development</p>
                            <p class="text-white mb-2">Graphic Design</p>
                            <p class="text-white mb-2">Logo Development</p>
                        </div>
                        <div class="col mt-3">
                            <h4 class="text-white fw-semibold mb-3">Other</h4>
                            <p class="text-white mb-2">Solar Panels</p>
                            <p class="text-white mb-2">Real State Consulting</p>
                            <p class="text-white mb-2">Sales Training</p>
                            <p class="text-white mb-2">Campaign USA</p>
                        </div>
                    </div>
                    <div class="col d-flex flex-column justify-content-between">
                        <div class="footer-logo d-flex justify-content-end">
                            <img src="{{ asset('images/Icon.png') }}" alt="">
                        </div>
                        <div class="footer-contact">
                            <p class="text-white text-end besbas m-0">INFO@LURTSEMACOMMUNICATIONS.COM</p>
                            <p class="text-white text-end besbas m-0">6390 NORM DRIVE, ANDHCORAGE, ALASKA 99507, UNITED STATES</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer-bottom">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between py-5 gap-3">
                    <div class="d-flex flex-wrap gap-4">
                        <div class="footer-bottom-text text-nowrap text-light">All Rights Reserved <span id="current-year"></span></div>
                        <div class="footer-bottom-text text-nowrap text-light">Terms</div>
                        <div class="footer-bottom-text text-nowrap text-light">Privacy</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between gap-3 mt-3">
                        <div id="soc-med" class="d-flex gap-2">
                            <a target="_blank" href="https://www.youtube.com/@LurtsemaCommunications"><img src="{{ asset('images/logo-socmed/logo-yt.png') }}" class="socmed-logo" alt=""></a>
                            <a target="_blank" href="https://www.facebook.com/lurtsemacommunications"><img src="{{ asset('images/logo-socmed/logo-fb.png') }}" class="socmed-logo" alt=""></a>
                            <a target="_blank" href="https://www.instagram.com/lurtsemacommunications/"><img src="{{ asset('images/logo-socmed/logo-ig.png') }}" class="socmed-logo" alt=""></a>
                            <a target="_blank" href="http://www.linkedin.com/company/lurtsemacommunications"><img src="{{ asset('images/logo-socmed/logo-li.png') }}" class="socmed-logo" alt=""></a>
                        </div>
                        <div>
                            <a href="https://hrportal.lurtsemacommunications.com/public/" target="_blank" class="text-decoration-none text-nowrap bg-light text-dark rounded-pill border border-white px-4 py-1 my-5">Employee Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        const yearSpan = document.getElementById('current-year');
        yearSpan.textContent = new Date().getFullYear();
        $('#nav-bar-toggle').on('click', function() {
            $('#nav-small-screen').slideToggle();
        });

        $('#nav-small-screen a').on('click', function() {
            $('#nav-small-screen').slideToggle();
        })
    </script>
</body>
</html>