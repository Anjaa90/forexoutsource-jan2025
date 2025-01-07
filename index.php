<?php $page="home"; include('header.php') ?>

<style>
.banner-caption h1{
    text-align: left;
}
.op-process-section .process-wrapper{
        height: 250px
    }
    /* .feature-wrapper:hover {
        color: black;
        background-color: #fff;
    } */

    .feature-wrapper h3 {
        font-size: 16px;
        font-weight: 600;
    }
    .item p{
        color: #54585e;
    }
    .op-section-happy-client .container p{
        margin-top: 30px;
        text-align: center;
        font-size: 16px;
        padding: 5px 20px;
    }
   .carousel-item >img{
    margin:0px 30px;
    height: 80px;
   }
   .carousel-item2 >img{
    margin:0px 65px;
    height: 80px;
   }
   @media (min-width: 1200px){
.banner-caption {
    max-width: 1600px;
}

}
@media (max-width: 700px){
    .ribbon{
    display: none;
}
.ribbon2{
    display: none;
}
}
.op-section-slider .op-slider .op-slider-item .banner-caption h1 .bold-title-text{
    font-size: 60px;}

.ribbon {
  width: 400px;
  height: 60px;
  margin: 0px 39px 50px;
  position: relative;
  color: #fff;
  font: 28px/60px sans-serif;
  text-align: center;
  text-transform: uppercase;
  background: #009926;
  
  -webkit-animation: main 250ms;
  -moz-animation: main 250ms;
  -ms-animation: main 250ms;
  animation: main 250ms;
}

.ribbon i {
  position: absolute;
}

.ribbon i:first-child, .ribbon i:nth-child(2) {
  position: absolute;
  left:0px;
  bottom:0px;
  z-index: -1;
  border: 20px solid transparent;
  border-right-color: #00b058;
  
  -webkit-animation: edge 500ms;
  -moz-animation: edge 500ms;
  -ms-animation: edge 500ms;
  animation: edge 500ms;
}

.ribbon i:nth-child(2) {
  left: auto;
  right: -20px;
  border-right-color: transparent;
  /* border-left-color: #009f30; */
}

.ribbon i:nth-child(3), .ribbon i:last-child {
    width: 20px;
    bottom: -9px;
    left: -49px;
    z-index: -5;
    border: 25px solid #00872f;
    border-left-color: transparent;
    -webkit-animation: back 600ms;
    -moz-animation: back 600ms;
    -ms-animation: back 600ms;
    animation: back 600ms;
    -webkit-transform-origin: 100% 0;
    -moz-transform-origin: 100% 0;
    -ms-transform-origin: 100% 0;
    transform-origin: 100% 0;
}

.ribbon i:last-child {
    bottom: -4px;
    left: auto;
    right: -47px;
    border: 25px solid #00782a;
    border-right-color: transparent;
    -webkit-transform-origin: 0 0;
    -moz-transform-origin: 0 0;
    -ms-transform-origin: 0 0;
    transform-origin: 0 0;
}


/* animations */

@-webkit-keyframes main {
  0% { -webkit-transform: scaleX(0); }
  100% { -webkit-transform: scaleX(1); }
}

@-webkit-keyframes edge {
  0%, 50% { -webkit-transform: scaleY(0); }
  100% { -webkit-transform: scaleY(1); }
}

@-webkit-keyframes back {
  0%, 75% { -webkit-transform: scaleX(0); }
  100% { -webkit-transform: scaleX(1); }
}


@-moz-keyframes main {
  0% { -moz-transform: scaleX(0); }
  100% { -moz-transform: scaleX(1); }
}

@-moz-keyframes edge {
  0%, 50% { -moz-transform: scaleY(0); }
  100% { -moz-transform: scaleY(1); }
}

@-moz-keyframes back {
  0%, 75% { -moz-transform: scaleX(0); }
  100% { -moz-transform: scaleX(1); }
}


@keyframes main {
  0% { transform: scaleX(0); }
  100% { transform: scaleX(1); }
}

@keyframes edge {
  0%, 50% { transform: scaleY(0); }
  100% { transform: scaleY(1); }
}

