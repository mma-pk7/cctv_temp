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
                            <span>Quality Data Entry Website Template</span>
                            <h2>WE DO ALL! YOU JUST BUY AND ENJOY</h2>
                            <p>Enjoy the wonderful feeling with our design</p>
                        </div>
                        <div class="carousel-item">
                            <span>Quality Data Entry Website Template</span>
                            <h2>NEW HIGH QUALITY TEMPLATE BUY AND ENJOY</h2>
                            <p>Enjoy the wonderful feeling with our design</p>
                        </div>
                        <div class="carousel-item">
                            <span>Quality Data Entry Website Template</span>
                            <h2>WE DO ALL! YOU JUST BUY AND ENJOY</h2>
                            <p>Enjoy the wonderful feeling with our design</p>
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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis magna odio, eu vehicula augue suscipit ac. Pellentesque quis dui lorem. </p>
            </div>
            <div class="sess-row row">
                <div class="col-md-4">
                    <div class="serv-det">
                        <figure class="imghvr-fade">
                            <img src="assets/images/services/s1.jpg" alt="">
                            <figcaption>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis magna odio, eu vehicula augue suscipit ac. Pellentesque quis dui lorem. Vestibulum sed blandit diam,
                            </figcaption>
                        </figure>
                        <h6>CCTV Installation</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serv-det">
                        <figure class="imghvr-fade">
                            <img src="assets/images/services/s2.jpg" alt="">
                            <figcaption>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis magna odio, eu vehicula augue suscipit ac. Pellentesque quis dui lorem. Vestibulum sed blandit diam,
                            </figcaption>
                        </figure>
                        <h6>Home Automation</h6>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="serv-det">
                        <figure class="imghvr-fade">
                            <img src="assets/images/services/s3.jpg" alt="">
                            <figcaption>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis magna odio, eu vehicula augue suscipit ac. Pellentesque quis dui lorem. Vestibulum sed blandit diam,
                            </figcaption>
                        </figure>
                        <h6>Home & Office Security</h6>
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
                    <h4>Why choos Health Care with <br>
                        <span>Medical Hospital</span>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque libero, pulvinar et elementum quis, facilisis eu ante. Mauris non placerat sapien. Pellentesque tempor arcu non odio scelerisque ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam varius eros consequat auctor gravida. Fusce tristique lacus at urna sollicitudin pulvinar. Suspendisse hendrerit ultrices mauris.</p>
                    <p>Ut ultricies lacus a rutrum mollis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed porta dolor quis felis pulvinar dignissim. Etiam nisl ligula, ullamcorper non metus vitae, maximus efficitur mi. Vivamus ut ex ullamcorper, scelerisque lacus nec, commodo dui. Proin massa urna, volutpat vel augue eget, iaculis tristique dui. </p>
                </div>

            </div>
        </div>
    </section>

    <!--###################### Key Features Starts Here ##########################-->
    <div class="key-features container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Key Features</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse venenatis magna odio, eu vehicula augue suscipit ac. Pellentesque quis dui lorem. </p>
            </div>
            <div class="key-row row">
                <div class="col-md-3">
                    <div class="key-single">
                        <i class="fas fa-fingerprint"></i>
                        <h6>High Security</h6>
                        <p>Sed ligula eros, convallis sit amet ullamcorper sit amet, consequat vel nulla. Maecenas quis convallis dolor. Ut enim lacus, aliquet at neque et,</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="key-single">
                        <i class="fas fa-user-lock"></i>
                        <h6>Full Device Protection</h6>
                        <p>Sed ligula eros, convallis sit amet ullamcorper sit amet, consequat vel nulla. Maecenas quis convallis dolor. Ut enim lacus, aliquet at neque et,</p>
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
                        <p>Sed ligula eros, convallis sit amet ullamcorper sit amet, consequat vel nulla. Maecenas quis convallis dolor. Ut enim lacus, aliquet at neque et,</p>
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