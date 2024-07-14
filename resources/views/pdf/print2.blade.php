<!-- SIMPLE LANDSCAPE PAYSLIP W/ STATIC VALUES -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            width: 100%;
            max-width: 800px; /* Adjust as per your requirement */
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            transform: rotate(270deg);
            transform-origin: right top;
            position: absolute;
            top: 0;
            left: 0;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 40px 60px;
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h2 {
            font-size: 24px;
            margin: 0;
            color: #333;
        }
        .pay-details {
            margin-bottom: 20px;
        }
        .pay-details h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        .employee-details {
            margin-bottom: 20px;
        }
        .employee-details h3 {
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        .table th {
            background-color: #f0f0f0;
        }
        .table td {
            background-color: #fff;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
        }
        .footer p {
            margin: 0;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Payslip for July 2024</h2>
        </div>
        <div class="pay-details">
            <h3>Payment Details</h3>
            <table class="table">
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>Basic Salary</td>
                    <td>$3,000.00</td>
                </tr>
                <tr>
                    <td>Allowances</td>
                    <td>$500.00</td>
                </tr>
                <tr>
                    <td>Deductions</td>
                    <td>-$200.00</td>
                </tr>
                <tr style="background-color: #f0f0f0;">
                    <td><strong>Total</strong></td>
                    <td><strong>$3,300.00</strong></td>
                </tr>
            </table>
        </div>
        <div class="employee-details">
            <h3>Employee Details</h3>
            <p><strong>Name:</strong> John Doe</p>
            <p><strong>Employee ID:</strong> 123456</p>
            <p><strong>Department:</strong> Finance</p>
        </div>
        <div class="footer">
            <p>Generated on July 14, 2024</p>
        </div>
    </div>
</body>
</html>
