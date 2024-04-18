<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
       
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/index.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/indexDropdownMenu.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img style="margin-right: 10px;" src="../images/homeimg/logo.png" alt="..." />M-Home</a>




                <div class="profile-dropdown" >
                    <div onclick="toggle()" class="profile-dropdown-btn">
                      <div class="profile-img">
                        <img src="../images/homeimg/team/teamKiel.jpg" alt="">
                      </div>
            
                      <span
                        >User
                        <i class="fa-solid fa-angle-down"></i>
                      </span>
                    </div>
            
                    <ul class="profile-dropdown-list" id="profile-dropdown-list">
                      <li class="profile-dropdown-list-item">
                        <a href="#">
                          <i class="fa-regular fa-user"></i>
                          Edit Profile
                        </a>
                      </li>
            
                      <li class="profile-dropdown-list-item">
                        <a href="#">
                          <i class="fa-regular fa-envelope"></i>
                          Inbox
                        </a>
                      </li>
            
                      <li class="profile-dropdown-list-item">
                        <a href="#">
                          <i class="fa-solid fa-chart-line"></i>
                          My Post
                        </a>
                      </li>
            
                      <li class="profile-dropdown-list-item">
                        <a href="#">
                          <i class="fa-solid fa-sliders"></i>
                          Settings
                        </a>
                      </li>
                      <hr />
            
                      <li class="profile-dropdown-list-item">
                        <a href="#">
                          <i class="fa-solid fa-arrow-right-from-bracket"></i>
                          Log out
                          
                        </a>
                      </li>
                    </ul>
                  </div>



                  
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../Services/serviceOwner.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>







        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Site!</div>
                <div class="masthead-heading text-uppercase">Mamburao Apartel</div>
                <div id="weOffer">"We offer the best and affordable 
                    apartment for you"
                </div><br>
                <p id="callHome">Find a place to call <span>HOME</span></p><br>
                <a class="btn btn-primary btn-xl text-uppercase" href="../Services/serviceOwner.php">Services</a>
            </div>      
        </header>
     







        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About us</h2>
                    <h3 class="section-subheading text-muted">Find a place to call HOME!</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/homeimg/about/1713268098584.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Find Your Perfect Place</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><span style="font-size: 14pt; font-weight: bold;">We</span> understand that finding the right apartment or boarding house can be a daunting task. Whether you're a young professional, a student, or a family relocating, navigating different neighborhoods, rental listings, and amenities can be overwhelming.
                            </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/homeimg/about/1713268125850.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">That's where we come in. At <span style="font-size: 14pt; font-weight: bold;">Mamburao Apartel</span> we're passionate about helping people find their perfect fit. We believe your living space should be more than just a roof over your head – it should be a place that reflects your lifestyle and makes you feel comfortable and at home.
                            </p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/homeimg/about/1713268171022.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Our Team</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"> Our <span style="font-size: 14pt; font-weight: bold;">Team</span> is comprised of experienced professionals who are passionate about the housing market and dedicated to helping our clients find the perfect place to call home. We have a deep understanding of local markets and are always up-to-date on the latest trends and regulations.
                                </p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/homeimg/about/1713268187306.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Whether you're a seasoned renter or a first-timer, we're here to guide you through every step of the journey. Let us help you find your perfect place!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../images/homeimg/about/1713268202587.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4></h4>
                                <h4 class="subheading">Join Our Community!</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">By <span style="font-size: 14pt; font-weight: bold;">Choosing</span> Mamburao Apartel you're not just finding a place to live – you're joining a supportive community. We regularly share helpful content on social media, host informative webinars and actively participate in local events
                                </p></div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Meet the Mamburao Apartel housing heroes!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../images/homeimg/team/teamKiel.jpg" alt="..." />
                            <h4>Cadahin Kiel</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@kieyell11?_r=1&_d=e9da5c0d6jk221&sec_uid=MS4wLjABAAAAv7Ij3ctmEz2Tc4ubzrRz8eg93pMpHJbjOynIbwTMvyV0yDsdFkxuAVru1Pk_PXYe&share_author_id=6980271088106505222&sharer_language=en&source=h5_t&u_code=djbmffaea1faml&timestamp=1713264135&user_id=6980271088106505222&sec_user_id=MS4wLjABAAAAv7Ij3ctmEz2Tc4ubzrRz8eg93pMpHJbjOynIbwTMvyV0yDsdFkxuAVru1Pk_PXYe&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7358261464483890949&share_link_id=1d82f59d-f872-4038-9b03-4b2a951eb3d7&share_app_id=1180&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb0229&social_share_type=5&enable_checksum=1"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/kiel.cadahin.31"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/kieyell11?igsh=MWZhbnVxNGxmdm51dg=="><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../images/homeimg/team/clarenceTeam.jpeg" alt="..." />
                            <h4>Amoyan Clarence</h4>
                            <p class="text-muted">Researcher</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@ams_yow?_t=8lZbwcFidRI&_r=1"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/clarencerosales.amoyan"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/amoyan_clarence?igsh=MTJtemtlZm0xampvdQ=="><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../images/homeimg/team/jaredTeam.jpg" alt="..." />
                            <h4>Tamangan Jared</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@marcuxxx69?_r=1&_d=edaja2ebdbm9gf&sec_uid=MS4wLjABAAAAjniJOzAtEw0OzbEfFM7ZIcQYv1MHNGhGXE_WZgS0TUxwbhflbKssY4as5Vh78Ej2&share_author_id=6784134445718406146&sharer_language=en&source=h5_t&u_code=dad32dk999g227&timestamp=1713264589&user_id=6784134445718406146&sec_user_id=MS4wLjABAAAAjniJOzAtEw0OzbEfFM7ZIcQYv1MHNGhGXE_WZgS0TUxwbhflbKssY4as5Vh78Ej2&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7355513733776590597&share_link_id=062ebcc0-02b6-438c-a5af-37b7af74887e&share_app_id=1180&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb0229&social_share_type=5&enable_checksum=1"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Marcusjared00?mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/marcuxxt?igsh=YnhiNGo5ZmhncmE="><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../images/homeimg/team/ellaTeam.jpeg" alt="..." />
                            <h4>Babiera Ella</h4>
                            <p class="text-muted">Lead Accomodator</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../images/homeimg/team/bienTeam.jpeg" alt="..." />
                            <h4>Perez Bien</h4>
                            <p class="text-muted">Assistant Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@bienjustineperez?_t=8lZbufzl3oX&_r=1"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/bienjustine.perez"><i class="fab fa-facebook-f"></i></a>
                            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa-brands fa-instagram"></i></a> -->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../images/homeimg/team/jareldTeam.jpeg" alt="..." />
                            <h4>Consul Jareld</h4>
                            <p class="text-muted">Researcher</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Together, we're dedicated to making your rental journey a positive and enriching experience.</p></div>
                </div>
            </div>
        </section>









        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Here are some few ways to get in touch!</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button style="background-color: #0555de;" class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Mamburao Apartel - Mamburao Home</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="mamburaoapartel@gmail.com" aria-label="email"><i class="fa-regular fa-envelope"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/profile.php?id=61557842074896" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
   





        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../JS/home.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
