@extends('layout.main')
@section('header')
@endsection

@section('content')
    <!--###################### Slider Starts Here ############################-->
    <div id="home" class="banner-container no-padding">
        <div class="container">
            <div class="row mx-auto">

            </div>
            <div class="slider-det">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <span>Vision</span>
                            <h2>
                                To become international Networked Enterprise in Electronic
                                Security & Surveillance System with all Innovative Solution under
                                One Roof.</h2>
                            <p>...</p>
                        </div>
                        <div class="carousel-item">
                            <span>
                                Mission:</span>
                            <h2>To provide the best solution & services for the CCTV and
                                associated Electronic Security & Surveillance systems with
                                Competitive prices & Quality</h2>
                            <p>To enable our customers to achieve a sustainable, high value,
                                competitive advantage through the effective use of advanced
                                information technology,</p>
                        </div>
                        <div class="carousel-item">
                            <span>JP Solutions
                                &
                                Networks</span>
                            <h2>Solution of every How</h2>
                            <p>COMPANY PROFILE-2022</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>





    <!--###################### Services Starts Here ############################-->
    <div class="services-container container-fluid">
        <div class="container sess-in-cont">
            <div class="session-title row">
                <h2>Our Services</h2>
                <p>Our Security Smart Building Technology Division offers the
                    highest quality products coupled with the latest technology to
                    ensure the business continuity of our clients in the most efficient
                    and full-proof way possible. Our wide arena of products and
                    systems includes. </p>
            </div>
            <div class="sess-row row">
                <div class="col-md-4">
                    <div class="serv-det">
                        <figure class="imghvr-fade">
                            <img src="assets/images/services/s1.jpg" alt="">
                            <figcaption>
                                Our Security Smart Building Technology Division offers the
                                highest quality products coupled with the latest technology to
                                ensure the business continuity of our clients in the most efficient
                                and full-proof way possible. Our wide arena of products and
                                systems includes
                            </figcaption>
                        </figure>
                        <h6>CCTV Security Systems</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serv-det">
                        <figure class="imghvr-fade">
                            <img src="assets/images/services/s2.jpg" alt="">
                            <figcaption>
                                JP Solutions & Network provides Access Control Systems, which
                                constitute an integral part of electronic security systems, with a wide
                                range of products according to the operating scenarios provided by the
                                customer and the risk analysis carried out by our engineers for the
                                fulfillment of multiple purposes. These are put into operation and
                                delivered as a turnkey optimum equipment configuration
                            </figcaption>
                        </figure>
                        <h6>ACCESS CONTROL SYSTEM</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serv-det">
                        <figure class="imghvr-fade">
                            <img src="assets/images/services/s3.jpg" alt="">
                            <figcaption>
                                JP Solutions & Network designs intercom systems with/without
                                video for the entrance security of homes and offices and offers a
                                wide range of products in this field from small home systems to
                                large systems for residential estates such as condominiums
                                according to the operating scenario provided by the customer and
                                the risk analysis carried out by our engineers with an optimum
                                equipment configuration
                            </figcaption>
                        </figure>
                        <h6>INTERCOM & VIDEO INTERCOM SYSTEMS</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--###################### About Company Starts Here ############################-->
    <section class="with-medical">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <img src="assets/images/about.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 txtr">
                    <h4>State-Of-The-Art Security  <br>
                        <span>Camera Installation</span>
                    </h4>
                    <p>AZ CCTV carries only the best. Our choice of security camera and technology partners are selected with usability,
                        features, warranty, and affordability in mind. We believe everyone budget should have the right to protect their
                        home and keep an eye on their most valuable possessions while on location or away. </p>
                </div>

            </div>
        </div>
    </section>

    <!--###################### Key Features Starts Here ##########################-->
    <div class="key-features container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Trusted Brands</h2>
                <p>We only carry the most trusted brands at the highest quality. Our experience and expertise allows us to decide what we should offer.. </p>
            </div>
            <div class="key-row row">
                <div class="col-md-3">
                    <div class="key-single">
                        <i class="fas fa-fingerprint"></i>
                        <h6>High Security</h6>
                        <p>Protecting your home or business should not be a complicated task and that’s why we are here. Make a quick call to set up a free security consultation today.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="key-single">
                        <i class="fas fa-user-lock"></i>
                        <h6>Full Device Protection</h6>
                        <p>Schedule an appointment with us for your home security needs.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="key-single">
                        <i class="fas fa-video"></i>
                        <h6>Remote Monitoring</h6>
                        <p>Sed ligula eros, convallis sit amet ullamcorper sit amet, consequat vel nulla. Maecenas quis convallis dolor. Ut enim lacus, aliquet at neque et,</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="key-single">
                        <i class="far fa-folder-open"></i>
                        <h6>Full Backup of Information</h6>
                        <p>Have one of our security experts put together a FREE quote for over the phone or on-site at your home!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--###################### Testimonial Starts Here ############################-->
    <div class="testimonial-cover container-fluid">
        <div class="container test-container">
            <div class="session-title row">
                <h2>Testimonial</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis magna odio, eu vehicula augue suscipit ac. Pellentesque quis dui lorem. </p>
            </div>
            <div class="test-row row">
                <div class="col-md-4">
                    <div class="test-key">
                        <img src="assets/images/testimonial/member-01.jpg" alt="">

                        <h5>Raouth Samuel</h5>
                        <a href="">Manager</a>

                        <p><i>vehicula pharetra est. Phasellus sagittis turpis diam. Maecenas faucibus mollis diam, at facilisis ex sagittis vel</i></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="test-key">
                        <img src="assets/images/testimonial/member-02.jpg" alt="">

                        <h5>Andrew Samuel</h5>
                        <a href="">Developer</a>

                        <p>vehicula pharetra est. Phasellus sagittis turpis diam. Maecenas faucibus mollis diam, at facilisis ex sagittis vel</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="test-key">
                        <img src="assets/images/testimonial/member-03.jpg" alt="">

                        <h5>Arun Kumar</h5>
                        <a href="">Manager</a>

                        <p>vehicula pharetra est. Phasellus sagittis turpis diam. Maecenas faucibus mollis diam, at facilisis ex sagittis vel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--###################### Client Details Starts Here ############################-->
    <div class="client-container container-fluid">
        <div class="container">
            <div class="row client-row">
                <div class="col-md-3 col-6 br bb clinent-cover">
                    <img src="assets/images/partner/l1.png" alt="">
                </div>
                <div class="col-md-3 col-6 br bb clinent-cover">
                    <img src="assets/images/partner/l2.png" alt="">
                </div>
                <div class="col-md-3 col-6 br bb clinent-cover">
                    <img src="assets/images/partner/l3.png" alt="">
                </div>
                <div class="col-md-3 col-6 bb clinent-cover">
                    <img src="assets/images/partner/l5.png" alt="">
                </div>
                <div class="col-md-3 col-6 br clinent-cover">
                    <img src="assets/images/partner/l5.png" alt="">
                </div>
                <div class="col-md-3 col-6 br clinent-cover">
                     <img src="assets/images/partner/l3.png" alt="">
                </div>
                <div class="col-md-3 col-6 br clinent-cover">
                     <img src="assets/images/partner/l2.png" alt="">
                </div>
                <div class="col-md-3 col-6 clinent-cover">
                    <img src="assets/images/partner/l1.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <!--################### Our Blog Starts Here #######################--->
        <div class="blog-container contaienr-fluid">
            <div class="container">
                <div class="session-title row">
                  <h2>Latest Blog</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit consectetur adipiscing elit.</p>
                </div>
                <div class="row news-row">
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_01.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>Latest News about Smarteye</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_02.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>Apple Launch its New Phone</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_03.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>About Windows 10 Update</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="news-card">
                            <div class="image">
                                <img src="assets/images/blog/blog_04.jpg" alt="">
                            </div>
                            <div class="detail">
                                <h3>Latest News about Smarteye</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit consectetur adipiscing elit. </p>
                                <p class="footp">
                                    27 Comments <span>/</span>
                                    Blog Design <span>/</span>
                                    Read More
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('footer')
@endsection