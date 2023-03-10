<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wonderful Wedding</title>
    <link rel="icon" type="image/x-icon" href="images/laurel-1.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap"
        media="print" onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500&amp;display=swap" />
    </noscript>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin" />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" media="print"
        onload="this.media='all'" />
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Great+Vibes&amp;display=swap" />
    </noscript>
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/font-awesome/css/all.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/ekko-lightbox.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  <style media="screen">
    <noscript>
        <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
        </style>
    </noscript>
    <style>
        
        /* .container {
            width: 500px;
            margin: auto;
            font-weight: bold;
        } */

        ul {
            list-style-type: none;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .month {
            padding: 70px 25px;
            width: 100%;
            background: url("images/br.jpeg") no-repeat center center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: auto;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13%;
            text-align: center;
        }

        .days {
            margin: auto;
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13%;
            text-align: center;
            margin-bottom: 26px;
            font-size: 14px;
        }

        .days li .active {
            padding: 5px;
            background: #CC0000;
            color: white !important
        }


        h1 {
            font-weight: normal;
            letter-spacing: .125rem;
            text-transform: uppercase;
        }

        .emoji {
            display: none;
            padding: 1rem;
        }

        .emoji span {
            font-size: 4rem;
            padding: 0 .5rem;
        }

        @media all and (max-width: 768px) {
            h1 {
                font-size: calc(1.5rem * var(--smaller));
            }

            li {
                font-size: calc(1.125rem * var(--smaller));
            }

            li span {
                font-size: calc(3.375rem * var(--smaller));
            }
        }


        #timer {
            font-size: 3em;
            font-weight: 100;
            color: white;
            width: auto;
            color: white;
            text-align: center;
            
            flex-direction: column;

        }

        #timer div {
            /* display: inline-block; */
            min-width: auto;
            padding: auto;
            border-radius: 10px;
            /* border: 2px solid wheat; */
            margin: 6px;
            box-shadow: 1px 1px 15px rgb(0 0 0 / 25%);
        }

        #timer div span {
            color: #ffffff;
            display: block;
            font-size: .35em;
            justify-content: center
        }

    </style>

</head>

