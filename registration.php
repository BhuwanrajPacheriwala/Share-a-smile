<?php
   include("config.php");
   session_start();
   if(isset($_POST['register']))
{     
    $userid = $_POST['userid'];
    $pass = $_POST['pass'];
     $name = $_POST['name'];
     $age = $_POST['age'];
     $phno = $_POST['phno'];
     $country=$_POST['country'];
    $gender = $_POST['gender'];
  $check = "select * from register where userid='$userid'";
  $checkk = mysqli_query($db, $check);
  if (mysqli_num_rows($checkk)> 0) {
    echo "<script>alert('USERID EXISTS');</script>"; 
  }else{
    $sql = "INSERT INTO register (userid,pass,name,age,phno,country,gender)
     VALUES ('$userid','$pass','$name','$age','$phno','$country','$gender')";
    $sqll = mysqli_query($db, $sql);
    $sql = "INSERT INTO login(user,pass) values ('$userid','$pass')";
    if (mysqli_query($db, $sql)) {
      echo "<script>alert('Sign-up sccessful');</script> ";
    } else {
      $m = "Wrong details";
            echo "<script type='text/javascript'>alert('$m');</script>";
    }
  }
     mysqli_close($db);
}
if(isset($_POST['login'])) {
      
      
  $myusername = mysqli_real_escape_string($db,$_POST['userid']);
  $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
  
  $sql = "SELECT user FROM login WHERE user = '$myusername' and pass = '$mypassword'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  
  $count = mysqli_num_rows($result);
  
  

  if($count == 1) {
    
     $_SESSION['login_user'] = $myusername;
     
     header("location:index2.php");
  }else {
    echo '<script>alert("wrong password")</script>';
  }
}
?>
<!DOCTYPE html>
<body>
<div class="lp">
      <img src="" id="lo" height="">
</div>
  <section>
  
<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >
  <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
   <div class="cube"></div>
   <div class="cube"></div>
    <div class="container">

      <div class="user signinBx">
        <div class="imgBx"><img src="assets/img/about-2.jpg" alt="" /></div>
        <div class="formBx">
          <form method="post">
            <h2>Sign In</h2>
            <input type="text" name="userid" placeholder="Username" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="submit" name="login" value="Login" />
            <p class="signup">
              Don't have an account ?
              <a href="#" onclick="toggleForm();">Sign Up.</a>
            </p>
            <div>
            <button><a href="index.html">Home</a></button>
</div>
          </form>
        </div>
      </div>
      <div class="user signupBx">
        <div class="formBx">
          <form method="post">
            <h2>Create an account</h2>
            <input type="text" name="name" placeholder="Full name" required>
            <input type="text" name="age" placeholder="Age" required>
            <input type="text" name="country" placeholder="Country" required >
            <input type="text" name="gender" placeholder="Gender(m/f/non binary)" required >
            <input type="text" name="phno" placeholder="Phone number(+91)" required >
            <input type="text" name="userid" placeholder="userid" required>
            <input type="password" name="pass" placeholder="Create Password" required >
            <input type="submit" name="register" value="Sign Up" />
            <p class="signup">
              Already have an account ?
              <a href="#" onclick="toggleForm();">Sign in.</a>
            </p>
            
          </form>
        </div>
        <div class="imgBx"><img src="assets/img/2.jpg" alt="" /></div>
      </div>
    </div>
  </section>
  <style>
    

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}

section {
  position: relative;
  min-height: 90vh;
  background-color: black;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

section .container {
  position: relative;
  width: 800px;
  height: 500px;
  background: #fff;

  overflow: hidden;
}

section .container .user {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: flex;
}

section .container .user .imgBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #ff0;
  transition: 0.5s;
}

section .container .user .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

section .container .user .formBx {
  position: relative;
  width: 50%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
  transition: 0.5s;
}

section .container .user .formBx form h2 {
  font-size: 18px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  width: 100%;
  margin-top:10px;
  margin-bottom: 0px;
  color: #555;
}

section .container .user .formBx form input {
  position: relative;
  width: 100%;
  padding: 5px;
  background: #f5f5f5;
  color: #333;
  border: none;
  outline: none;
  box-shadow: none;
  margin: 8px 0;
  font-size: 14px;
  letter-spacing: 1px;
  font-weight: 300;
}

section .container .user .formBx form input[type='submit'] {
  max-width: 100px;
  background: #677eff;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.5s;
}

section .container .user .formBx form .signup {
  position: relative;
  margin-top: 20px;
  font-size: 12px;
  letter-spacing: 1px;
  color: #555;
  text-transform: uppercase;
  font-weight: 300;

}

section .container .user .formBx form .signup a {
  font-weight: 600;
  text-decoration: none;
  color: #677eff;
}

section .container .signupBx {
  pointer-events: none;
}

section .container.active .signupBx {
  pointer-events: initial;
}

section .container .signupBx .formBx {
  left: 100%;
}

section .container.active .signupBx .formBx {
  left: 0;
}

section .container .signupBx .imgBx {
  left: -100%;
}

section .container.active .signupBx .imgBx {
  left: 0%;
}

section .container .signinBx .formBx {
  left: 0%;
}

section .container.active .signinBx .formBx {
  left: 100%;
}

section .container .signinBx .imgBx {
  left: 0%;
}

section .container.active .signinBx .imgBx {
  left: -100%;
}

@media (max-width: 991px) {
  section .container {
    max-width: 400px;
  }

  section .container .imgBx {
    display: none;
  }

  section .container .user .formBx {
    width: 100%;
  }
}
.cube {
  margin:3% ;
  position: absolute;
  top: 70vh;
  left: 40vw;
  width: 10px;
  height: 10px;
  border: solid 1px #ebbcff24;
  transform-origin: top left;
  transform: scale(0) rotate(0deg) translate(-50%, -50%);
  animation: cube 12s ease-in forwards infinite;
}
.cube:nth-child(2n) {
  border-color: rgba(188, 188, 246, 0.167) ;
}
.cube:nth-child(2) {
  animation-delay: 2s;
  left: 20vw;
  top: 35vh;
  bottom: 15vh;
}
.cube:nth-child(3) {
  animation-delay: 2s;
  left: 70vw;
  top: 40vh;
  
}
.cube:nth-child(4) {
  animation-delay: 2s;
  left: 55vw;
  top:20vh;
}
.cube:nth-child(5) {
  animation-delay: 8s;
  left: 10vw;
  top: 30vh;
}
.cube:nth-child(6) {
  animation-delay: 10s;
  left: 40vw;
  top: 15vh;
}
.cube:nth-child(7) {
  animation-delay: 10s;
  left:80vw;
 bottom: 100vh;
}
@keyframes Gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes cube {
  from {
    transform: scale(0) rotate(0deg) translate(-50%, -50%);
    opacity: 1;
  }
  to {
    transform: scale(20) rotate(960deg) translate(-50%, -50%);
    opacity: 0;
  }
}
#lo{
  width:250px;
}
.lp{
  background-color:black;
}

    </style>
    <script>
        const toggleForm = () => {
  const container = document.querySelector('.container');
  container.classList.toggle('active');
};
        </script>
</body>