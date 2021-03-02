<!DOCTYPE html>
<html>
    <head>
        <title>Submission Result</title>

        <style>
            body{
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 20px;
                position: fixed;
            }
        </style>
        
    </head>
    <body>
        <h2>Thank You For Submitting The Form</h2>

        <!-- Getting the output from the form value provided through 'form.php' -->
        First Name: <?php echo $_POST['Fname']; // displaying the value of First Name provided in 'Form.php' while submitting the form ?><br/>
        Last Name: <?php echo $_POST['Lname']; // displaying the value of Last Name provided in 'Form.php' while submitting the form ?><br/>
        Username: <?php echo $_POST['Username']; // displaying the value of Username provided in 'Form.php' while submitting the form ?><br/>
        Password: <?php echo $_POST['Password']; // displaying the value of Password provided in 'Form.php' while submitting the form ?><br/>
        <!-- End of getting the value from the submitted form -->
    </body>
</html>