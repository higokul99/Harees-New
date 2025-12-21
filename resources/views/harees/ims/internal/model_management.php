<?php
// Database connection parameters - REPLACE WITH YOUR ACTUAL CREDENTIALS
include_once('../db_connect.php');

// Check connection
if ($conn->connect_error) {
    // If connection fails, output JSON error and exit (for API calls)
    if (isset($_GET['action'])) { // Only output JSON if it's an API call
        header('Content-Type: application/json');
        echo json_encode(['status' => 'error', 'message' => 'Database connection failed: ' . $conn->connect_error]);
        exit();
    } else {
        // For initial page load, display error directly
        die('Database connection failed: ' . $conn->connect_error);
    }
}

// --- API Logic ---
// This part handles the AJAX requests from the JavaScript.
// It will output JSON and then exit to prevent the HTML from being sent alongside.
if (isset($_GET['action'])) {
    header('Content-Type: application/json'); // Set header for JSON response

    $action = $_GET['action'];

    switch ($action) {
        case 'getAll':
            getAllModels($conn);
            break;
        case 'add':
            addModel($conn);
            break;
        case 'update':
            updateModel($conn);
            break;
        case 'delete':
            deleteModel($conn);
            break;
        default:
            echo json_encode(['status' => 'error', 'message' => 'Invalid action.']);
            break;
    }
    $conn->close(); // Close connection after API call
    exit(); // Crucial: exit after sending JSON response
}

/**
 * Fetches all models from the database.
 * @param mysqli $conn The database connection object.
 */
function getAllModels($conn) {
    $sql = "SELECT model_id, model_name, created_at FROM models ORDER BY model_id DESC"; // Order by ID for newest first
    $result = $conn->query($sql);

    if ($result) {
        $models = [];
        while ($row = $result->fetch_assoc()) {
            $models[] = $row;
        }
        echo json_encode(['status' => 'success', 'data' => $models]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to retrieve models: ' . $conn->error]);
    }
}

/**
 * Adds a new model to the database.
 * @param mysqli $conn The database connection object.
 */
function addModel($conn) {
    $model_name = $_POST['model_name'] ?? '';

    if (empty($model_name)) {
        echo json_encode(['status' => 'error', 'message' => 'Model name is required.']);
        return;
    }

    // Prepare and bind for security
    $sql = "INSERT INTO models (model_name, created_at) VALUES (?, NOW())";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare statement: ' . $conn->error]);
        return;
    }
    $stmt->bind_param("s", $model_name);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Model added successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add model: ' . $stmt->error]);
    }
    $stmt->close();
}

/**
 * Updates an existing model in the database.
 * @param mysqli $conn The database connection object.
 */
function updateModel($conn) {
    $model_id = $_POST['model_id'] ?? '';
    $model_name = $_POST['model_name'] ?? '';

    if (empty($model_id) || empty($model_name)) {
        echo json_encode(['status' => 'error', 'message' => 'Model ID and Model name are required for update.']);
        return;
    }

    // Prepare and bind for security
    $sql = "UPDATE models SET model_name = ? WHERE model_id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare statement: ' . $conn->error]);
        return;
    }
    $stmt->bind_param("si", $model_name, $model_id); // 's' for string, 'i' for integer

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Model updated successfully!']);
        } else {
            // This case means no row was updated (e.g., model_id not found or name was identical)
            echo json_encode(['status' => 'info', 'message' => 'No changes made or model not found.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update model: ' . $stmt->error]);
    }
    $stmt->close();
}

/**
 * Deletes a model from the database.
 * @param mysqli $conn The database connection object.
 */
function deleteModel($conn) {
    $model_id = $_POST['model_id'] ?? '';

    if (empty($model_id)) {
        echo json_encode(['status' => 'error', 'message' => 'Model ID is required for deletion.']);
        return;
    }

    // Prepare and bind for security
    $sql = "DELETE FROM models WHERE model_id = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to prepare statement: ' . $conn->error]);
        return;
    }
    $stmt->bind_param("i", $model_id); // 'i' for integer

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo json_encode(['status' => 'success', 'message' => 'Model deleted successfully!']);
        } else {
            echo json_encode(['status' => 'info', 'message' => 'Model not found.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete model: ' . $stmt->error]);
    }
    $stmt->close();
}