@keyframes back {
  0%, 75% { transform: scaleX(0); }
  100% { transform: scaleX(1); }
}   

.fxout-card{
    background-image: url(imgs/card\ line\ design.png);
    /* background: rgb(245, 245, 245); */
    padding: 14px;
    border-radius: 15px;
    background-size: 100% 100%;
    box-shadow: 3px 2px 20px #d7d7d7;
}
.fxout-card:hover{
    background-blend-mode: luminosity;
}
.ribbon1{
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;    
    font-weight: 600;
    margin-top: 0px;color: #fff;
}
.tagimg{
    padding-bottom: 20px;margin-top: -35px;height: 155px;
}
@media (max-width: 992px){
    .op-section-slider .op-slider .op-slider-item img{
        height: 120px;
    }
    .op-section-slider .op-slider .op-slider-item .banner-caption .slider-title-wrapper h1, p{
        font-size: 17px !important;
    }
}
@media (max-width: 700px){
    .ribbon{
    display: none;
}
.ribbon2{
    display: none;
}
.op-section-slider .op-slider .op-slider-item .banner-caption p .bold-title-text{
    font-size: 18px !important;
}
.op-section-slider .op-slider .op-slider-item .banner-caption h1 .bold-title-text{
    font-size: 18px !important;
}
.fxout-card2{
    margin-top: 40px;
}
.tagimg{
    height: 70px !important;
    padding-bottom: 28px !important;
    margin-top: -18px !important;
}
.op-section-slider .op-slider .op-slider-item .banner-caption .slider-title-wrapper{
    padding-top: 0px;
}
.tagimg{
    display: none !important;
}
}
.tagimg{padding-bottom: 20px;margin-top: -35px;height: 155px;}
/* .btn-home{
    padding: 14px 56px;
    background-color: #fff;
    border-radius: 30px;
    font-size: 18px;
    font-weight: 600;
}
.btn-home::before{
    position: absolute;
    content: "";
    padding: 33px 106px;
    border: 1px solid #fff;
    margin: -22px -64px;
    border-radius: 37px;

}
.btn-home:hover{
    background-color: #65bc7b;
    color: #fff;
}
.btn-home:hover::before{
    border: 1px solid #65bc7b;
} */



