<!DOCTYPE html>
<html lang="en-RW">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>My Home Page</title>
        <style type="text/css">
        .hero{
            background-image: url("image/back4.png"),url("image/back.png")!important;
              background-position: right bottom, left top;
              background-repeat: repeat, repeat;
              background-size: cover;
              background-attachment: fixed;
              opacity: 0.7;
        }
@media screen and (max-width: 700px){

.hero{
            background-image: url("image/back5.png"),url("image/back.png")!important;
              background-position: right bottom, left top;
              background-repeat: repeat, repeat;
              background-size: cover;
              background-attachment: fixed;
              opacity: 0.7;
        }
    
}
.dropdown:hover .dropdown-menu{display: block;}
.dropdown-menu a{padding-left: 30px;}
</style>

        <!-- CSS FILES -->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/templatemo-first-portfolio-style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg">
             <img src="image/rel.png" width="100px;" height="70px"  id="logoimgX">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html"><img src="image/b_home.png" width="30px" height="30px" style="padding-bottom: 10px;"> Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="cursor: pointer;" data-toggle="dropdown">LandLord<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li ><a href="#?aaaaa" data-bs-toggle="modal" data-bs-target="#MyAncountModal">My Account</a></li> 
                            <li ><a href="#">Am New Here</a></li>
                            </ul>
                        </li>

                       <li class="nav-item">
                            <a class="nav-link" href="#">Tenant</a>
                        </li>

                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="cursor: pointer;">Sell<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li ><a href="#">My Account</a></li> 
                            <li ><a href="#">Am New Here</a></li>
                            </ul>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="#">Buy</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
         <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#282e3e" fill-opacity="0.8" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
                </section>

        </main>
           <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                                <div class="hero-text" style="margin-right: 5%;">
                                    <h4 class="mb-4 descr">we are real estate Company that is there to connect Tenants with Landlords by publishing there house but we even connect one who want a house and one who want to sell them! For the olmost free services and also we operate in all areas of our country and we have mission to expand to all over the world. Thank You our visitors<br>
                                     <div class="desk"></div><div class="desk"></div><div class="desk"></div><div class="desk"></div><div class="desk">
                                    </h4>


                                           <footer class="site-footer" style="background-color: white;">
                                                  <div class="container" >
                                                      <div class="row">
                                                        <div class="col-lg-12 col-12">
                                                            <div class="copyright-text-wrap">
                                                                    <div style="float: left;display: inline-block;">
                                                                <a href="#" class="btn btn-light" style="color: blue">About Us</a>
                                                                <a href="#" class="btn btn-light" style="color: blue">Contact Us</a>
                                                                <a href="#" class="btn btn-light" style="color: blue"><img src="image/help.png" alt="">Help</a>
                                                            </div>
                                                                <span class="copyright-text">Copyright © 2023 By  <a href="#">My House</a> Company. All rights reserved</span>
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>
                                              </footer>

                                </div>
                        </div>

                    </div>
                </div>
        <div style="position: fixed;bottom: 30px;right: 0;background-color: teal;border-radius: 50%;width: 100px;height: 100px;border: 3px solid #33ab37;padding: 3px;text-align: center;color: white;font-size: 20px;font-weight: bold;z-index: 9999;"><br> Donate Us</div>
   

<!-- THIS IS THE PART OF ALL MODAL ----------------------.......................------------------ -->
   <!-- The Modal 1 LANDLORD WHEN MY ACCOUNT IS CLICKED ..... -->
