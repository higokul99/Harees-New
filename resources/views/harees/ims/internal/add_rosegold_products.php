<?php
include_once('../db_connect.php');

// Function to sanitize input data
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $table_name = sanitize_input($_POST["table_name"]);
    $name = sanitize_input($_POST["name"]);
    $weight = sanitize_input($_POST["weight"]);
    $image_loc = sanitize_input($_POST["image_loc"]);
    $gender = sanitize_input($_POST["gender"]);

    // Validate input (basic validation)
    if (empty($table_name) || empty($name) || empty($weight) || empty($image_loc) || empty($gender)) {
        echo "All fields are required.";
    } else {
        // Prepare and bind
        $sql = "INSERT INTO " . $table_name . " (name, weight, image_loc, gender) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Assuming weight is a decimal, others are strings
            $stmt->bind_param("sdss", $name, $weight, $image_loc, $gender);

            // Execute the statement
            if ($stmt->execute()) {
                echo "New record created successfully in " . $table_name;
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rose Gold Product</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        form {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        div {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }
        button {
            background-color: #e57373; /* Rose gold-like color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background-color: #ef9a9a;
        }
    </style>
</head>
<body>

    <h2>Add Rose Gold Product</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label for="table_name">Product Type:</label>
            <select id="table_name" name="table_name" required>
                <option value="">Select Type</option>
                <option value="rosegold_products_chain">Chain</option>
                <option value="rosegold_products_ring">Ring</option>
                <option value="rosegold_products_bracelet">Bracelet</option>
                <option value="rosegold_products_earring">Earring</option>
                <option value="rosegold_products_studs">Studs</option>
                <option value="rosegold_products_bangles">Bangles</option>
            </select>
        </div>
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="weight">Weight (DECIMAL(10, 5)):</label>
            <input type="number" id="weight" name="weight" step="0.00001" required>
        </div>
        <div>
            <label for="image_loc">Image Location (URL or Path):</label>
            <input type="text" id="image_loc" name="image_loc" required>
        </div>
        <div>
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required>
        </div>
        <div>
            <button type="submit">Add Product</button>
        </div>
    </form>

</body>
</html>
