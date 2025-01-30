<?php $page="crm-and-back-office-pricing"; include("header.php")?>
<style>
    .card-fonts h3 {
        font-weight: 700;
        font-size: 19px;
    }
</style>
<main>
    <section class="page-header-wrapper">
        <div class="container">
            <h1 class="text-center white-color text-capitalize">Back Office Outsourcing Pricing</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Packages </a></li>
                    <li class="breadcrumb-item active" aria-current="page">CRM and Back-Office Pricing</li>
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
                                <img src="imgs/web-development.png" alt="Team Member">
                            </div>
                            <h3><a href="#">Our Back-Office Services For Forex Business On 
                                <span>MONTHLY BASIS </span></a></h3>
                            <p>Upscale your Forex business with our BACK-OFFICE services starting from just
                            </p>
                            <div class="mb-3">
                            <h4>999$ <sub>/per month
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
            <h2><span class="bold-text-title">CRM and BACK-OFFICE package services provides you with
                </span></h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-globe"></i>
                        <h3>IB Management & Mapping
                        </h3>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-solid fa-user-plus" style="color: #6cf483;"></i>
                        <h3>New Client Onboarding
                        </h3><br>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-hand-holding-dollar" style="color: #6cf483;"></i>
                        <h3>
                        Streamlined Sales Process</h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-people-group" style="color: #6cf483;"></i>
                        <h3>Dedicated Support Teams
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                        <h3>Reports And Analytics
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center white-card">
                        <i class="fa-solid fa-file-invoice"></i>
                        <h3>KYC Management
                        </h3>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center black-card">
                        <i class="fa-solid fa-square-plus"></i>
                        <h3>Account Creation
                        </h3>


                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div
                        class="card-fonts feature-wrapper d-flex flex-wrap align-items-center align-self-center text-center green-card">
                        <i class="fa-solid fa-people-roof"></i>
                        <h3>AML Management
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