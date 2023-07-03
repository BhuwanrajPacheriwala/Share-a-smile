<?php
   include("config.php");
   session_start();
   if(isset($_POST['donate']))
{     
    $name = $_POST['name'];
    $email = $_POST['email'];
     $pno = $_POST['pno'];
     $orgname = $_POST['orgname'];
     $amount = $_POST['amount'];
     $type=$_POST['type'];
    
  // $check = "select * from register where userid='$userid'";
  // $checkk = mysqli_query($db, $check);
  // if (mysqli_num_rows($checkk)> 0) {
  //   echo "<script>alert('USERID EXISTS');</script>"; 
  // }else{
    $sql = "INSERT INTO donate (name, email, pno, orgname, amount, type)
     VALUES ('$name','$email','$pno','$orgname','$amount','$type')";
    $sqll = mysqli_query($db, $sql);
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('Amount Submited');</script> ";
    } else {
      $m = "Wrong details";
            echo "<script type='text/javascript'>alert('$m');</script>";
    }
    header("location:index2.php");
     mysqli_close($db);
}

    
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Share A Smile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets\css\main.css" rel="stylesheet">

  <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("/uploads/media/default/0001/01/b5edc1bad4dc8c20291c8394527cb2c5b43ee13c.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  
</head>

<body>


  <body>
    <div class="main-block">
      <div class="left-part">
        <i class=""></i>
        <h1>Donation</h1>
        <p></p>
        <div class="btn-group center">
          <img width="300px" src="assets\img\QR.jpg" alt="">
          <!-- <a class="btn-item" href="https://www.w3docs.com/learn-html.html">Learn HTML</a>
          <a class="btn-item" href="https://www.w3docs.com/quiz/#">Select Quiz</a> -->
        </div>
      </div>
      <form action="" method="post">
        
<br>

        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Enter Details here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="email" name="email" placeholder="Email">
          <input type="text" name="pno" placeholder="Phone number">
          <input type="text" name="orgname" placeholder="Organisation Name">
          <input type="number" name="amount" placeholder="Amount in Rs">
          <select>
            <option value="course-type" name="type" selected>Type of Organisation*</option>
            <option value="Adoption" name="type">Adoption</option>
            <option value="Old Age Houses" name="type">Old Age Houses</option>
          </select>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="#"> Poalicy of Share A Smile.</a></span>
        </div>
        <button type="submit" name="donate" href="index2.php">Submit</button>
        <br><br>
      </form>
      <br>&nbsp;<br>&nbsp;<br>
      &nbsp;
      <br>
    </div>





  
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>