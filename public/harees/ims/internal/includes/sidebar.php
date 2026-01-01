<!-- Sidebar partial -->
<!-- Font Awesome Upgrade (Legacy Support) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<?php
include_once('data.php');
include_once('../db_connect.php');

?>
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.php" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><img src="img/hareesjewelleryfavicon.png" style="width: 30px; height: 30px;"> Dashboard</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"><?php echo $Username; ?></h6>
                <span><?php echo $UserRole; ?></span>
            </div>
        </div>

        <div class="navbar-nav w-100">
            <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="GoldRate.php" class="nav-item nav-link"><i class="fa fa-piggy-bank me-2"></i>Gold Rate</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-calculator me-2"></i>Calculators</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="CalculatorFor18KGold.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>18K Calculator</a>
                    <a href="CalculatorFor18KGoldAndDiamond.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>18K + Diamond</a>
                    <a href="CalculatorFor18KGoldStone.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>18K + Stone</a>
                    <a href="CalculatorFor22KGold.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>22K Calculator</a>
                    <a href="CalculatorFor22KGoldStone.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>22K + Stone</a>
                    <a href="CalculatorForSilver.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>Normal Silver</a>
                    <a href="CalculatorFor925Silver.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>925 Silver</a>
                    <a href="CalculatorForRoseGoldSilver.php" class="dropdown-item"><i class="fa fa-calculator me-2"></i>Rose Gold Silver</a>

                </div>
            </div>
            <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Online Website</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Homepage</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Products - 18K</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Products - 22K</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Products - Diamond</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Products - Silver</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Products - Rose Gold</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Other Elements</a>
                        </div>
                    </div> -->
            <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>HLinks Updation</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Add New Link</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>View Hlinks</a>
                            <a href="hlinksAddCategory.php" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Add New Category</a>
                        </div>
                    </div> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-tags me-2"></i>My Products</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <!-- <a href="AddProduct.php" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Add New Product</a> -->
                    <a href="AddProduct2.php" class="dropdown-item"><i class="fa fa-plus-circle me-2"></i>Add New Product 2</a>
                    <a href="SearchProduct.php" class="dropdown-item"><i class="fa fa-search  me-2"></i>Search/Update Product</a>
                    <a href="ViewProductsMenu.php" class="dropdown-item"><i class="fa fa-eye me-2"></i>View Products</a>
                    <a href="product_delist.php" class="dropdown-item"><i class="fa fa-times-circle me-2"></i>De-List Products</a>
                    <a href="featured.php" class="dropdown-item"><i class="far fa-star me-2"></i>Feature Products</a>
                    <a href="makingcharges.php" class="dropdown-item"><i class="fa fa-rupee-sign me-2"></i>Update Making charges</a>
                    <!-- <a href="blank.html" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Blank Page</a> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-warehouse me-2"></i>Stock & Orders</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="addsupplier.php" class="dropdown-item"><i class="fa fa-boxes me-2"></i>Update Stock</a>
                    <a href="order_new.php" class="dropdown-item"><i class="fa fa-shopping-cart me-2"></i>New Orders</a>
                    <!-- <a href="ViewSupplier.php" class="dropdown-item">Tag Featured</a> -->
                    <!-- <a href="#" class="dropdown-item">404 Error</a>
                            <a href="#" class="dropdown-item">Blank Page</a> -->
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-tie me-2"></i>Supplier</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="supplier_add.php" class="dropdown-item"><i class="fa fa-user-plus me-2"></i>Add New Supplier</a>
                    <a href="supplier_view.php" class="dropdown-item"><i class="far fa-address-book me-2"></i>View Suppliers</a>
                    <a href="model_management.php" class="dropdown-item"><i class="fa fa-tools me-2"></i>Update models</a>

                    <!-- <a href="#" class="dropdown-item">404 Error</a>
                            <a href="#" class="dropdown-item">Blank Page</a> -->
                </div>
            </div>
            <!-- <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Supplier</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Models</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
            <!-- <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Employees</a> -->


            <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Staffs</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>View My Staffs</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Add New Staff</a>
                            <a href="#" class="dropdown-item"><i class="far fa-file-alt me-2"></i>Staff Access</a>
                        </div>
                    </div> -->

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cogs me-2"></i>Site Settings</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="fe_careerspage_viewall.php" class="dropdown-item"><i class="fa fa-briefcase me-2"></i>Manage career page</a>
                    <a href="website_info_control.php" class="dropdown-item"><i class="fa fa-info-circle me-2"></i>Website Info Control</a>
                    <!-- <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a> -->
                </div>
            </div>


            <?php
            if ($env == "local") {
            ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-code me-2"></i>Templates</a>
                    <div class="dropdown-menu bg-transparent border-0">
                        <a href="button.html" class="dropdown-item">Buttons</a>
                        <a href="typography.html" class="dropdown-item">Typography</a>
                        <a href="element.html" class="dropdown-item">Other Elements</a>

                        <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                        <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                        <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                        <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>


                        <a href="login.php" class="dropdown-item">Sign In</a>
                        <a href="signup.html" class="dropdown-item">Sign Up</a>
                        <a href="404.html" class="dropdown-item">404 Error</a>
                        <a href="blank.html" class="dropdown-item">Blank Page</a>
                    </div>
                </div>

            <?php  } ?>
            <!-- <a href="featured.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Featured Product</a> -->
        </div>
    </nav>
</div>