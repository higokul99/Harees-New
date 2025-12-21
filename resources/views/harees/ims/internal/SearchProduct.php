<?php include_once('includes/header.php'); ?>
<?php include_once('../db_connect.php'); // db connection file ?>

<body>
<div class="container-fluid position-relative d-flex p-0">
    <?php include_once('includes/sidebar.php'); ?>
    <div class="content">
        <?php include_once('includes/topbar.php'); ?>

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h1 class="mb-4" style="color: #f5d02a;">Search or Update Product</h1>

                        <form id="productForm" method="POST" action="AddProduct2db.php">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Enter Product CODE / SKU</label>
                                <input type="text" 
                                        class="form-control" 
                                        id="product_code" 
                                        name="product_code" 
                                        pattern="^[A-Za-z0-9]{15}$"
                                        title="Must be 15 alphanumeric characters (letters and numbers only)" 
                                        required>
                            </div>     
                            <div id="product_code_error" class="error-message"></div>      
                            <button type="submit" class="btn btn-primary" name="SearchProduct" style="color: black; width:100%;">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include_once('includes/footer.php'); ?>
    </div>
</div>


</body>
<script>
        document.getElementById('productForm').addEventListener('submit', function(event) {
            const productCodeInput = document.getElementById('product_code');
            const errorMessageDiv = document.getElementById('product_code_error');
            const productCode = productCodeInput.value;

            // Regex for 15 alphanumeric characters
            const regex = /^[A-Za-z0-9]{15}$/;

            if (!regex.test(productCode)) {
                errorMessageDiv.textContent = "Product code must be 15 characters long and contain only letters and numbers. (e.g., HJGG18KSD000001)";
                productCodeInput.setCustomValidity("Invalid input"); // Triggers native browser validation message
                event.preventDefault(); // Stop form submission
            } else {
                errorMessageDiv.textContent = ""; // Clear any previous error message
                productCodeInput.setCustomValidity(""); // Reset custom validity
                // If you were to submit the form via AJAX, you'd do it here.
                // For a standard form submission, it would proceed normally after this.
                //alert("Validation successful! Submitting form...");
                // event.preventDefault(); // Uncomment if you want to prevent actual form submission for testing
            }
        });

        // Optional: Clear custom validity on input change to allow re-validation
        document.getElementById('product_code').addEventListener('input', function() {
            this.setCustomValidity("");
            document.getElementById('product_code_error').textContent = "";
        });
    </script>
</html>
