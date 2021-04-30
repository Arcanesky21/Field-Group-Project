<?php session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location:signin.php");
  exit;
}
if ($_SESSION['status'] == "Doctor") {
  header('location:RealdocHome.php');
  exit;
}



?>
<?php require_once "userLoginData.php";
require_once "regappointment.php";
require_once "edituser.php";
?>
<?php
if (isset($_SESSION['statmsg'])) : ?>
  <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
    <?php
    echo $_SESSION['statmsg'];
    unset($_SESSION['statmsg']);

    ?>
  </div>
<?php endif; ?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Page</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">

  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <link rel="stylesheet" href="../css/aos.css">

  <link rel="stylesheet" href="../css/ionicons.min.css">

  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" href="../css/icomoon.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/99738b2def.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>

<body class="movingGradient bg-light">



  <div class=" justify-content-center container">
    <div class="container m-auto text-center mx-5" id="profile">
      <div>
        <h4 class="container m-auto text-center mx-5">Welcome, <p class="container m-auto text-center mx-5"><?php echo $_SESSION["id"] . "</br>"; ?></p>
          </h1>

      </div>

      <img style="max-width: 50%;" class=" rounded-circle  img-fluid mb-3" alt="USER PIC" src="../images/usepic.jpeg" />
      <form class="justify-content-center ">
        <div class="form-group  ">
        </div>


      </form>
    </div>
    <div>

      <div class="container container2 my-5  text-light text-light text-center rounded" id="container1">
        <div class="row ">
          <div class="col-md-3 my-5 tablinks border-right border-dark">
            <img style="max-width: 50%;" src="../signin/images/icons/home.svg" />
            <div>
              <a href="index.php" class="btn btn-info btn-sm text-justify">
                Home
              </a>
            </div>

          </div>

          <div class="col-md-2 my-5 tablinks border-right border-dark">

            <img style="max-width: 50%;" src="../signin/images/icons/help.svg" />
            <div>
              <button href="getnotes.php" data-toggle="modal" name="getnotes" class="btn btn-info btn-sm text-justify" data-target="#exampleModal">
                Reports
            </div>

          </div>

          <!-- Icons made by <a href="https://www.flaticon.com/free-icon/tooth_993307?related_item_id=993270&term=white" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->

          <div class="col-md-2 my-5 tablinks border-right border-dark">
            <img style="max-width: 50%;" src="../signin/images/icons/edit.svg" />
            <div>
              <a class="btn btn-info btn-sm text-justify" data-toggle="modal" data-target="#exampleModalEdit" href="">
                Edit Account
              </a>

            </div>

          </div>


          <div class="col-md-2 my-5 tablinks border-right border-dark">
            <img style="max-width: 50%;" src="../signin/images/icons/office-appoinment.svg" />

            <div>
              <a class="btn btn-info btn-sm text-justify" data-toggle="modal" data-target="#exampleModalCenter" href="">
                Set Appointment
              </a>

            </div>

          </div>

          <div class="col-md-3 my-5 tablinks border-dark">
            <img style="max-width: 50%;" src="../signin/images/icons/my-appointments.svg" />

            <div>
              <a class="btn btn-info btn-sm text-justify" data-toggle="modal" data-target="#exampleModalView" href="">
                My Appointments
              </a>

            </div>

          </div>
          <a href="logout.php" class="btn btn-danger ml-3 m-auto text-center">Sign Out</a>
        </div>
      </div>

      <!-- Modal View Appointments-->
      <div class="modal fade" id="exampleModalView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">My Appointments</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php require_once "getappointmemts.php";
              ?>
              <div class="row justify-content-center">
                <table class="table bg-light">
                  <thead>
                    <tr>
                      <th>
                        First Name
                      </th>
                      <th>
                        Last Name
                      </th>
                      <th>
                        Contact
                      </th>
                      <th>
                        Service
                      </th>
                      <th>
                        Appointment
                      </th>
                    </tr>
                  </thead>

                  <?php while ($row = $appointquery->fetch_assoc()) : ?>
                    <tr>
                      <td><?php echo $row["first_name"] ?></td>
                      <td><?php echo $row["last_name"] ?></td>
                      <td><?php echo $row["contact"] ?></td>
                      <td><?php echo $row["services"] ?></td>
                      <td><?php echo $row["appdate"] ?></td>
                      <td></td>
                    </tr>
                  <?php endwhile; ?>
                </table>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Dr Notes-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Diagnosis</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body bg-light">
              <?php require_once "getnotes.php"; ?>
              <table class="table">
                <thead>
                  <tr>
                    <th>
                      First Name
                    </th>
                    <th>
                      Last Name
                    </th>
                    <th>
                      Dr Notes
                    </th>
                  </tr>
                </thead>
                <?php while ($nte = $q4result->fetch_assoc()) : ?>
                  <tr>
                    <td><?php echo $nte["dr_fname"]; ?></td>
                    <td><?php echo $nte["dr_lname"]; ?></td>
                    <td><?php echo $nte["drNotes"]; ?></td>
                    <td></td>
                  </tr>
                <?php endwhile; ?>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Edit Account -->
      <div class="modal fade" id="exampleModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body bg-light">
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" name="fname" aria-describedby="First-Name" value="<?php echo $_SESSION["id"]; ?>">
                </div>
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" name="lname" value="<?php echo $_SESSION["lastname"]; ?>">
                </div>
                <div class="form-group">
                  <label for="dob">D.O.B</label>
                  <input type="date" class="form-control" name="dob" value="<?php echo $_SESSION["bd"]; ?>">
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="updateinfo" class="btn btn-primary">Save changes</button>
              </form>

            </div>
          </div>
        </div>
      </div>

      <!-- 1 Modal Schedule Appoointment -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Schedule Appointment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body bg-light">
              <div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                  <div class="">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="First Name" name="First-Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Last Name" name="Last-Name">
                    </div>
                  </div>
                  <div class="">
                    <div class="form-group">
                      <div class="form-field">
                        <div class="select-wrap">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="service" id="" class="form-control">
                            <option value="">Select Your Services</option>
                            <option value="Dental">Dental</option>
                            <option value="Medical">Medical</option>
                            <option value="Lab">Lab Work</option>
                            <option value="Check Up">Check up</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" name="contact" placeholder="Phone">
                    </div>
                  </div>
                  <div class="">
                    <div class="form-group">
                      <div class="input-wrap">
                        <input type="date" name="appdate" class="form-control appointment_date" placeholder="Date">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-wrap">
                        <input type="time" name="apptime" class="form-control appointment_time" placeholder="Time">
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <div class="form-group">
                      <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message - 200 word limit" maxlength="200"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" name="sub_appointment" value="Appointment" class="btn btn-secondary py-3 px-4">
                    </div>
                  </div>

                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>