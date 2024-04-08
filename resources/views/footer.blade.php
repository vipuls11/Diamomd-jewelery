 <style>
     :root {
         --darkblue: #0C0F86;
         --blue: #67A9E2;
         --darkblues: #00024A;
         --white: #ffffff;
         --yellow: #FFD600;
         --white: white;
         --black: black;
         --orange: #FF2727;
     }

     .main_footer {
         background-color: var(--black);
         color: var(--white);
         align-items: center;
         margin-top: 1px;
     }

     .main_footer ul {
         list-style: none;
         font-size: 15px;
         line-height: 40px;
     }

     .social-media li {
         line-height: 0px;
     }

     .social-media i {
         font-size: 28px;
     }

     .Search-Input {
         background-color: var(--white);
         border-radius: 8px;
         padding: 3px 0px;
     }

     .Search-Input input {
         border: none;
         outline: none;
     }

     .subscribe {
         font-size: 14px;
         border: 1px solid var(--black);
         border-radius: 5px;
         background-color: var(--black);
         color: var(--white);
     }
 </style>
 <div class="main_footer">
     <div class="container overflow-hidden">
         <div class="row py-5">
             <div class="col-lg-4 col-12 border border-2 border-start-0 border-top-0 border-bottom-0 border-end-2 ">
                 <div class="p-4">
                     <img src="Image/logo.png" alt="" class="w-75">
                     <p class="m-0 text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit quae
                         aperiam fugiat ut ipsa?.</p>

                     <div class="Search-Input d-flex gap-1 px-2 align-items-center my-3 border">
                         <span class="text-black"><i class="fa-solid fa-envelope"></i></span>
                         <input type="text" placeholder="Your email address" class="w-100">
                         <button class="subscribe">subscribe</button>
                     </div>
                 </div>
             </div>
             <div class="col-lg-8 col-12">
                 <div class="row">
                     <div class="col-lg-4 col-md-4">
                         <div>
                             <ul>
                                 <li>
                                     <h5>Contact</h5>
                                 </li>
                                 <li><span style="margin-right:5px;"><i class="fa-solid fa-location-dot"></i></span> Box
                                     5202, 102 45 London</li>
                                 <li><span style="margin-right:5px;"><i class="fa-solid fa-envelope"></i></span>
                                     thepolestore.co.uk</li>
                                 <li><span style="margin-right:5px;"><i class="fa-solid fa-phone"></i></span> 08-654 74
                                     90</li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                         <div>

                             <ul>
                                 <li>
                                     <h5 claas>Pages</h5>
                                 </li>
                                 <li>About</li>
                                 <li>Help</li>
                                 <li>Contact Us</li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                         <div>

                             <ul>
                                 <li>
                                     <h5>Products</h5>
                                 </li>
                                 <li>Metal curtain pole</li>
                                 <li>Wooden Curtain Pole</li>
                                 <li>Bay Window curtain Pole</li>
                                 <li>Curtain Rails & Tracks</li>
                                 <li>Asscessories</li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <footer class="py-3 border-top">

         <div class="container ">
             <div class="row align-items-center">
                 <div class="col-lg-9 col-6">
                     <div class="text-end">
                         <p class="m-0 p-0"><span> &#169;</span> Copyright<span>
                                 <script>
                                     document.write(new Date().getFullYear());
                                 </script>
                             </span> P.B.K.INTERNATIONAL Privary Policy | Terms and Conditions | Cookie Policy</p>
                     </div>
                 </div>
                 <div class="col-lg-3 col-6">
                     <ul class="social-media d-flex align-items-center  gap-3 my-2">
                         <li class=""><i class="fa-brands fa-facebook"></i></li>
                         <li class=""><i class="fa-brands fa-instagram"></i></li>
                         <li class=""><i class="fa-brands fa-twitter"></i></li>
                     </ul>
                 </div>
             </div>
         </div>



     </footer>

 </div>
