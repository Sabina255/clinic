<?php
include"../Database/Connect.php";
?>
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link href="../public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/agency.min.css" rel="stylesheet">
    <link href="../public/app.css" rel="stylesheet">
    <script src="../public/jquery.min.js"></script>
    <script src="../public/jquery.datetimepicker.js"></script>
    <link rel="stylesheet" href="../public/css/style.css">

</head>

<body>

    <div id="header">
        <div class="logo">
            <a href="#">Child Welfare <span>Clinic</span></a>
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
                    <a class="selected" href="index.php">Dashboard</a>
                </li>
                <li>
                <span>
                    <!-- <img src="../public/icons/add.png" width="32" height="32" > -->
                    </span>
                    <a href="addUser.php">Enroll Staff</a>
                </li>
                <li>
                    <span>
                        <!-- <img src="../public/icons/view.png" width="32" height="32" > -->
                    </span>
                    <a href="list_all_users.php">Manage Staff</a>
                </li>
                <li>
                  <span>
                    <!-- <img src="../public/icons/list.png" width="32" height="32" > -->
                  </span>
                    <a href="addPatient.php">Book In Patient</a>
                </li>
                <li>
                  <span>
                    <!-- <img src="../public/icons/list.png" width="32" height="32" > -->
                  </span>
                    <a href="patientList.php">Patients Details</a>
                </li>
                <li>
                  <span>
                    <!-- <img src="../public/icons/list.png" width="32" height="32" > -->
                  </span>
                    <a href="report.php">Patients Report</a>
                </li>
                <li>
                <span>
                    <!-- <img src="../public/icons/add.png" width="32" height="32" > -->
                   
                        <!-- <img src="../public/icons/view.png" width="32" height="32" > -->
                    </span>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>

        </div>
