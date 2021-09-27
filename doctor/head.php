<?php
session_start();
include"../Database/Connect.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Doctor Panel</title>
    <link href="../public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/agency.min.css" rel="stylesheet">
    <link href="../public/app.css" rel="stylesheet">
    <script src="../public/jquery.min.js"></script>
    <script src="../public/jquery.datetimepicker.js"></script>
    <link rel="stylesheet" href="style/style.css">
    

</head>

<body>

    <div id="header">
        <div class="logo">
            <a href="../index.php">Child Welfare <span>Clinic</span></a>
        </div>

    </div>

    <a class="mobile">MAIN DASHBOARD</a>

    <div id="container">

        <div class="sidebar">
            <ul id="nav">
                <li>
                  <span>
                    <!-- <img src="../public/icons/list.png" width="32" height="32" > -->
                  </span>
                    <a class="selected" href="index.php">Doc Dashboard</a>
                </li>
                <li>
                  <span>
                    <!-- <img src="../public/icons/list.png" width="32" height="32" > -->
                  </span>
                    <a href="patientList.php">View Patients</a>
                </li>
                <li>
                    <span>
                        <!-- <img src="../public/icons/view.png" width="32" height="32" > -->
                    </span>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>

        </div>
