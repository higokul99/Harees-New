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
                            <h1 class="mb-4" style="color: #f5d02a;">Add Product</h1>

                            <form method="POST" action="AddProductDetails.php">
                                <?php echo csrf_token_field(); ?>
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
            fetch('api/get_purities.php?metal_id=' + metalId)
                .then(response => response.json())
                .then(data => {
                    const puritySelect = document.getElementById('purity');
                    puritySelect.innerHTML = '<option value="">Select Purity</option>';
                    data.forEach(item => {
                        puritySelect.innerHTML += `<option value="${item.metalpurity_id}">${item.name}</option>`;
                    });
                });

            // Load Categories if it's Silver
            if (metalId == 2) {
                fetch('api/get_silver_categories.php')
                    .then(response => response.json())
                    .then(data => {
                        const categorySelect = document.getElementById('category');
                        categorySelect.innerHTML = '<option value="">Select Category</option>';
                        data.forEach(item => {
                            categorySelect.innerHTML += `<option value="${item.sil_cat_id}">${item.name}</option>`;
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