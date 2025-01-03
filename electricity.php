<html>
<head>
    <title>Calculate Bill</title>
</head>
<body>
    <h2>Electricity Bill Calculator</h2>
    
    <form method="post" action="">
        <label for="consumer_number">Consumer Number:</label>
        <input type="text" name="consumer_number" id="consumer_number" required/><br><br>

        <label for="usage">Amount of Usage (in kWh):</label>
        <input type="number" name="usage" id="usage" required/><br><br>

        <input type="submit" value="Calculate Bill" name="submit"/>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Get user input
        $consumer_number = $_POST['consumer_number'];
        $usage = $_POST['usage'];
        
        // Define billing rate per kWh (for example, 10 units per kWh)
        $rate_per_kWh = 10; 

        // Calculate the bill
        $total_bill = $usage * $rate_per_kWh;

        // Display the result
        echo "<h3>Bill for Consumer Number: $consumer_number</h3>";
        echo "<p>Total Usage: $usage kWh</p>";
        echo "<p>Rate per kWh: $rate_per_kWh</p>";
        echo "<p><strong>Total Bill: Rs. $total_bill</strong></p>";
    }
    ?>
</body>
</html>

