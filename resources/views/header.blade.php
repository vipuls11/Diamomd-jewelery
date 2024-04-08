<style>
    nav {
        display: block;
    }

    #mainnav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between;
    }

    #mainnav>ul>li {
        display: inline-block;
        padding: 28px 0px;
    }

    #mainnav ul li {
        position: relative;
    }

    .header #mainnav>ul>li>a {
        line-height: 100px;
    }

    /* #mainnav>ul>li.home>a {
        color: #18ba60;
    } */

    #mainnav>ul>li>a {
        position: relative;
        display: block;
        font-family: "Poppins", sans-serif;
        text-transform: uppercase;
        color: #252425;
        text-decoration: none;
        font-size: 14px;
        margin: 0 15px;
        font-weight: 600;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    #mainnav ul.submenu {
        display: flex;
        flex-direction: column;
        position: absolute;
        left: 0;
        top: 150%;
        width: 250px;
        text-align: left;
        background-color: #252425;
        z-index: 9999;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        filter: alpha(opacity=0);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    #mainnav ul.submenu li:first-child {
        border-top: none;
    }

    #mainnav ul.submenu>li {
        border-top: 1px solid #333333;
    }

    #mainnav ul li ul li {
        margin-left: 0;
    }

    #mainnav ul.submenu>li>a {
        display: block;
        color: #fff;
        text-decoration: none;
        padding: 0 0 0 20px;
        line-height: 45px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    #mainnav ul li:hover>ul.submenu {
        top: 100%;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
        filter: alpha(opacity=100);
        opacity: 1;
        visibility: visible;
    }

    .account_btn {
        display: none;
    }

    .account_menu:hover .account_btn {
        display: block;
    }

    @media screen and (max-width: 992px) {
        .mainnav {
            display: none;
        }
    }


    #mainnav>li:not(:last-child):after {
        content: '';
        background: #0000;
        width: 2px;
        height: 14px;
        display: inline-block;
        /* margin: 0 12px; */
        vertical-align: middle;
        z-index: 9999;
    }
</style>


<div class="shadow  position-sticky w-100 top-0" style=" background-color:#fff; z-index:99">
    <div style="width:90%; margin:auto; ">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ asset('/') }}"><img src="{{ url('home-page/pbk-logo.jpg') }}" alt=""
                    style="width:140px;"></a>
            <nav id="mainnav" class="mainnav">
                <ul class="menu">
                    <li class="home">
                        <a href="{{ asset('/') }}">Home </a>
                        <ul class="submenu">
                            <li><a href="index.html">Home 01</a></li>
                            <li><a href="index-v2.html">Home 02</a></li>
                            <li><a href="index-v3.html">Home 03</a></li>
                            <li><a href="index-v4.html">Home 04</a></li>
                            <li><a href="index-v5.html">Home 05</a></li>
                            <li><a href="index-v6.html">Home 06</a></li>
                            <li><a href="index-v7.html">Home 07</a></li>
                        </ul>
                    </li>
                    <li><a href="">About Us </a></li>

                    <li><a href="case-v1.html">Cases </a>
                        <ul class="submenu">
                            <li><a href="case-v1.html">Case V1</a></li>
                            <li><a href="case-v2.html">Case V2</a></li>
                            <li><a href="case-single-v1.html">Case Single V1</a></li>
                            <li><a href="case-single-v2.html">Case Single V2</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">News</a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog V1</a></li>
                            <li><a href="blog-v2.html">Blog V2</a></li>
                            <li><a href="blog-single.html">Blog single</a></li>
                        </ul>
                    </li>
                    <li><a href="partner.html">Pages</a>
                        <ul class="submenu">
                            <li><a href="history.html">History</a></li>
                            <li><a href="partner.html">Partner</a></li>
                            <li><a href="team-v1.html">Team V1</a></li>
                            <li><a href="team-v2.html">Team V2</a></li>
                            <li><a href="overview.html">Overview</a></li>
                            <li><a href="header.html">Header</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contact Us</a></li>
                </ul><!-- /.menu -->
            </nav>
        </div>
    </div>
</div>
