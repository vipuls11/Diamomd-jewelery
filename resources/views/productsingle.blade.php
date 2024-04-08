@extends('layout')
@section('content')
    <div class="" style="background-color: black">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="p-3  text-center">
                        <div class="text-center  mb-3">
                            <img src="{{ url('home-page/pbk-logo.jpg') }}" alt="" style="width:150px; " class="">
                        </div>
                        <div class="mb-3 row justify-content-center">
                            <div class="col-lg-6 col-md-6 col-12 " style="background-color: black;">
                                <div class="d-flex border border-2 m-auto border-white align-items-center">
                                    <div class="bg-white"><img
                                            src="{{ url('https://up.diamondservices.be/assets/media/HRD.png') }}"
                                            alt="" style="width:80px; height:35px;"></div>
                                    <div class="w-100 text-center text-white ">
                                        <p class="m-0  fw-bold">
                                            230000117836
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <p class="text-white" style="font-size: 16px;">
                                <span class="text-white" style="font-size:17px; font-weight:600;">Description :</span>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur explicabo, magni quod
                                earum quisquam eos quis cupiditate? Quisquam dolorem aspernatur repellendus reiciendis.
                                Commodi id ipsum voluptatem non rem. Velit, dolores?
                            </p>
                        </div>
                        <div class="row justify-content-center  align-items-center">
                            <div
                                class="col-12 text-white d-flex justify-content-center gap-2 align-items-center my-4 text-center">
                                <div>
                                    <p class="bg-white text-dark px-3 mx-3  m-0 p-0"
                                        style="font-size: 17px; font-weight:600;">
                                        Weight
                                    </p>
                                    <p class="m-0 my-3 py-1">5.02ct</p>
                                </div>
                                <div>
                                    <p class="bg-white text-dark px-3 mx-3  m-0 p-0"
                                        style="font-size: 17px; font-weight:600;">
                                        Shape
                                    </p>
                                    <p class="m-0 border-2 border-start border-end my-3 py-1">Round</p>
                                </div>
                                <div>
                                    <p class="bg-white text-dark px-3 mx-3  m-0 p-0"
                                        style="font-size: 17px; font-weight:600;">
                                        Color
                                    </p>
                                    <p class="m-0 my-3 py-1 border-2 border-end">F</p>
                                </div>
                                <div>
                                    <p class="bg-white text-dark px-3 mx-3  m-0 p-0"
                                        style="font-size: 17px; font-weight:600;">
                                        Clarity</p>
                                    <p class="m-0 my-3 py-1">VS2 </p>
                                </div>
                            </div>
                        </div>
                        <a href="https://my.hrdantwerp.com/?id=34&record_number=230000117836" target="_blank"><button
                                class="px-4 py-3 fs-6"
                                style="text-decoration: none;
                        border:none; 
                        border-radius:8px;
                        font-weight:500;
                        color:rgb(156, 155, 155);">View
                                Certificate</button></a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <video controls loop style="width:100%; border-radius:8px;">
                        <source
                            src="{{ url('https://up.diamondservices.be/assets/video/DS/RB_5,02_F_VS2_230000117836.mp4') }}"
                            type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    {{-- <div>
        <p class="text-center d-flex justify-content-center m-0 p-0 py-3 align-items-center"
            style="font-size:14px; font-weight:600;">
            <b class="">&copy;</b><span id="time"
                style="margin-right: 5px; color:black; text-decoration: none;"></span>|<span
                style="margin-left: 5px; margin-right:5px;">
                <a href="" style="color:black; text-decoration: none;">jewelwebnet@gmail.com</a></span>|<span
                style="margin-left: 5px;">
                <a href="" style="color:black; text-decoration: none; ">+91
                    7900108552</a></span>
        </p>
    </div> --}}

    {{-- <script>
        const d = new Date();
        let year = d.getFullYear();
        document.getElementById("time").innerHTML = year;
    </script> --}}
@endsection
