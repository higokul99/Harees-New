<?php include_once('includes/header.php'); ?>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <?php include_once('includes/sidebar.php'); ?>
        <div class="content">
            <?php include_once('includes/topbar.php'); ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">Supplier Details</h1>

                            <?php
                            include('../db_connect.php');

                            if (isset($_GET['id'])) {
                                $supplier_id = $_GET['id'];

                                $sql = "SELECT * FROM suppliers WHERE id = " . $supplier_id;
                                $result = $conn->query($sql);

                                if ($result->num_rows == 1) {
                                    $row = $result->fetch_assoc();

                                    // Form with Edit Option
                                    echo "<form method='POST' action='MasterSupplier.php'>"; // New page for updates
                                    echo "<input type='hidden' name='supplier_id' value='" . $row["id"] . "'>"; // Hidden ID field
                                    echo "<div class='mb-3'><label class='form-label'>Name:</label><input type='text' class='form-control' name='supplier_name' value='" . $row["supplier_name"] . "' required></div>";
                                    echo "<div class='mb-3'><label class='form-label'>Contact Person:</label><input type='text' class='form-control' name='contact_person' value='" . $row["contact_person"] . "'></div>";
                                    echo "<div class='mb-3'><label class='form-label'>Address:</label><input type='text' class='form-control' name='address' value='" . $row["address"] . "'></div>";
                                    echo "<div class='mb-3'><label class='form-label'>City:</label><input type='text' class='form-control' name='city' value='" . $row["city"] . "'></div>";
                                    echo "<div class='mb-3'><label class='form-label'>State:</label><input type='text' class='form-control' name='state' value='" . $row["state"] . "'></div>";
                                    echo "<div class='mb-3'><label class='form-label'>Zip Code:</label><input type='text' class='form-control' name='zip_code' value='" . $row["zip_code"] . "'></div>";
                                    echo "<div class='mb-3'><label class='form-label'>Country:</label><input type='text' class='form-control' name='country' value='" . $row["country"] . "'></div>";
                                    echo "<div class='mb-3'><label class='form-label'>Phone:</label><input type='text' class='form-control' name='phone' value='" . $row["phone"] . "' required></div>";
                                    echo "<div class='mb-3'><label class='form-label'>Email:</label><input type='email' class='form-control' name='email' value='" . $row["email"] . "' required></div>";
                                    echo "<button type='submit' class='btn btn-primary'>Update Supplier</button>";
                                    echo "</form>";
                                } else {
                                    echo "Supplier not found.";
                                }
                            } else {
                                echo "Invalid request.";
                            }

                            $conn->close();
                            ?>

                        </div>
                    </div>
                </div>
            </div>

            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>
</body>

</html>