<body id="top">
    <header></header>
    <div class="page-content">
        <div class="div">
            <div class="ww-home-page" id="home">
                <div class="ww-wedding-announcement d-flex align-items-center justify-content-start">
                    <div class="container ww-announcement-container">
                        <p class="ww-couple-name ww-title" data-aos="zoom-in-down" data-aos-delay="300"
                            data-aos-duration="1000">Th??nh & Trang</p><img class="img-fluid mt-1"
                            src="images/laurel-1.png" alt="Heart" data-aos="zoom-in-down" data-aos-delay="300"
                            data-aos-duration="1000" />
                        <p class="h2 mt-5 ww-title" data-aos="zoom-in-down" data-aos-delay="300"
                            data-aos-duration="1000" data-aos-offset="10">15-03-2023</p>
                    </div>
                </div>
            </div>

            {{-- <div id="timer"></div> --}}


            <div class="mt-3">
                <div class="month">
                    <ul>
                        <li style="text-align:center"> Ng??y 15 th??ng 03</li>
                        <div class="mt-3">
                            <div id="timer"></div>
                        </div>
                    </ul>
                </div>
                <ul class="weekdays">
                    <li>SUN</li>
                    <li>MON</li>
                    <li>TUE</li>
                    <li>WED</li>
                    <li>THU</li>
                    <li>FRI</li>
                    <li>SAT</li>
                </ul>
                <ul class="days">
                    <li></li>
                    <li></li>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                    <li>11</li>
                    <li>12</li>
                    <li>13</li>
                    <li>14</li>
                    <li><span class="active">15</span></li>
                    <li>16</li>
                    <li>17</li>
                    <li>18</li>
                    <li>19</li>
                    <li>20</li>
                    <li>21</li>
                    <li>22</li>
                    <li>23</li>
                    <li>24</li>
                    <li>25</li>
                    <li>26</li>
                    <li>27</li>
                    <li>28</li>
                    <li>29</li>
                    <li>30</li>
                    <li>31</li>
                </ul>
            </div>

            <div class="ww-sectionn ww-rsvp-detaill text-white" id="rsvp">
                <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="col text-center">
                        <div style="font-family: 'Times New Roman', Times, serif; font-size: 30px;">Wedding Invitation</div>
                        <div style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">Save the Date</div>

                        <h3 class="mt-5" style="font-family: Great Vibes, cursive;font-size: 33px;">T???n Th??nh & Th??? Trang</h3>
                        <div class="mt-4" style="font-family: 'Times New Roman', Times, serif;font-size: 17px;">Tr??n tr???ng k??nh m???i ng?????i th????ng</div>
                        <div style="font-family: 'Times New Roman', Times, serif;font-size: 17px;">?????n d??? bu???i ti???c r?????u chung vui c??ng v??? ch???ng ch??ng t??i</div>

                        <h4 class="mt-5" style="font-family: 'Times New Roman', Times, serif">T???i: TDP3, Ph?????ng Ph??? Minh, TXDP, T???nh Qu???ng Ng??i</h4>

                        <h4 style="font-family: 'Times New Roman', Times, serif">V??o l??c: 10:00 AM</h4>
                        <h4 style="font-family: 'Times New Roman', Times, serif;font-size: 23px;">Th??? 4, ng??y 15 th??ng 03 n??m 2023</h4>

                        <div class="mt-5" style="font-family: 'Times New Roman', Times, serif;font-size: 20px;">S??? di???n di???n c???a b???n l?? ni???m vinh h???nh cho gia ????nh ch??ng t??i</div>
                    </div>
                </div>
            </div>

            <div class="ww-nav-bar sticky-top bg-light">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container"><a href="#"><svg class="heart" viewBox="0 0 32 29.6">
                                <path
                                    d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z" />
                            </svg></a>
                        <h1 class="h2"><a class="pl-4 navbar-brand" href="#">????m c?????i tuy???t v???i</a></h1>
                    </div>
                </nav>
            </div>
            <div class="ww-section" id="couple">
                <div class="container">
                    <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">V??? ch??ng
                        t??i</h2>
                    <div class="row text-center">
                        <div class="col-md-6">
                            <div class="mt-3"><img class="img-fluid" src="images/thanh.jpeg" alt="Groom"
                                    data-aos="flip-left" data-aos-duration="1000" />
                                <p class="pt-3 text-left text-muted">Ch?? r??? l?? m???t ch??ng trai hi???n l??nh vui v??? ?????n t???
                                    n??i
                                    ?????y y??u th????ng</p>
                                <h3 class="h2 ww-title">L?? T???n Th??nh</h3>
                                <div class="ww-social-links"><a class="btn btn-link"
                                        href="https://www.facebook.com/profile.php?id=100043726981567"><i
                                            class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    <a class="btn btn-link" href="https://www.instagram.com/thanh4647/"><i
                                            class="fab fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-3"><img class="img-fluid" src="images/trang.jpeg" alt="Bride"
                                    data-aos="flip-right" data-aos-duration="1000" />
                                <p class="pt-3 text-left text-muted">C?? d??u l?? m???t c?? g??i ???????c sinh ra v?? l???n l??n ??? m???t
                                    n??i qu?? h????ng ?????y gi?? v?? n???ng ?????y ???m ??p.</p>
                                <h3 class="h2 ww-title">Nguy???n Th??? Trang</h3>
                                <div class="ww-social-links"><a class="btn btn-link"
                                        href="https://www.facebook.com/profile.php?id=100007887192416"><i
                                            class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    <a class="btn btn-link" href="https://www.instagram.com/chang_ntt_98/"><i
                                            class="fab fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ww-section bg-light" id="events">
                <div class="container ww-wedding-event">
                    <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">S??? ki???n
                        ????m c?????i</h2>
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="my-3">
                                <div class="h4">Ti???c c?????i</div>
                                <ul>
                                    <li><i class="text-muted fas fa-map-marker-alt"></i><span class="pl-2 text-muted">T???
                                            d??n ph??? s??? 1, ph?????ng Nguy???n Nghi??m, TX ?????c Ph???, Qu???ng Ng??i</span></li>
                                    <li class="pt-2"><i class="text-muted far fa-calendar-alt"></i><span
                                            class="pl-2 text-muted">15-03-2023 (24-02-2023), 10 AM - <span
                                                style="font-size: 22px;">???</span> PM</span></li>
                                </ul>
                                <p>Nh?? H??ng Ti???c C?????i R???ng V??ng l?? m???t ?????a ??i???m ???????c s???p x???p trong danh m???c D???ch V???
                                    Kh??ch S???n v?? Nh?? H??ng Ti???c C?????i R???ng V??ng n???m ??? ?????a ch??? Ph???m V??n ?????ng, Quang Ngai,
                                    Qu???ng Ng??i.</p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="my-3"><img class="img-fluid" src="images/nhahang.jpeg"
                                    alt="Wedding Party" data-aos="fade-down-right" data-aos-duration="1000" /></div>
                        </div>
                        <div class="col-md-5 col-sm-12">
                            <div class="my-3">
                                <iframe class="img-fluid"
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15429.365439498586!2d108.9611752!3d14.8060876!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3168fb5cab7c7e2f%3A0xaf804cdf5b265a3!2zTmjDoCBIw6BuZyBUaeG7h2MgQ8aw4bubaSBS4buTbmcgVsOgbmcsIENvZmZlZSBS4buTbmcgVsOgbmc!5e0!3m2!1sen!2s!4v1676714188680!5m2!1sen!2s"
                                    width="600" style="border:0;height: 500px !important;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
      <div class="col-md-7 col-sm-12">
        <div class="my-3">
          <div class="h4">Reception</div>
          <ul>
            <li><i class="text-muted fas fa-map-marker-alt "></i><span class="pl-2 text-muted">City Place, Hendon, London, UK</span></li>
            <li class="pt-2"><i class="text-muted far fa-calendar-alt "></i><span class="pl-2 text-muted">22 Dec 2018, 11AM - 6PM</span></li>
          </ul>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit nulla enim arcu dictum lobortis, ac congue non hendrerit accumsan. Ut penatibus litora platea mi mus tempus eros proin, maecenas hac eget hendrerit inceptos per tempor sodales, id varius nulla commodo augue lectus pulvinar. Etiam suscipit leo sollicitudin vivamus tempor himenaeos vitae mattis dictum posuere, tincidunt aenean litora aptent facilisis eu est gravida.</p>
        </div>
      </div>
      <div class="col-md-5 col-sm-12">
        <div class="my-3"><img class="img-fluid" src="images/reception.jpg" alt="Reception" data-aos="fade-up-right" data-aos-duration="1000"/></div>
      </div>
    </div> -->
                </div>
            </div>
            <!-- <div class="ww-section" id="people">
                <div class="container ww-couple-friends">
                    <h2 class="h1 text-center pt-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Groomsmen
                        & Bridesmaids</h2>
                    <div class="carousel slide" id="ww-carouselIndicator" data-ride="carousel" data-aos="zoom-in-up"
                        data-aos-duration="1000">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#ww-carouselIndicator" data-slide-to="0"></li>
                            <li data-target="#ww-carouselIndicator" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3"><img class="card-img-top"
                                                src="images/groom-men-1.jpg" alt="Groom Men 1" />
                                            <div class="card-body text-center">
                                                <div class="h5">Bryan Berry</div>
                                                <p class="mb-0 text-muted">Best Friend</p>
                                                <p class="text-muted">Groomsmen</p>
                                                <div class="ww-social-links"><a class="btn btn-link" href="#"><i
                                                            class="fab fa-facebook-f" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-twitter"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3"><img class="card-img-top"
                                                src="images/groom-men-2.jpg" alt="Groom Men 2" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Kevin Johnston</div>
                                                <p class="mb-0 text-muted">Room Mate</p>
                                                <p class="text-muted">Groomsmen</p>
                                                <div class="ww-social-links"><a class="btn btn-link" href="#"><i
                                                            class="fab fa-facebook-f" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-twitter"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3"><img class="card-img-top"
                                                src="images/groom-men-3.jpg" alt="Groom Men 3" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Arthur Wright</div>
                                                <p class="mb-0 text-muted">Friend</p>
                                                <p class="text-muted">Groomsmen</p>
                                                <div class="ww-social-links"><a class="btn btn-link" href="#"><i
                                                            class="fab fa-facebook-f" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-twitter"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3"><img class="card-img-top"
                                                src="images/bride-maid-1.jpg" alt="Bride Maid 1" />
                                            <div class="card-body text-center">
                                                <div class="h5">Rachel Lawson</div>
                                                <p class="mb-0 text-muted">Best Friend</p>
                                                <p class="text-muted">Bridesmaids</p>
                                                <div class="ww-social-links"><a class="btn btn-link" href="#"><i
                                                            class="fab fa-facebook-f" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-twitter"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3"><img class="card-img-top"
                                                src="images/bride-maid-2.jpg" alt="Bride Maid 2" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Betty George</div>
                                                <p class="mb-0 text-muted">Room Mate</p>
                                                <p class="text-muted">Bridesmaids</p>
                                                <div class="ww-social-links"><a class="btn btn-link" href="#"><i
                                                            class="fab fa-facebook-f" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-twitter"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card d-block mb-3"><img class="card-img-top"
                                                src="images/bride-maid-3.jpg" alt="Bride Maid 3" />
                                            <div class="card-body text-center">
                                                <div class="h5 text-center">Emma Snyder</div>
                                                <p class="mb-0 text-muted">Friend</p>
                                                <p class="text-muted">Bridesmaids</p>
                                                <div class="ww-social-links"><a class="btn btn-link" href="#"><i
                                                            class="fab fa-facebook-f" aria-hidden="true"></i></a><a
                                                        class="btn btn-link" href="#"><i class="fab fa-twitter"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-google-plus-g"
                                                            aria-hidden="true"></i></a><a class="btn btn-link"
                                                        href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="ww-section bg-light" id="gallery">
                <div class="ww-photo-gallery">
                    <div class="container">
                        <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Tri???n
                            l??m ???nh</h2>
                        <!-- <div class="col-md-12 text-center ww-category-filter mb-4"><a
                                class="btn btn-outline-primary ww-filter-button" href="#" data-filter="all">All</a><a
                                class="btn btn-outline-primary ww-filter-button" href="#" data-filter="vacation">Our
                                Vacation</a><a class="btn btn-outline-primary ww-filter-button" href="#"
                                data-filter="party">Party</a><a class="btn btn-outline-primary ww-filter-button"
                                href="#" data-filter="ceremony">Ceremony</a><a
                                class="btn btn-outline-primary ww-filter-button" href="#"
                                data-filter="wedding">Wedding</a></div> -->
                        <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back"
                            data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
                            <div class="card-columns">
                                <div class="card" data-groups="[&quot;vacation&quot;,&quot;ceremony&quot;]"><a
                                        href="images/anh1.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/anh1.jpg"
                                            alt="Gallery Pic 1" /></a></div>

                                <div class="card" data-groups="[&quot;party&quot;,&quot;wedding&quot;]"><a
                                        href="images/anh2.jpeg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/anh2.jpeg"
                                            alt="Gallery Pic 2" /></a></div>

                                <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/anh3.jpg"
                                        data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid"
                                            src="images/anh3.jpg" alt="Gallery Pic 3" /></a></div>

                                <div class="card" data-groups="[&quot;wedding&quot;,&quot;party&quot;]"><a
                                        href="images/gallery-pic-8.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid"
                                            src="images/gallery-pic-8.jpg" alt="Gallery Pic 8" /></a></div>

                                <div class="card" data-groups="[&quot;party&quot;,&quot;vacation&quot;]"><a
                                        href="images/anh4.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/anh4.jpg"
                                            alt="Gallery Pic 4" /></a></div>

                                <div class="card" data-groups="[&quot;vacation&quot;]"><a href="images/anh5.jpg"
                                        data-toggle="lightbox" data-gallery="ww-gallery"><img class="img-fluid"
                                            src="images/anh5.jpg" alt="Gallery Pic 5" /></a></div>

                                <div class="card" data-groups="[&quot;vacation&quot;]"><a
                                        href="images/gallery-pic-7.jpg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid"
                                            src="images/gallery-pic-7.jpg" alt="Gallery Pic 7" /></a></div>

                                <div class="card"
                                    data-groups="[&quot;wedding&quot;,&quot;ceremony&quot;,&quot;party&quot;]"><a
                                        href="images/anh6.jpeg" data-toggle="lightbox"
                                        data-gallery="ww-gallery"><img class="img-fluid" src="images/anh6.jpeg"
                                            alt="Gallery Pic 6" /></a></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ww-section ww-rsvp-detail text-white" id="rsvp">
                <div class="container" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="col text-center">
                        <h2 class="h1 ww-title pb-3" data-aos="zoom-in-down" data-aos-duration="1000">S??? L??u B??t
                        </h2>
                    </div>
                    <div class="row ww-rsvp-form">
                        <div class="col-md-10">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col md-6 pb-3">
                                        <div class="form-group">
                                            C???m ??n b???n r???t nhi???u v?? ???? g???i nh???ng l???i ch??c m???ng t???t ?????p v?? y??u th????ng ?????n ????m c?????i c???a ch??ng t??i!
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ww-footer bg-light">
                <div class="container text-center py-4">
                    <p class="my-0" style="font-family: 'Times New Roman', Times, serif;font-weight: bold;">Tr??n tr???ng
                        k??nh m???i</p>
                    <p class="mb-0" style="color: red;font-family: 'Times New Roman', Times, serif;font-size: 25px;">T???n
                        Th??nh - Th??? Trang</p>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>
    <script src="scripts/jquery.min.js?ver=1.1.0"></script>
    <script src="scripts/bootstrap.bundle.min.js?ver=1.1.0"></script>
    <script src="scripts/aos.js?ver=1.1.0"></script>
    <script src="scripts/ekko-lightbox.min.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>

    <script>
        function updateTimer() {
          future = Date.parse("mar 16, 2023 01:30:00");
          now = new Date();
          diff = future - now;

          days = Math.floor(diff / (1000 * 60 * 60 * 24));
          hours = Math.floor(diff / (1000 * 60 * 60));
          mins = Math.floor(diff / (1000 * 60));
          secs = Math.floor(diff / 1000);

          d = days;
          h = hours - days * 24;
          m = mins - hours * 60;
          s = secs - mins * 60;

          document.getElementById("timer")
              .innerHTML =
              '<div>' + d + '<span>Ng??y</span></div>' +
              '<div>' + h + '<span>Gi???</span></div>' +
              '<div>' + m + '<span>Ph??t</span></div>' +
              '<div>' + s + '<span>Gi??y</span></div>';
      }
      setInterval('updateTimer()', 1000);
    </script>
</body>

</html>