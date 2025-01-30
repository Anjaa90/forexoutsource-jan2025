<?php
if (isset($_POST['email'])) {

    $email_to = "sales@priximglobal.com";
    $email_subject = "Contact Us Form";

    // Error handling function
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    // Validate required fields
    if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['your_company']) || empty($_POST['your_requirements_feedback'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');
    }

    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email_from = $_POST['email'];
    $your_company = $_POST['your_company'];
    $your_requirements_feedback = $_POST['your_requirements_feedback'];
    $ip = $_SERVER['REMOTE_ADDR'];

    // Prepare email message
    $email_message = "Form details below.\n\n";

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Senders IP: ".clean_string($ip)."\n\n";
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Your Company: ".clean_string($your_company)."\n";
    $email_message .= "Your requirements and Feedback: ".clean_string($your_requirements_feedback)."\n";

    // Set email headers
    $headers = 'From: noreply@forexoutsource.com' . "\r\n";
    $headers .= 'Reply-To: ' . $email_from . "\r\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();

    // Send the email
    if (@mail($email_to, $email_subject, $email_message, $headers)) {
        echo '<script language="javascript" type="text/javascript">
                alert("Thank you for the message. We will contact you shortly.");
                window.location = "index.php";
              </script>';
    } else {
        echo '<script language="javascript" type="text/javascript">
                alert("Message failed. Please, send an email to support@priximglobal.com");
                window.location = history.back();
              </script>';
    }
}
?>

<?php $page="contact-us"; include("header.php");?>
<style>
   
    .contact-detail{
        box-shadow: 0 1px 1px rgba(0,0,0,0.12), 0 2px 2px rgba(0,0,0,0.12);
        padding-bottom: 30px;
    }
    .op-section-contact-details .contact-detail:before {
    position: absolute;
    content:none;
    right: 0;
    left: auto;
    top: 0;
    bottom: 0;
    margin: auto;
    width: 0px;
    height: 0px;
    border: none;
}
    .op-section-contact-details .contact-detail h3{
        margin-top: 15px;
        font-size: 18px;
    }
    .op-section-contact-details .contact-detail h4{
        font-size: 17px;
        font-weight: 600;
        margin-bottom: 5px;
    }
    .op-section-contact-details .contact-detail p{
        font-size: 16px;
        text-align: center;
        margin-bottom: 5px;
    }
    .op-section-contact-details .contact-detail i {
        width: 0 !important;
        text-align: center;
        align-items: center;
        justify-content: center;
        display: inline;
        background: none !important;
}
    .op-section-contact-details .contact-detail i:before {
    color:rgb(80,80,80) ;
    font-size: 12px;
    padding-right: 10px;
}
.contact-detail a{
    color: rgb(80, 80, 80);
}
    
</style>
<main>
    <section class="page-header-wrapper">
            <div class="container">
                <h1 class="text-center white-color text-capitalize">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </section>

       

        <!-- Contact Details section starts here -->

        <section class="op-section-contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md contact-col">
                        <div class="contact-detail">
                        <img src="imgs/united-kingdom.png" alt="">
                            <h3>United Kingdom</h3>
                            <h4>Prixim Analytics EU Ltd</h4>
                            <p>Office 71-75, Shelton Street, Covent Garden, <br> London, WC2H 9JQ</p>
                            <a href=""><i class="fa-solid fa-phone"></i>(+44) 20 36952310</a>
                            <br>
                        </div>
                    </div>
                    <div class="col-12 col-md contact-col">
                        <div class="contact-detail">
                           <img src="imgs/united-arab-emirates.png" alt="">
                            <h3>Dubai - UAE</h3>
                            <h4>Consulting Office</h4>
                            <p>Level 1, C1 Building, Central One District,Next to Ibis One
                            Central - Dubai - (UAE) <br> Downtown Dubai - United Arab Emirates</p>
                            <a href=""><i class="fa-solid fa-phone"></i>+971 54433 5310</a>
                        </div>
                    </div>
                   
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md contact-col">
                        <div class="contact-detail">
                        <img src="imgs\Indialogo.png" alt="" style="border-radius: 50%; width: 15%;">
                            <h3>Mumbai</h3>
                            <h4>Prixim Global</h4>
                            <p>F09, Vashi Fantasia, Sector 30A, Vashi, Navi Mumbai - 400703</p>
                                <a href=""><i class="fa-solid fa-phone"></i>+91 22 65011568</a>
                        </div>
                    </div>
                    <div class="col-12 col-md contact-col">
                        <div class="contact-detail">
                        <img src="imgs\Indialogo.png" alt=""  style="border-radius: 50%; width: 15%;">
                            <h3>APAC Relationship Center</h3>
                            <p>Awfis, 2nd Floor, Vishwaroop IT Park, Vashi, Navi Mumbai, 400703</p>
                            <a href=""><i class="fa-solid fa-phone"></i>+971544335310</a>
                            <br>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md contact-col">
                        <div class="contact-detail">
                           
                            <h3>Gurgaon</h3>
                            <p>90B, Delhi - Jaipur Expy, Udyog Vihar, Sector 18, Gurugram, Haryana 122008</p> 
                            <a href=""><i class="fa-solid fa-phone"></i>+91 8104709887</a>
                            <br>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>

   

        <section class="op-section-contact-form">
    <div class="container">
        <div class="row">
            <div class="col offset-md-1 col-md-10 form-shadow">
                <span class="top-sub-heading">Contact Us</span>
                <h2 class="text-left">Contact us for <span class="bold-text-title">FREE Consultation</span></h2>
                <div role="form" class="wpcf7" id="wpcf7-f303-p20-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="" method="post" class="wpcf7-form">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input type="text" name="name" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                           aria-required="true" aria-invalid="false" placeholder="Name*" required>
                                </span>
                            </div>
                            <div class="col-12 col-md-6">
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                           aria-required="true" aria-invalid="false" placeholder="Email*" required>
                                </span>
                            </div>
                            <div class="col-12 col-md-6">
                                <span class="wpcf7-form-control-wrap your-phone">
                                    <input type="text" name="phone" value="" class="wpcf7-form-control wpcf7-text" 
                                           aria-required="true" placeholder="Phone No*" required>
                                </span>
                            </div>
                            <div class="col-12 col-md-6">
                                <span class="wpcf7-form-control-wrap your-company">
                                    <input type="text" name="your_company" value="" class="wpcf7-form-control wpcf7-text" 
                                           aria-required="false" placeholder="Your Company">
                                </span>
                            </div>
                            <div class="col-12">
                                <span class="wpcf7-form-control-wrap your-message">
                                    <textarea name="your_requirements_feedback" rows="5" class="wpcf7-form-control wpcf7-textarea"
                                              placeholder="Your requirements and feedbacks"></textarea>
                                </span>
                            </div>
                            <div class="col">
                                <div class="">
                                    <button class="btn btn-primary btn-hover-white" type="submit" value="submit" name="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


    </main>

  <?php include("footer.php"); ?>