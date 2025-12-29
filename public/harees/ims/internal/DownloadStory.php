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
<?php

$sql = "SELECT 18k_1gm,22k_1gm,updated_on FROM goldrate";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$carat18_1gram = $row['18k_1gm'];
$carat18_8gram = $carat18_1gram*8;
$carat22_1gram = $row['22k_1gm'];
$carat22_8gram = $carat22_1gram*8;
$currentDate = $row['updated_on'];
$dateTime = new DateTime($currentDate);
$formattedDate = $dateTime->format('F j, Y');
?>

<!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h1 class="mb-4" style="color: #f5d02a;">Download Story Poster</h1>

                            <form id="goldForm">
                                <h3 class="mb-4">18 Carat</h3>
                                <div class="mb-4">
<style>
    /* Style the input */
    input[type="date"] {
        background-color: #your-background-color;
        color: white;
        border: 1px solid #your-border-color;
        padding: 5px;
    }

    /* Change the color of the calendar icon */
    input[type="date"]::-webkit-calendar-picker-indicator {
        filter: invert(1);
    }
</style>
                                    <label for="current-date" class="form-label">Current Date:</label>
                                    <!-- <input type="date" id="current-date" name="current-date" class="form-control" style="color: white;" required> -->
                                    <input type="text" id="current-date" name="current-date" class="form-control" value="<?php echo $formattedDate; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Gram </label>
                                    <input type="number" id="18carat-1gram" name="18carat-1gram" class="form-control" id="exampleInputEmail1" value="<?php echo $carat18_1gram; ?>"  aria-describedby="emailHelp" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">8 Gram </label>
                                    <input type="number" id="18carat-8gram" name="18carat-8gram" value="<?php echo $carat18_8gram; ?>" class="form-control" id="exampleInputEmail1"                                     aria-describedby="emailHelp" >
                                </div>
                                
                                <h3 class="mb-4">22 Carat</h3>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">1 Gram </label>
                                    <input type="number" id="22carat-1gram" name="22carat-1gram" value="<?php echo $carat22_1gram; ?>" class="form-control" id="exampleInputEmail1"                                     aria-describedby="emailHelp" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">8 Gram </label>
                                    <input type="number" id="22carat-8gram" name="22carat-8gram" value="<?php echo $carat22_8gram; ?>" class="form-control" id="exampleInputEmail1"                                     aria-describedby="emailHelp" >
                                </div>
<input type="submit" class="btn btn-primary" style="color: black; width: 100%" value="Generate Image">
                                
                            </form>
                            <canvas id="canvas" style="width: 50%; height: 50%;" hidden></canvas>

    <script>
        document.getElementById('goldForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Get form data
            const currentDate = document.getElementById('current-date').value;
            const carat18_1gram = document.getElementById('18carat-1gram').value;
            const carat18_8gram = document.getElementById('18carat-8gram').value;
            const carat22_1gram = document.getElementById('22carat-1gram').value;
            const carat22_8gram = document.getElementById('22carat-8gram').value;

            const dateObj = new Date(currentDate);
            const formattedDate = `${String(dateObj.getDate()).padStart(2, '0')}-${String(dateObj.getMonth() + 1).padStart(2, '0')}-${dateObj.getFullYear()}`;


            // Load the image
            const image = new Image();
            image.src = 'Resources/image.png';  // Replace with your image path
            image.onload = function() {
                const canvas = document.getElementById('canvas');
                const ctx = canvas.getContext('2d');

                // Set canvas size to match the image
                canvas.width = image.width;
                canvas.height = image.height;

                // Draw the image on the canvas
                ctx.drawImage(image, 0, 0);

                // Set text properties
                
                ctx.font = 'bold 50px Arial';
                ctx.fillStyle = 'white';

                // Add text to the image
                ctx.fillText(`${formattedDate}`, 425, 540);
                ctx.fillText(`${carat18_1gram}`, 610, 798);
                ctx.fillText(`${carat18_8gram}`, 600, 920);
                ctx.fillText(`${carat22_1gram}`, 610, 1162);
                ctx.fillText(`${carat22_8gram}`, 600, 1284);

                // Automatically download the image
                const downloadLink = document.createElement('a');
                downloadLink.href = canvas.toDataURL('image/png');
                downloadLink.download = 'gold_info.png';
                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
            };
        });
    </script>
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