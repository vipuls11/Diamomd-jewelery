@extends('layout')
@section('content')
    {{-- -----------card slider----------- --}}
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css') }}">
    <style>
        .video-container {
            width: 100%;
            /* Adjust width as needed */
            max-width: 100%;
            /* Ensure the video doesn't exceed its container */
            overflow: hidden;
            /* Hide overflow content */

        }

        @-webkit-keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-230px * 7));
            }
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-230px * 7));
            }
        }

        .slider {
            background: #252425;
            border-bottom: 1px solid black;
            border-top: 1px solid black;
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
            height: 40px;
            line-height: 40px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 100%;
            color: #fff;
        }

        .slider::before,
        .slider::after {
            background: linear-gradient(to right, rgb(36, 32, 32) 1%, rgba(255, 255, 255, 0) 100%);
            content: "";
            height: 40px;
            position: absolute;
            width: 50px;
            z-index: 2;
        }

        .slider::after {
            right: 0;
            top: 0;
            transform: rotateZ(350deg);
        }

        .slider::before {
            left: 0;
            top: 0;
        }

        .slider .slide-track {
            -webkit-animation: scroll 40s linear infinite;
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(330px * 15);
            text-align: center;
        }

        .slider .slide {
            height: 40px;
            width: 330px;
        }

        .slide-track:hover {
            animation-play-state: paused;
        }

        .text_container {
            display: grid;
            gap: 20px;
            grid-template-columns: repeat(5, 1fr);
            /* border: 1px solid black; */
        }

        .column {
            border: 1px solid black;
            height: 200px;
            text-align: center;
            display: flex;
            padding: 0 20px;
            align-items: center;
        }

        /* ---------sleder start--------------- */
        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide h2 {
            font-size: 16px;
            margin: 13px 0;
        }

        .swiper-slide a {
            color: #252425;
            text-decoration: none;
        }

        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 250px) and (max-width: 349px) {

            .text_container {
                display: grid;
                gap: 40px;
                grid-template-columns: repeat(1, 1fr);

                /* border: 1px solid black; */
            }

            .column {
                border: 1px solid black;
                height: 200px;
                text-align: center;
                display: flex;
                padding: 0 20px;
                align-items: center;
                margin-bottom: 30px;
            }

        }

        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 350px) and (max-width: 480px) {

            .text_container {
                display: grid;
                gap: 20px;
                grid-template-columns: repeat(2, 1fr);

                /* border: 1px solid black; */
            }

            .column {
                border: 1px solid black;
                height: 200px;
                text-align: center;
                display: flex;
                padding: 0 20px;
                align-items: center;
                margin-bottom: 30px;
            }

        }

        /* Media Query for low resolution  Tablets, Ipads */
        @media (min-width: 481px) and (max-width: 767px) {

            .text_container {
                display: grid;
                gap: 20px;
                grid-template-columns: repeat(2, 1fr);

                /* border: 1px solid black; */
            }

            .column {
                border: 1px solid black;
                height: 200px;
                text-align: center;
                display: flex;
                padding: 0 20px;
                align-items: center;
                margin-bottom: 30px;
            }

        }

        /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1024px) {

            .text_container {
                display: grid;
                gap: 20px;
                grid-template-columns: repeat(3, 1fr);

                /* border: 1px solid black; */
            }

            .column {
                border: 1px solid black;
                height: 200px;
                text-align: center;
                display: flex;
                padding: 0 20px;
                align-items: center;
                margin-bottom: 30px;
            }
        }

        /* Media Query for Laptops and Desktops */
        @media (min-width: 1025px) and (max-width: 1280px) {}

        .Card {
            position: relative;
        }

        .card_img {
            position: absolute;
            top: -40px;
            left: 45%;
        }

        .Mein_card {
            height: 70vh;
            border-radius: 30px;
        }
    </style>
    {{-- <div class="video-container"> --}}
    <video autoplay muted loop style="width:100%">
        <source src="{{ url('home-page/For You.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    {{-- </div> --}}
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
                Diamond Exporter
            </div>
            <div class="slide">
                Cut and Polished Diamond
            </div>
            <div class="slide">
                Faith Transparacy and Quality Diamond
            </div>
            <div class="slide">
                Fancy Color Stones
            </div>
            <div class="slide">
                Certified and None Certified Diamond
            </div>
            <div class="slide">
                Diamond Exporter
            </div>
            <div class="slide">
                Cut and Polished Diamond
            </div>
            <div class="slide">
                Faith Transparacy and Quality Diamond
            </div>
            <div class="slide">
                Fancy Color Stones
            </div>
            <div class="slide">
                Certified and None Certified Diamond
            </div>
            <div class="slide">
                Diamond Exporter
            </div>
            <div class="slide">
                Cut and Polished Diamond
            </div>
            <div class="slide">
                Faith Transparacy and Quality Diamond
            </div>
            <div class="slide">
                Fancy Color Stones
            </div>
            <div class="slide">
                Certified and None Certified Diamond
            </div>
        </div>
    </div>



    <div class="text-center pt-5">
        <h3>PBK Intertaional</h3>
        <h2>Entities and Brands</h2>
        <p>PBK International Exports is a multifaceted organisation for diamond and jewellery exporting,
            wholesaling, and retailing.
        </p>
    </div>

    <section class="mt-5 mb-5" style="background-color: #ececec">
        <div class="container py-5">
            <div class="text_container py-2">
                <div class="column position-relative">
                    <h6>World ring</h6>
                    <div class="position-absolute" style="top:-44px;  left: 50%; transform: translateX(-50%);">
                        <img src="{{ url('home-page/1.png') }}" alt="" style="width:90px">
                    </div>
                </div>
                <div class="column position-relative">
                    <h6>World ring</h6>
                    <div class="position-absolute " style="top:-44px;  left: 50%; transform: translateX(-50%);">
                        <img src="{{ url('home-page/2.png') }}" alt="" style="width:90px">
                    </div>
                </div>
                <div class="column position-relative">
                    <h6>World ring</h6>
                    <div class="position-absolute " style="top:-44px;  left: 50%; transform: translateX(-50%);">
                        <img src="{{ url('home-page/3.png') }}" alt="" style="width:90px">
                    </div>
                </div>
                <div class="column position-relative">
                    <h6>World ring</h6>
                    <div class="position-absolute " style="top:-44px;  left: 50%; transform: translateX(-50%);">
                        <img src="{{ url('home-page/4.png') }}" alt="" style="width:90px">
                    </div>
                </div>
                <div class="column position-relative">
                    <h6>World ring</h6>
                    <div class="position-absolute " style="top:-44px;  left: 50%; transform: translateX(-50%);">
                        <img src="{{ url('home-page/5.png') }}" alt="" style="width:90px">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="mb-5 " style="background-color: #252425">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center align-items-center">
                <div class="col-lg-6">
                    <video autoplay muted loop style="width:100%">
                        <source src="{{ url('home-page/about-video.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-lg-6">
                    <div class="text-white">
                        <h4 class="mb-4">About-PBK Intertaional</h4>
                        <p>It is a Great Privilege for me to Introduce you to the <b>PBK INTERNATIONAL BV</b>, As the
                            Company Business Development Manager, With more than 23years of Expertise and Presence around
                            the world, PBK INTERNATIONAL BV stands for <b>FAITH, TRANSPARENCY & QUALITY Diamond.</b></p>
                        <p>Our company is Based in <b>India, Burma and Europe</b>, <b>Mr Ravi Kumar Kudal</b> is the
                            Director of the
                            Company, We are <b>Exporters</b> of Color Stones, Cut and Polished diamonds with wide range,
                            starting
                            from <b>0.01 cents to 100 carats</b> plus, In <b>Round</b> & more than 10 <b>Fancy </b>shapes,
                            <b>Fancy Color</b>
                            Stones
                            having <b>Certified</b> and <b>Non-Certified</b> Diamod.
                        </p>
                        <button class="my-4 px-4 py-2 border"> About Us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="text-center mb-5">
            <h3>DIAMOND FOR EVERY JEWELLERY DESIGN</h3>
        </div>
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/CU.webp') }}" alt="Cushion" style="width: 100%">
                        </div>
                        <h2>Cushion</h2>
                    </a>
                </div>

                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/E.webp') }}" alt="Emerald" style="width: 100%">
                        </div>
                        <h2>Emerald</h2>
                    </a>
                </div>

                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/H (1).webp') }}" alt="Heart" style="width: 100%">
                        </div>
                        <h2>Heart</h2>
                    </a>
                </div>

                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/M.webp') }}" alt="Marquise" style="width: 100%">
                        </div>
                        <h2>Marquise</h2>
                    </a>
                </div>

                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/O.webp') }}" alt="Oval" style="width: 100%">
                        </div>
                        <h2>Oval</h2>
                    </a>
                </div>
                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/P.webp') }}" alt="Princess" style="width: 100%">
                        </div>
                        <h2>Princess</h2>
                    </a>
                </div>
                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/PE.webp') }}" alt="Pear" style="width: 100%">
                        </div>
                        <h2>Pear</h2>
                    </a>
                </div>
                <div class="card swiper-slide">
                    <a href="">
                        <div class="image">
                            <img src="{{ asset('home-page/diamonds/R.webp') }}" alt="Round" style="width: 100%">
                        </div>
                        <h2>Round</h2>
                    </a>
                </div>

            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </section>
    <div class="py-2 my-5" style="background-color: #252425">
        <section class="container my-4">
            <div class="text-center mb-4">
                <h3 class="text-white">Latest Collecton</h3>
            </div>
            <div class="row g-3">
                <div class="col-lg-3">
                    <div class="shadow p-2" style="background-color:#8e8b89">
                        <video autoplay muted loop style="width:100%; height:300px; ">
                            <source src="https://up.diamondservices.be/assets/video/DS/RB_5,02_F_VS2_230000117836.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="text-white">hhdfh hjfheh</div>
                        <div class="row g-1 py-2">
                            <div class="col-4">
                                <a href="{{ asset('productsingle') }}"><button type="button"
                                        class="btn btn-primary w-100">Details</button></a>
                            </div>
                            <div class="col-4">
                                <a href="{{ asset('enquiryform') }}"><button type="button"
                                        class="btn btn-info w-100">Enquiry</button></a>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-success w-100">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shadow p-2" style="background-color:#8e8b89">
                        <video autoplay muted loop style="width:100%; height:300px; ">
                            <source src="https://up.diamondservices.be/assets/video/DS/PS_11,03_G_SI2_230000099690.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="text-white">hhdfh hjfheh</div>
                        <div class="row g-1 py-2">
                            <div class="col-4">
                                <a href="{{ asset('productsingle') }}"><button type="button"
                                        class="btn btn-primary w-100">Details</button></a>
                            </div>
                            <div class="col-4">
                                <a href="{{ asset('enquiryform') }}"><button type="button"
                                        class="btn btn-info w-100">Enquiry</button></a>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-success w-100">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shadow p-2" style="background-color:#8e8b89">
                        <video autoplay muted loop style="width:100%; height:300px; ">
                            <source src="https://up.diamondservices.be/assets/video/DS/RB_5,02_F_VS2_230000117836.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="text-white">hhdfh hjfheh</div>
                        <div class="row g-1 py-2">
                            <div class="col-4">
                                <a href="{{ asset('productsingle') }}"><button type="button"
                                        class="btn btn-primary w-100">Details</button></a>
                            </div>
                            <div class="col-4">
                                <a href="{{ asset('enquiryform') }}"><button type="button"
                                        class="btn btn-info w-100">Enquiry</button></a>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-success w-100">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="shadow p-2" style="background-color:#8e8b89">
                        <video autoplay muted loop style="width:100%; height:300px; ">
                            <source src="https://up.diamondservices.be/assets/video/DS/RB_13,86_G_SI1_6224799709-21.mp4"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="text-white">hhdfh hjfheh</div>
                        <div class="row g-1 py-2">
                            <div class="col-4">
                                <a href="{{ asset('productsingle') }}"><button type="button"
                                        class="btn btn-primary w-100">Details</button></a>
                            </div>
                            <div class="col-4">
                                <a href="{{ asset('enquiryform') }}"><button type="button"
                                        class="btn btn-info w-100">Enquiry</button></a>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-success w-100">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="mb-5">
        <div class="container">
            <div class="row g-4 d-flex justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="text-black">
                        <h4 class="mb-4">Whatever the occasion, we've got a beautiful piece of diamond for you.</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto pariatur necessitatibus
                            consequuntur, placeat beatae harum. Dolores necessitatibus, distinctio, cum corrupti eos
                            laboriosam
                            laudantium, rerum deleniti sed consectetur praesentium illum libero.</p>
                        <button class="my-4 px-4 py-2 border"> About Us</button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ url('home-page/Black and Beige Elegant Diamond Ring Promo Instagram Post.jpg') }}"
                        alt="" class="w-100">
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container py-5 ">
            <div class="text-center mb-4">
                <h3 class="text-black">Testimonial</h3>
            </div>
            <div id="carouselExampleIndicators " class="carousel slide" data-bs-ride="carousel"
                style=" border-radius: 30px;">
                <div class="carousel-indicators" style=" border-radius: 30px;">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" style=" border-radius: 30px;">
                    <div class="carousel-item active bg-dark" style=" border-radius: 30px;">
                        <div class="Mein_card p-5 m-1 text-center  text-white ">
                            <div class="Card w-lg-75 m-auto bg-body-tertiary rounded text-black rounded-4 my-3 p-4 h-100">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC-buhde5C1FxyNtkRvkUTCe6gq73eLIv_JOycF3WMvg&s"
                                    class="card_img d-block rounded-circle " alt="sdgodfmbhlgfklm" style="width: 100px;">
                                <div class="" style="margin:70px 0px;">
                                    <h5 class="fw-bolder fs-3 my-5">Vipul Vishwakarma</h5>
                                    <p class="my-lg-5 px-4" style="font-size:17px;">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Culpa provident non quo modi ad minus eos
                                        distinctio aperiam totam minima rerum perspiciatis illum itaque natus
                                        possimus doloribus, ea asperiores aut.</p>
                                    <p class="m-0 fs-6">The Baylea ring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item  bg-dark" style=" border-radius: 30px;">
                        <div class="Mein_card p-5 m-1 text-center text-white">
                            <div class="Card w-lg-75 m-auto bg-body-tertiary rounded text-black rounded-4 my-3 p-4 h-100">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC-buhde5C1FxyNtkRvkUTCe6gq73eLIv_JOycF3WMvg&s"
                                    class="card_img d-block rounded-circle " alt="sdgodfmbhlgfklm" style="width: 100px;">
                                <div class="" style="margin:70px 0px;">
                                    <h5 class="fw-bolder fs-3 my-5">Vipul Vishwakarma</h5>
                                    <p class="my-lg-5 px-4" style="font-size:17px;">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Culpa provident non quo modi ad minus eos
                                        distinctio aperiam totam minima rerum perspiciatis illum itaque natus
                                        possimus doloribus, ea asperiores aut.</p>
                                    <p class="m-0 fs-6">The Baylea ring</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item bg-dark" style=" border-radius: 30px;">
                        <div class="Mein_card p-5 m-1 text-center  text-white">
                            <div class="Card w-lg-75 m-auto bg-body-tertiary rounded text-black rounded-4 my-3 p-4 h-100">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC-buhde5C1FxyNtkRvkUTCe6gq73eLIv_JOycF3WMvg&s"
                                    class="card_img d-block rounded-circle " alt="sdgodfmbhlgfklm" style="width: 100px;">
                                <div class="" style="margin:70px 0px;">
                                    <h5 class="fw-bolder fs-3 my-5">Vipul Vishwakarma</h5>
                                    <p class="my-lg-5 px-4" style="font-size:17px;">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Culpa provident non quo modi ad minus eos
                                        distinctio aperiam totam minima rerum perspiciatis illum itaque natus
                                        possimus doloribus, ea asperiores aut.</p>
                                    <p class="m-0 fs-6">The Baylea ring</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-5">
            <div class="text-center mb-4">
                <h3 class="text-black">Contact Us</h3>
            </div>

            <style>
                .none {
                    display: none
                }

                .datainput {
                    position: relative;
                    margin: 5px 0 20px
                }

                .datainput p {
                    font-size: 12px;
                    background: #eee;
                    display: inline-block;
                    padding: 5px 15px;
                    border-radius: .5rem
                }

                .whatsapp-form textarea {
                    min-height: 120px
                }

                .datainput select {
                    padding: 12px 0;
                    color: #555;
                    font-size: 14px;
                    width: 100%;
                    border: 0;
                    border-bottom: 1px solid #ddd;
                    outline: none;
                    background: #fff
                }

                .datainput input,
                .datainput textarea {
                    font-size: 15px;
                    padding: 15px 0;
                    display: block;
                    width: 100%;
                    border: none;
                    border-bottom: 1px solid #ddd
                }

                .datainput input:focus,
                .datainput textarea:focus {
                    outline: none
                }

                .datainput label {
                    color: #999;
                    font-size: 14px;
                    font-weight: 400;
                    position: absolute;
                    pointer-events: none;
                    left: 0;
                    top: 18px;
                    transition: .2s ease all
                }

                .datainput input:focus~label,
                .datainput input:valid~label,
                .datainput textarea:focus~label,
                .datainput textarea:valid~label {
                    top: -10px;
                    font-size: 14px;
                    color: rgb(71, 95, 95)
                }

                #notif-license span {
                    font-size: 40px
                }

                #notif-license {
                    display: none;
                    position: fixed
                }

                .bar {
                    position: relative;
                    display: block;
                    width: 100%
                }

                .bar:before,
                .bar:after {
                    content: '';
                    height: 2px;
                    width: 0;
                    bottom: 1px;
                    position: absolute;
                    background: rgb(71, 95, 95);
                    transition: .2s ease all
                }

                .bar:before {
                    left: 50%
                }

                .bar:after {
                    right: 50%
                }

                .datainput input:focus~.bar:before,
                .datainput input:focus~.bar:after,
                .datainput textarea:focus~.bar:before,
                .datainput textarea:focus~.bar:after {
                    width: 50%
                }


                .highlight {
                    position: absolute;
                    height: 50%;
                    width: 100px;
                    top: 25%;
                    left: 0;
                    pointer-events: none;
                    opacity: .5
                }

                .datainput input:focus~.highlight,
                .datainput textarea:focus~.highlight {
                    animation: inputHighlighter .3s ease
                }

                .datainput input:focus~label,
                .datainput input:valid~label,
                .datainput textarea:focus~label,
                .datainput textarea:valid~label {
                    top: -10px;
                    font-size: 13px;
                    color: rgb(71, 95, 95)
                }

                .whatsapp-form a.send_form {
                    color: #fff;
                    background: rgb(71, 95, 95);
                    text-decoration: none;
                    display: inline-block;
                    padding: 10px 25px;
                    border-radius: .3rem;
                    font-weight: 700;
                    letter-spacing: .5px;
                    font-size: 15px;
                }

                #text-info span {
                    display: block;
                    padding: 10px 15px;
                    text-align: center;
                    font-weight: 700;
                    margin: 15px 0;
                    border-radius: .5rem;
                }

                .bg-img {
                    /* The image used */
                    background-image: url("{{ url('home-page/Black and Beige Elegant Diamond Ring Promo Instagram Post.jpg') }}");

                    min-height: 544px;

                    /* Center and scale the image nicely */
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;
                    position: relative;
                }

                /* Add styles to the form container */
                .form-container {
                    position: absolute;
                    right: 0;
                    /* margin: 20px; */
                    width: 100%;
                    /* padding: 16px; */
                    /* background-color: white; */
                }
            </style>
            <div class="bg-img ">
                <div class="form-container ">
                    <div class="row m-4 ">
                        <div class="col-lg-6 bg-white">
                            <form class="whatsapp-form ">
                                <div class="datainput">
                                    <input class="validate" id="wa_name" name="name" required="" type="text"
                                        value='' />
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label>Your Name</label>
                                </div>
                                <div class="datainput">
                                    <input class="validate" id="wa_email" name="email" required="" type="email"
                                        value='' />
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label>Email Address</label>
                                </div>
                                <div class="datainput">
                                    <input class="validate" id="wa_number" name="email" required="" type="email"
                                        value='' />
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label>Contact Number</label>
                                </div>
                                <div class="datainput">
                                    <select id="wa_select">
                                        <option hidden='hidden' selected='selected' value='default'>Select Option
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="datainput">
                                    <textarea id='wa_textarea' placeholder='' maxlength='5000' row='1' required=""></textarea>
                                    <span class="highlight"></span><span class="bar"></span>
                                    <label>Description</label>
                                </div>
                                <a class="send_form" href="javascript:void" type="submit"
                                    title="Send to Whatsapp">Submit</a>
                                <br>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js') }}"></script>
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Swiper: Slider
            new Swiper('.swiper-container', {
                loop: true,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                slidesPerView: 4,
                paginationClickable: true,
                spaceBetween: 20,
                speed: 2000,
                autoplay: true,
                breakpoints: {
                    1920: {
                        slidesPerView: 4,
                        spaceBetween: 20
                    },
                    1028: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 10
                    }

                }

            });
        });
    </script>
@endsection
