<?php
session_start();
include"Database/Connect.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Child Welfare Clinic</title>
    <link href="public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/agency.min.css" rel="stylesheet">
    <link href="public/app.css" rel="stylesheet">
    <script src="public/jquery.min.js"></script>
    <script src="public/jquery.datetimepicker.js"></script>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/style.css">
   

</head>

<body>
    <div id="header">
        <div class="logo">
            <a href="index.php">Child Welfare <span>Clinic</span></a>
        </div>
        <div class="menu">
            <a href="login.php">Login</a>
            
        </div>

        <div class="menu">
             <a href="contact.php">Contact Us</a>
        </div>

         <div class="menu">
            <a href="about.php">About Us</a>
        </div>
        <div class="menu">
            <a href="index.php">Home</a>
        </div>
    </div>
    <div class="container">