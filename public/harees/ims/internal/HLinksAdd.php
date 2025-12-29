<?php 

include('includes/header.php');

?>

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
<?php
include('../db_connect.php');

?>




            


<!-- GOlD Calc -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">HLinks - Add Category</h1>

                            <form method="POST" action="Hlinks_Controller.php">
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name:</label>
                                    <input type="text" name="CategoryName" class="form-control">
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Making Charge :</label>
                                    <input type="decimal" name="makingCharge" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">GST :</label>
                                    <input type="decimal" name="gst" class="form-control" value="3">
                                </div> -->
                                <button type="submit" name="SaveCategory" class="btn btn-primary"  style="color: black; width:100%;">Calculate</button>
                            </form>

                     <br>
                            
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sale & Revenue End -->




 




<!-- Footer Start -->
<?php include_once('includes/footer.php'); ?>