<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: Login.php");
    exit();
}

// Welcome message
$username = $_SESSION['username'];

// Link to picture.html with an image
$profilePicture = '<a href="kuromi.html" target="_blank"><img src="https://i.pinimg.com/originals/14/88/47/148847e9c3186f66875ab6afc59406dd.jpg" alt="Profile Picture" width="300" height="300"></a>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        @media print {
            #printButton {
                display: none;
            }
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex; /* Use flexbox for layout */
        }

        nav {
            flex: 0 0 200px; /* Set a fixed width for the sidebar */
            margin-right: 20px; /* Space between nav and content */
        }

        ul {
            list-style-type: none;
            padding: 0;
            background-color: black; 
            border-radius: 8px;
            overflow: hidden;
        }

        li {
            display: block; /* Make list items block for vertical layout */
        }

        li a {
            display: block;
            color: white;
            text-align: left; /* Align text to the right */
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        li a:hover {
            background-color: #333; 
            color: white; 
        }

        .content {
            flex: 1; /* Take the remaining space */
        }

        img {
            width: 200px;   
            height: 200px;  
            object-fit: cover; 
            border-radius: 10px;
            margin-top: 20px;
        }
        
    </style>
</head>
<body>

<nav>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="User.php">User</a></li>
        <li><a href="Logout.php">Log out</a></li>
    </ul>
</nav>

<div class="content">
    <center>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p>You have successfully logged in.</p>

    <h2>Your Profile Picture:</h2>

    <!-- Display the profile picture -->
    <?php echo $profilePicture; ?>
    </center>
</div>

</body>
</html>