// --- HTML & JavaScript Frontend ---
// This part will only be executed if no 'action' parameter is set (i.e., initial page load)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .form-control, .btn {
            border-radius: 8px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #343a40; /* Darker text for better contrast */
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #cc9a00;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .table thead {
            background-color: #e9ecef;
        }
        .table th {
            border-bottom: 2px solid #dee2e6;
        }
        @media (max-width: 768px) {
            .table-responsive {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch; /* For smoother scrolling on iOS */
            }
            .table {
                min-width: 600px; /* Ensure table doesn't get too cramped */
            }
            .btn-group-sm > .btn, .btn-sm {
                padding: .25rem .5rem;
                font-size: .875rem;
                border-radius: .2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center my-4">Model Management</h2>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0" id="formTitle">Add New Model</h5>
            </div>
            <div class="card-body">
                <form id="modelForm">
                    <input type="hidden" id="modelId">
                    <div class="mb-3">
                        <label for="modelName" class="form-label">Model Name</label>
                        <input type="text" class="form-control" id="modelName" placeholder="Enter model name" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" id="submitBtn">Add Model</button>
                        <button type="button" class="btn btn-secondary d-none" id="cancelBtn">Cancel Edit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Existing Models</h5>
            </div>
            <div class="card-body">
                <div id="message" class="alert alert-dismissible fade show d-none" role="alert">
                    <span id="messageText"></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Model Name</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="modelsTableBody">
                            <!-- Model data will be loaded here by JavaScript -->
                            <tr>
                                <td colspan="4" class="text-center">Loading models...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (bundle includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const modelForm = document.getElementById('modelForm');
        const modelIdInput = document.getElementById('modelId');
        const modelNameInput = document.getElementById('modelName');
        const submitBtn = document.getElementById('submitBtn');
        const cancelBtn = document.getElementById('cancelBtn');
        const formTitle = document.getElementById('formTitle');
        const modelsTableBody = document.getElementById('modelsTableBody');
        const messageDiv = document.getElementById('message');
        const messageText = document.getElementById('messageText');

        // Function to display messages
        function showMessage(msg, type = 'success') {
            messageText.textContent = msg;
            messageDiv.classList.remove('d-none', 'alert-success', 'alert-danger', 'alert-info');
            messageDiv.classList.add(`alert-${type}`);
            setTimeout(() => {
                messageDiv.classList.add('d-none');
            }, 5000); // Hide after 5 seconds
        }

        // Function to fetch and display models
        async function fetchModels() {
            modelsTableBody.innerHTML = '<tr><td colspan="4" class="text-center">Loading models...</td></tr>';
            try {
                // Update fetch URL to point to the same PHP file
                const response = await fetch('model_management.php?action=getAll');
                const data = await response.json();

                if (data.status === 'success') {
                    modelsTableBody.innerHTML = ''; // Clear loading message
                    if (data.data.length > 0) {
                        data.data.forEach(model => {
                            // Convert UTC timestamp from MySQL to Indian time (Asia/Kolkata)
                            // Note: new Date() constructor with a plain date string might be parsed as UTC
                            // by some browsers. For explicit timezone handling, consider a library
                            // or ensure your server sends a timezone-aware string.
                            // For this setup, we assume server time is consistent or accept browser's interpretation.
                            const createdDate = new Date(model.created_at);
                            const formattedCreatedAt = createdDate.toLocaleString('en-IN', { timeZone: 'Asia/Kolkata' });

                            const row = `
                                <tr>
                                    <td>${model.model_id}</td>
                                    <td>${model.model_name}</td>
                                    <td>${formattedCreatedAt}</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm me-2" onclick="editModel(${model.model_id}, '${model.model_name.replace(/'/g, "\\'")}')">Edit</button>
                                        <button class="btn btn-danger btn-sm" onclick="deleteModel(${model.model_id})">Delete</button>
                                    </td>
                                </tr>
                            `;
                            modelsTableBody.innerHTML += row;
                        });
                    } else {
                        modelsTableBody.innerHTML = '<tr><td colspan="4" class="text-center">No models found.</td></tr>';
                    }
                } else {
                    showMessage(`Error: ${data.message}`, 'danger');
                    modelsTableBody.innerHTML = '<tr><td colspan="4" class="text-center">Failed to load models.</td></tr>';
                }
            } catch (error) {
                console.error('Error fetching models:', error);
                showMessage('Network error or server unavailable.', 'danger');
                modelsTableBody.innerHTML = '<tr><td colspan="4" class="text-center">Error loading models.</td></tr>';
            }
        }

        // Function to handle form submission (Add/Update)
        modelForm.addEventListener('submit', async (event) => {
            event.preventDefault();
            const modelId = modelIdInput.value;
            const modelName = modelNameInput.value.trim();

            if (!modelName) {
                showMessage('Model name cannot be empty.', 'danger');
                return;
            }

            let url = 'model_management.php'; // Point to the same PHP file
            let formData = new FormData();
            formData.append('model_name', modelName);

            if (modelId) {
                // Update existing model
                url += '?action=update';
                formData.append('model_id', modelId);
            } else {
                // Add new model
                url += '?action=add';
            }

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    body: formData
                });
                const data = await response.json();

                if (data.status === 'success' || data.status === 'info') {
                    showMessage(data.message, data.status === 'success' ? 'success' : 'info');
                    modelForm.reset(); // Clear form
                    modelIdInput.value = ''; // Clear hidden ID
                    formTitle.textContent = 'Add New Model';
                    submitBtn.textContent = 'Add Model';
                    submitBtn.classList.remove('btn-success');
                    submitBtn.classList.add('btn-primary');
                    cancelBtn.classList.add('d-none');
                    fetchModels(); // Refresh list
                } else {
                    showMessage(`Error: ${data.message}`, 'danger');
                }
            } catch (error) {
                console.error('Submission error:', error);
                showMessage('Network error or server unavailable.', 'danger');
            }
        });

        // Function to populate form for editing
        function editModel(id, name) {
            modelIdInput.value = id;
            modelNameInput.value = name;
            formTitle.textContent = 'Edit Model';
            submitBtn.textContent = 'Update Model';
            submitBtn.classList.remove('btn-primary');
            submitBtn.classList.add('btn-success');
            cancelBtn.classList.remove('d-none');
            modelNameInput.focus(); // Focus on input field
            showMessage('Editing model: ' + name, 'info'); // Provide feedback
        }

        // Function to cancel editing
        cancelBtn.addEventListener('click', () => {
            modelForm.reset();
            modelIdInput.value = '';
            formTitle.textContent = 'Add New Model';
            submitBtn.textContent = 'Add Model';
            submitBtn.classList.remove('btn-success');
            submitBtn.classList.add('btn-primary');
            cancelBtn.classList.add('d-none');
            showMessage('Edit cancelled.', 'info');
        });

        // Function to delete a model
        async function deleteModel(id) {
            // Using window.confirm for simplicity, custom modal recommended in production
            if (confirm('Are you sure you want to delete this model?')) {
                try {
                    const response = await fetch(`model_management.php?action=delete`, { // Point to same PHP file
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: `model_id=${id}`
                    });
                    const data = await response.json();

                    if (data.status === 'success' || data.status === 'info') {
                        showMessage(data.message, data.status === 'success' ? 'success' : 'info');
                        fetchModels(); // Refresh list
                    } else {
                        showMessage(`Error: ${data.message}`, 'danger');
                    }
                } catch (error) {
                    console.error('Deletion error:', error);
                    showMessage('Network error or server unavailable.', 'danger');
                }
            }
        }

        // Initial fetch when page loads
        document.addEventListener('DOMContentLoaded', fetchModels);

    </script>
</body>
</html>
