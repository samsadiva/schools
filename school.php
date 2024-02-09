<!DOCTYPE html>
<html lang="en-RW">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <link rel="shortcut icon" href="image/logofin.png">
        <title>Study Now</title>
        <style type="text/css">
        .hero{
            background-image: url("image/back12.png"),url("image/back.png")!important;
              background-position: right bottom, left top;
              background-repeat: repeat, repeat;
              background-size: cover;
              background-attachment: fixed;
              opacity: 1;
        }
@media screen and (max-width: 700px){

.hero{
            background-image: url("image/black.png"),url("image/back.png")!important;
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
          <div class="container-fluid" style="padding: 5px;background: transparent;background-image: url('image/bg-hero.png');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-position: center;"><div class="row"> <div class="col-md-2"><img src="image/logo.png" width="120px;" height="70px"  style="border-radius: 2px; padding-left: 8px;"></div>
      <div class="col-md-8" style="padding-top: 10px;"><h4>Schools and internships Solution
        <a class="btn btn-square btn-light m-1" href=""><img src="image/phone-icon.png" width="30px;" height="30px"  style="border-radius: 2px; padding-left: 8px;"></a>
                                            <a class="btn btn-square btn-light m-1" href=""><img src="image/twitter.png" width="30px" height="30px"></a>
                                            <a class="btn btn-square btn-light m-1" href=""><img src="image/youtube.png" width="30px" height="30px"></a>
      </h4>

      </div>
                                          
      <div class="col-md-2" style="padding-top: 10px;">
        
                         <a href="#" data-bs-toggle="modal" data-bs-target="#MyAncountModall"><img src="image/user.png" width="60px" height="60px" style="border-radius:50%;border: 5px solid dodgerblue;"></a>
              <div class="modal" id="MyAncountModall" style="z-index:99999">
  <div class="modal-dialog"style="z-index:999999;position: fixed!important;right: 10px!important;margin-right: 0;width: 210px;top:10%;float: right;">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        

        <small>NDATIMANA Samuel</small>
        
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <img src="image/user.png" width="40px" height="40px" style="border-radius:50%;">Update profile<br>
        <input type="file" class="form-control" name="userimg" width="30px" placeholder="update profile" value="update profile">
          <br>
          <button type="button" class="btn btn-danger" onclick="forgotten();">LogOut</button><hr>
          <button type="button" class="btn btn-light signup" onclick="signup()" ><img src="image/setting.png" width="20px" height="20px" style="border-radius:50%;">settings</button>

      </div><!-- end modal body -->
    </div>
  </div>
</div>


      </div> 
    </div>
  </div>
        <nav class="navbar navbar-expand-lg">
             
            <div class="container">
              
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5">
                        <li class="nav-item" style="border-bottom: 5px solid black;border-right: 5px solid black;border-radius: 3px;">
                            <a class="nav-link" href="index.php"><img src="image/b_home.png" width="30px" height="30px" style="padding-bottom: 10px;"> Home</a>
                        </li>
                         <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="cursor: pointer;" data-toggle="dropdown">Schools<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li ><a href="school.php">Nursary</a></li> 
                            <li ><a href="school.php">Primary</a></li>
                            <li ><a href="school.php">Secondary</a></li> 
                            <li ><a href="school.php">University</a></li>
                            <li ><a href="school.php">Master/PHD</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="internship.php">Internships</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="cursor: pointer;" data-toggle="dropdown">Account<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li ><a href="#" data-bs-toggle="modal" data-bs-target="#MyAncountModal">My Account</a></li> 
                            <li ><a href="#" data-bs-toggle="modal" data-bs-target="#MyAncountModal" onclick="signup()">Am New Here</a></li>
                            </ul>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                        </li>
                    </ul>
                </div>



            </div>
        </nav>
         <main>

            <section class="hero d-flex justify-content-center align-items-center" id="section_1">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#282e3e" fill-opacity="0.5" d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
                </section>

        </main>
 

 <div class="container-fluid" style="top: 210px;position: absolute;">
                    <div class="row">
                        <div class="col-md-10 descr" style="border-right: 1px solid rgba(0, 0, 0, 0.5);">
                          <div class="container-fluid">
                            <div class="row" style="background-color: rgb(250, 250, 250);border-radius: 2px;">
                              <div class="col-md-7" style="border-right:1px solid black;">
                                                 <form class="form-inline">
  <!-- Small --><h4>Choose location</h4><img src="image/location1.png" width="60px" height="60px">
  <select name="cars" class="custom-select-sm" style="margin: 10px;width:200px;height: 40px" style="width:100px;height: 30px;">
    <option selected><img src="image/small/Rwanda.png" width="100px" height="60px"> RWANDA</option>
    <option value="volvo">BURUNDI</option>
    <option value="fiat">UGANDA</option>
    <option value="audi">TANZANIYA</option>
  </select>

  <!-- Large -->
  <select name="cars" class="custom-select-lg" style="margin: 10px;width:200px;height: 40px">
    <option selected>Province</option>
    <option value="volvo">Kigali City</option>
    <option value="fiat">Western</option>
    <option value="audi">Eastern</option>
    <option value="fiat">northern</option>
    <option value="audi">Southern</option>
  </select>
  
</form>
                              </div>
                              <div class="col-md-5" style="margin-top: 30px;">
                                <form class="input-group"><input type="text" name="searchin" placeholder="Name of Schools.." class="input-group-text" style="width:240px;height:45px"dropdown><input type="button" name="search" value="Search" class="btn btn-primary"></form>
                              </div>
                            </div>
                          </div>

                    <br>
                                    <div class="desk"><img src="image/black1.png" width="100%" height="80%"> You are able to publish your school easly and fast</div><div class="desk"><img src="image/black.png" width="100%" height="80%"> Your can explore all schools from all corners of country</div><div class="desk"><img src="image/class.png" width="100%" height="80%">bookmark schools to view them</div><div class="desk"><img src="image/out.png" width="100%" height="80%">Direct Contact to negotiate and further description of the schools</div><div class="desk"><img src="image/man.png" width="100%" height="80%">Direct Contact to negotiate and further description of the schools</div>
                                     <div class="desk"><img src="image/run.png" width="100%" height="80%">Direct Contact to negotiate and further description of the schools</div>

                                     <div class="desk"><img src="image/black1.png" width="100%" height="80%"> You are able to publish your school easly and fast</div><div class="desk"><img src="image/black.png" width="100%" height="80%"> Your can explore all schools from all corners of country</div><div class="desk"><img src="image/class.png" width="100%" height="80%">bookmark schools to view them later for easly accessibility</div><div class="desk"><img src="image/out.png" width="100%" height="80%">Direct Contact to negotiate and further description of the schools</div><div class="desk"><img src="image/man.png" width="100%" height="80%">Direct Contact to negotiate and further description of the schools</div>
                                     <div class="desk"><img src="image/run.png" width="100%" height="80%">Direct Contact to negotiate and further description of the schools</div>

                                </div>


                                <div class="col-md-2 descr" style="padding:0;border-radius: 30px;">
                                    <div class="desk1">
                                    <a href="ss.html"><img src="image/ads.png" style="width: 100%;"></a></div><div class="desk1"><img src="image/ads.png" style="width: 100%;"></div>
                                </div>
                                               <footer class="site-footer" style="background-image: url('image/back.PNG');">
                                                  <div class="container" >
                                                    <div class="row"> 
                                                        <div class="col-md-12">
                                                              <div class="copyright-text-wrap">
                                                                    <div style="float: left;display: inline-block;">
                                                                <a href="Faq.php" class="btn btn-light" style="color: blue">FAQ</a>
                                                                <a href="contactus.php" class="btn btn-light" style="color: blue">Contact Us</a>
                                                            </div>


                                                                <span class="copyright-text">Copyright © 2023 By  <a href="#">Study Now</a> Company. All rights reserved</span>
                                                              </div>
                                                        </div>

                                                    </div>
                                                      <div class="row">
                                                    <div class="col-md-8">
                                                              
                                                              <p style="font-size: 20px;"><img src="image/location12.png" width="25px" height="25px"><strong> Address:</strong> Gikondo/KIGALI, <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/small/Rwanda.png" width="25px" height="25px">RWANDA
                                                </p>

    
                                                <p style="font-size: 20px;"><img src="image/phone.ico" width="25px" height="25px"><strong> Cell No:</strong> +250 782154032 </p>
                                               

                               

                                                          </div>
                                                          <div class="col-md-4">
                                                               <p style="font-size: 15px;"><img src="image/whatsapp.png" width="25px" height="25px"><strong> whatsapp:</strong> +250 782154032 </p>
                                                <p style="font-size: 20px;">
                                                    <img src="image/email.png" width="25px" height="25px">
                                                    <strong> Email:</strong> samsadiva@gmail.com
                                                </p>
                                                          </div>


                                                      </div>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                              <a class="facebook-icon" href="#"><img src="image/facebook.png" width="30px" height="30px" style="background-color:white;"></a>
                                        <a class="twitter-icon" href="#"><img src="image/twitter.png" width="30px" height="30px" style="background-color:white;"></a>
                                        <a class="linkedin-icon" href="#"><img src="image/linkedin.png" width="30px" height="30px" ></a>
                                        <a class="tiktok-icon" href="#"><img src="image/tiktok.png" width="30px" height="30px" ></a>
                                        <a class="youtube-icon" href="#"><img src="image/youtube.png" width="30px" height="30px" ></a>
                                                          </div>
                                                      </div>
                                                  </div>
                                              </footer>
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
            <input type="password" required="required" class="form-control" placeholder="Enter Your Password Here ..." id="val1" onkeyup="chechinputpass(this.value)"><label for="floatingInput" style="padding-left: 70px;"> &nbsp;&nbsp;Password ...</label><span class="input-group-text"><img src="image/excl.gif" width="20px;" id="loginimgp"></span>
          </div><input type="checkbox" id="myCheck" onclick="checkToShowPassword()"><label for="myCheck">Check To Show Password </label>
          <br>
          <button type="button" class="form-control btn btn-lg btn-primary" onclick="showCustomer(document.getElementById('val1').value,document.getElementById('val').value);">Log In</button><br><br>
          <button type="button" class="btn btn-dark" onclick="forgotten();">Forgot Password</button><hr>
          If you do not have account:<button type="button" class="btn btn-light signup" onclick="signup()" style="opacity: 1;background-color: lightblue;">Sign Up</button>
        </div><!-- end div show and hide login form -->

        <div id="hidandshowsignup" style="display: none;">
          <div id="txtHintsi" style="color: red;"><!-- this is where the error will be displayed like incorrect input--></div>
          <div class="form-floating">
            <input type="text" required="required" class="form-control" placeholder="Enter First Name.." id="fn" onkeyup="chechinput()"><label for="floatingInput">Enter First Name..</label>
          </div><div id="fnv" style="color: red;"></div>
          <br>
          <div class="form-floating">
            <input type="text" required="required" class="form-control" placeholder="Enter Last Name Here.." id="ln" onkeyup="chechinput()"><label for="floatingInput">Enter Last Name..</label>
          </div><div id="lnv" style="color: red;"></div>
          <br>
          <div class="form-floating">
            <input type="text" required="required" class="form-control" placeholder="Enter Phone Number.." id="phone" onkeyup="chechinput(2)"><label for="floatingInput">Enter Phone Number..</label>
          </div><div id="taken"></div>
          <br>
                    <div class="form-floating" id="emaild">
            <input type="text" required="required" class="form-control" placeholder="Enter E-mail.." id="em" onkeyup="chechinput()"><label for="floatingInput">Enter E-mail..</label>
          </div><div id="emv" style="color: red;"></div>
          <input type="checkbox" id="myChecke" onclick="chechinput()" checked>&nbsp;<label for="myChecke" id="emailt">Un Check If You Don't Have An E-mail</label>
          <br>
          <div class="form-floating">
          
            <input type="text" required="required" class="form-control" placeholder="Enter Password.." id="pass" onkeyup="chechinput()"><label for="floatingInput">Enter Password..</label>
          </div><div id="passv" style="color: red;"></div>
          <br><div id="confirmp" style="color: red"></div><div class="form-floating">
          <input type="text" required="required" class="form-control" placeholder="Re-Write Password.." id="pass1" onkeyup="chechinput()"><label for="floatingInput">Re-Write Password..</label>
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
    // hide and show Password
    function checkToShowPassword() {
  var checkBox = document.getElementById("myCheck");
  var val1 = document.getElementById("val1");
  if (checkBox.checked == true){
    val1.type = "text";
  } else {
    val1.type = "password";
  }
}
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
    else if (this.responseText=='yesyes') {
      window.location = "index1.php";
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
      document.getElementById("loginimgp").src="image/excl.gif";
    return;
  }
  var pn=document.getElementById('val').value;

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    if (this.responseText=='yes') {
      document.getElementById("loginimgp").src="image/unlock.png";
    }
    else if (this.responseText=='yesyes') {
      window.location = "index1.php";
    }
    else{
       document.getElementById("loginimgp").src="image/unlock.png";
    }
  }
  if (pn!="") {
  xhttp.open("GET", "testlandlord.php?pa="+pa+"&pho="+pn);
  }
  else{
    xhttp.open("GET", "testlandlord.php?pa="+pa);
  }
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
      window.location = "index1.php";
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
//when sign up button clicked
function signup(){
  document.getElementById("hidandshowlogin").style.display='none';
  document.getElementById("hidandshowsignup").style.display='inline';
}
//when login button clicked
function login(){
  document.getElementById("hidandshowlogin").style.display='inline';
  document.getElementById("hidandshowsignup").style.display='none';
}
// when input box in sign up form is focused
function chechinput(phone=5) {

    //automatically check if phone have taken at sign up
  var checkBox = document.getElementById("myChecke");
  var val1 = document.getElementById("emaild");
  var emailt = document.getElementById("emailt");
  if (checkBox.checked == false){
    val1.style.visibility = "hidden";
    emailt.innerHTML=" Check If You Have An E-mail";
  } else {
     val1.style.visibility = "visible";
    emailt.innerHTML=" Un Check If You Don't Have Email";
  }
  var full;
  var fni=document.getElementById('fn').value;
  var lni=document.getElementById('ln').value;
  var phonei=document.getElementById('phone').value;
  var emi=document.getElementById('em').value;
  var passi=document.getElementById('pass').value;
  var pass1i=document.getElementById('pass1').value;
  if (fni!=""&&lni!=""&&phonei!=""&&emi!=""&&passi!=""&&pass1i!="") {
    full="completed";
  }else if (fni!=""&&lni!=""&&phonei!=""&&checkBox.checked == false&&passi!=""&&pass1i!="") {
    full="completed";
  }
  else{
    full="notcomplited";
  }
      if (passi!=""&&passi==pass1i) {
     $("#pass1").removeAttr("style");
     document.getElementById("confirmp").innerHTML = "Wow password Matched !!";
     document.getElementById("confirmp").style="color:green";
  }
  else if(passi!=""&&passi!=pass1i){
    document.getElementById("confirmp").style.color="red";
    document.getElementById("confirmp").innerHTML = "Password and Re-Written one must mutch";
    document.getElementById('pass1').style="box-shadow: 1px 2px 2px red;";
  }
  if (full=="completed") {
    document.getElementById("txtHintsi").innerHTML = "";
    if (passi==pass1i) {
     $("#signupb").removeAttr("disabled");
     $("#pass1").removeAttr("style");
     document.getElementById("confirmp").innerHTML = "Wow password Matched !!";
     document.getElementById("confirmp").style="color:green";
  }
  else{
    document.getElementById("signupb").disabled='disabled';
    document.getElementById("confirmp").style.color="red";
    document.getElementById("confirmp").innerHTML = "Password and Re-Written one must mutch";
    document.getElementById('pass1').style="box-shadow: 1px 2px 2px red;";
  }
}
  else{
    document.getElementById("signupb").disabled='disabled';
    document.getElementById("txtHintsi").innerHTML = "All fields has Not Been filled";
  }
  //automatically check if phone have taken at sign up
if (phone==2) {
  var str=document.getElementById('phone').value;
  if (str=="") {
    return;
  }
  var take=document.getElementById("taken");
  const xhttp= new XMLHttpRequest();
  xhttp.onload = function(){
    if (this.responseText=='yes') {
      take.style.color="red";
      take.innerHTML="Phone Number Have Already Taken By Other";
      document.getElementById("signupb").disabled='disabled';
    }
    else{
      take.innerHTML="";
    }
  }
  xhttp.open("GET","testlandlord.php?psi="+str);
  xhttp.send();
}
}
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

