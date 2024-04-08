@extends('layout')
@section('content')
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
                    /* background-image: url("{{ url('home-page/Black and Beige Elegant Diamond Ring Promo Instagram Post.jpg') }}"); */
                    /* background-color: #eee; */
                    min-height: 544px;
                    border-radius: 8px;
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
                    <div class="row m-4  justify-content-center">
                        <div class="col-lg-6 bg-white shadow rounded">
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
@endsection
