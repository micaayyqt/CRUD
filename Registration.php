<?php
require('./database.php');

if (isset($_POST['registration'])){
    $Fname = $_POST['Fullname'];
    $Uname = $_POST['Uname'];
    $Ename = $_POST['Ename'];
    $Pname = $_POST['Pname'];
    
    $querryRegistration = "INSERT INTO registration VALUES (null, '$Fullname', '$Uname', '$Ename', '$Pname')";
    $sqlregistration = mysqli_query($connection, $querryRegistration);

    echo '<script>alert("Successfully Registered!")</script>';
    echo '<script>window.location.href = "/CRUD-ni-MICAY/Login.php"</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #BFFAFF;
        }   
        .container {
            margin-top: 30px;
            max-width: 450px;
            background: #A3D5FF;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 400px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            margin-top: 60px;
        }
        .btn-info {
            background-color: #007bff;
            border: none;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
    <div class="container">
        <center>
            <h3>Sign Up</h3>

            <br>
        </center>
        <form action="Registration.php" method="post">
            <div class="form-group">
                <label for="Fullname"><b>FullName</b></label>
                <input type="text" id="Uname" name="Uname" placeholder="Enter your Username" required class="form-control" />
            </div>
            <div class="form-group">
                <label for="Uname"><b>UserName</b></label>
                <input type="text" id="Uname" name="Uname" placeholder="Enter your Username" required class="form-control" />
            </div>
            <div class="form-group">
                <label for="Ename"><b>Email</b></label>
                <input type="email" id="Ename" name="Ename" placeholder="Enter your Email" required class="form-control" />

            </div>
            <div class="form-group">
                <label for="Pname"><b>Password</b></label>
                <input type="password" id="Pname" name="Pname" placeholder="Enter your Password" required class="form-control" />
            </div>
                <button type="submit" name="registration" class="btn btn-info btn-block">Register</button>
        </form>

        <center>
           <!-- Login hyperlink -->
           <p>Already have an account? <a href="Login.php">Login</a></p>
        </center>
    </form>
</div>
</body>
</html>