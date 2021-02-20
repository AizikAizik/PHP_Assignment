<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>

    <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
</style>

</head>
<body>
    <h2>Intern ID : SH-IT-02047</h2>
    <h2>FullName : Isaac Ogunleye</h2>
    <h2>UserName : Aizik</h2>
    <br />
    <h3>Random 12 Generated Pins using PHP</h3>
    <?php
        echo "<table>";
        echo "
        <tr>
            <th>s/n</th> <th>Pins</th>
        </tr>";
        for ($i=1; $i <= 200 ; $i++) { 
            # code...
            $rand = rand(0,1000000000000);
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$rand</td>";
            echo "</tr>";
        }
        echo "</table>"
    ?>
</body>
</html>