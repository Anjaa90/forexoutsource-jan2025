<?php $page="remote-support-pricing"; include("header.php")?>
<style>
    .card-fonts h3 {
        font-weight: 700;
        font-size: 19px;
    }
</style>
<main>
    <section class="page-header-wrapper">
        <div class="container">
            <h1 class="text-center white-color text-capitalize">Remote Support Pricing</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Packages </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Remote Support Pricing</li>
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
                                <img src="imgs/online-support.png" alt="Team Member">
                            </div>
                            <h3><a href="#">Power up your firm with our Remote Support solutions billed on <span>INSTANCE BASIS
                                   </span></a></h3>
                                   <a href="contact-us.php" class="btn btn-primary btn-white mt-3">Get Free Demo</a>
                        
                        </div>
                    </div>
                
                </div>
            </div>
    </section>


    <section class="op-section-features">
        <div class="container">
            <h2><span class="bold-text-title">With our Remote Support package you can get
                </span></h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-desktop"></i>
                        <h3>Proactive Monitoring
                        </h3>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-solid fa-clock-rotate-left" style="color: #6cf483;"></i>
                        <h3>Rapid Response Time
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-file-signature" style="color: #6cf483;"></i>
                        <h3>Customized Solutions</h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-arrow-up-right-dots"></i>
                        <h3>Increased efficiency
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-industry"></i>
                        <h3>Vendor Management
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-solid fa-user-clock"></i>
                        <h3>Availability 24/7
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <h3>Performance Analytics
                        </h3>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-user-check"></i>
                        <h3>Compliance Adherence
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