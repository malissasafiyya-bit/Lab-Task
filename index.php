<?php
include "calculation.php"
?>

<html>

<head>
    <title>Calculate House Bills</title>
</head>

<body>
    <h2> Calculate House Electricity Bill </h2>

    <?php

    if ($error != "") {
        echo "<p><b>Warning: <b>" . $error . "</p>";
    }

    ?>

    <div style="margin-bottom:50pax">
        <table border="1">
            <tr>
                <th>Block Tariff (per month)</th>
                <th>Unit</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>For the first 200 kwh (1-200 kwh) per month</td>
                <td>1- 200 kwh</td>
                <td>0.218</td>
            </tr>
            <tr>
                <td>For the first 100 kwh (201-300 kwh) per month</td>
                <td>201- 300 kwh</td>
                <td>0.344</td>
            </tr>
            <tr>
                <td>For the first 300 kwh (301-600 kwh ) per month</td>
                <td>301 - 600 kwh</td>
                <td> 0.516</td>
            </tr>
            <tr>
                <td>For the first 300 kwh (601-900) per month</td>
                <td>601- 900 kwh</td>
                <td>0.546</td>
            </tr>
            <tr>
                <td>For the first 300 kwh (901 kwh onwards) per month</td>
                <td> 910 kwh onwards</td>
                <td>0.517</td>
            </tr>
            <tr>
                <td colspan="3"> The minimum monthly charge is RM3.00</td>
            </tr>

        </table>
    </div>


    <form method="post">
        Enter your first 200 kwh (1- 200 kwh ) per month :
        <input type="text" name="block1" value=""><br><br>

        Enter your first 100 kwh (201 - 300 kwh ) per month :
        <input type="text" name="block2" value=""><br><br>

        Enter your first 300 kwh (301-600 kwh ) per month :
        <input type="text" name="block3" value=""><br><br>

        Enter your first 300 kwh (601-900 kwh ) per month :
        <input type="text" name="block4" value=""><br><br>

        Enter your first 300 kwh (901 kwh onwards) per month :
        <input type="text" name="block5" value=""><br><br>

        <input type="submit" name="calculate" value="Calculate">

        <input type="submit" name="reset" value="Reset">


    </form>


    <?php

    if ($showBills) {

        echo "<h3> Your Electricity Bill</h3>";

        echo "1 - 200 kwh : " . $block1 . "kwh x 0.218 = RM" . number_format($charge1, 2) . "<br>";
        echo "201 - 300 kwh : " . $block2 . "kwh x 0.344 = RM" . number_format($charge2, 2) . "<br>";
        echo "301 - 600 kwh : " . $block3 . "kwh x 0.516 = RM" . number_format($charge3, 2) . "<br>";
        echo "601 - 900 kwh : " . $block4 . "kwh x 0.546 = RM" . number_format($charge4, 2) . "<br>";
        echo "901 kwh onwards : " . $block5 . "kwh x 0.517 = RM" . number_format($charge5, 2) . "<br>";

        echo "Total elecrecity consumption: " . $totalKwh . "kwh<br>";
        echo "Total CONSUMPTION : RM" . number_format($totalCharge, 2) . "<br>";
        echo "SST 6%: RM" . number_format($stt, 2) . "<br>";
        echo "<b>Total Current Bills : RM" . number_format($totalBills, 2) . "<br>";
    }

    if (isset($_POST['calculate'])) {
        echo "You Type: " . $_POST['block1'];
    }

    ?>

</body>

</html>