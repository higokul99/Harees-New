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



            <?php
            $TodayGold_18K = get18krate($conn);
            $TodayGold_22K = get22krate($conn);

            $NormalSilverRate = get_normal_silver_rate($conn);
            $Silver925Rate = get_925_silver_rate($conn);
            $RosegoldSilverRate = get_rosegold_silver_rate($conn);

            $DiamondRate = get_diamond_rate($conn);

            $UpdatedDate = getUpdatedDate($conn, 'goldrate');
            $UpdatedTime = getUpdatedTime($conn, 'goldrate');
            // $TodayGold_18K = getSilverrate();
            // $TodayGold_18K = getDiamondrate();

            ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">ADD GOLD RATE</h1>
                            <h5 class="mb-4" style="color: #f5d02a;">Last Updated On : <?php echo $UpdatedDate; ?></h5>
                            <form action="MasterController.php" method="POST">
                                <h3 class="mb-4">18 Carat</h3>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Gram </label>
                                    <input type="number" name="18K1GM" class="form-control" value="<?php echo $TodayGold_18K; ?>" id="exampleInputEmail1" aria-describedby="emailHelp" oninput="this.value = this.value.slice(0, 5)">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">8 Gram </label>
                                    <input type="number" name="18K8GM" class="form-control" id="exampleInputEmail1"                                     aria-describedby="emailHelp">
                                </div> -->

                                <h3 class="mb-4">22 Carat</h3>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Gram </label>
                                    <input type="number" name="22K1GM" class="form-control" value="<?php echo $TodayGold_22K; ?>" id="exampleInputEmail1" oninput="this.value = this.value.slice(0, 5)" aria-describedby="emailHelp">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">8 Gram </label>
                                    <input type="number" name="22K8GM" class="form-control" id="exampleInputEmail1"                                     aria-describedby="emailHelp">
                                </div> -->

                                <button type="submit" name="SaveGoldRate" class="btn btn-primary" style="color: black;">SAVE</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h4 class="mb-4">Add Silver Rate</h4>
                            <form action="MasterController.php" method="POST">
                                <h6 class="mb-4">Normal Silver</h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Gram </label>
                                    <input type="number" name="NormalSilver" class="form-control" value="<?php echo $NormalSilverRate; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <h6 class="mb-4">925 Silver</h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Gram </label>
                                    <input type="number" name="Silver925" class="form-control" value="<?php echo $Silver925Rate; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <h6 class="mb-4" style="color: pink;">Rose Gold</h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Gram </label>
                                    <input type="number" name="RoseGoldSilver" class="form-control" value="<?php echo $RosegoldSilverRate; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <h6 class="mb-4">Diamond Rate</h6>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Cent </label>
                                    <input type="number" name="diamondrate" class="form-control" value="<?php echo $DiamondRate; ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <button type="submit" name="SaveSilverRate" class="btn btn-primary" style="color: black;">SAVE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                function successAlert(shortMsg, longMsg) {
                    swal({
                        title: shortMsg,
                        text: longMsg,
                        icon: "success"
                    });
                }

                function failedAlert(shortMsg, longMsg) {
                    swal({
                        title: shortMsg,
                        text: longMsg,
                        icon: "error"
                    });
                }
            </script>





            <!-- Footer Start -->
            <?php include_once('includes/footer.php'); ?>