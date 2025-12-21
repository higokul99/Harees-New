<?php include_once('includes/header.php'); ?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php include_once('includes/sidebar.php'); ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php include_once('includes/topbar.php'); ?>
            <!-- Navbar End -->


<!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <!-- <p class="mb-2">Gold Rate</p> -->
                                <a href="AddGoldRate.php"><button type="button" class="btn btn-primary m-2" style="color: black;">Update Gold Rate Now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <!-- <p class="mb-2">Gold Rate</p> -->
                                <a href="#"><button type="button" class="btn btn-primary m-2" style="color: black;">Silver,Diamond Rate</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <!-- <p class="mb-2">Gold Rate</p> -->
                                <a href="DownloadStory.php"><button type="button" class="btn btn-primary m-2" style="color: black;">Download GoldRate Poster</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <a href="Calculator.php"><button type="button" class="btn btn-primary m-2" style="color: black;">Gold Rate Calculator</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Today Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total Revenue</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Sale & Revenue End -->



<div class="container-fluid pt-4 px-4">
    <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
        <button type="button" class="btn btn-primary m-2"><i class="fa fa-home me-2"></i>Icon Left</button>
        <div class="col-md-6 text-center">
            <button type="button" class="btn btn-primary m-2"><i class="fa fa-home me-2"></i>Icon Left</button>
        </div>
    </div>
</div>
 




<!-- Footer Start -->
<?php include_once('includes/footer.php'); ?>