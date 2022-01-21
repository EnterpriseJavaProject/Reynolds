<?php
session_start(); 
include('includes/header.php');
?>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f2335702-9774-4b1c-b0da-c92f58fbccc6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<!-- <link rel="stylesheet" href="css/style.css"> -->

<style>
  .social-icons{
    margin: 30px auto;
    text-align: center;
}
.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
}


.heading_5{
    font-size: 40px;
}


.eye_visibility{
   		position: absolute;
   		right: 80px;
   		transform: translate(0, -50%);
   		top: 67%;
   		cursor: pointer;
   
   }
   .fa {
   font-size: 30px;
   color: black;
   }
</style>

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-12">

            <div class="p-5">
            <a href="index.php"><img src="images/back.png" width="30px" height="30px"></a>

              <div class="text-center">
              <img src="images/logo.png" alt="" width="200px" height="80px">
              <br><br>
                <h1 class="h4 text-gray-900 mb-4">MEMBER LOGIN</h1>
              </div>


              <div class="social-icons">
                    <img src="images/fb1.png">
                    <img src="images/google1.png">
                    <img src="images/twitter.jpg">
                    <!-- <img src="images/whatsapp icon.jpg"> -->
                    <!-- <img src="images/instagram2.jpeg"> -->
                </div>




              <form class="user" action="members_final_info.php" method="POST">

            <div class="form-group">
            <label>FULL NAME</label>
            <input type="text" name="username" id="name" class="form-control form-control-user" autocomplete="off" placeholder="Enter Full Name" required="required">				 
             <!-- <span id="name_error_message" style="color:red;"></span> -->
                </div>
				




				<div class="form-group">
        <label>PASSWORD</label>
        <input type="text" name="password"  class="form-control form-control-user" autocomplete="off" placeholder="Enter Password" required="required">
        <!-- <span id="phone_error_message" style="color:red;"></span> -->

                </div>





<button type="submit" name="login_btn" onclick="return validate()" class="btn btn-primary text-light text-center btn-outline-success btn-user btn-block">Login</button>



<!-- <button type="submit" name="login_btn" onclick="return validate()" class="btn btn-primary text-light text-center btn-outline-success btn-user btn-block">SEARCH INFO</button> -->
                <hr>
              <i style="color:black;font-size:16px;">If you are an Admin?</i>  <a href="admin_login.php" style="float:right; color:black; ">Login here</a>

                <!-- <p class="text-center">Register for a course? <a href="Select_Course.php">Register Now!</a></p>

                <p class="text-center">Check your Results? <a href="check_results.php">Check Now!</a></p>
                 -->
            </form>
             
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>





<?php
include('includes/main_scripts.php');
?>





<script>
var state = false;

 function toggle(){
	 
	 if(state){
		 document.getElementById(
				 "password").
				 setAttribute("type",
						 "password");
		 document.getElementById(
				 "eye").style.color='#7a797e';
		 state = false;
	 }
	 
	 else{
		 document.getElementById(
		 "password").
		 setAttribute("type",
				 "text");
 		 document.getElementById(
		 "eye").style.color='#5887ef';
 		 state = true;
	 }
 }

</script>



<script>

function validate(){
	
	var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
	
	
	var nametype = /^[A-Z a-z]+$/;
    var emailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	


	
	 if (nametype.test(name) == false){
        document.getElementById("name_error_message").innerHTML="** Only Letters are required";
        return false;
    }



    else if (isNaN(phone)){
		document.getElementById("phone_error_message").innerHTML="** Phone Number must be only digits";
        return false;
	}
	else if (phone.length<10){
		document.getElementById("phone_error_message").innerHTML="** Phone Number must be 10 digits";
        return false;
	}
	
	else if (phone.length>10){
		document.getElementById("phone_error_message").innerHTML="** Phone Number must be 10 digits";
        return false;
	}

	else if ((phone.charAt(0) != 0)){
		document.getElementById("phone_error_message").innerHTML="** Phone Number must begin with 0";
        return false;
	}
	
}
</script>
