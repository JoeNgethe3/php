<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payslip</title>
</head>
<body>
    <?php

   /* <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="text" name="basic" id="basi">
    
    </form>*/
       $basic=25000;
        //deductions subtract
        $tax= 0.16*$basic;
        $nhif=500;
        //allowances add
        $houseAllowance=4000;
        $grossPay= $basic + $houseAllowance;
        $netPay= $grossPay-($tax+$nhif);

        echo "======================PAYSLIP=======================";
        echo "<br>";
        echo "Basic Salary = $basic";
        echo "<br>";
        echo "tax          = $tax";
        echo "<br>";
        echo "NHIF         = $nhif";
        echo "<br>";
        echo "Allowances   = $houseAllowance";
        echo "<br>";
        echo "Gross Salary = $grossPay";
        echo "<br>";
        echo "Net Salary   = $netPay";

       
       

    ?>
</body>
</html>