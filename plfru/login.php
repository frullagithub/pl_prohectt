<!DOCTYPE html>
<html lang="en">



<head>

   
    <title>Delicious - Food Blog Template | Home</title>
</head>
<style type="text/css">


  * {
    box-sizing: border-box
  }
body {
  font-family: Verdana, sans-serif; margin:0
}
.mySlides {
  display: none
}
img {
  vertical-align: middle;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:green;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color:black;
}
 .bg-img
  {
    position: relative;
  z-index: 10;
  width:95%;
    height: 320px;
  
  margin-left: 4%;
  margin-right: 4%;
  background: url(img/r3.jpg) no-repeat 0-205px;

  }
 .text-center
  {
   color:  #9b9b9b;
  }



.row{
  background-color: rgb(180, 180, 180);
}





.contact-form-area .form-control {
  height: 52px;
  width: 50%;

  font-size: 12px;
  font-style: italic;
  margin-bottom: 15px;
  border: none;
  border-left: 3px solid #f3f5f8;
  border-radius: 0;
  padding: 15px 30px;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms; }
  .contact-form-area .form-control:focus {
    border-left: 3px solid #40ba37;
    box-shadow: none; }
.contact-form-area textarea.form-control {
  height: 200px;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms; }




.delicious-btn {

    display: inline-block;
    height: 52px;
  width: 50%;
    color: #ffffff;
    border: none;
        border-left-color: currentcolor;
        border-left-style: none;
        border-left-width: medium;
    border-left: 3px solid #1c8314;
    border-radius: 0;
    padding: 0 30px;
    font-size: 16px;
    line-height: 58px;
    font-weight: 600;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    text-transform: capitalize;
    background-color: #40ba37;


.single-contact-information {
  position: relative;
  z-index: 1; }

  .single-contact-information h6 {
    font-size: 14px;
    border-bottom: 2px solid #40ba37;
    display: inline-block;
    color: #40ba37; }

.grp
{
  color: #ffffff;


}

</style>
<body>
    <a class="nav-brand" href="fru.html"><img src="img/core-img/logo.png" alt=""></a>
  <div></div>
   <ul class="ul">
                                    <li class="nav-brand"><a href="fru.html">Home</a></li>
                                
                                    <li><a href="aboutus.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
  <div><br></div>
  <div><br></div>
   

            <div class="row">
              <div><br></div>
                 <div><br></div>
                    <div><br></div>
                <div class="col-12">
                    <div class="contact-form-area">
                        <form >
                            <div class="row" align="center">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="UserName" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="Password" class="form-control" name="psw" id="psw" placeholder="Password" required>
                                </div>
                               
                                <div class="col-12 text-center">
                                    <button class="btn delicious-btn mt-30" type="submit" name="abtn" id="abtn">Login</button>
                                  </div>
                                  <div>
                                   <u> <a style="color: rgb(0, 0, 255)" href="register.php">SignIn....as new user</a></u>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->


<?php

if(isset($_GET["abtn"]))
{


    $conn = mysqli_connect("localhost","root","","fru");
    $name=$_GET['name'];
      $Password=$_GET['psw'];
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $query ="INSERT INTO login(name,password) VALUES ('$name','$Password')";
    mysqli_query($conn,$query);
        echo ' Successfully yeppa vandhuchu';
      }

      
?>



 <footer class="footer-area">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                    <!-- Footer Social Info -->
                   
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 


<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html> 


  <script>
     var btn3=document.getElementById('abtn');
          btn3.onclick=function(e){
              check_validation3();
          }

if(isset($_POST["name"], $_POST["password"])) 
        {     

            $name = $_POST["name"]; 
            $password = $_POST["password"]; 

            $result1 = mysql_query("SELECT password FROM login WHERE name = '".$name."'");
            $result2 = mysql_query("SELECT username FROM login WHERE password = '".$password."'");

            if($name == $result2 && $password == $result1) 
            { 
                $_SESSION["logged_in"] = true; 
                $_SESSION["naam"] = $name; 
            }
            else
            {
                echo'The username or password are incorrect!';
            }
    }




           function check_validation3(){  
            var aname=document.getElementById('name');
            var aemail=document.getElementById('email');
          
                 
               
            //document.getElementById("err2").innerHTML="";  
               
             if(aname.validity.valueMissing)
              {
                  document.getElementById("e1").innerHTML=aname.validationMessage;
              }   
              else if(aname.validity.patternMismatch){
                  //console.log("wrong");-
               document.getElementById("e1").innerHTML="Invalid Name";   
              }
              else{
                  //console.log("right");
                   document.getElementById("e1").innerHTML=" ";   
              }
               
               
                             
        
               
                                
             if(aemail.checkValidity)
              {
                  console.log("required");
                  document.getElementById("e3").innerHTML=aadd.validationMessage;
              }
            else
              {
                  console.log("required");
                  document.getElementById("e3").innerHTML=" ";
              }
               
           
               

                return true;
           
           }
</script> 


