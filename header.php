<?php include("title.php");?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title ?></title>
        <meta name="description" content="<?php echo $description ?> " />
        <meta name="keywords" content="<?php echo $keywords ?> " />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="pT5gdPYFEQ6K_HXm789YObedr26xWGdlWliaIfQeSQg" />
        <link rel="shortcut icon" type="image/jpg" href="imgs/Favicon.png" />
        <link rel="preload" href="css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="css/bootstrap.min.css"></noscript>
       
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Muli:400,500,600,700,900&display=swap" as="font" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="font" href="https://fonts.googleapis.com/css?family=Muli:400,500,600,700,900&display=swap"></noscript>
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,900&display=swap" as="font" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,900&display=swap"></noscript>
       
        
    
    </head>
<style>
    .activebtn ::after{
    position: absolute;
    content: "";
    width: 35px;
    height: 2px;

    background-color: #65bc7b;
    bottom: -3px;
    left: 0;
}
@media only screen and (min-width:993px){
    .display-lg-none{
        display: none;
    }
}
@media only screen and (max-width:992px) {
    .display-md-none{
        display: none;
    }
    
}
.contact-btn{
    padding: 15px 20px;
                                background-color: #fff;
                                margin: auto;
                                font-size: 15px;
                                font-weight: 500;
                                color: #000;
                                border-radius: 25px;
                                position: relative;
                                left: 40px;
                                top: 2px;
}
.contact-btn:hover{
                                background-color: #65bc7b;
                                color: #ffffff;
}
a:hover{
    text-decoration: none;
}
    
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #000000; /* Set a background color */
    color: white; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
    font-size: 18px; /* Increase font size */
    height:55px;
    width:55px;
  }
  
  #myBtn:hover {
    background-color: #555; /* Add a dark-grey background on hover */
  }</style>


<body>
    <div class="top-bar-area top-bar-style-one bg-dark1 text-light display-md-none header-padding">
        <div class="container">
            <div class="row align-center">
                <div class="col-8">
                    <ul class="item-flex item-flex-icon" style="margin: 20px 0;">
                        <li class="li-margin"><img src="imgs/mail.png" alt=""><a href="mailto:sales@priximglobal.com" target="_blank"> sales@priximglobal.com</a></li>
                        <!-- <li><img src="imgs/phone-call.webp" alt=""><a href="tel:+442036952310" target="_blank"></a></li> -->
                        <li><img src="imgs/whatsapp.webp" alt=""><a href="https://wa.me/+971544335310" target="_blank">+971544335310</a></li>
                        <li><img src="imgs/skype.webp" alt=""><a href="https://join.skype.com/invite/xraWIPh4p9eP" target="_blank"> Prixim Global</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul class="item-flex">
                        <li>Serviced By: <a href="https://priximglobal.com/"><img src="imgs/prixim global logo.webp" alt=""></a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
<header class="op-header">