</style>
<main>
    <section class="op-section-slider pt-0">
        <div class="op-slider">
            <div class="op-slider-item" >
                <img src="imgs/banner1 (2).webp" alt="carousel banner image"style="width:100%;height:100%;">
                <div class="banner-caption" data-aos="fade-up">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="slider-title-wrapper">
                                    <h1 style="font-size: 34px;">Run your Forex Brokerage easily with
                                    <br><span class="bold-title-text">Our Outsourced<br> Support Services </span><br>specially made for FX Industry</h1></div>
                                       <img class="tagimg" src="imgs\Forex_tag 1.png" alt="">
                                    <!-- <div class="ribbon ribbon1 text-left" >starting from just 2.5$ /per hour</h3> 
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div> -->
                                    <div class="text-left home-btn">
                                        <a href="contact-us.php" class="btn btn-primary btn-hover-white ">Start Now</a>
                                    </div>
                                  </div> 
                                </div>
                            </div> 
                        </div>
                    </div>
               
                <div class="op-slider-item ">
                    <img src="imgs/banner 2.webp" alt="carousel banner image" class="" style="width: 100%;height: 100%;">
                    <div class="banner-caption " data-aos="fade-up">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="slider-title-wrapper">
                                    <h1 style="font-size: 32px;">Live Chat, Email, Phone Support or Sales,
                                    <br><span class="bold-title-text">Everything at one place </span><br> for your Forex Brokerage Business</h1>
                                     <img class="tagimg" src="imgs\Forex_tag 2.png" alt="">
                                        <!-- <div class="ribbon">
                                            <h3 style="font-size: 18px;font-weight: 600;padding: 10px;color: #fff;"> MT4/MT5 Administration starting at just 750$ /per month</h3><i></i><i></i><i></i><i></i>
                                        </div> -->
                                        <div class="text-left">
                                            <a href="contact-us.php" class="btn btn-primary btn-hover-white">Start Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="op-slider-item" >
                    <img src="imgs/CRM banner 3 new 2.png" alt="carousel banner image" class="" style="width: 100%;height: 100%;">
                    <div class="banner-caption" data-aos="fade-up">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="slider-title-wrapper">
                                    <h1 style="font-size: 32px;">MT4/ MT5 Server,

                                    <br><span class="bold-title-text"> Administration and <br>Disaster Recovery </span><br>Right from the Experts</h1>
                                     <img class="tagimg" style="height:170px;" src="imgs\Forex _tag 3.png" alt="">
                                        <!-- <div class="ribbon">
                                            <h3 style="font-size: 18px;font-weight: 600;padding: 10px;color: #fff;">our CRM and BACK-OFFICE services starting from just 999$ /per month</h3> 
                                            <i></i>
                                             <i></i>
                                             <i></i>
                                             <i></i>
                                            </div> -->
                                            <div class="text-left">
                                                <a href="contact-us.php" class="btn btn-primary btn-hover-white">Start Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                </div>
   
            <section class="op-process-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-4 ">
                            <div class="process-wrapper dark-bg">
                                <span class="icon-box">
                                    <i class="fa-solid fa-comment"></i>
                                </span>
                                <h3>Live Chat and Email Desk</h3>
                                <p>We offer <a class="internal-linking" href="https://forexoutsource.com/live-chat.php">Live Chat</a> and Email Desk Services,  ensuring exceptional Customer support and Efficient Communication Solutions for Forex Businesses.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 ">
                            <div class="process-wrapper white-bg">
                                <span class="icon-box">
                                    <i class="fa-solid fa-headset"></i>
                                </span>
                                <h3>Phone Inbound</h3>
                                <p style="font-size:14px;">Connect with your customers seamlessly with our <a class="internal-linking" href="https://forexoutsource.com/phone-inbound.php">Phone Inbound</a> Services designed specifically for Forex Businesses and Forex Brokerages. Enhance communication, boost customer satisfaction, and elevate your brand experience.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="process-wrapper primary-bg">
                                <span class=" icon-box">
                                    <i class="fa-solid fa-chart-simple"></i>
                                </span>
                                <h3>MT4/MT5 Administration</h3>
                                <p style="font-size:14px;">ForexOutsource specializes in MT4/MT5 Administration, guaranteeing smooth and efficient operations for your forex trading platform. Let us handle the technical complexities while you focus on growing your Forex Brokerage! 
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <section class="op-section-features">
                <div class="container">
                    <h2>Benefits of choosing<span class="bold-text-title"> FOREXOUTSOURCE
                    </span>  over other Service Providers</h2>
                    <div class="row">
                        <div class="col-lg-6 d-flex justify-content-center">
<div class="fxout-card card">
    <div class="card-heading">
        <h3 class="text-center">FOREXOUTSOURCE</h3>
    </div>
    <div class="card-body">
        <ul>
            <li><img src="imgs/check-mark (1).png" alt="" style="height: 35px;margin-right: 10px;">Dedicated Support Team at Your Disposal</li>
            <li><img src="imgs/check-mark (1).png" alt="" style="height: 35px;margin-right: 10px;"> Real People, Real Names</li>
            <li> <img src="imgs/check-mark (1).png" alt="" style="height: 35px;margin-right: 10px;">Trained Professionals from the Forex Industry to handle all tasks efficiently</li>
            <li> <img src="imgs/check-mark (1).png" alt=""style="height: 35px;margin-right: 10px;">Physical Working Space for enhanced reliability and productivity</li>
            </ul>
    </div>
