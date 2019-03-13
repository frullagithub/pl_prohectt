<!DOCTYPE html>
<html lang="en">

<head>

   
    <title>Delicious - Food Blog Template | Home</title>
</head>
<style type="text/css">


body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

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









.contact-form-area .form-control {
  height: 52px;
  width: 60%;
  background-color: #f3f5f8;
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
 height: 52px;
  width: 60%;
    display: inline-block;
    
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
.row{
 
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
 

           

<h2>Checkout Form for Receipe book</h2>
<p  style="background-color:#808080; max-width: 100%; padding: 53% height: 90px;text-align: center;">Money will not be refunded...after purchasing the book from online...once ordered is ordered..!!!</p>


<div class="row" style="background-color:#800080">
  <div class="col-75">
    <div class="container">
      <form>
      
        <div class="row">
          <div><p></p></div>
            <div><p></p></div>
              <div><p></p></div>
                <div><p></p></div>

          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname" placeholder="Frulla Rashika Mary" required="">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="frulla.18@gmail.com" required="">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="adr" placeholder="542 W. 15th Street" required="">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="chennai" required="">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="tamil nadu" required="">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="60045" required="">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="Frulla Rashika Mary" required="">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="cardnumber" name="cardnumber" placeholder="1111-2222-3333-4444" required="">
            <label for="expmonth">Exp Month</label>
           
            
         <group id="expmonth" name="expmonth" placeholder="January">  
<select style="width: 100%;
margin-bottom: 20px;
padding: 12px;
border: 1px solid #ccc;
border-radius: 3px;">
  <option value="January">January</option>
  <option value="Feburary">Feburary</option>
  <option value="March">March</option>
  <option value="April">April</option>
    <option value="May">May</option>
  <option value="June">June</option>
  <option value="July">July</option>
  <option value="August">August</option>
    <option value="september">september</option>
  <option value="October">October</option>
  <option value="November">November</option>
  <option value="December">December</option>
</select>
         </group>  
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2025" required="">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required="">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
      
        <input type="submit" value="Continue to checkout" name="abtn" class="abtn" id="abtn" onclick="myFunction()">
      <script>

  function myFunction() {
  var txt;
  if (confirm("Confirm your Order!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
 
</script> 


      </form>




<?php

if(isset($_GET["abtn"]))
{


    $conn = mysqli_connect("localhost","root","","fru");
    $name=$_GET['fname'];
    $email=$_GET['email'];
    $adr=$_GET['adr'];
    $city=$_GET['city'];
    $state=$_GET['state'];
    $zip=$_GET['zip'];
    $cardname=$_GET['cardname'];
    $cardnumber=$_GET['cardnumber'];
    $expmonth=$_GET['expmonth'];
    $expyear=$_GET['expyear'];
    $cvv=$_GET['cvv'];
  
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
    $query ="INSERT INTO book(fullname,email,address,city,state,zip,nameofcard,creditno,exmonth,exyear,cvv) VALUES ('$name','$email','$adr','$city','$state','$zip','$cardname','$cardnumber','$expmonth','$expyear','$cvv')";
    mysqli_query($conn,$query);
        echo ' Successfully ordered books';
      }
?>








    </div>
  </div>

  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Self Cook</a> <span class="price">Rs.330</span></p>
    
      <hr>
      <p>Total <span class="price" style="color:black"><b>Rs.330/-</b></span></p>
    </div>
      <div class="col-25">
        <p style="height: 30%"><img src="img/recipe_bookcover.png" padding="left" width="100%" height="50%"></p>
            <div class="container"><P>Author:Frulla J
    release date :01/11/2018  </P>
  </div>
 
        

  </div>
</div>
</div>






<?php

if(isset($_GET["aabtn"]))
{


    $conn = mysqli_connect("localhost","root","","fru");
    $name=$_GET['name'];
      $email=$_GET['email'];
        $Password=$_GET['psw'];
          $CPassword=$_GET['cpsw'];
if(!$conn)
{
    die ('could not connect'.mysql_error());
}
$query ="INSERT INTO reg(name,email,password,cpassword)
                               VALUES ('$name',$email,'$Password',$'CPassword')";
    mysqli_query($conn,$query);

        echo 'Registered Successfully came.....please!!!!';
      }
?>


    <!-- ##### Contact Form Area End ##### -->
<div><p></p></div>
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

           function check_validation3(){  
            var aname=document.getElementById('name');
            var aemail=document.getElementById('email');
            var asub=document.getElementById('password');
            var amessage=document.getElementById('cpassword');
       
                 
               
            //document.getElementById("err2").innerHTML="";  
               
             if(aname.validity.valueMissing)
              {
                  document.getElementById("e1").innerHTML=aname.validationMessage;
              }   
              else if(aname.validity.patternMismatch){
                  //console.log("wrong");
               document.getElementById("e1").innerHTML="Invalid Name";   
              }
              else{
                  //console.log("right");
                   document.getElementById("e1").innerHTML=" ";   
              }
               
               
                             
             if(aemail.checkValidity)
              {
                  console.log("required");
                  document.getElementById("e2").innerHTML=acity.validationMessage;
              }
            else
              {
                  console.log("right");
                  document.getElementById("e2").innerHTML=" ";
              }
               
                                
           
               
               
            if(asub.checkValidity)
              {
                  console.log("required");
                  document.getElementById("e4").innerHTML=aser.validationMessage;
              }

             if(amessage.checkValidity)
              {
                  console.log("required");
                  document.getElementById("e4").innerHTML=" ";
              }
               
              
               
               

                return true;
           
           }
</script> 


