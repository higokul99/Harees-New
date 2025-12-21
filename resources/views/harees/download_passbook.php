<?php
// download_passbook.php - Professional A4 Passbook
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: sign-in");
    exit();
}

include('includes/dbconnect.php');

// Validate and sanitize input
$scheme_id = filter_input(INPUT_GET, 'scheme_id', FILTER_VALIDATE_INT);
if (!$scheme_id || $scheme_id < 1) {
    $_SESSION['error'] = "Invalid scheme ID";
    header("Location: umyschemes.php");
    exit();
}

$user_id = $_SESSION['userid'];

// Verify the scheme belongs to the user with prepared statement
$scheme_query = "SELECT us.*, gs.scheme_name 
                FROM user_schemes us
                JOIN gold_schemes gs ON us.scheme_type = gs.scheme_code
                WHERE us.id = ? AND us.user_id = ?";
$stmt = mysqli_prepare($conn, $scheme_query);
mysqli_stmt_bind_param($stmt, "ii", $scheme_id, $user_id);
mysqli_stmt_execute($stmt);
$scheme_result = mysqli_stmt_get_result($stmt);
$scheme = mysqli_fetch_assoc($scheme_result);

if (!$scheme) {
    $_SESSION['error'] = "Invalid scheme or you don't have permission to access it";
    header("Location: umyschemes.php");
    exit();
}

// Get user details with prepared statement
$user_query = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($conn, $user_query);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$user_result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($user_result);

// Get payment history with prepared statement
$payments_query = "SELECT * FROM scheme_payments 
                  WHERE scheme_id = ? 
                  ORDER BY payment_date ASC";
$stmt = mysqli_prepare($conn, $payments_query);
mysqli_stmt_bind_param($stmt, "i", $scheme_id);
mysqli_stmt_execute($stmt);
$payments_result = mysqli_stmt_get_result($stmt);

// Get bonus amount from gold_schemes table
$bonus_query = "SELECT bonus_amount FROM gold_schemes 
               WHERE scheme_code = ?";
$stmt = mysqli_prepare($conn, $bonus_query);
mysqli_stmt_bind_param($stmt, "s", $scheme['scheme_type']);
mysqli_stmt_execute($stmt);
$bonus_result = mysqli_stmt_get_result($stmt);
$bonus_data = mysqli_fetch_assoc($bonus_result);
$bonus = $bonus_data['bonus_amount'] ?? 0;

$maturity_value = ($scheme['monthly_amount'] * 11) + $bonus;

// Function to escape output
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Generate HTML content
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gold Scheme Passbook - <?= e($scheme['scheme_type']) ?></title>
    <style>
    @page {
        size: A4;
        margin: 15mm;
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        color: #333;
        background: #caa173;
    }
    .passbook-container {
        width: 100%;
        max-width: 210mm;
        min-height: 297mm;
        margin: 0 auto;
        padding: 15mm;
        box-sizing: border-box;
        background: white;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .header {
        text-align: center;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #8a6d3b;
    }
    .header h1 {
        margin: 0;
        font-size: 24px;
        color: #2c3e50;
        font-weight: bold;
    }
    .user-details {
        margin-bottom: 25px;
        background: #f9f9f9;
        padding: 15px;
        border-radius: 5px;
        border: 1px solid #ddd;
    }
    .detail-row {
        display: flex;
        margin-bottom: 8px;
        flex-wrap: wrap;
    }
    .detail-label {
        font-weight: bold;
        width: 120px;
        min-width: 120px;
    }
    .detail-row div:last-child {
        word-break: break-word;
        flex-grow: 1;
    }
    .scheme-summary {
        margin: 25px 0;
        border: 1px solid #ddd;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    .scheme-summary table {
        width: 100%;
        border-collapse: collapse;
    }
    .scheme-summary th {
        background-color: #8a6d3b;
        color: white;
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    .scheme-summary td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
        background: white;
    }
    .scheme-summary tr:last-child td {
        border-bottom: none;
    }
    .payment-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 25px;
        page-break-inside: avoid;
    }
    .payment-table th {
        background-color: #8a6d3b;
        color: white;
        padding: 10px;
        text-align: left;
        border: 1px solid #ddd;
    }
    .payment-table td {
        padding: 8px 10px;
        border: 1px solid #ddd;
        background: white;
    }
    .footer {
        margin-top: 30px;
        padding-top: 15px;
        border-top: 1px solid #8a6d3b;
        font-size: 12px;
        color: #555;
        text-align: center;
    }
    .highlight {
        background-color: #fffde7 !important;
    }
    
    @media print {
        body {
            background: white;
        }
        .passbook-container {
            box-shadow: none;
            padding: 0;
            margin: 0;
            width: 100%;
            min-height: 100%;
        }
        .payment-table {
            page-break-inside: auto;
        }
        tr {
            page-break-inside: avoid;
            page-break-after: auto;
        }
    }
    </style>
