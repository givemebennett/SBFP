<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbfp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_SESSION['email'];

// Prepare and bind
$stmt = $conn->prepare("SELECT firstname, lastname, role FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($user_firstname, $user_lastname, $user_role);

if ($stmt->num_rows > 0) {
    $stmt->fetch();
} else {
    echo "No user found with that email address.";
    exit();
}

$stmt->close();
$conn->close();
?>


<!DOCTYPE html>

<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/LOGO.png" type="image/png" />

      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/color_2.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />

      

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>

<body class="dashboard dashboard_2">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                        <a href="dashboard.php"><img class="logo_icon img-responsive" src="images/logo/semilogo.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
    <div class="icon_setting"></div>
    <div class="user_profle_side">
    <div class="user_img"><img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" /></div>
    <div class="user_info">
    <h6><?php echo $user_firstname . ' ' . $user_lastname; ?></h6>
        
        <p><span class="online_animation"></span> Online</p>
    </div>
</div>
</div>

                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                    <li>
                            <a href="admindashboard.php"><i class="fa fa-dashboard""></i> <span>DASHBOARD</span></a>
                        </li>

                        <li>
                            <a href="adaccountmanagement.php"><i class="fa fa-group"></i> <span>Account Management</span></a>
                        </li>
                        <li>
                            <a href="adbeneficiaries.php"><i class="fa fa-university""></i> <span>All School Beneficiaries</span></a>
                        </li>

                        <li>
                            <a href="adschoollist.php"><i class="fa fa-pie-chart"></i> <span>School List Of Laguna</span></a>
                        </li>

                        <li>
                            <a href="form2.php"><i class="fa fa-plus-circle"></i> <span>Add School</span></a>
                        </li>
                        <li>
                            <a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a>
                        </li>
                       
                       
                      
                      
            
                        
                        <li>
                            <a href="adsettings.php"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Sidebar -->
            <!-- Right Content -->
            <div id="content">
                <!-- Topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                            <a href="admindashboard.php"><img class="img-responsive" src="images/logo/semilogo.png" alt="#" /></a>
                            </div>
                           
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            
                                        <a class="dropdown-toggle" data-toggle="dropdown">
      <!-- <img class="img-responsive rounded-circle" src="images/origlogo.jpg" alt="#" /> -->

    <span class="name_user"><?php echo $user_role; ?></span>

</a>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- End Topbar -->
                <!-- Dashboard Inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Dashboard</h2>
                                </div>
                            </div>
                        </div>
                       
                      <h1>School-Based Feeding Program (SBFP) - List of Schools</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
        OPEN FORM
    </button>

    <!-- The Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Beneficiary Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="submitForm" method="post">
                    <div class="form-group">
                        <label>Division/Province:</label>
                        <input type="text" class="form-control" name="division_province" required>
                    </div>
                    <div class="form-group">
                        <label>School District/City/Municipality:</label>
                        <input type="text" class="form-control" name="school_district_municipality" required>
                    </div>
                    <div class="form-group">
                        <label>Name of School:</label>
                        <input type="text" class="form-control" name="school_name" required>
                    </div>
                    <div class="form-group">
                        <label>BEIS ID No.:</label>
                        <input type="text" class="form-control" name="beis_id">
                    </div>
                    <div class="form-group">
                        <label>School Address:</label>
                        <input type="text" class="form-control" name="school_address">
                    </div>
                    <div class="form-group">
                        <label>Name of Barangay:</label>
                        <input type="text" class="form-control" name="barangay_name">
                    </div>
                    <div class="form-group">
                        <label>Name of District Supervisors/School Principal or OICs:</label>
                        <input type="text" class="form-control" name="supervisor_principal_name">
                    </div>
                    <div class="form-group">
                        <label>Contact Number:</label>
                        <input type="text" class="form-control" name="contact_number">
                    </div>
                    <div class="form-group">
                        <label>Email Address:</label>
                        <input type="text" class="form-control" name="email_address">
                    </div>
                    <div class="form-group">
                        <label>Total Beneficiaries:</label>
                        <input type="number" class="form-control" name="total_beneficiaries" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Add JavaScript to handle form submission -->
<script>
    document.getElementById('submitForm').addEventListener('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);
        fetch('submit2.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            Swal.fire({
                title: 'Success!',
                text: data,
                icon: 'success',
                timer: 2000, // 2 seconds
                showConfirmButton: false
            }).then(() => {
                $('#formModal').modal('hide'); // Close modal after notification is closed
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>

    
    
      <?php

  if (!isset($_SESSION['email'])) {
      header("Location: login.php");
      exit();
  }

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sbfp";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve session_id of the logged-in user
  $email = $_SESSION['email'];
  $stmt = $conn->prepare("SELECT session_id FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($session_id);
  $stmt->fetch();
  $stmt->close();

  // Fetch data associated with the session_id of the logged-in user
  $stmt = $conn->prepare("SELECT * FROM schools WHERE session_id = ?");
  $stmt->bind_param("s", $session_id);
  $stmt->execute();
  $result = $stmt->get_result();
  ?>

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12 my-4">
      <div class="card shadow">
        <div class="card-body">
          <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
              <div class="heading1 margin_0">
                <h2>Master List Beneficiaries</h2>
              </div>
            </div>
            <div class="table_section padding_infor_info">
              <div class="table-responsive-sm">
                <table class="table">
                            <thead>
                                <tr>
                                    <th>Division/Province</th>
                                    <th>School District/City/Municipality</th>
                                    <th>Name of School</th>
                                    <th>BEIS ID No.</th>
                                    <th>School Address</th>
                                    <th>Name of Barangay</th>
                                    <th>Name of District Supervisors/School Principal or OICs</th>
                                    <th>Contact Number</th>
                                    <th>Email Address</th>
                                    <th>Total Beneficiaries</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Output data of each row
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["division_province"] . "</td>";
                                        echo "<td>" . $row["school_district_municipality"] . "</td>";
                                        echo "<td>" . $row["school_name"] . "</td>";
                                        echo "<td>" . $row["beis_id"] . "</td>";
                                        echo "<td>" . $row["school_address"] . "</td>";
                                        echo "<td>" . $row["barangay_name"] . "</td>";
                                        echo "<td>" . $row["supervisor_principal_name"] . "</td>";
                                        echo "<td>" . $row["contact_number"] . "</td>";
                                        echo "<td>" . $row["email_address"] . "</td>";
                                        echo "<td>" . $row["total_beneficiaries"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='10'>No records found</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div> 
</div> 
                        
                    </div>
                   
                </div>
                <!-- End Dashboard Inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Bundle JavaScript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Custom Scripts -->
    <script src="js/custom.js"></script>
    <!-- Chart Plugins -->
    <script src="js/Chart.min.js"></script>
    <!-- Init Charts -->
    <script>
        var ctx = document.getElementById('chartjs_area').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 1',
                    borderColor: 'rgb(255, 99, 132)',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },
            options: {}
        });

        var ctx = document.getElementById('chartjs_bar').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 1',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },
            options: {}
        });

        var ctx = document.getElementById('chartjs_line').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Dataset 1',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },
            options: {}
        });
    </script>
</body>

</html>