<div class="container px-lg-5">
    <div class="row align-items-center justify-content-center">
        <div class="col-lg-2">
            <div class="op-logo-wrapper">
                <a href="index.php">
                    <img src="imgs/forexoutsoursing logo white green.webp" class="main-logo" alt="Main Logo" >
                    <img src="imgs/forexoutsoursing logo blue green.png" class="sticky-logo" alt="Main Logo" >
                </a>
            </div>
        </div>
        <div class="col-lg-10">

           

            <div class="op-nav-wrapper">

                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item <?php if($page=='home') {echo 'activebtn';} ?>">
                                <a class="nav-link  " href="index.php">Home </a>
                            </li>
                            <li class="nav-item sub-menu">
                                <a class="nav-link <?php 
                                if($page=='about-us' || $page=='how-it-works'){echo 'activebtn';}
                                ?>" href="#">Explore Us
                                    <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="second-level-sub-menu sub-menus">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='how-it-works') {echo 'active-anchor';} ?>" href="how-it-works.php">How It Works
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='about-us') {echo 'active-anchor';} ?>" href="about-us.php">About Us
                                        </a>
                                    </li>
                                   
                                                         
                                </ul>

                            </li>
                            <li class="nav-item sub-menu">
                                <a class="nav-link <?php 
                                if($page=='live-chat' || $page=='email-desk'|| $page=='phone-inbound'|| $page=='crm-and-back-office'|| $page=='mt4-MET5-administration'|| $page=='remote-support'){echo 'activebtn';}
                                ?>" href="#">Support Services


                                    <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="second-level-sub-menu sub-menus">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='live-chat') {echo 'active-anchor';} ?>" href="live-chat.php">Live Chat
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='email-desk') {echo 'active-anchor';} ?>" href="email-desk.php">Email Desk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='phone-inbound') {echo 'active-anchor';} ?>" href="phone-inbound.php">Phone Inbound </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='back-office-oursourcing.php') {echo 'active-anchor';} ?>" href="back-office-oursourcing.php">Back Office Outsourcing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='mt4-MET5-administration') {echo 'active-anchor';} ?>" href="mt4-MET5-administration.php">MT4/MET5 Administration
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='remote-support') {echo 'active-anchor';} ?>" href="remote-support.php">Remote Support
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item sub-menu">
                                <a class="nav-link <?php 
                                if($page=='live-chat-pricing' || $page=='email-desk-pricing'|| $page=='phone-inbound-pricing'|| $page=='crm-and-back-office-pricing'|| $page=='mt4-MET5-administration-pricing'|| $page=='remote-support-pricing'){echo 'activebtn';}
                                ?>" href="#"> Pricing 
                                <i class="fa fa-chevron-down"></i>
                                </a>
                                <ul class="second-level-sub-menu sub-menus">
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='live-chat-pricing') {echo 'active-anchor';} ?>" href="live-chat-pricing.php">Live Chat Pricing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='email-desk-pricing') {echo 'active-anchor';} ?>" href="email-desk-pricing.php">Email Desk Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='phone-inbound-pricing') {echo 'active-anchor';} ?>" href="phone-inbound-pricing.php">Phone Inbound Pricing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='back-office-outsourcing') {echo 'active-anchor';} ?>" href="back-office-oursourcing-pricing.php">Back Office Outsourcing Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='mt4-MET5-administration-pricing') {echo 'active-anchor';} ?>" href="mt4-MET5-administration-pricing.php">MT4/MET5 Administration Pricing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($page=='remote-support-pricing') {echo 'active-anchor';} ?>" href="remote-support-pricing.php">Remote Support Pricing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="nav-item <?php if($page=='blogs') {echo 'activebtn';} ?>">
                                <a class="nav-link" href="https://forexoutsource.com/blogs/">Blogs
                                   
                                </a>
                               
                            </li>
                            <!-- <li class="nav-item <?php if($page=='contact-us') {echo 'activebtn';} ?>"> -->
                                <a class="contact-btn" href="contact-us.php">Contact Us</a>
                            <!-- </li> -->
                            
                        </ul>
                        <div class="top-bar-area top-bar-style-one bg-dark1 text-light display-lg-none">
                            <div class="container">
                                <div class="row align-center">
                                    <div class="col-12">
                                        <ul class="item-block" style="margin: 20px 0;">
                                            <li><a href="mailto:sales@priximglobal.com" target="_blank"><i class="fa-solid fa-envelope" style="color: #61b577;"></i>sales@priximglobal.com</a></li>
                                            <li><a href="tel:+442036952310" target="_blank"><i class="fa-solid fa-phone" style="color: #61b577;"></i>+44 20 36952310</a></li>
                                            <li><a href="https://wa.me/+971544335310" target="_blank"><i class="fa-brands fa-whatsapp" style="color: #61b577;"></i>+971544335310</a></li>
                                            <li><a href="https://join.skype.com/invite/xraWIPh4p9eP" target="_blank"><i class="fa-brands fa-skype" style="color: #61b577;"></i>Prixim Global</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12">
                                        <ul class="item-flex">
                                            <li>Serviced By: <a href="https://priximglobal.com/"><img src="imgs/prixim global logo.webp" alt="" width="200"></a></li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </nav>
                

            </div>

            <!-- Navigation ends here  -->
            

        </div>
    </div>
</div>


</header>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-arrow-up"></i></button>