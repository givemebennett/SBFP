
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>SBFP FORM 6</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.3/cerulean/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body class="vertical  light  ">
    <div class="wrapper">
      <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
          <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="form-inline mr-auto searchform text-muted">
          <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
              <i class="fe fe-sun fe-16"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
              <span class="fe fe-grid fe-16"></span>
            </a>
          </li>
          <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
              <span class="fe fe-bell fe-16"></span>
              <span class="dot dot-md bg-success"></span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <a class="dropdown-item" href="#">Activities</a>
              <a class="dropdown-item" href="logout.php">logout</a>

            </div>
          </li>
        </ul>
      </nav>
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="dashboard.php">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" >
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text"  href="dashboard.php">Dashboard</span><span class="sr-only">(current)</span>
              </a>
             
          </ul>
          <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
          </p>
          <ul class="navbar-nav flex-fill w-100 mb-2">
          <li class="nav-item">
                <a class="nav-link pl-3" href="form1.php"><span class="ml-1 item-text">SBFP-FORM 1</span></a>
                <i class="fe fe-file fe-16"></i>
              </li>

              </a>
             
            </li>
            <li class="nav-item w-100">
            <li class="nav-item">
            <a class="nav-link pl-3" href="form2.php"><span class="ml-1 item-text">SBFP-FORM 2</span></a>
            <i class="fe fe-file fe-16"></i>
            </li>
            <li class="nav-item">
            <a class="nav-link pl-3" href="form3.php"><span class="ml-1 item-text">SBFP-FORM 3</span></a>
            <i class="fe fe-file fe-16"></i>
            </li>
             
            </li>
            <li class="nav-item">
            <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">SBFP-FORM 4</span></a>
            <i class="fe fe-file fe-16"></i>
            </li>
            <li class="nav-item">
            <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">SBFP-FORM 5</span></a>
            <i class="fe fe-file fe-16"></i>
          </li>
          <li class="nav-item">
            <a class="nav-link pl-3" href="./form6.php"><span class="ml-1 item-text">SBFP-FORM 6</span></a>
            <i class="fe fe-file fe-16"></i>
          </li>
          </ul>
         
          </div>
        </nav>
      </aside>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h1 class="page-title">Let's start</h1>
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->

<div class="container mt-5">
    <h1>School-Based Feeding Program - Milk Component</h1>
    <form action="submit6.php" method="post" id="consolidatedForm">
        <h2>School Information</h2>
        <div class="mb-3">
            <label for="regionDivisionDistrict" class="form-label">REGION/DIVISION/DISTRICT:</label>
            <input type="text" class="form-control" id="regionDivisionDistrict" name="region_division_district" required>
        </div>
        <div class="mb-3">
            <label for="nameOfSchool" class="form-label">NAME OF SCHOOL:</label>
            <input type="text" class="form-control" id="nameOfSchool" name="name_of_school" required>
        </div>
        <div class="mb-3">
            <label for="schoolIdNumber" class="form-label">School ID Number:</label>
            <input type="text" class="form-control" id="schoolIdNumber" name="school_id_number" required>
        </div>

        <h2 class="mt-5">Student Information</h2>
        <div id="studentSection">
            <div class="student-info">
                <div class="mb-3">
                    <label for="studentName" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="studentName" name="student_name[]" required>
                </div>
                <div class="mb-3">
                    <label for="gradeSection" class="form-label">Grade & Section:</label>
                    <input type="text" class="form-control" id="gradeSection" name="grade_section[]" required>
                </div>
                <div class="mb-3">
                    <label>Classification of Students in terms of Milk Tolerance (Please check one):</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="milk_tolerance[0]" value="Without milk intolerance and will participate in milk feeding" required>
                        <label class="form-check-label">Without milk intolerance and will participate in milk feeding</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="milk_tolerance[0]" value="With milk intolerance but willing to participate in milk feeding" required>
                        <label class="form-check-label">With milk intolerance but willing to participate in milk feeding</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="milk_tolerance[0]" value="Not allowed by parents to participate in milk feeding" required>
                        <label class="form-check-label">Not allowed by parents to participate in milk feeding</label>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-secondary" onclick="addStudent()">Add Another Student</button>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>
    let studentIndex = 1;

    function addStudent() {
        const studentSection = document.getElementById('studentSection');
        const newStudent = document.createElement('div');
        newStudent.classList.add('student-info');
        newStudent.innerHTML = `
            <div class="mb-3">
                <label for="studentName" class="form-label">Name:</label>
                <input type="text" class="form-control" id="studentName" name="student_name[]" required>
            </div>
            <div class="mb-3">
                <label for="gradeSection" class="form-label">Grade & Section:</label>
                <input type="text" class="form-control" id="gradeSection" name="grade_section[]" required>
            </div>
            <div class="mb-3">
                <label>Classification of Students in terms of Milk Tolerance (Please check one):</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="milk_tolerance[${studentIndex}]" value="Without milk intolerance and will participate in milk feeding" required>
                    <label class="form-check-label">Without milk intolerance and will participate in milk feeding</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="milk_tolerance[${studentIndex}]" value="With milk intolerance but willing to participate in milk feeding" required>
                    <label class="form-check-label">With milk intolerance but willing to participate in milk feeding</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="milk_tolerance[${studentIndex}]" value="Not allowed by parents to participate in milk feeding" required>
                    <label class="form-check-label">Not allowed by parents to participate in milk feeding</label>
                </div>
            </div>
        `;
        studentSection.appendChild(newStudent);
        studentIndex++;
    }

    document.getElementById('consolidatedForm').addEventListener('submit', function(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, submit it!'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
        });
    });
</script>


<?php
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

$sql = "SELECT * FROM milkcomponent";
$result = $conn->query($sql);
?>

<div class="container mt-5">
    <h1>School-Based Feeding Program - Milk Component Data</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Region/Division/District</th>
                <th>Name of School</th>
                <th>School ID Number</th>
                <th>Student Name</th>
                <th>Grade & Section</th>
                <th>Milk Tolerance</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['region_division_district']}</td>
                            <td>{$row['name_of_school']}</td>
                            <td>{$row['school_id_number']}</td>
                            <td>{$row['student_name']}</td>
                            <td>{$row['grade_section']}</td>
                            <td>{$row['milk_tolerance']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>



<?php
$conn->close();
?>

        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="list-group list-group-flush my-n3">
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-box fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Package has uploaded successfull</strong></small>
                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-download fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Widgets are updated successfull</strong></small>
                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                      </div>
                    </div>
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-inbox fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Notifications have been sent</strong></small>
                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                      </div>
                    </div> <!-- / .row -->
                  </div>
                  <div class="list-group-item bg-transparent">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span class="fe fe-link fe-24"></span>
                      </div>
                      <div class="col">
                        <small><strong>Link was attached to menu</strong></small>
                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                      </div>
                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .list-group -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body px-5">
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-success justify-content-center">
                      <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Control area</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Activity</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Droplet</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Upload</p>
                  </div>
                </div>
                <div class="row align-items-center">
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-users fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Users</p>
                  </div>
                  <div class="col-6 text-center">
                    <div class="squircle bg-primary justify-content-center">
                      <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                    </div>
                    <p>Settings</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src="js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>