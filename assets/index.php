<?php

$login = false;
$error = false;
require "../parts/_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
  $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

  $sql = "SELECT * from `data_store` where username='$username'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if (empty(trim($username))) {
    $error = "Enter Your Username";
  } elseif (empty(trim($password))) {
    $error = "Enter Your Password";
  } elseif ($num == 1) {
    while ($row = mysqli_fetch_assoc($result)) {
      $verify = password_verify($password, $row['pwd']);
      if ($verify) {
        // $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        header("location: welcome.php");
      } else {
        $error = "Invalid Username Or Password";
      }
    }
  } else {
    $error = "Invalid Credentials.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Stellar Admin</title>
  <link rel="stylesheet" href="../assests/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../assests/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assests/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assests/vendors/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../assests/vendors/chartist/chartist.min.css">
  <link rel="stylesheet" href="../assests/css/style.css">
  <link rel="shortcut icon" href="../assests/images/favicon.png" />
</head>

<body>
  
  <div class="container-scroller">
    <?php include '../assests/partials/_navbar.php'; ?>
    <div class="container-fluid page-body-wrapper">
      <?php include '../assests/partials/_sidebar.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sessions by channel</h4>
                  <div class="aligner-wrapper">
                    <canvas id="sessionsDoughnutChart" height="210"></canvas>
                    <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                      <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                      <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small>
                    </div>
                  </div>
                  <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                    <div class="d-flex">
                      <span class="square-indicator bg-danger ml-2"></span>
                      <p class="mb-0 ml-2">Assigned</p>
                    </div>
                    <div class="d-flex">
                      <span class="square-indicator bg-success ml-2"></span>
                      <p class="mb-0 ml-2">Not Assigned</p>
                    </div>
                    <div class="d-flex">
                      <span class="square-indicator bg-warning ml-2"></span>
                      <p class="mb-0 ml-2">Reassigned</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body performane-indicator-card">
                  <div class="d-sm-flex">
                    <h4 class="card-title flex-shrink-1">Performance Indicator</h4>
                    <p class="m-sm-0 ml-sm-auto flex-shrink-0">
                      <span class="data-time-range ml-0">7d</span>
                      <span class="data-time-range active">2w</span>
                      <span class="data-time-range">1m</span>
                      <span class="data-time-range">3m</span>
                      <span class="data-time-range">6m</span>
                    </p>
                  </div>
                  <div class="d-sm-flex flex-wrap">
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-primary ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold">Complaints (2098)</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-info ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold"> Task Done (1123)</p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="dot-indicator bg-danger ml-2"></span>
                      <p class="mb-0 ml-2 text-muted font-weight-semibold">Attends (876)</p>
                    </div>
                  </div>
                  <div id="performance-indicator-chart" class="ct-chart mt-4"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Quick Action Toolbar Starts-->
          <div class="row quick-action-toolbar">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-header d-block d-md-flex">
                  <h5 class="mb-0">Quick Actions</h5>
                  <p class="ml-auto mb-0">How are your active users trending overtime?<i class="icon-bulb"></i></p>
                </div>
                <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"> <i class="icon-user mr-2"></i> Add Client</button>
                  </div>
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"><i class="icon-docs mr-2"></i> Create Quote</button>
                  </div>
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"><i class="icon-folder mr-2"></i> Enter Payment</button>
                  </div>
                  <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                    <button type="button" class="btn px-0"><i class="icon-book-open mr-2"></i>Create Invoice</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Quick Action Toolbar Ends-->
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="d-sm-flex align-items-baseline report-summary-header">
                        <h5 class="font-weight-semibold">Report Summary</h5> <span class="ml-auto">Updated Report</span> <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                      </div>
                    </div>
                  </div>
                  <div class="row report-inner-cards-wrapper">
                    <div class=" col-md -6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">EXPENSE</span>
                        <h4>$32123</h4>
                        <span class="report-count"> 2 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-success">
                        <i class="icon-rocket"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">PURCHASE</span>
                        <h4>95,458</h4>
                        <span class="report-count"> 3 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-danger">
                        <i class="icon-briefcase"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">QUANTITY</span>
                        <h4>2650</h4>
                        <span class="report-count"> 5 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-warning">
                        <i class="icon-globe-alt"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-xl report-inner-card">
                      <div class="inner-card-text">
                        <span class="report-title">RETURN</span>
                        <h4>25,542</h4>
                        <span class="report-count"> 9 Reports</span>
                      </div>
                      <div class="inner-card-icon bg-primary">
                        <i class="icon-diamond"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <div class="row income-expense-summary-chart-text">
                    <div class="col-xl-4">
                      <h5>Income And Expenses Summary</h5>
                      <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>
                    </div>
                    <div class=" col-md-3 col-xl-2">
                      <p class="income-expense-summary-chart-legend"> <span style="border-color: #6469df"></span> Total Income </p>
                      <h3>$ 1,766.00</h3>
                    </div>
                    <div class="col-md-3 col-xl-2">
                      <p class="income-expense-summary-chart-legend"> <span style="border-color: #37ca32"></span> Total Expense </p>
                      <h3>$ 5,698.30</h3>
                    </div>
                    <div class="col-md-6 col-xl-4 d-flex align-items-center">
                      <div class="input-group" id="income-expense-summary-chart-daterange">
                        <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>
                        <input type="text" class="form-control">
                        <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>
                      </div>
                    </div>
                  </div>
                  <div class="row income-expense-summary-chart mt-3">
                    <div class="col-md-12">
                      <div class="ct-chart" id="income-expense-summary-chart"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title mb-sm-0">Products Inventory</h4>
                    <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a>
                  </div>
                  <div class="table-responsive border rounded p-1">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="font-weight-bold">Store ID</th>
                          <th class="font-weight-bold">Amount</th>
                          <th class="font-weight-bold">Gateway</th>
                          <th class="font-weight-bold">Created at</th>
                          <th class="font-weight-bold">Paid at</th>
                          <th class="font-weight-bold">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="images/faces/face1.jpg" alt="profile image"> Katie Holmes
                          </td>
                          <td>$3621</td>
                          <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                          <td>04 Jun 2019</td>
                          <td>18 Jul 2019</td>
                          <td>
                            <div class="badge badge-success p-2">Paid</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="images/faces/face2.jpg" alt="profile image"> Minnie Copeland
                          </td>
                          <td>$6245</td>
                          <td><img src="images/dashboard/paypal.png" alt="alipay" class="gateway-icon mr-2"> Paypal</td>
                          <td>25 Sep 2019</td>
                          <td>07 Oct 2019</td>
                          <td>
                            <div class="badge badge-danger p-2">Pending</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="images/faces/face3.jpg" alt="profile image"> Rodney Sims
                          </td>
                          <td>$9265</td>
                          <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                          <td>12 dec 2019</td>
                          <td>26 Aug 2019</td>
                          <td>
                            <div class="badge badge-warning p-2">Failed</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <img class="img-sm rounded-circle" src="images/faces/face4.jpg" alt="profile image"> Carolyn Barker
                          </td>
                          <td>$2263</td>
                          <td><img src="images/dashboard/alipay.png" alt="alipay" class="gateway-icon mr-2"> alipay</td>
                          <td>30 Sep 2019</td>
                          <td>20 Oct 2019</td>
                          <td>
                            <div class="badge badge-success p-2">Paid</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex mt-4 flex-wrap">
                    <p class="text-muted">Showing 1 to 10 of 57 entries</p>
                    <nav class="ml-auto">
                      <ul class="pagination separated pagination-info">
                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>
                      </ul>
                    </nav>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <?php if (isset($_GET['id'])) {
            $get_id = $_GET['id'];
            $sql = "DELETE FROM `data_store` WHERE `id` = $get_id";
            $sql_2 = "DELETE FROM `contact_us` WHERE `id` = $get_id";
            $result = mysqli_query($conn, $sql);
            $result_2 = mysqli_query($conn, $sql_2);
            if ($result) {
              $delete = true;
            }
            if ($result_2) {
              $delete = true;
            }
          } ?>

          <?php
          if ($update) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successful!  </strong> Your Details Have Been Updated.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
        </div>';
          }
          if ($delete) {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Successful!  </strong> Your Details Have Been Deleted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
      </div>';
          }
          ?>

              <?php include '../assests/partials/_navbar.php'; ?>
            </div>
            <div class="box2">
            <?php include '../assests/partials/_sidebar.php'; ?>
            </div>
            <div class="box3 mt-5">
              <div class="box mt-5 d-flex">
                <div class="add_user">
                  <a class="btn btn-primary mt-3 mx-3" style="justify-content:flex-start !important;" href="../main/update_user.php" role="button" id="add_user">Add User</a>
                </div>
                <div class="add_user">
                  <a class="btn btn-primary mt-3 mx-3" style="justify-content:flex-start !important;" href="../main/update_feedback.php" role="button" id="add_user">Add Feedback</a>
                </div>
              </div>

              <h3 class="text-center">Users</h3>
              <div class="cont d-contents">
                <table class="table table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Surname</th>
                      <th scope="col">Username</th>
                      <th scope="col">Update/Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM `data_store`";
                    $result = mysqli_query($conn, $sql);
                    $id = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $id + 1;
                    ?>
                      <tr>
                        <th scope="row"><?php echo $id; ?></th>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['surname'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td class="d-flex">
                          <div id="editing_buttons m-0">
                            <a role="button" href="../main/update_user.php?id=<?php echo $row['id'] ?>" id="<?php echo $row['id'] ?>" class="edit_btn btn btn-primary mx-2">Edit</a>
                            <a role="button" href="#" id="<?php echo $row['id'] ?>" class="delete_btn btn btn-danger">Delete</a>
                          </div>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>

              <h3 class="text-center">Feedbacks</h3>
              <div class="cont">
                <table class="table table-hover">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Surname</th>
                      <th scope="col">Email</th>
                      <th scope="col">Mobile No.</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Gender 2</th>
                      <th scope="col">Gender 3</th>
                      <th scope="col">Update/Delete</th>
                    </tr>
                  </thead>
                  <tbody class="table-group-divider">
                    <?php
                    $sql = "SELECT * FROM `contact_us`";
                    $result = mysqli_query($conn, $sql);
                    $id = 0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      $id = $id + 1;
                    ?>
                      <tr>
                        <th scope="row"><?php echo $id; ?></th>
                        <td><?php echo $row['first_name'] ?></td>
                        <td><?php echo $row['surname'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['mobile'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td><?php echo $row['gender_2'] ?></td>
                        <td><?php echo $row['gender_3'] ?></td>
                        <td class="d-flex">
                          <div id="editing_buttons">
                            <a role="button" href="../main/update_feedback.php?id=<?php echo $row['id'] ?>" id="<?php echo $row['id'] ?>" class="edit_btn btn btn-primary mx-2">Edit</a>
                            <a role="button" href="#" id="<?php echo $row['id'] ?>" class="delete_btn btn btn-danger">Delete</a>
                          </div>
                        </td>
                      <?php } ?>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assests/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assests/vendors/chart.js/Chart.min.js"></script>
  <script src="../assests/vendors/moment/moment.min.js"></script>
  <script src="../assests/vendors/daterangepicker/daterangepicker.js"></script>
  <script src="../assests/vendors/chartist/chartist.min.js"></script>
  <script src="../assests/js/off-canvas.js"></script>
  <script src="../assests/js/misc.js"></script>
  <script src="../assests/js/dashboard.js"></script>
</body>

</html>