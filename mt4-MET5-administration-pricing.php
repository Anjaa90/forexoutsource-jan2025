<?php $page="MT4-MET5-administration-pricing"; include("header.php")?>
<style>
   .card-fonts h3 {
        font-weight: 700;
        font-size: 19px;
    }
</style>
<main>
    <section class="page-header-wrapper">
        <div class="container">
            <h1 class="text-center white-color text-capitalize">MT4/MET5 Administration Pricing</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Packages </a></li>
                    <li class="breadcrumb-item active" aria-current="page">MT4/MET5 Administration Pricing</li>
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
                                <img src="imgs/Administration services.png" alt="Team Member">
                            </div>
                            <h3><a href="#">Our MT4/MET5 Administration services For Forex Brokerage Business Have billing on a <br>
                               <span>MONTHLY BASIS </span></a></h3>
                            <p>Get the best MT4/MET5 Administration For Your Forex Business starting at just
                            </p>
                            <div class="mb-3">
                            <h4>500$ <sub>/per month
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
            <h2><span class="bold-text-title">Our MT4/MET5 administration package includes
                </span></h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-compass"></i>
                        <h3>MT4/MET5 API
                        </h3>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-solid fa-link" style="color: #6cf483;"></i>
                        <h3>Plugins & Tools
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-magnifying-glass-chart" style="color: #6cf483;"></i>
                        <h3>Logs & Reports</h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-video" style="color: #6cf483;"></i>
                        <h3>Platform Monitoring
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-user-clock"></i>
                        <h3>24/7 Support
                        </h3><br>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-brands fa-windows"></i>
                        <h3>Windows Server Management
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-gear"></i>
                        <h3>Administrator Configurations
                        </h3>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-calendar-day"></i>
                        <h3>Daily and Weekly Server Reports
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