<div class="modal" id="MyAncountModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h3 class="modal-title">Please Fill This Form To Continue </h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div id="hidandshowlogin">
          <div id="txtHint" style="color: red;"><!-- this is where the error will be displayed like incorrect input--></div>
          <div class="form-floating input-group"><span class="input-group-text"><img src="image/phone.ico" width="40px;"></span>
            <input type="text" required="required" class="form-control" placeholder="Enter Your Phone Number Here ..." id="val" onkeyup="chechinputphone(this.value)"><label for="floatingInput" style="padding-left: 70px;"> &nbsp;&nbsp;Phone Number ...</label><span class="input-group-text"><img src="image/excl.gif" width="20px;" id="loginimg"></span>
          </div><br>
          <div class="form-floating input-group"><span class="input-group-text"><img src="image/password.png" width="40px;"></span>
            <input type="text" required="required" class="form-control" placeholder="Enter Your Password Here ..." id="val1" onkeyup="chechinputpass(this.value)"><label for="floatingInput" style="padding-left: 70px;"> &nbsp;&nbsp;Password ...</label><span class="input-group-text"><img src="image/excl.gif" width="20px;" id="loginimgp"></span>
          </div><br>
          <button type="button" class="form-control btn btn-lg btn-primary" onclick="showCustomer(document.getElementById('val1').value,document.getElementById('val').value);">Log In</button><br><br>
          <button type="button" class="btn btn-dark" onclick="forgotten();">Forgot Password</button><hr>
          If you do not have account:<button type="button" class="btn btn-light signup" onclick="signup()" style="opacity: 1;background-color: lightblue;">Sign Up</button>
        </div><!-- end div show and hide login form -->

        <div id="hidandshowsignup" style="display: none;">
          <div id="txtHintsi" style="color: red;"><!-- this is where the error will be displayed like incorrect input--></div>
          <div class="form-floating">
            <input type="text" required="required" class="form-control" placeholder="Enter Your First Name Here ..." id="fn" onkeyup="chechinput()"><label for="floatingInput">Enter Your First Name Here ...</label>
          </div><br>
          <div class="form-floating">
            <input type="text" required="required" class="form-control" placeholder="Enter Your Last Name Here ..." id="ln" onkeyup="chechinput()"><label for="floatingInput">Enter Your Last Name Here ...</label>
          </div><br>
          <div class="form-floating">
            <input type="text" required="required" class="form-control" placeholder="Enter Your Phone Number Here ..." id="phone" onkeyup="chechinput()"><label for="floatingInput">Enter Your Phone Number Here ...</label>
          </div><br>
                    <div class="form-floating">
            <input type="text" required="required" class="form-control" placeholder="Enter Your E-mail Here ..." id="em" onkeyup="chechinput()"><label for="floatingInput">Enter Your E-mail Here ...</label>
          </div><br>
          <div class="form-floating">
          
            <input type="text" required="required" class="form-control" placeholder="Enter Your Password Here ..." id="pass" onkeyup="chechinput()"><label for="floatingInput">Enter Your Password Here ...</label>
          </div><br><div class="form-floating">
          <input type="text" required="required" class="form-control" placeholder="Re-Write Your Password Here ..." id="pass1" onkeyup="chechinput()"><label for="floatingInput">Re-Write Your Password Here ...</label>
          </div><br>
          <button type="button" class="form-control btn btn-lg btn-primary" onclick="showCustom(document.getElementById('fn').value,document.getElementById('ln').value,document.getElementById('phone').value),document.getElementById('em').value,document.getElementById('pass').value;" id="signupb" disabled>Create Account</button>
          If you Already Have Account:<button type="button" class="btn btn-light" onclick="login()" style="background-color: lightblue;">Log In</button>
        </div>
      </div><!-- end modal body -->
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
  <script type="text/javascript">
      // automatically check Phone Number .........
  function chechinputphone(pn) {
    if (pn == "") {
    return;
  }
  var pas=document.getElementById('val1').value;

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    if (this.responseText=='yes') {
      document.getElementById("loginimg").src="image/right.png";
    }
    else if (this.responseText=='unlocked') {
      window.location = "index.html";
    }
    else{
       document.getElementById("loginimg").src="image/excl.gif";
    }
  }
  if (pas!="") {
  xhttp.open("GET", "testlandlord.php?pn="+pn+"&pas="+pas);
  }
  else{
    xhttp.open("GET", "testlandlord.php?pn="+pn);
  }
  xhttp.send();
  }

      // automatically check Password .........
  function chechinputpass(pa) {
    if (pa == "") {
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    if (this.responseText=='yes') {
      document.getElementById("loginimgp").src="image/right.png";
    }
    else{
       document.getElementById("loginimgp").src="image/excl.gif";
    }
  }
  xhttp.open("GET", "testlandlord.php?pa="+pa);
  xhttp.send();
  }


  function showCustomer(str1,str2) {
  if (str1 == ""||str2 == "") {
    document.getElementById("txtHint").innerHTML = "Please Fill All fields";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    if (this.responseText=='yes') {
      window.location = "index.html";
    }
    if (this.responseText=='no'){
    document.getElementById("txtHint").innerHTML = "User Name Or Password Are Incorrect";
    document.getElementById("val").style="box-shadow: 2px 3px 5px red;";
    document.getElementById("val1").style="box-shadow: 2px 3px 5px red;";
    
    }
  }
  xhttp.open("GET", "testlandlord.php?q="+str1+"&p="+str2);
  xhttp.send();
}
function signup(){
  document.getElementById("hidandshowlogin").style.display='none';
  document.getElementById("hidandshowsignup").style.display='inline';
}
function login(){
  document.getElementById("hidandshowlogin").style.display='inline';
  document.getElementById("hidandshowsignup").style.display='none';
}
function chechinput() {
  var fni=document.getElementById('fn').value;
  var lni=document.getElementById('ln').value;
  var phonei=document.getElementById('phone').value;
  var emi=document.getElementById('em').value;
  var passi=document.getElementById('pass').value;
  var pass1i=document.getElementById('pass1').value;
  if (fni!=""&&lni!=""&&phonei!=""&&emi!=""&&passi!=""&&pass1i!="") {
    if (passi==pass1i) {
     $("#signupb").removeAttr("disabled");
     document.getElementById("txtHintsi").innerHTML = "All fields has filled";
  }
  else{
    document.getElementById("txtHintsi").innerHTML = "Password has not Matched";
  }
}
  else{
    document.getElementById("signupb").disabled='disabled';
    document.getElementById("txtHintsi").innerHTML = "All fields has Not Been filled";
  }}
</script>
</div>
<!-- END OF Modal 1 LANDLORD WHEN MY ACCOUNT IS CLICKED .............. -->

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>














<?php
session_start();
$con=mysqli_connect("localhost","root","","myhouse");
if (isset($_GET['pas'])&&isset($_GET['pn'])) {
echo "unlocked";
  }
if (isset($_GET['q'])&&isset($_GET['p'])) {
$phone=$_GET['q'];
$pass=$_GET['p'];
$sq="SELECT * FROM landlord WHERE phone='$phone' AND password='$pass'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)==0) {
  echo "no";
}
else{
  while ($r=mysqli_fetch_array($query)) {
    $_SESSION['phone']=$r['phone'];
    $_SESSION['password']=$r['password'];
    
  }
  echo "yes";
}
}
if (isset($_GET['pn'])) {
  $pn=$_GET['pn'];
$sq="SELECT * FROM landlord WHERE phone='$pn'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)==0) {
  echo "no";
}
else{
  echo "yes";
}
}
if (isset($_GET['pa'])) {
  $pa=$_GET['pa'];
$sq="SELECT * FROM landlord WHERE password='$pa'";
$query=mysqli_query($con,$sq);
if (mysqli_num_rows($query)==0) {
  echo "no";
}
else{
  echo "yes";
}
}
 ?>
