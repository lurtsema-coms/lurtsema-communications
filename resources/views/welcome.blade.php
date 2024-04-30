<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lurtsema Communications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @php
        $background_url = asset('images/BG.png');
    @endphp
</head>
<body style="background-image: url('{{ $background_url }}'); background-repeat: no-repeat; background-size: cover;">
    <div id="nav-bar-container" class="sticky-top">
        <div class="container">
            @include('components.nav-bar')
        </div>
    </div>
    <div class="container">
        <section id="hero-section mx-5 my-5">
            <div class="mt-5">
                <h3 class="fw-bold text-center hero-text hero-text-small">MARKETING THAT SHAPES</h3>
                <h1 class="fw-bold text-center hero-text hero-text-big">YOUR SUCCESS</h1>
            </div>
            <div id="client-numbers" class="py-5 d-flex justify-content-around gap-5 align-items-center flex-wrap mt-5">
                <div class="client-card">
                    <h3 class="number-figure text-white">205<span class="number-plus fw-light">+</span></h3>
                    <p class="number-text text-white text-center">Happy Clients</p>
                </div>
                <div class="client-card card-big">
                    <h3 class="number-figure text-white">35<span class="number-plus fw-light">+</span></h3>
                    <p class="number-text text-white text-center">Active Customers</p>
                </div>
                <div class="client-card">
                    <h3 class="number-figure text-white">205<span class="number-plus fw-light">+</span></h3>
                    <p class="number-text text-white text-center">Happy Clients</p>
                </div>
            </div>
        </section>
        <section id="about" class="d-flex flex-column align-items-center my-5">
            <h2 class="text-white fw-bold mb-3 text-center">About Lurtsema Communications</h2>
            <p class="text-white fs-5 text-center mb-4">
            Lurtsema Communications understands the power of words and the impact of a strong digital presence.
            Whether you're looking to sway voters, boost your business' brand, or captivate an audience from the
            stage, out tema is dedicated to elevating your message and amplifying your voice.
            </p>
            <a href="#" class="text-decoration-none text-white rounded-pill border border-white px-4 py-2">Find out more</a>
        </section>
        <section id="founder" class="d-flex flex-column align-items-center">
            <div id="founder-box" class="row rounded-5 py-5 px-3">
                <div id="founder-photo-wrapper" class="col-md-4 position-relative">
                    <img id="founder-photo" class="img-fluid position-absolute" src="{{ asset('images/founder.png') }}" alt="">
                </div>
                <div id="founder-details" class="col-md-8">
                    <h2 class="text-white fw-bold">Joe Lurtsema</h2>
                    <h5 class="text-white fw-semi-bold mb-4">CEO/FOUNDER OF LURTSEMA COMMUNICATIONS</h5>
                    <p class="text-white mb-3">
                        Joseph Lurtsema is an award-winning Business Development Consultant that specializes in Digital Marketing & Professional Sales. He helps business leaders make exceptional decisions for reaching their Marketing & Sales goals using modern technological tools that help companies grow their revenue while increasing their margins.
                    </p>
                    <a href="#" class="text-decoration-none text-white rounded-pill border border-white px-4 py-2 my-5">Consult now!</a>
                </div>
            </div>
        </section>
        <section id="services" class="my-5">
            <h1 class="text-white fw-bold">Our services</h1>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium a nihil iste? Odio quae nemo debitis, veniam voluptate cupiditate unde enim sapiente porro repellendus voluptates rerum neque impedit maxime omnis?
            </p>
            <div id="service-cards container">
                <div id="service-card-wrapper" class="row g-3 justify-content-between">
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_5.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">Business Consulting</h5>
                        <p class="text-white">Let our team of experts help your business operations and maximize your profits.</p>
                    </div>
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_13.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">Social Media Marketing</h5>
                        <p class="text-white">We can hep you utilize all the social media out there to grow your business and connect with your audience.</p>
                    </div>
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_3.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">Website Development</h5>
                        <p class="text-white">We can help you build an awesome website that will get traffic and clicks to your content.</p>
                    </div>
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_17.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">SEO Optimization</h5>
                        <p class="text-white">Our SEO specialists can help you rank higher on search engines and drive more organic traffic to your website.</p>
                    </div>
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_9.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">Political Outreach</h5>
                        <p class="text-white">Let our team of experts help your business operations and maximize your profits.</p>
                    </div>
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_15.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">Videography</h5>
                        <p class="text-white">We offer professional videography services for everything from corporate videos to social media content.</p>
                    </div>
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_11.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">Google Ads</h5>
                        <p class="text-white">We can help you create and run effective Google Ads campagins that drive traffic and increase selling conversions.</p>
                    </div>
                    <div class="service-card col-md-3 border border-light rounded-4 px-3 py-2 my-3">
                        <div class="service-img-wrapper">
                            <img class="img-fluid" src="{{ asset('images/Icons/Icons_7.png') }}" alt="">
                        </div>
                        <h5 class="text-white fw-semibold">Graphic Design</h5>
                        <p class="text-white">Our talented designers can help you create and develop beautiful graphics to elevate your brand.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="awards" class="row">
            <div class="award-title col-md-4 d-flex flex-col justify-content-center align-items-center position-relative">
                <img class="img-fluid" src="{{ asset('images/award-left.png') }}" alt="">
            </div>
            <div class="award-photo col-md-4">
                <img src="{{ asset('images/awards.png') }}" alt="">
            </div>
            <div class="award-title col-md-4 d-flex flex-col justify-content-center align-items-center position-relative">
                <img class="img-fluid" src="{{ asset('images/award-right.png') }}" alt="">
            </div>
        </section>
        <section id="reels" class="my-5">
            <div class="d-flex flex-row flex-wrap justify-content-around align-items-center gap-3">
                <div class="reel-wrapper d-flex justify-content-center align-items-center bg-black text-white p-5 text-center rounded-3"><p>POLITICAL REEL HERE</p></div>
                <div class="reel-wrapper d-flex justify-content-center align-items-center bg-black text-white p-5 text-center rounded-3"><p>BUSINESS REEL HERE</p></div>
            </div>
        </section>
    </div>
    <div id="connect-container" class="p-2 my-5">
        <div class="container">
            <section id="connect" class="d-flex flex-column justify-content-center align-items-center my-5">
                <h2 class="text-center text-white fw-bold">Let's Connect</h2>
                <h3 class="text-white text-center fw-semibold">Ready to elevate your communication strategy?</h3>
                <p class="text-center text-white">Contact us today to schedule a consultation</p>
                <a href="#" id="contact-us-btn" class="text-decoration-none text-white rounded-pill px-4 py-2">Contact us</a>
            </section>
        </div>
    </div>
    <div class="container my-5">
        <h1 class="text-white text-center fw-bold">Our Awesome Clients</h1>
        <div id="business-clients" class="client-type my-3 d-flex flex-column justify-content-center align-items-center">
            <div class="client-type-line"></div>
            <div class="client-type-text text-center text-white px-4 py-2 rounded-pill fw-semibold">BUSINESS CLIENTS</div>
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
        <div id="political-clients" class="client-type my-3 d-flex flex-column justify-content-center align-items-center">
            <div class="client-type-line"></div>
            <div class="client-type-text text-center text-white px-4 py-2 rounded-pill fw-semibold">POLITICAL CLIENTS</div>
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
    </div>
</body>
</html>