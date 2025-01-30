<?php $page="phone-inbound-pricing"; include("header.php")?>
<style>
    .card-fonts h3 {
        font-weight: 700;
        font-size: 19px;
    }
</style>
<main>
    <section class="page-header-wrapper">
        <div class="container">
            <h1 class="text-center white-color text-capitalize">Phone Inbound Pricing</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Packages </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Phone Inbound Pricing</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="op-section-team-variation">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="single-team-member">
                            <div class="image-wrapper">
                                <img src="imgs/incoming-call.png" alt="Team Member">
                            </div>
                            <h3><a href="#">Phone Inbound Support services For Your Forex Business<br>
                               <span> HOURLY BILING </span>basis.</a></h3>
                            <p>Maximise your forex business efficiency with our Phone Inbound Support starting from just
                            </p>
                            <div class="mb-3">
                            <h4>2.5$ <sub>/per hour
                            </sub></h4>
</div>
                            <a href="contact-us.php" class="btn btn-primary btn-white mt-2">Get Free Demo</a>
                        </div>
                    </div>
                
                </div>
            </div>
     </section>



    <section class="op-section-features">
        <div class="container">
            <h2><span class="bold-text-title">With our Phone Inbound Support you can have 
                </span></h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-arrow-up-right-dots"></i>
                        <h3>Increased Efficiency
                        </h3>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-solid fa-file-signature" style="color: #6cf483;"></i>
                        <h3>Quality Assurance
                        </h3>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-shield-halved" style="color: #6cf483;"></i>
                        <h3>Data Security
                        </h3>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-globe" style="color: #6cf483;"></i>
                        <h3>Customized Solutions
                        </h3>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <h3>Performance Analytics
                        </h3><br>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-solid fa-user-clock"></i>
                        <h3>24/7 Support
                        </h3><br>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-clock"></i>
                        <h3>Reduced Response Times
                        </h3>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-chart-pie"></i>
                        <h3>Advanced Technology Integration
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include("contact-page.php");?> 
    </main>
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
<?php include("footer.php")?>