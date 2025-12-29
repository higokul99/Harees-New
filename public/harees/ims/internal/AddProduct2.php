<?php include_once('includes/header.php'); ?>
<?php include_once('../db_connect.php'); // db connection file 
?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php include_once('includes/sidebar.php'); ?>
        <div class="content">
            <?php include_once('includes/topbar.php'); ?>

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">Add Product (2)</h1>

                            <form method="POST" action="AddProduct2db.php" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="metal_type" class="form-label">Product of Harees Jewellery / Harees Gold and Diamonds :</label>
                                    <select class="form-control" id="brand" name="brand" required>
                                        <!-- <option value="">Select Harees Jewellery/GoldandDiamonds Product</option> -->
                                        <?php
                                        $result = mysqli_query($conn, "SELECT * FROM product_code_prefix");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['pc_prefix_id'] . "'>" . $row['name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="metal_type" class="form-label">Metal Type:</label>
                                    <select class="form-control" id="metal_type" name="metal_type" required>
                                        <option value="">Select Metal Type</option>
                                        <?php
                                        $result = mysqli_query($conn, "SELECT * FROM metals");
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<option value='" . $row['metal_id'] . "'>" . $row['name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="purity" class="form-label">Purity:</label>
                                    <select class="form-control" id="purity" name="purity" required>
                                        <option value="">Select Purity</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="category" class="form-label">Category:</label>
                                    <select class="form-control" id="category" name="category" required>
                                        <option value="">Select Category</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">HD Image</label>
                                    <input class="form-control bg-dark" type="file" id="formFile" name="product_image" accept=".png, .jpg, .jpeg, image/png, image/jpeg" required onchange="checkFileSize(this)">
                                    <div id="fileSizeError" style="color: red; display: none;">Please select a file under 2MB.</div>

                                    <script>
                                        function checkFileSize(input) {
                                            const maxFileSize = 2 * 1024 * 1024; // 2MB in bytes
                                            const fileSizeError = document.getElementById('fileSizeError');

                                            if (input.files.length > 0) {
                                                const file = input.files[0];
                                                if (file.size > maxFileSize) {
                                                    fileSizeError.style.display = 'block'; // Show the error message
                                                    input.value = ''; // Clear the selected file
                                                } else {
                                                    fileSizeError.style.display = 'none'; // Hide the error message
                                                }
                                            } else {
                                                fileSizeError.style.display = 'none'; // Hide the error if no file is selected
                                            }
                                        }
                                    </script>
                                </div>
                                <button type="submit" class="btn btn-primary" style="color: black; width:100%;">Next</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php include_once('includes/footer.php'); ?>
        </div>
    </div>

    <script>
        document.getElementById('metal_type').addEventListener('change', function() {
            const metalId = this.value;

            // Load Purity based on metal_id
            fetch('api2/get_purities.php?metal_id=' + metalId)
                .then(response => response.json())
                .then(data => {
                    const puritySelect = document.getElementById('purity');
                    puritySelect.innerHTML = '<option value="">Select Purity</option>';
                    data.forEach(item => {
                        puritySelect.innerHTML += `<option value="${item.metalpurity_id}">${item.name}</option>`;
                    });
                });

            // Load Categories if it's Silver
            if (metalId) {
                fetch('api2/get_categories.php')
                    .then(response => response.json())
                    .then(data => {
                        const categorySelect = document.getElementById('category');
                        categorySelect.innerHTML = '<option value="">Select Category</option>';
                        data.forEach(item => {
                            categorySelect.innerHTML += `<option value="${item.id}">${item.name}</option>`;
                        });
                    });
            } else {
                // Empty category for non-silver until you build similar tables
                document.getElementById('category').innerHTML = '<option value="">Select Category</option>';
            }
        });
    </script>
</body>

</html>