</head>
<body>
    <div class="passbook-container">
        <div class="header">
            <h1>GOLD FUND PASSBOOK</h1>
        </div>

        <div class="user-details">
            <div class="detail-row">
                <div class="detail-label">Scheme No:</div>
                <div><?= e($scheme['code']) ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Account No:</div>
                <div><?= e($user['id']) ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Name:</div>
                <div><?= e($user['fullname']) ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Phone No:</div>
                <div><?= e($user['phone']) ?></div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Address:</div>
                <div><?= e($user['address1']) ?></div>
            </div>
        </div>

        <div class="scheme-summary">
            <table>
                <tr>
                    <th>Scheme Type</th>
                    <th>Monthly Amount</th>
                    <th>Duration (Months)</th>
                    <th>Total Amount</th>
                    <th>Bonus</th>
                    <th>Maturity Value</th>
                </tr>
                <tr>
                    <td><?= e($scheme['scheme_name']) ?></td>
                    <td>₹<?= number_format($scheme['monthly_amount'], 2) ?></td>
                    <td>11</td>
                    <td>₹<?= number_format($scheme['monthly_amount'] * 11, 2) ?></td>
                    <td>₹<?= number_format($bonus, 2) ?></td>
                    <td>₹<?= number_format($maturity_value, 2) ?></td>
                </tr>
            </table>
        </div>

        <table class="payment-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Payment Date</th>
                    <th>Receipt No</th>
                    <th>Amount</th>
                    <th>Cumulative Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                $cumulative = 0;
                while($payment = mysqli_fetch_assoc($payments_result)):
                    $cumulative += $payment['amount'];
                ?>
                <tr<?= ($counter % 5 == 0) ? ' class="highlight"' : '' ?>>
                    <td><?= $counter ?></td>
                    <td><?= date('d/m/Y', strtotime($payment['payment_date'])) ?></td>
                    <td><?= e($payment['receipt_no']) ?></td>
                    <td>₹<?= number_format($payment['amount'], 2) ?></td>
                    <td>₹<?= number_format($cumulative, 2) ?></td>
                </tr>
                <?php 
                    $counter++;
                endwhile;
                
                // Fill remaining empty rows
                for ($i = $counter; $i <= 11; $i++):
                ?>
                <tr<?= ($i % 5 == 0) ? ' class="highlight"' : '' ?>>
                    <td><?= $i ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <div class="footer">
            <p>This is an official document. Please keep it safe.</p>
            <p>Generated on <?= date('d/m/Y H:i:s') ?></p>
        </div>
    </div>
</body>
</html>
<?php
$html = ob_get_clean();

// Set headers for download
header('Content-Type: application/html');
header('Content-Disposition: attachment; filename="Gold_Scheme_Passbook_'.e($scheme['scheme_type']).'_'.e($user['fullname']).'.html"');

echo $html;
exit();
?>