</div>
                        </div> 
                        <div class="col-lg-6 d-flex justify-content-center">
                            <div class="fxout-card fxout-card2 card">
                                <div class="card-heading">
                                    <h3 class="text-center">Other Service Providers</h3>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><img src="imgs/cancel.png" alt="" style="height: 30px;margin-right: 10px;">Shared teams handling multiple clients/queries/chats</li>
                                        <li><img src="imgs/cancel.png" alt="" style="height: 30px;margin-right: 10px;"> Virtual and AI generated responses</li>
                                        <li><img src="imgs/cancel.png" alt="" style="height: 30px;margin-right: 10px;"> Scripted and generic solutions to every query raised </li>
                                        <li><img src="imgs/cancel.png" alt="" style="height: 30px;margin-right: 10px;"> Virtual workforce</li>
                                         </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <section class="op-section-features">
            <div class="container">
                <h2><span class="bold-text-title">What Makes Us 
                </span> A PERFECT FIT For Your Brokerage?</h2>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                            <i class="fa-solid fa-user-tie" ></i>
                            <h3>Take your Forex Brokerage to new heights with our expertise and experience.
                            </h3>
                                                                                                                                                                                                        
                       </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                            <i class="fa-solid fa-business-time" style="color: #6cf483;"></i>
                            <h3 style="font-size:13px;">Supercharge your Business Efficiency with Time-Saving Forex Outsourcing Solutions tailored for Forex Brokers!
                            </h3>
                            
                            
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                            <i class="fa-solid fa-clock " style="color: #6cf483;"></i>
                            <h3>Get 24/7 Forex Support from our team of professionals
                            </h3>
                            
                           
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                            <i class="fa-solid fa-screwdriver-wrench " style="color: #6cf483;"></i>
                            <h3>Optimize Forex Efficiency with Advanced Tools and Outsourcing Technology.
                            </h3>
                            
                           
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                            <h3>Boost ROI with Outsourcing your non-core tasks, saving time and money. 
                            </h3>
                            
                          
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <h3>Enhancing Client Satisfaction with Our Forex Outsourcing Expertise. 
                            </h3>
                            
                           
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                            <i class="fa-solid fa-earth-americas"></i>
                            <h3>Elevating Your Forex Business Globally with Our Expertise.
                            </h3>
                            
                          
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                            <i class="fa-solid fa-scale-balanced"></i>
                            <h3 style="font-size:13px;">We provide flexible forex solutions to help Forex businesses scale with confidence and achieve their goals seamlessly.
                            </h3>
                            
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-lower">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2 >How Outsourcing Can Help You Gain<span class="bold-text-title">Seamless Advantage In The Forex Market</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                        Starting your own Forex Brokerage can result in numerous complexities, including higher initial costs, lack of trained professionals, or inefficiency in managing excess client queries. Our company's services are designed to address these challenges, empowering Forex Businesses to focus on their core operations while we manage the non-core ones.
                        <br><br>
                        With our technology-driven approach, we streamline operations through automated systems and insightful analytics, ensuring your Forex Business stays ahead in the competitive FX Industry. By opting for our outsourcing services, you can save time and money, gain a competitive edge, and elevate your performance to new heights in the ever-evolving forex market.

                        </p>
                        <br>
                        <h5>ForexOutsource provides comprehensive solutions to all your Forex Brokerage challenges—all in one place! 
                        </h5><br>
                        <ul>
                            <li><i class="fas fa-long-arrow-alt-right"></i> Live Chat and <a class="internal-linking" href="https://forexoutsource.com/email-desk.php">Email Desk</a> for handling all your client queries.

                            </li>
                            <li><i class="fas fa-long-arrow-alt-right"></i> <a class="internal-linking" href="https://forexoutsource.com/mt4-mt5-administration.php"></class>MT4/MT5</a> Administration to keep your platform up and running.

                            </li>
                            <li><i class="fas fa-long-arrow-alt-right"></i> <a class="internal-linking" href="https://forexoutsource.com/crm-and-back-office.php">CRM</a> services to overview client’s activity with the platform, etc.

                            </li>
                        </ul>
                        <!-- <a href="#" class="btn btn-primary">Read More</a> -->
                    </div>
                    <div class="col-md-6" data-aos="zoom-in-left">
                        <img src="imgs/design forexoutsource 2.webp" loading="lazy"; class="img-fluid" alt="Forex Outsourcing" style="margin-top: -60px;">
                    </div>
                </div>
            </div>
        </section>

        <div class=" section-lower">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-wrapper">
                            <h2><span>Pay</span> according to your convenience</h2>
                            <p class="text-center">We provide variety of payment options for your outsourcing needs.</p>
                        </div>
                    </div>

                </div>
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="pay-wrapper wrapper-padding">
                            <div class="row justify-content-center">
                                <div class="col-lg-2">
                                    <div class="pay-wrapper-item">
                                        <img src="imgs/symbols (2).png" loading="lazy" alt="" class="center1"><br>
                                        <p class="text-center-1">Bank/Wire Transfers</p>
                                    </div>
                                </div>
                           
                          
                        <div class="col-lg-2">
                            <div class="pay-wrapper-item wrapper-padding-1">
                                <img src="imgs/debit-card (1).png" loading="lazy" alt="" class="center1"><br>
                                <p class="text-center-1">Online Credit/Debit
                                    Cards</p>
                            </div>
                        </div>
                          <div class="col-lg-2">
                            <div class="pay-wrapper-item wrapper-padding-1">
                                <img src="imgs/paypal.png" loading="lazy" alt=""  class="center1"><br>
                                <p class="text-center-1">PayPal</p>
                            </div>
                          </div>
                        <div class="col-lg-2">
                            <div class="pay-wrapper-item wrapper-padding-1">
                                <img src="imgs/western-union.png" loading="lazy" alt="" class="center1" loading="lazy"><br>
                                <p class="text-center-1">Western Union</p>
                            </div>
                        </div>
                          <div class="col-lg-2">
                            <div class="pay-wrapper-item wrapper-padding-1">
                                <img src="imgs/bitcoin.png" loading="lazy" alt="" class="center1" ><br>
                                <p class="text-center-1">Crypto Currency</p>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="op-section-testimonials-bg" style="background-image: url('imgs/testimonial\ baground\ image.webp')">
            <div class="container-fluid px-md-5">
                <div class="row">
                    <div class="col col-lg-7">
                        <div class="testimonial-slider-wrapper">
                            <h2>Testimonials from our <span class="bold-text-title">Clients</span></h2>
                            <div class="op-testimonials-slider">
                                <div
                                    class="op-testimonials-slider-item align-items-center align-self-center text-center">
                                    <div class="image-wrapper d-flex align-items-center align-self-center">
                                        <img src="imgs/Flag_of_Saint_Vincent_and_the_Grenadines.svg.webp" loading="lazy" alt="User image" class="img-fluid" />
                                    </div>
                                    <h3>Forex Broker from Saint Vincent and the Grenadines</h3>
                                    <!-- <span class="designation">C.E.O</span> -->
                                    <p>Exceptional chat support from ForexOutsource transformed our customer experience. Their dedicated team's expertise and responsiveness drastically improved our clients' satisfaction and trust in our services.
                                    </p>
                                    <div class="rating">
                                        <span><i class="far fa-star-half-stroke"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                                <div
                                    class="op-testimonials-slider-item align-items-center align-self-center text-center">
                                    <div class="image-wrapper d-flex align-items-center align-self-center">
                                        <img src="imgs/Flag-United-Kingdom.webp" loading="lazy" alt="User image" />
                                    </div>
                                    <h3>Regulated Broker from United Kingdom</h3>
                                    <!-- <span class="designation">Creative Manager</span> -->
                                    <p>ForexOutsource's MT5 server management service has been a game-changer for our trading operations. Their seamless and efficient solutions have significantly enhanced our trading experience, demonstrating unparalleled expertise and reliability in the world of forex services.
                                    </p>
                                    <div class="rating">
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                                <div
                                    class="op-testimonials-slider-item align-items-center align-self-center text-center">
                                    <div class="image-wrapper d-flex align-items-center align-self-center">
                                        <img src="imgs/australia.png" loading="lazy" alt="User image" class="img-fluid" />
                                    </div>
                                    <h3>Regulated Broker from Australia </h3>
                                    <!-- <span class="designation">Director</span> -->
                                    <p>Outstanding Phone Support from ForexOutsource – Their dedicated team seamlessly navigated my queries, providing insightful assistance and prompt resolutions. A reliable partner for unparalleled customer service in the forex realm.</p>
                                    <div class="rating">
                                        <span><i class="far fa-star-half-stroke"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="op-section-happy-client dark-bg testimonial-slider-wrapper">
            <h2 class="">Our Peers and Associations</h2>
            <div class="container">
                <div id="carouselExample" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imgs/partner/Advnced_Markets- logo gray.webp" loading="lazy" alt="Client 1" height="100" width="100">
                            <img src="imgs/partner/centroidlogo1l logo gary.png" loading="lazy" alt="Client 2"  height="100">
                            <img src="imgs/partner/cTrader-BrokerTools logo gray.png" loading="lazy" alt="Client 3"  height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/partner/equiti- logo  gray.webp" loading="lazy" alt="Client 4"  height="100">
                            <img src="imgs/partner/inflyx.png"  alt="Client 5" loading="lazy" height="100">
                            <img src="imgs/partner/metaquotes.png "  alt="Client 5" loading="lazy" height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/partner/One_IBC logo gray.webp" loading="lazy" alt="Client 5"  height="100">
                            <img src="imgs/partner/onezero logo  gray.webp" loading="lazy" alt="Client 5"  height="100">
                            <img src="imgs/partner/primexm logo gray.png" loading="lazy" alt="Client 5"  height="100">
                        </div>
                        <div class="carousel-item">
                            <img src="imgs/partner/priximglobal website  gray logo.webp" loading="lazy" alt="Client 5"  height="100">
                            <img src="imgs/partner/Spotware logo gray.webp" loading="lazy" alt="Client 5" height="100">
                            <img src="imgs/partner/traction.png" loading="lazy" alt="Client 5"  height="100">
                        </div>
                        <div class="carousel-item carousel-item2">
                            <img src="imgs/partner/2 forexwhitelabel gray logo with tagline png.webp" loading="lazy" alt="Client 5"  height="100">
                            <img src="imgs/partner/shiftmarkets gray logo.webp" loading="lazy" alt="Client 5"  height="100">
                            <img src="imgs/partner/ark gray logo updated.webp" loading="lazy" alt="Client 5"  height="100">
                        </div>
                     
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p>All Product Names, Logos, And Brands Are Property Of Their Respective Owners.
                    Use Of These Names, Logos, And Brands May Not Imply Endorsement.</p>
            </div>
        </section>
        <section class="op-counters">
            <div class="container">
                <h2 class="sr-only">Our Stats</h2>
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="counter-box d-flex flex-wrap align-items-center align-self-center text-center">
                            <i class="fas fa-project-diagram"></i>
                            <span class="number">
                                <span class="number">
                                    <span class="timer counter-number" data-count="24">24</span>
                                    <span>+</span>
                                </span>
                            </span>
                            <span class="detail">Forex Broker</span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="counter-box d-flex flex-wrap align-items-center align-self-center text-center">
                            <i class="fas fa-user"></i>
                            <span class="number">
                                <span class="timer counter-number" data-count="10000">100000</span>
                                <span>+</span>
                            </span>
                            <span class="detail">Fx Traders</span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="counter-box d-flex flex-wrap align-items-center align-self-center text-center">
                            <i class="fas fa-trophy"></i>
                            <span class="number">
                                <span class="timer counter-number" data-count="40">40</span>
                                <span>+</span>
                            </span>
                            <span class="detail">Advisors</span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="counter-box d-flex flex-wrap align-items-center align-self-center text-center">
                            <i class="fas fa-smile"></i>
                            <span class="number">
                                <span class="timer counter-number" data-count="4">4</span>
                                
                            </span>
                            <span class="detail">Time Zones</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="" style="padding-top: 100px;">
            <div class="container">
                <h2 style="text-align: center;">Frequently Asked Questions</h2>
                <div class="row">
                    <div class="col-12 mb-5">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn btn-link" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fas fa-plus"></i>
                                            Why Should I Consider Forex Outsourcing?
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Forex outsourcing allows you to leverage professional expertise, streamline operations, and stay compliant with regulatory changes.

                                    </div>
                                </div>
                            </div>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fas fa-plus"></i>
                                                Is there a dedicated support team for specific services or products?
    
                                            </a>
                                        </h5>
                                    </div>
    
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            ForexOutsource provides dedicated support teams unlike other service providers. These support teams consist of highly trained individuals, always ready to handle all possible setbacks    
                                        </div>
                                    </div>
                                </div>
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="fas fa-plus"></i>
                                                    Why choose outsourcing instead of In-House team?
        
                                                </a>
                                            </h5>
                                        </div>
        
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordion">
                                            <div class="card-body">
                                                Opting for outsourcing you non-core activities an help you to not only save time on finding required experts but also help to save cost by leveraging support teams by the service providers.         
                                            </div>
                                        </div>
                                    </div>
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        <i class="fas fa-plus"></i>
                                                        What are the prices for services provided by forexoutsource?
            
                                                    </a>
                                                </h5>
                                            </div>
            
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    Our Live Chat and Email Desk services start from $2.5/per hour,
                                                    Our Phone Inbound services start from $2.5/per hour
                                                    CRM and Back-office facility can be made available starting from $500/per month
                                                    MT4/MT5 administration service starts at $500/month 
                                                    While Remote Support services are provided on instance basis.
                                                </div>
                                            </div>
                                        </div>
                        </div>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h5 class="mb-0">
                                        <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            <i class="fas fa-plus"></i>
                                            What are the cost-saving benefits of outsourcing services?

                                        </a>
                                    </h5>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        Outsourcing services can significantly reduce costs for businesses. By outsourcing certain functions or tasks, companies can avoid expenses associated with hiring and training full-time employees, providing office space and equipment, and offering employee benefits. Additionally, outsourcing service providers often operate in countries with lower labor costs, further driving down expenses.
                                    </div>
                                </div>
                            </div>
            </div>
                    </div>
                  
                </div>
            </div>
        </section>


        
 

        

    </main>
    <script>
      (function($) {
  $.fn.countTo = function(options) {
    options = options || {};

    return $(this).each(function() {
      // set options for current element
      var settings = $.extend(
        {},
        $.fn.countTo.defaults,
        {
          from: $(this).data("from"),
          to: $(this).data("to"),
          speed: $(this).data("speed"),
          refreshInterval: $(this).data("refresh-interval"),
          decimals: $(this).data("decimals")
        },
        options
      );

      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;

      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data("countTo") || {};

      $self.data("countTo", data);

      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);

      // initialize the element with the starting value
      render(value);

      function updateTimer() {
        value += increment;
        loopCount++;

        render(value);

        if (typeof settings.onUpdate == "function") {
          settings.onUpdate.call(self, value);
        }

        if (loopCount >= loops) {
          // remove the interval
          $self.removeData("countTo");
          clearInterval(data.interval);
          value = settings.to;

          if (typeof settings.onComplete == "function") {
            settings.onComplete.call(self, value);
          }
        }
      }

      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };

  $.fn.countTo.defaults = {
    from: 0, // the number the element should start at
    to: 0, // the number the element should end at
    speed: 1000, // how long it should take to count between the target numbers
    refreshInterval: 100, // how often the element should be updated
    decimals: 0, // the number of decimal places to show
    formatter: formatter, // handler for formatting the value before rendering
    onUpdate: null, // callback method for every time the element is updated
    onComplete: null // callback method for when the element finishes updating
  };

  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
})(jQuery);

jQuery(function($) {
  // custom formatting example
  $(".count-number").data("countToOptions", {
    formatter: function(value, options) {
      return value
        .toFixed(options.decimals)
        .replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
    }
  });

  // start all the timers
  $(".timer").each(count);

  function count(options) {
    var $this = $(this);
    options = $.extend({}, options || {}, $this.data("countToOptions") || {});
    $this.countTo(options);
  }
});

    </script>
    <script>
        document.querySelectorAll(".item").forEach(element => {
            if (element.classList.contains("active")) {
                element.classList.remove("active")
            }
            element.addEventListener("click", function (e) {
    
                if (document.querySelector(".item.active")) {
                    document.querySelector(".item.active").classList.remove("active")
                }
                if (element.classList.contains("active")) {
                    element.classList.remove("active")
                } else {
                    element.classList.add("active")
                }
    
            })
        })
    </script> 



    <?php include('footer.php') ?>
    
