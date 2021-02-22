<!-- php code here -->
<?php
extract($_POST);
if (isset($save)) {
    switch ($ch) {
        case '+':
            $res = $fn + $sn;
            break;

        case '-':
            $res = $fn - $sn;
            break;

        case '*':
            $res = $fn * $sn;
            break;

        case '/':
            $res = $fn / $sn;
            break;
    }
}
?>
<!-- end of php code -->

<!-- html code here -->
<!DOCTYPE html>
<html>

<head>
    <title>Calculator- switch</title>
    <style>
        .center {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h2 {
            align-items: center;
        }
    </style>
</head>

<body>
    <h2>Intern ID : SH-IT-02047</h2>
    <h2>FullName : Isaac Ogunleye</h2>
    <h2>UserName : Aizik</h2>
    <br />
    <div class="center">
        <h3>Simple Calculator PHP Program</h3>
        <form method="post">
            <table border="1" align="center">
                <tr>
                    <th>Your Result</th>
                    <th><input type="number" readonly="readonly" disabled="disabled" value="<?php echo @$res; ?>" /></th>
                </tr>

                <tr>
                    <th>Enter your First num</th>
                    <th><input type="number" name="fn" value="<?php echo @$fn; ?>" /></th>
                </tr>
                <tr>
                    <th>Enter your Second num</th>
                    <th><input type="number" name="sn" value="<?php echo @$sn; ?>" /></th>
                </tr>
                <tr>
                    <th>Select Your Choice</th>
                    <th>
                        <select name="ch">
                            <option>+</option>
                            <option>-</option>
                            <option>*</option>
                            <option>/</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th colspan="2">
                        <input type="submit" name="save" value="Show Result" />
                    </th>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<!-- end of html code here -->