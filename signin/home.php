<?php session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: signin.php");
  exit;
}
?>


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
  <?php require_once "userLoginData.php";
  require_once "regappointment.php";
  require_once "edituser.php";
  ?>

</head>

<body class="movingGradient">



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
            <img style="max-width: 50%;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0UzRjJGRjsiIGQ9Ik0zNzUuNzUsMTk2di02NmMwLTExLjA1LTguOTUtMjAtMjAtMjBoLTIwMGMtMTEuMDUsMC0yMCw4Ljk1LTIwLDIwdjY2aC0xMDZ2MzA2aDQ1MlYxOTZIMzc1Ljc1eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzREQkJFQjsiIGQ9Ik0yOTUuNzUsMzc2aC04MGMtMTEuMDUsMC0yMCw4Ljk1LTIwLDIwdjEwNmgxMjBWMzk2QzMxNS43NSwzODQuOTUsMzA2LjgsMzc2LDI5NS43NSwzNzZ6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojRUQ1MTUxOyIgZD0iTTMxNS43NSw3MGMwLDE1LjM3LTUuNzgsMjkuMzgtMTUuMjcsNDBoLTAuMDFjLTEwLjk4LDEyLjI3LTI2Ljk1LDIwLTQ0LjcyLDIwcy0zMy43NC03LjczLTQ0LjcyLTIwDQoJaC0wLjAxYy05LjQ5LTEwLjYyLTE1LjI3LTI0LjYzLTE1LjI3LTQwYzAtMzMuMTQsMjYuODYtNjAsNjAtNjBTMzE1Ljc1LDM2Ljg2LDMxNS43NSw3MHoiLz4NCjxwYXRoIGQ9Ik0yNTYsNDI2YzUuNTIsMCwxMC00LjQ4LDEwLTEwcy00LjQ4LTEwLTEwLTEwcy0xMCw0LjQ4LTEwLDEwUzI1MC40OCw0MjYsMjU2LDQyNnoiLz4NCjxwYXRoIGQ9Ik01MDIsMjA2YzUuNTIzLDAsMTAtNC40NzgsMTAtMTBzLTQuNDc3LTEwLTEwLTEwYy0yNy4yMTQsMC05Mi40OTksMC0xMTYsMHYtNTZjMC0xNi41NDItMTMuNDU4LTMwLTMwLTMwaC0zNi43NjINCglDMzIzLjY1LDkwLjcsMzI2LDgwLjQ3NiwzMjYsNzBjMC0zOC41OTgtMzEuNDAyLTcwLTcwLTcwcy03MCwzMS40MDItNzAsNzBjMCwxMC40NzYsMi4zNSwyMC43LDYuNzYyLDMwSDE1Ng0KCWMtMTYuNTQyLDAtMzAsMTMuNDU4LTMwLDMwdjU2Yy0yMy41NzIsMC04OSwwLTExNiwwYy01LjUyMywwLTEwLDQuNDc4LTEwLDEwczQuNDc3LDEwLDEwLDEwaDEwdjEyMEgxMGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMA0KCXM0LjQ3NywxMCwxMCwxMGgxMHYxNTZjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMGMxNjYuODgzLDAsMjgzLjI4NSwwLDQ1MiwwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBWMzQ2aDEwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTANCglzLTQuNDc3LTEwLTEwLTEwaC0xMFYyMDZINTAyeiBNMjU2LDIwYzI3LjU3LDAsNTAsMjIuNDMsNTAsNTBjMCwxMi4xOTktNC40MzcsMjMuOTM0LTEyLjQ5OSwzMy4wOA0KCWMtMC4wNzksMC4wODMtMC4xNTYsMC4xNjYtMC4yMzIsMC4yNTFDMjgzLjc4OSwxMTMuOTI1LDI3MC4yMDUsMTIwLDI1NiwxMjBzLTI3Ljc4OS02LjA3NS0zNy4yNjktMTYuNjY5DQoJYy0wLjA3Ni0wLjA4NS0wLjE1My0wLjE2OC0wLjIzMi0wLjI1MUMyMTAuNDM3LDkzLjkzNCwyMDYsODIuMTk5LDIwNiw3MEMyMDYsNDIuNDMsMjI4LjQzLDIwLDI1NiwyMHogTTE0NiwxMzANCgljMC01LjUxNCw0LjQ4Ni0xMCwxMC0xMGg1MS4wM2MxMy4wMzQsMTIuNzU3LDMwLjYyOCwyMCw0OC45NywyMHMzNS45MzYtNy4yNDMsNDguOTctMjBIMzU2YzUuNTE0LDAsMTAsNC40ODYsMTAsMTB2NjZ2Mjk2aC00MHYtOTYNCgljMC0xNi41NDItMTMuNDU4LTMwLTMwLTMwaC04MGMtMTYuNTQyLDAtMzAsMTMuNDU4LTMwLDMwdjk2aC00MFYxOTZWMTMweiBNNDAsMjA2aDg2djEyMEg0MFYyMDZ6IE00MCwzNDZoODZ2MTQ2SDQwVjM0NnogTTIwNiwzOTYNCgljMC01LjUxNCw0LjQ4Ni0xMCwxMC0xMGg4MGM1LjUxNCwwLDEwLDQuNDg2LDEwLDEwdjk2aC00MHYtMzZjMC01LjUyMi00LjQ3Ny0xMC0xMC0xMHMtMTAsNC40NzgtMTAsMTB2MzZoLTQwVjM5NnogTTQ3Miw0OTJoLTg2DQoJVjM0Nmg4NlY0OTJ6IE0zODYsMzI2VjIwNmg4NnYxMjBIMzg2eiIvPg0KPHBhdGggZD0iTTQxNiwyNDZoMjZjNS41MjMsMCwxMC00LjQ3OCwxMC0xMHMtNC40NzctMTAtMTAtMTBoLTI2Yy01LjUyMywwLTEwLDQuNDc4LTEwLDEwUzQxMC40NzcsMjQ2LDQxNiwyNDZ6Ii8+DQo8cGF0aCBkPSJNNDQyLDI4NmgtMjZjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBzNC40NzcsMTAsMTAsMTBoMjZjNS41MjMsMCwxMC00LjQ3OCwxMC0xMFM0NDcuNTIzLDI4Niw0NDIsMjg2eiIvPg0KPHBhdGggZD0iTTQxNiwzODZoMjZjNS41MjMsMCwxMC00LjQ3OCwxMC0xMHMtNC40NzctMTAtMTAtMTBoLTI2Yy01LjUyMywwLTEwLDQuNDc4LTEwLDEwUzQxMC40NzcsMzg2LDQxNiwzODZ6Ii8+DQo8cGF0aCBkPSJNNDQyLDQyNmgtMjZjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBzNC40NzcsMTAsMTAsMTBoMjZjNS41MjMsMCwxMC00LjQ3OCwxMC0xMFM0NDcuNTIzLDQyNiw0NDIsNDI2eiIvPg0KPHBhdGggZD0iTTk2LDQyNkg3MGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMHM0LjQ3NywxMCwxMCwxMGgyNmM1LjUyMywwLDEwLTQuNDc4LDEwLTEwUzEwMS41MjMsNDI2LDk2LDQyNnoiLz4NCjxwYXRoIGQ9Ik05NiwzNjZINzBjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBzNC40NzcsMTAsMTAsMTBoMjZjNS41MjMsMCwxMC00LjQ3OCwxMC0xMFMxMDEuNTIzLDM2Niw5NiwzNjZ6Ii8+DQo8cGF0aCBkPSJNOTYsMjg2SDcwYy01LjUyMywwLTEwLDQuNDc4LTEwLDEwczQuNDc3LDEwLDEwLDEwaDI2YzUuNTIzLDAsMTAtNC40NzgsMTAtMTBTMTAxLjUyMywyODYsOTYsMjg2eiIvPg0KPHBhdGggZD0iTTcwLDI0NmgyNmM1LjUyMywwLDEwLTQuNDc4LDEwLTEwcy00LjQ3Ny0xMC0xMC0xMEg3MGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMFM2NC40NzcsMjQ2LDcwLDI0NnoiLz4NCjxwYXRoIGQ9Ik0xNzYsMjA2aDIwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBzLTQuNDc3LTEwLTEwLTEwaC0yMGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMFMxNzAuNDc3LDIwNiwxNzYsMjA2eiIvPg0KPHBhdGggZD0iTTIzNiwyMDZoNDBjNS41MjMsMCwxMC00LjQ3OCwxMC0xMHMtNC40NzctMTAtMTAtMTBoLTQwYy01LjUyMywwLTEwLDQuNDc4LTEwLDEwUzIzMC40NzcsMjA2LDIzNiwyMDZ6Ii8+DQo8cGF0aCBkPSJNMzE2LDIwNmgyMGM1LjUyMywwLDEwLTQuNDc4LDEwLTEwcy00LjQ3Ny0xMC0xMC0xMGgtMjBjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBTMzEwLjQ3NywyMDYsMzE2LDIwNnoiLz4NCjxwYXRoIGQ9Ik0xNzYsMjY2aDIwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBzLTQuNDc3LTEwLTEwLTEwaC0yMGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMFMxNzAuNDc3LDI2NiwxNzYsMjY2eiIvPg0KPHBhdGggZD0iTTIzNiwyNjZoNDBjNS41MjMsMCwxMC00LjQ3OCwxMC0xMHMtNC40NzctMTAtMTAtMTBoLTQwYy01LjUyMywwLTEwLDQuNDc4LTEwLDEwUzIzMC40NzcsMjY2LDIzNiwyNjZ6Ii8+DQo8cGF0aCBkPSJNMzE2LDI2NmgyMGM1LjUyMywwLDEwLTQuNDc4LDEwLTEwcy00LjQ3Ny0xMC0xMC0xMGgtMjBjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBTMzEwLjQ3NywyNjYsMzE2LDI2NnoiLz4NCjxwYXRoIGQ9Ik0xNzYsMzI2aDIwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBzLTQuNDc3LTEwLTEwLTEwaC0yMGMtNS41MjMsMC0xMCw0LjQ3OC0xMCwxMFMxNzAuNDc3LDMyNiwxNzYsMzI2eiIvPg0KPHBhdGggZD0iTTIzNiwzMjZoNDBjNS41MjMsMCwxMC00LjQ3OCwxMC0xMHMtNC40NzctMTAtMTAtMTBoLTQwYy01LjUyMywwLTEwLDQuNDc4LTEwLDEwUzIzMC40NzcsMzI2LDIzNiwzMjZ6Ii8+DQo8cGF0aCBkPSJNMzE2LDMyNmgyMGM1LjUyMywwLDEwLTQuNDc4LDEwLTEwcy00LjQ3Ny0xMC0xMC0xMGgtMjBjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBTMzEwLjQ3NywzMjYsMzE2LDMyNnoiLz4NCjxwYXRoIGQ9Ik0yMzYsODBoMTB2MTBjMCw1LjUyMiw0LjQ3NywxMCwxMCwxMGM1LjUyMywwLDEwLTQuNDc4LDEwLTEwVjgwaDEwYzUuNTIzLDAsMTAtNC40NzgsMTAtMTBzLTQuNDc3LTEwLTEwLTEwaC0xMFY1MA0KCWMwLTUuNTIyLTQuNDc3LTEwLTEwLTEwcy0xMCw0LjQ3OC0xMCwxMHYxMGgtMTBjLTUuNTIzLDAtMTAsNC40NzgtMTAsMTBTMjMwLjQ3Nyw4MCwyMzYsODB6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
            <div>
              <a href="index.php" class="btn btn-info btn-sm text-justify">
                Home
              </a>
            </div>

          </div>

          <div class="col-md-2 my-5 tablinks border-right border-dark">

            <img style="max-width: 50%;" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PGc+PHBhdGggZD0ibTIyNi43NzIgNDEzLjMxNmg1OC40NTZ2NzYuMTg0aC01OC40NTZ6IiBmaWxsPSIjYzdjMmM5Ii8+PHBhdGggZD0ibTQ3NC41IDQyOC4zMTZoLTQzN2MtMTYuNTY5IDAtMzAtMTMuNDMxLTMwLTMwdi0yNTQuNjMyYzAtMTYuNTY5IDEzLjQzMS0zMCAzMC0zMGg0MzdjMTYuNTY5IDAgMzAgMTMuNDMxIDMwIDMwdjI1NC42MzJjMCAxNi41NjktMTMuNDMxIDMwLTMwIDMweiIgZmlsbD0iIzY1NWU2NyIvPjxwYXRoIGQ9Im00NzQuNSAxMTMuNjg0aC0zMGMxNi41NjkgMCAzMCAxMy40MzIgMzAgMzB2MjU0LjYzM2MwIDE2LjU2OC0xMy40MzEgMzAtMzAgMzBoMzBjMTYuNTY5IDAgMzAtMTMuNDMyIDMwLTMwdi0yNTQuNjMzYzAtMTYuNTY5LTEzLjQzMS0zMC0zMC0zMHoiIGZpbGw9IiM1NDRmNTYiLz48cGF0aCBkPSJtMzcuNSAzOTUuMzE2di0yNDguNjMyYzAtMS42NTcgMS4zNDMtMyAzLTNoNDMxYzEuNjU3IDAgMyAxLjM0MyAzIDN2MjQ4LjYzM2MwIDEuNjU3LTEuMzQzIDMtMyAzaC00MzFjLTEuNjU3LS4wMDEtMy0xLjM0NC0zLTMuMDAxeiIgZmlsbD0iI2VjZjVmZiIvPjxwYXRoIGQ9Im00NzEuNSAxNDMuNjg0aC0zMGMxLjY1NyAwIDMgMS4zNDMgMyAzdjI0OC42MzNjMCAxLjY1Ny0xLjM0MyAzLTMgM2gzMGMxLjY1NyAwIDMtMS4zNDMgMy0zdi0yNDguNjMzYzAtMS42NTctMS4zNDMtMy0zLTN6IiBmaWxsPSIjZGNlYWZjIi8+PHBhdGggZD0ibTMwMi4yMDMgNDc0LjVoLTkyLjQwNWMtMTQuOTEyIDAtMjcgMTIuMDg4LTI3IDI3IDAgMS42NTcgMS4zNDMgMyAzIDNoMTQwLjQwNWMxLjY1NyAwIDMtMS4zNDMgMy0zIDAtMTQuOTEyLTEyLjA4OS0yNy0yNy0yN3oiIGZpbGw9IiM2NTVlNjciLz48cGF0aCBkPSJtMzAyLjIwMyA0NzQuNWgtMzBjMTQuOTEyIDAgMjcgMTIuMDg4IDI3IDI3IDAgMS42NTctMS4zNDMgMy0zIDNoMzBjMS42NTcgMCAzLTEuMzQzIDMtMyAwLTE0LjkxMi0xMi4wODktMjctMjctMjd6IiBmaWxsPSIjNTQ0ZjU2Ii8+PGc+PGc+PHBhdGggZD0ibTQxMC45MjMgMzk4LjMxNnYtODEuMTE3YzAtMjEuNDU4LTEzLjcxMy00MC41MjEtMzQuMDcxLTQ3LjM2NGwtNzIuMzk0LTI0LjMzNGMtNi43ODYtMi4yODEtMTEuMzU3LTguNjM1LTExLjM1Ny0xNS43ODh2LTI3LjEyNmgtNzQuMjAydjI3LjEyNmMwIDcuMTUzLTQuNTcxIDEzLjUwNy0xMS4zNTcgMTUuNzg4bC03Mi4zOTQgMjQuMzM0Yy0yMC4zNTggNi44NDMtMzQuMDcxIDI1LjkwNi0zNC4wNzEgNDcuMzY0djgxLjExN3oiIGZpbGw9IiNiM2U1OWYiLz48Zz48cGF0aCBkPSJtMzc2Ljg1MiAyNjkuODM1LTcyLjM5NC0yNC4zMzRjLTYuNzg2LTIuMjgxLTExLjM1Ny04LjYzNS0xMS4zNTctMTUuNzg4di0yNy4xMjVoLTc0LjIwMnYxNWg0NC4yMDJ2MjcuMTI1YzAgNy4xNTMgNC41NzEgMTMuNTA3IDExLjM1NyAxNS43ODhsNzIuMzk0IDI0LjMzNGMyMC4zNTggNi44NDMgMzQuMDcxIDI1LjkwNiAzNC4wNzEgNDcuMzY0djY2LjExN2gzMHYtODEuMTE3YzAtMjEuNDU3LTEzLjcxMy00MC41Mi0zNC4wNzEtNDcuMzY0eiIgZmlsbD0iIzk1ZDZhNCIvPjwvZz48cGF0aCBkPSJtMjA2Ljk4MSAyNDUuNjkgNDUuNjEyIDQ1LjU2NmMyLjM0MyAyLjM0IDYuMTM4IDIuMzQgOC40ODEgMGw0NS4xOTMtNDUuMTQ2LTEuODA5LS42MDhjLTYuNzg2LTIuMjgxLTExLjM1Ny04LjYzNS0xMS4zNTctMTUuNzg4di0yNy4xMjVoLTc0LjIwMnYyNy4xMjVjMCA3LjE1My00LjU3MSAxMy41MDctMTEuMzU3IDE1Ljc4OHoiIGZpbGw9IiNmMWNjYmQiLz48cGF0aCBkPSJtMjYzLjEwMSAyNDQuNzEzYzAgNy4xNTMgNC41NzEgMTMuNTA3IDExLjM1NyAxNS43ODhsMTMuMDIxIDQuMzc3IDE4Ljc4OC0xOC43NjktMS44MDktLjYwOGMtNi43ODYtMi4yODEtMTEuMzU3LTguNjM1LTExLjM1Ny0xNS43ODh2LTI3LjEyNWgtMzB6IiBmaWxsPSIjZWFhZDljIi8+PGc+PHBhdGggZD0ibTM0My4xMzQgMTA5LjU5MmgtMTc0LjI2OXYtNjQuMjYxYzAtMjAuODk0IDE2LjkzOC0zNy44MzEgMzcuODMxLTM3LjgzMWg5OC42MDdjMjAuODk0IDAgMzcuODMxIDE2LjkzOCAzNy44MzEgMzcuODMxeiIgZmlsbD0iI2MxN2Q0ZiIvPjxwYXRoIGQ9Im0zMDUuMzAzIDcuNWgtMzBjMjAuODk0IDAgMzcuODMxIDE2LjkzOCAzNy44MzEgMzcuODMxdjY0LjI2MWgzMHYtNjQuMjYxYy4wMDEtMjAuODkzLTE2LjkzNy0zNy44MzEtMzcuODMxLTM3LjgzMXoiIGZpbGw9IiNiMTZlM2QiLz48Zz48cGF0aCBkPSJtMjU1LjY5MiAyMTYuNzE4Yy00OC4xNTctLjE2Ni04Ni44MjctMzkuODgxLTg2LjgyNy04Ny45OXYtMzAuNDc5YzE3LjM3My4wNTEgNDMuNDc2LTIuMTQ1IDcyLjMzOS0xMy43NTggMTMuNDY0LTUuNDE3IDI0Ljc3MS0xMS43NzQgMzMuOTQyLTE3Ljg1MyAxLjk4My0xLjMxNSA0LjYzNi0uODUxIDYuMDk1IDEuMDI4IDQuNjEyIDUuOTQxIDEyLjM1OSAxNC4xNjYgMjQuMTA2IDIwLjY3OSAxNS44MTMgOC43NjYgMzAuNjA5IDkuODQ4IDM3Ljc4OCA5LjkwM3YzMS40MjRjLS4wMDEgNDguMTc3LTM5LjE3OCA4Ny4yMTMtODcuNDQzIDg3LjA0NnoiIGZpbGw9IiNmMWNjYmQiLz48L2c+PGc+PHBhdGggZD0ibTMxMy4xMzQgOTIuMTAzdjIyLjU3YzAgNDguMTc2LTM5LjE3OCA4Ny4yMTItODcuNDQyIDg3LjA0NS03Ljc5Mi0uMDI3LTE1LjMzNC0xLjA5NS0yMi41MDYtMy4wNjEgMTQuNTU1IDExLjI1IDMyLjcyOSAxNy45OTMgNTIuNTA2IDE4LjA2MSA0OC4yNjUuMTY3IDg3LjQ0Mi0zOC44NjkgODcuNDQyLTg3LjA0NSAwLTE1LjQ3NSAwLTE1Ljk1IDAtMzEuNDI0LTUuOTgyLS4wNDYtMTcuMjU4LS44MjMtMzAtNi4xNDZ6IiBmaWxsPSIjZWFhZDljIi8+PC9nPjwvZz48ZWxsaXBzZSBjeD0iMzUwLjcxOCIgY3k9IjM0Mi45MjkiIGZpbGw9IiNmMWVmZjEiIHJ4PSIyNi45MjQiIHJ5PSIyNi44OTYiLz48L2c+PC9nPjwvZz48cGF0aCBkPSJtNDc0LjUgMTA2LjE4aC05Ni4zN2MtNC4xNDMgMC03LjUgMy4zNTctNy41IDcuNXMzLjM1NyA3LjUgNy41IDcuNWg5Ni4zN2MxMi40MDYgMCAyMi41IDEwLjA5NCAyMi41IDIyLjV2MjU0LjY0YzAgMTIuNDA2LTEwLjA5NCAyMi41LTIyLjUgMjIuNWgtMTg5LjE5NGMtLjAyNiAwLS4wNTEtLjAwNC0uMDc3LS4wMDRzLS4wNTEuMDA0LS4wNzcuMDA0aC01OC4zMDJjLS4wMjYgMC0uMDUxLS4wMDQtLjA3Ny0uMDA0cy0uMDUxLjAwNC0uMDc3LjAwNGgtMTg5LjE5NmMtMTIuNDA2IDAtMjIuNS0xMC4wOTQtMjIuNS0yMi41di0yNTQuNjRjMC0xMi40MDYgMTAuMDk0LTIyLjUgMjIuNS0yMi41aDEyMy44NjV2Ny41NDhjMCAyLjUwOC4xMDYgNC45OTIuMjk2IDcuNDUyaC0xMjEuMTYxYy01Ljc5IDAtMTAuNSA0LjcxLTEwLjUgMTAuNXYxODYuMDEyYzAgNC4xNDMgMy4zNTcgNy41IDcuNSA3LjVzNy41LTMuMzU3IDcuNS03LjV2LTE4MS41MTJoMTE5LjAyM2M2LjQxIDI2LjY2OSAyMy45NTkgNDkuMDI5IDQ3LjM3NyA2MS43Mjh2MTYuODAzYzAgMy45MzctMi41MTEgNy40MjUtNi4yNTEgOC42ODFsLTcyLjM4OCAyNC4zNGMtMjMuNDM2IDcuODczLTM5LjE4MiAyOS43NjMtMzkuMTgyIDU0LjQ3djczLjYyaC00OC41Nzl2LTIzLjEyOWMwLTQuMTQzLTMuMzU3LTcuNS03LjUtNy41cy03LjUgMy4zNTctNy41IDcuNXYyNy42MjljMCA1Ljc5IDQuNzEgMTAuNSAxMC41IDEwLjVoNDMxYzUuNzkgMCAxMC41LTQuNzEgMTAuNS0xMC41di0yNDguNjQyYzAtNS43OS00LjcxLTEwLjUtMTAuNS0xMC41aC0xMjEuMDljLjE0Ni0yLjE1Ni4yMjQtNC4zMjUuMjI0LTYuNTA3di04NC4zNDJjLjAwMS0yNC45OTYtMjAuMzM0LTQ1LjMzMS00NS4zMy00NS4zMzFoLTk4LjYwN2MtMjQuOTk2IDAtNDUuMzMxIDIwLjMzNS00NS4zMzEgNDUuMzMxdjYwLjg0OWgtMTIzLjg2NmMtMjAuNjc4IDAtMzcuNSAxNi44MjItMzcuNSAzNy41djI1NC42NGMwIDIwLjY3OCAxNi44MjIgMzcuNSAzNy41IDM3LjVoMTgxLjc3MXYzMS4xOGgtOS40NzRjLTE5LjAyMyAwLTM0LjUgMTUuNDc3LTM0LjUgMzQuNSAwIDUuNzkgNC43MSAxMC41IDEwLjUgMTAuNWgxNDAuNDA0YzUuNzkgMCAxMC41LTQuNzEgMTAuNS0xMC41IDAtMTkuMDIzLTE1LjQ3Ny0zNC41LTM0LjUtMzQuNWgtOS40NzR2LTMxLjE4aDE4MS43NzNjMjAuNjc4IDAgMzcuNS0xNi44MjIgMzcuNS0zNy41di0yNTQuNjRjMC0yMC42NzgtMTYuODIyLTM3LjUtMzcuNS0zNy41em0tNzEuMDggMjg0LjY0aC0yOTQuODR2LTczLjYyYzAtMTguMjU3IDExLjYzOC0zNC40MzIgMjguOTYxLTQwLjI1MWwxNi45NDQtNS42OTdjLS45NzEgNS40NjMtMS4zNzcgMTEuMDEtMS4xNjYgMTYuNi4xOTMgNS4xMTIuODg3IDEwLjE3OCAyLjA3MSAxNS4xNDQtMTYuMzk5IDQuMzA2LTI4LjUzMiAxOS4yNTMtMjguNTMyIDM2Ljk4NHYyNC42ODNjMCA2Ljk4MiA1LjY4MSAxMi42NjMgMTIuNjYzIDEyLjY2M2g3LjAwOGM0LjE0MyAwIDcuNS0zLjM1NyA3LjUtNy41cy0zLjM1Ny03LjUtNy41LTcuNWgtNC42NzF2LTIyLjM0NmMwLTEyLjgwNiAxMC40MTMtMjMuMjI1IDIzLjIxNy0yMy4yMzUuMDA3IDAgLjAxMy4wMDEuMDE5LjAwMS4wMDkgMCAuMDE5LS4wMDEuMDI4LS4wMDEgMTIuNzk5LjAxNiAyMy4yMDYgMTAuNDMyIDIzLjIwNiAyMy4yMzR2MjIuMzQ2aC00LjY3MWMtNC4xNDMgMC03LjUgMy4zNTctNy41IDcuNXMzLjM1NyA3LjUgNy41IDcuNWg3LjAwOGM2Ljk4MiAwIDEyLjY2My01LjY4MSAxMi42NjMtMTIuNjYzdi0yNC42ODNjMC0xOS4xODctMTQuMjA4LTM1LjExMy0zMi42NTQtMzcuODI0LTEuMzc5LTQuODUxLTIuMTc2LTkuODMzLTIuMzY2LTE0Ljg3MS0uMjc5LTcuMzY1LjczMi0xNC42NDYgMi45ODctMjEuNjg2bDMzLjY2OC0xMS4zMjEgNDIuMzI4IDQyLjI4NGM1LjI2IDUuMjU0IDEzLjgyMSA1LjI1NCAxOS4wODItLjAwMWw0MS45MDYtNDEuODY0IDM2LjgxNiAxMi4zNzhjMi42NzkgNy4wMSA0LjA0NyAxNC41NjQgMy45NzcgMjIuMDM2LS4wNjMgNi43MDgtMS4zMTEgMTMuNDc1LTMuNTk4IDE5LjgxOS0xNi41MDEgMi41My0yOS4xOCAxNi44MTItMjkuMTggMzMuOTk3IDAgMTguOTY2IDE1LjQ0MiAzNC4zOTYgMzQuNDIzIDM0LjM5NnMzNC40MjQtMTUuNDMxIDM0LjQyNC0zNC4zOTZjMC0xNS40MzItMTAuMjI1LTI4LjUyMS0yNC4yNi0zMi44NjQgMi4wMTktNi43NTUgMy4xMjUtMTMuODA3IDMuMTkyLTIwLjgxLjA1Mi01LjQ3Mi0uNTIzLTEwLjk3Ny0xLjY3My0xNi4zNjFsMTIuMDYxIDQuMDU1YzE3LjMyMSA1LjgxOSAyOC45NTkgMjEuOTk0IDI4Ljk1OSA0MC4yNTF6bS0xMDkuNTU5LTE0Mi45MTktMzcuMDI4IDM2Ljk4OS0zNy44MzYtMzcuNzk3YzQuNjIyLTQuNDUzIDcuNDAzLTEwLjY2NSA3LjQwMy0xNy4zODR2LTEwLjI5MWM5LjIxOCAzLjA3NiAxOS4wNTMgNC43NjQgMjkuMjY2IDQuNzk5LjExMyAwIC4yMjUuMDAxLjMzOC4wMDEgMTAuMjA5IDAgMjAuMTY5LTEuNjA1IDI5LjU5Ni00LjY5NHYxMC4xODVjMCA3LjEzMSAzLjExOSAxMy43MDIgOC4yNjEgMTguMTkyem01Ni44NDUgNzUuNjMzaC4wMDguMDFjMTAuNzA3LjAwMyAxOS40MTggOC43MDMgMTkuNDE4IDE5LjM5NSAwIDEwLjY5NS04LjcxNCAxOS4zOTYtMTkuNDI0IDE5LjM5NnMtMTkuNDIzLTguNzAxLTE5LjQyMy0xOS4zOTZjMC0xMC42OTEgOC43MDctMTkuMzg5IDE5LjQxMS0xOS4zOTV6bS0yLjUyMS0xNzIuMzU0aDExOC44MTV2MjM5LjY0aC00OC41OHYtNzMuNjJjMC0yNC43MDctMTUuNzQ2LTQ2LjU5Ny0zOS4xOC01NC40N2wtNzIuMzkzLTI0LjM0Yy0zLjczNy0xLjI1Ni02LjI0OC00Ljc0NC02LjI0OC04LjY4MXYtMTYuNTk5YzguMDc1LTQuMzIyIDE1LjU2Mi05Ljg1MiAyMi4yMzItMTYuNSAxMi43MzMtMTIuNjg2IDIxLjM5Ny0yOC4zNTQgMjUuMzU0LTQ1LjQzem0tMTcxLjgyLTEwNS44NDljMC0xNi43MjUgMTMuNjA2LTMwLjMzMSAzMC4zMzEtMzAuMzMxaDk4LjYwN2MxNi43MjUgMCAzMC4zMzEgMTMuNjA2IDMwLjMzMSAzMC4zMzF2NDQuOTUxYy03LjYyMS0uODY4LTE3LjAxNC0zLjE1My0yNi42NTEtOC40OTYtOC40ODgtNC43MDUtMTUuODI5LTExLjAwMy0yMS44MTgtMTguNzE3LTMuODQ4LTQuOTYxLTEwLjk0OS02LjEzOS0xNi4xNjMtMi42ODItMTAuMjY4IDYuODA2LTIxLjIzNSAxMi41NzQtMzIuNTk4IDE3LjE0Ni0xOS42OTQgNy45MjQtNDAuNTMxIDEyLjMwNi02Mi4wMzkgMTMuMDh6bTAgNjAuMzA0YzIzLjQzOC0uNzgxIDQ2LjE1Ny01LjU0MiA2Ny42MzktMTQuMTg2IDExLjQ2My00LjYxMiAyMi41NTUtMTAuMzUgMzMuMDA1LTE3LjA3IDYuOTE3IDguMzY5IDE1LjIxNiAxNS4yNjggMjQuNzAxIDIwLjUyNiAxMi4zODIgNi44NjMgMjQuNDM0IDkuNTY0IDMzLjkyNSAxMC40NjF2MjQuMzA3YzAgMjEuMjgzLTguMzA3IDQxLjI4Mi0yMy4zOTEgNTYuMzEzLTYuNDc1IDYuNDUzLTEzLjg2MyAxMS42NDctMjEuODY4IDE1LjQ4MS0uMzMxLjEyOS0uNjUxLjI3OC0uOTU2LjQ1MS0xMC40MTcgNC44MTgtMjEuODUzIDcuMzQ1LTMzLjcwMSA3LjI5OWgtLjAwMWMtNDMuNzU1LS4xNS03OS4zNTMtMzYuMjU5LTc5LjM1My04MC40OSAwLS4wOTctLjAwNC0yMy4wMTQgMC0yMy4wOTJ6bTU3LjkwNiAzMzAuMTg1aDQzLjQ1N3YzMS4xOGgtNDMuNDU3em02Ny45MzEgNDYuMThjOS4yMDQgMCAxNi45MzkgNi40MDkgMTguOTc2IDE1aC0xMzAuMzU2YzIuMDM2LTguNTkxIDkuNzcxLTE1IDE4Ljk3Ni0xNXoiLz48L2c+PC9zdmc+" />
            <div>
              <button href="getnotes.php" data-toggle="modal" name="getnotes" class="btn btn-info btn-sm text-justify" data-target="#exampleModal">
                Reports
            </div>

          </div>

          <!-- Icons made by <a href="https://www.flaticon.com/free-icon/tooth_993307?related_item_id=993270&term=white" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->

          <div class="col-md-2 my-5 tablinks border-right border-dark">
            <img style="max-width: 50%;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwMSA1MTIuMDAxIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDAxIDUxMi4wMDE7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBkPSJNMjA1LjYxNiwxNy41MjJjMS42NTgtMC41MzEsMy4zMDUtMS4wMjQsNC45NDctMS40OTNjLTI0LjYyOC02Ljg4Ni01Ni4wOTUtOS42ODMtOTAuOTQ5LDEuNDkzDQoJQzQyLjY3Myw0Mi4yMDMsNi43OTMsMTU2LjE3NSw2OS40MTQsMjQ4LjE5NmM1Ni4zMzEsODIuNzQxLDI5LjI5MSwxMzQuMDUyLDYxLjkzMSwyMTEuNTY0YzIxLjQxLDUwLjgzMSw0Mi41NjEsNjIuMjkxLDY2LjM1MS0yLjU5DQoJYzMuNDAzLTkuMjg4LDYuMTY3LTE5LjU5Niw4LjYyMi0zMC4yOWMtMTUuNDI3LTYwLjUwNi0yLjkxLTEwOC4xOS01MC45MDMtMTc4LjY4NEM5Mi43OTMsMTU2LjE3NSwxMjguNjc1LDQyLjIwMywyMDUuNjE2LDE3LjUyMnoiDQoJLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNFM0YyRkY7IiBkPSJNMzkxLjgxOSwxNy41MjJjLTEuNjU3LTAuNTMxLTMuMzA0LTEuMDI0LTQuOTQ1LTEuNDkzYy0zMy44OTktOS42OTItNjQuMzcxLTYuMzcxLTg4LjE1NSwwLjYxOA0KCWMtMTkuMzQyLDUuNjg0LTM0LjI2MiwxMy43OS00My4wMDMsMTkuMjg1Yy05LjA1OS01LjY5OC0yNC43NjItMTQuMjAyLTQ1LjE1NC0xOS45MDNjLTEuNjQyLDAuNDY5LTMuMjksMC45NjItNC45NDcsMS40OTMNCgljLTc2Ljk0MSwyNC42OC0xMTIuODIyLDEzOC42NTItNTAuMjAxLDIzMC42NzRjNDcuOTkzLDcwLjQ5NCwzNS40NzYsMTE4LjE3OCw1MC45MDMsMTc4LjY4NA0KCWMxMS42Ny01MC44MjcsMTYuMzUtMTEwLjM2Miw0OS4zOTktMTEwLjU5M2MyNi40OTQtMC4xOTIsMzQuNzY1LDM4LjI3Miw0My4wMTYsNzkuNzY5YzQuMjA2LDIxLjE1NSw4LjQwNyw0My4wOTksMTUuMDE1LDYxLjExMw0KCWMyMy45Nyw2NS4zOTEsNDUuMDcxLDUzLjA5MSw2Ni4zNDEsMi41OWM0LjgyMy0xMS40NTIsOC4zMTUtMjIuNDQ5LDEwLjk4LTMzLjE2YzE0LjcwNi01OS4xMTIsNC4wNTktMTA5LjQxOSw1MS4wMjEtMTc4LjUwNA0KCUM1MDQuNzAxLDE1NS45ODUsNDY4LjQ3LDQyLjA5MywzOTEuODE5LDE3LjUyMnoiLz4NCjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNGRUM0NTk7IiBwb2ludHM9IjIxNi4yMTUsMTQ2LjI4NCAxNzEuMjE1LDE2MS4yODUgMTU2LjIxNCwyMDYuMjg1IDE0MS4yMTQsMTYxLjI4NSA5Ni4yMTMsMTQ2LjI4NCANCgkxNDEuMjE0LDEzMS4yODQgMTU2LjIxNCw4Ni4yODMgMTcxLjIxNSwxMzEuMjg0ICIvPg0KPHBhdGggZD0iTTM4NS45NjgsNDYuOTkzYy01LjUyLDAtMTAsNC40OC0xMCwxMHM0LjQ4LDEwLDEwLDEwYzUuNTIsMCwxMC00LjQ4LDEwLTEwUzM5MS40OSw0Ni45OTMsMzg1Ljk2OCw0Ni45OTN6Ii8+DQo8cGF0aCBkPSJNMzk1LjEyMyw3Ljk5OWMtNjIuNzE0LTIwLjExLTExNS4xMjUsMi4zOTQtMTM5LjE1NCwxNi4yNjFDMjMxLjk0MiwxMC4zOSwxNzkuNTM5LTEyLjExNSwxMTYuODEsNy45OTkNCglDMzMuNzM4LDM0LjY0Ni01LjIwOSwxNTUuOTQ4LDYxLjM5OCwyNTMuODI0YzMxLjU1Nyw0Ni4zNTIsMzUuNzcxLDgyLjEwNSw0MC4yMzIsMTE5Ljk1OGMzLjI2NiwyNy43MSw2LjY0Myw1Ni4zNjIsMjAuNzQ5LDg5Ljg2DQoJYzkuNDg2LDIyLjUyLDIyLjg5NSw0OC4yODEsNDIuNzM0LDQ4LjI3OWMwLjE3OSwwLDAuMzYyLTAuMDAyLDAuNTQyLTAuMDA2YzE1Ljk1My0wLjM3NywyOC44MDktMTYuMTk5LDQxLjY4MS01MS4zMDQNCgljNi41NTctMTcuODk1LDEwLjc1OC0zOS4wMTEsMTQuODIxLTU5LjQzYzcuMzEzLTM2Ljc1NCwxNC44NzYtNzQuNzU5LDMzLjg4My03NC44OTJjMC4wMzQsMCwwLjA2NywwLDAuMTAxLDANCgljMTguNzk5LDAsMjYuMzQ1LDM4LjAxOCwzMy42NDMsNzQuNzgzYzQuMDY1LDIwLjQ4NCw4LjI2OSw0MS42NjcsMTQuODI1LDU5LjU0MWMxMi44ODgsMzUuMTU5LDI1Ljc0Myw1MS4wMDYsNDEuNjgxLDUxLjM4Mg0KCWMwLjE4MSwwLjAwNCwwLjM2LDAuMDA2LDAuNTQxLDAuMDA2YzE5Ljc5OSwwLDMzLjIyNi0yNS44MDIsNDIuNzI2LTQ4LjM2YzEzLjQ4LTMyLjAxMSwxNy4wMTEtNjAuNTkzLDIwLjQyNi04OC4yMzQNCgljNC44MDgtMzguOTE3LDkuMzQ5LTc1LjY3NSw0MC42MjktMTIxLjY4OWwwLDBDNTE3Ljk5OSwxNTQuNTc5LDQ3Ni44MDEsMzQuMTgyLDM5NS4xMjMsNy45OTl6IE00MzQuMDcsMjQyLjQ3NA0KCWMtMzMuOTk2LDUwLjAxLTM5LjA1LDkwLjkxOS00My45MzgsMTMwLjQ4MWMtMy4zOTcsMjcuNDk3LTYuNjA2LDUzLjQ2OS0xOS4wMDksODIuOTIyQzM1Ni40MDcsNDkwLjgxNiwzNDcuODczLDQ5MiwzNDYuNzk0LDQ5Mg0KCWMtMC4wMTIsMC0wLjAyMiwwLTAuMDMyLDBjLTAuMzg1LTAuMDA5LTkuNTg2LTAuNjU1LTIzLjM3NS0zOC4yNzRjLTYuMDItMTYuNDEyLTEwLjA2OS0zNi44MTYtMTMuOTg1LTU2LjU0OA0KCWMtNC4zOTYtMjIuMTUtOC41NDgtNDMuMDczLTE1LjM5Mi01OS40MDRjLTguNzU3LTIwLjg5NS0yMS40ODUtMzEuNDg3LTM3LjgzNi0zMS40ODdjLTAuMDkxLDAtMC4xODQsMC0wLjI3NSwwLjAwMQ0KCWMtMTYuNDE5LDAuMTE1LTI5LjE5NSwxMC43ODktMzcuOTcsMzEuNzI3Yy02Ljg0MSwxNi4zMjItMTAuOTkyLDM3LjE4MS0xNS4zODUsNTkuMjYzYy0zLjkxNSwxOS42NzItNy45NjIsNDAuMDE1LTEzLjk4NCw1Ni40NQ0KCWMtMTMuNzY0LDM3LjUzOC0yMi45ODcsMzguMTg0LTIzLjM3MywzOC4xOTNjLTAuODk2LDAuMDE2LTkuNTMtMC44MDQtMjQuMzcyLTM2LjA0MWMtMTMuMDA3LTMwLjg4OS0xNi4wNzMtNTYuODk5LTE5LjMxOC04NC40MzgNCgljLTQuNTQ3LTM4LjU3OS05LjI0OS03OC40NzEtNDMuNTYxLTEyOC44N0MxNy44OTEsMTU0LjM0MSw1NC4wODUsNDkuMTI3LDEyMi45MjEsMjcuMDQ2YzU5Ljg2LTE5LjE5NSwxMDkuMjYzLDUuNzQsMTI3LjcyNCwxNy4zNTMNCgljMy4yNTMsMi4wNDcsNy4zOTMsMi4wNDgsMTAuNjQ2LDAuMDAxYzE4LjQ2OC0xMS42MSw2Ny44ODMtMzYuNTQzLDEyNy43MjctMTcuMzUzQzQ1OS4yMTcsNDkuNTQ4LDQ5Mi45MDEsMTU1LjkyNCw0MzQuMDcsMjQyLjQ3NHoiDQoJLz4NCjxwYXRoIGQ9Ik00MTAuMzg0LDc1LjExMmMtNC41NjMsMy4xMTItNS43MzgsOS4zMzMtMi42MjUsMTMuODk2YzQuMjM3LDYuMjExLDcuNzM4LDEzLjI4OCwxMC40MDYsMjEuMDMyDQoJYzkuOTY1LDI4LjkyNSw3LjM2NSw2Mi42NzMtNy4xMzQsOTIuNTk0Yy0yLjQwOSw0Ljk3LTAuMzMyLDEwLjk1MSw0LjYzOCwxMy4zNmM0Ljk3MSwyLjQwOSwxMC45NTIsMC4zMzIsMTMuMzYtNC42MzgNCgljMTYuNzg4LTM0LjY0MywxOS43Mi03My45NDUsOC4wNDUtMTA3LjgzYy0zLjI0OC05LjQyOS03LjU1My0xOC4xMDUtMTIuNzk0LTI1Ljc4OEM0MjEuMTY3LDczLjE3NCw0MTQuOTQ2LDcxLjk5OSw0MTAuMzg0LDc1LjExMnoiDQoJLz4NCjxwYXRoIGQ9Ik0yMTkuNjI5LDEzNi43OTdsLTQwLjI1Ny0xMy40MTlsLTEzLjQxOS00MC4yNTdjLTEuMzYxLTQuMDgzLTUuMTgzLTYuODM4LTkuNDg3LTYuODM4cy04LjEyNSwyLjc1NC05LjQ4Nyw2LjgzOA0KCWwtMTMuNDE5LDQwLjI1N2wtNDAuMjU3LDEzLjQxOWMtNC4wODMsMS4zNjEtNi44MzgsNS4xODMtNi44MzgsOS40ODdzMi43NTQsOC4xMjUsNi44MzgsOS40ODdsNDAuMjU3LDEzLjQxOWwxMy40MTksNDAuMjU3DQoJYzEuMzYxLDQuMDgzLDUuMTgzLDYuODM4LDkuNDg3LDYuODM4czguMTI1LTIuNzU0LDkuNDg3LTYuODM4bDEzLjQxOS00MC4yNTdsNDAuMjU3LTEzLjQxOWM0LjA4My0xLjM2MSw2LjgzOC01LjE4Myw2LjgzOC05LjQ4Nw0KCVMyMjMuNzEyLDEzOC4xNTksMjE5LjYyOSwxMzYuNzk3eiBNMTY4LjMwMywxNTEuNzk3Yy0yLjk4NiwwLjk5NS01LjMzLDMuMzM4LTYuMzI1LDYuMzI1bC01LjUxMywxNi41NGwtNS41MTMtMTYuNTQNCgljLTAuOTk1LTIuOTg2LTMuMzM4LTUuMzMtNi4zMjUtNi4zMjVsLTE2LjU0LTUuNTEzbDE2LjU0LTUuNTEzYzIuOTg2LTAuOTk1LDUuMzMtMy4zMzgsNi4zMjUtNi4zMjVsNS41MTMtMTYuNTRsNS41MTMsMTYuNTQNCgljMC45OTUsMi45ODYsMy4zMzgsNS4zMyw2LjMyNSw2LjMyNWwxNi41NCw1LjUxM0wxNjguMzAzLDE1MS43OTd6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
            <div>
              <a class="btn btn-info btn-sm text-justify" data-toggle="modal" data-target="#exampleModalEdit" href="">
                Edit Account
              </a>

            </div>

          </div>


          <div class="col-md-2 my-5 tablinks border-right border-dark">
            <img style="max-width: 50%;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0VENTE1MTsiIGQ9Ik00NjEuNzUsMTQ2aC00MTJjLTIyLjA5LDAtNDAsMTcuOTEtNDAsNDB2MjYwYzAsMjIuMDksMTcuOTEsNDAsNDAsNDBoNDEyYzIyLjA5LDAsNDAtMTcuOTEsNDAtNDANCglWMTg2QzUwMS43NSwxNjMuOTEsNDgzLjg0LDE0Niw0NjEuNzUsMTQ2eiIvPg0KPGc+DQoJPHJlY3QgeD0iNzUuNzUiIHk9IjE0NiIgc3R5bGU9ImZpbGw6I0UzRjJGRjsiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzNDAiLz4NCgk8cmVjdCB4PSIzOTUuNzUiIHk9IjE0NiIgc3R5bGU9ImZpbGw6I0UzRjJGRjsiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzNDAiLz4NCjwvZz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM1NzU1NUM7IiBkPSJNMzc1Ljc1LDc2djcwaC00MFY4NmMwLTExLjA1LTguOTUtMjAtMjAtMjBoLTEyMGMtMTEuMDUsMC0yMCw4Ljk1LTIwLDIwdjYwaC00MFY3Ng0KCWMwLTI3LjYxLDIyLjM5LTUwLDUwLTUwaDE0MEMzNTMuMzYsMjYsMzc1Ljc1LDQ4LjM5LDM3NS43NSw3NnoiLz4NCjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNFM0YyRkY7IiBwb2ludHM9IjM0NS43NSwyODYgMzQ1Ljc1LDM0NiAyODUuNzUsMzQ2IDI4NS43NSw0MDYgMjI1Ljc1LDQwNiAyMjUuNzUsMzQ2IDE2NS43NSwzNDYgMTY1Ljc1LDI4NiANCgkyMjUuNzUsMjg2IDIyNS43NSwyMjYgMjg1Ljc1LDIyNiAyODUuNzUsMjg2ICIvPg0KPHBhdGggZD0iTTM5NiwyMzZjLTUuNTIsMC0xMCw0LjQ4LTEwLDEwczQuNDgsMTAsMTAsMTBzMTAtNC40OCwxMC0xMFM0MDEuNTIsMjM2LDM5NiwyMzZ6Ii8+DQo8cGF0aCBkPSJNMTE2LDIzNmMtNS41MiwwLTEwLDQuNDgtMTAsMTBzNC40OCwxMCwxMCwxMHMxMC00LjQ4LDEwLTEwUzEyMS41MiwyMzYsMTE2LDIzNnoiLz4NCjxwYXRoIGQ9Ik0zNDYsMjc2aC01MHYtNTBjMC01LjUyMi00LjQ3OC0xMC0xMC0xMGgtNjBjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2NTBoLTUwYy01LjUyMiwwLTEwLDQuNDc4LTEwLDEwdjYwDQoJYzAsNS41MjIsNC40NzgsMTAsMTAsMTBoNTB2NTBjMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMGg2MGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwdi01MGg1MGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwdi02MA0KCUMzNTYsMjgwLjQ3OCwzNTEuNTIyLDI3NiwzNDYsMjc2eiBNMzM2LDMzNmgtNTBjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2NTBoLTQwdi01MGMwLTUuNTIyLTQuNDc4LTEwLTEwLTEwaC01MHYtNDBoNTANCgljNS41MjIsMCwxMC00LjQ3OCwxMC0xMHYtNTBoNDB2NTBjMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMGg1MFYzMzZ6Ii8+DQo8cGF0aCBkPSJNNDYyLDEzNmgtNzZWNzZjMC0zMy4wODQtMjYuOTE2LTYwLTYwLTYwSDE4NmMtMzMuMDg0LDAtNjAsMjYuOTE2LTYwLDYwdjYwSDUwYy0yNy41NywwLTUwLDIyLjQzLTUwLDUwdjI2MA0KCWMwLDI3LjU3LDIyLjQzLDUwLDUwLDUwaDQxMmMyNy41NywwLDUwLTIyLjQzLDUwLTUwVjE4NkM1MTIsMTU4LjQzLDQ4OS41NywxMzYsNDYyLDEzNnogTTM5NiwyNzZjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2MTkwSDEyNg0KCVYyODZjMC01LjUyMi00LjQ3OC0xMC0xMC0xMHMtMTAsNC40NzgtMTAsMTB2MTkwSDg2VjE1NmgyMHY1MGMwLDUuNTIyLDQuNDc4LDEwLDEwLDEwczEwLTQuNDc4LDEwLTEwdi01MGgyNjB2NTANCgljMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMHMxMC00LjQ3OCwxMC0xMHYtNTBoMjB2MzIwaC0yMFYyODZDNDA2LDI4MC40NzgsNDAxLjUyMiwyNzYsMzk2LDI3NnogTTMyNiwxMzZIMTg2Vjg2DQoJYzAtNS41MTQsNC40ODYtMTAsMTAtMTBoMTIwYzUuNTE0LDAsMTAsNC40ODYsMTAsMTBWMTM2eiBNMTQ2LDc2YzAtMjIuMDU2LDE3Ljk0NC00MCw0MC00MGgxNDBjMjIuMDU2LDAsNDAsMTcuOTQ0LDQwLDQwdjYwaC0yMFY4Ng0KCWMwLTE2LjU0Mi0xMy40NTgtMzAtMzAtMzBIMTk2Yy0xNi41NDIsMC0zMCwxMy40NTgtMzAsMzB2NTBoLTIwVjc2eiBNMjAsNDQ2VjE4NmMwLTE2LjU0MiwxMy40NTgtMzAsMzAtMzBoMTZ2MzIwSDUwDQoJQzMzLjQ1OCw0NzYsMjAsNDYyLjU0MiwyMCw0NDZ6IE00OTIsNDQ2YzAsMTYuNTQyLTEzLjQ1OCwzMC0zMCwzMGgtMTZWMTU2aDE2YzE2LjU0MiwwLDMwLDEzLjQ1OCwzMCwzMFY0NDZ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />

            <div>
              <a class="btn btn-info btn-sm text-justify" data-toggle="modal" data-target="#exampleModalCenter" href="">
                Set Appointment
              </a>

            </div>

          </div>

          <div class="col-md-3 my-5 tablinks border-dark">
            <img style="max-width: 50%;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggc3R5bGU9ImZpbGw6I0VENTE1MTsiIGQ9Ik00NjEuNzUsMTQ2aC00MTJjLTIyLjA5LDAtNDAsMTcuOTEtNDAsNDB2MjYwYzAsMjIuMDksMTcuOTEsNDAsNDAsNDBoNDEyYzIyLjA5LDAsNDAtMTcuOTEsNDAtNDANCglWMTg2QzUwMS43NSwxNjMuOTEsNDgzLjg0LDE0Niw0NjEuNzUsMTQ2eiIvPg0KPGc+DQoJPHJlY3QgeD0iNzUuNzUiIHk9IjE0NiIgc3R5bGU9ImZpbGw6I0UzRjJGRjsiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzNDAiLz4NCgk8cmVjdCB4PSIzOTUuNzUiIHk9IjE0NiIgc3R5bGU9ImZpbGw6I0UzRjJGRjsiIHdpZHRoPSI0MCIgaGVpZ2h0PSIzNDAiLz4NCjwvZz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM1NzU1NUM7IiBkPSJNMzc1Ljc1LDc2djcwaC00MFY4NmMwLTExLjA1LTguOTUtMjAtMjAtMjBoLTEyMGMtMTEuMDUsMC0yMCw4Ljk1LTIwLDIwdjYwaC00MFY3Ng0KCWMwLTI3LjYxLDIyLjM5LTUwLDUwLTUwaDE0MEMzNTMuMzYsMjYsMzc1Ljc1LDQ4LjM5LDM3NS43NSw3NnoiLz4NCjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNFM0YyRkY7IiBwb2ludHM9IjM0NS43NSwyODYgMzQ1Ljc1LDM0NiAyODUuNzUsMzQ2IDI4NS43NSw0MDYgMjI1Ljc1LDQwNiAyMjUuNzUsMzQ2IDE2NS43NSwzNDYgMTY1Ljc1LDI4NiANCgkyMjUuNzUsMjg2IDIyNS43NSwyMjYgMjg1Ljc1LDIyNiAyODUuNzUsMjg2ICIvPg0KPHBhdGggZD0iTTM5NiwyMzZjLTUuNTIsMC0xMCw0LjQ4LTEwLDEwczQuNDgsMTAsMTAsMTBzMTAtNC40OCwxMC0xMFM0MDEuNTIsMjM2LDM5NiwyMzZ6Ii8+DQo8cGF0aCBkPSJNMTE2LDIzNmMtNS41MiwwLTEwLDQuNDgtMTAsMTBzNC40OCwxMCwxMCwxMHMxMC00LjQ4LDEwLTEwUzEyMS41MiwyMzYsMTE2LDIzNnoiLz4NCjxwYXRoIGQ9Ik0zNDYsMjc2aC01MHYtNTBjMC01LjUyMi00LjQ3OC0xMC0xMC0xMGgtNjBjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2NTBoLTUwYy01LjUyMiwwLTEwLDQuNDc4LTEwLDEwdjYwDQoJYzAsNS41MjIsNC40NzgsMTAsMTAsMTBoNTB2NTBjMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMGg2MGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwdi01MGg1MGM1LjUyMiwwLDEwLTQuNDc4LDEwLTEwdi02MA0KCUMzNTYsMjgwLjQ3OCwzNTEuNTIyLDI3NiwzNDYsMjc2eiBNMzM2LDMzNmgtNTBjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2NTBoLTQwdi01MGMwLTUuNTIyLTQuNDc4LTEwLTEwLTEwaC01MHYtNDBoNTANCgljNS41MjIsMCwxMC00LjQ3OCwxMC0xMHYtNTBoNDB2NTBjMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMGg1MFYzMzZ6Ii8+DQo8cGF0aCBkPSJNNDYyLDEzNmgtNzZWNzZjMC0zMy4wODQtMjYuOTE2LTYwLTYwLTYwSDE4NmMtMzMuMDg0LDAtNjAsMjYuOTE2LTYwLDYwdjYwSDUwYy0yNy41NywwLTUwLDIyLjQzLTUwLDUwdjI2MA0KCWMwLDI3LjU3LDIyLjQzLDUwLDUwLDUwaDQxMmMyNy41NywwLDUwLTIyLjQzLDUwLTUwVjE4NkM1MTIsMTU4LjQzLDQ4OS41NywxMzYsNDYyLDEzNnogTTM5NiwyNzZjLTUuNTIyLDAtMTAsNC40NzgtMTAsMTB2MTkwSDEyNg0KCVYyODZjMC01LjUyMi00LjQ3OC0xMC0xMC0xMHMtMTAsNC40NzgtMTAsMTB2MTkwSDg2VjE1NmgyMHY1MGMwLDUuNTIyLDQuNDc4LDEwLDEwLDEwczEwLTQuNDc4LDEwLTEwdi01MGgyNjB2NTANCgljMCw1LjUyMiw0LjQ3OCwxMCwxMCwxMHMxMC00LjQ3OCwxMC0xMHYtNTBoMjB2MzIwaC0yMFYyODZDNDA2LDI4MC40NzgsNDAxLjUyMiwyNzYsMzk2LDI3NnogTTMyNiwxMzZIMTg2Vjg2DQoJYzAtNS41MTQsNC40ODYtMTAsMTAtMTBoMTIwYzUuNTE0LDAsMTAsNC40ODYsMTAsMTBWMTM2eiBNMTQ2LDc2YzAtMjIuMDU2LDE3Ljk0NC00MCw0MC00MGgxNDBjMjIuMDU2LDAsNDAsMTcuOTQ0LDQwLDQwdjYwaC0yMFY4Ng0KCWMwLTE2LjU0Mi0xMy40NTgtMzAtMzAtMzBIMTk2Yy0xNi41NDIsMC0zMCwxMy40NTgtMzAsMzB2NTBoLTIwVjc2eiBNMjAsNDQ2VjE4NmMwLTE2LjU0MiwxMy40NTgtMzAsMzAtMzBoMTZ2MzIwSDUwDQoJQzMzLjQ1OCw0NzYsMjAsNDYyLjU0MiwyMCw0NDZ6IE00OTIsNDQ2YzAsMTYuNTQyLTEzLjQ1OCwzMC0zMCwzMGgtMTZWMTU2aDE2YzE2LjU0MiwwLDMwLDEzLjQ1OCwzMCwzMFY0NDZ6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />

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
            <div class="modal-body">
              <?php require_once "getnotes.php"; ?>
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
            <div class="modal-body">
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
            <div class="modal-body">
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