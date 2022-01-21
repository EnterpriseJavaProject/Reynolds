
<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<link rel="stylesheet" href="css/style.css">
<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">







<span id="clock"></span>




<script>


var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=12)
dn="PM"
if (hours>12){
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate="<big><font color='blue' face='Arial'><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
+"</b></font></big>"
if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}

</script>







<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h5><big> ALL MEMBERS DASHBOARD</big></h5>

    <form action="#" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
    </form>
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>



<div class="row">

<!---------------ADMIN DASHBOARD-------->
          <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total registered Members</div>
                      <div class="col-auto">
                      <a href="#">
                              <div class="text-center fas fa-users fa-2x text-warning-300"></div>
                              </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">


              <h4> Total Registered Members: 210



                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>





<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Male Members</div>
                      <div class="col-auto">
                      <a href="#">
                    <div class="text-center fas fa-users fa-2x text-success-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

      <h4> Total Male Members: 100

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>









<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Female Members</div>
                      <div class="col-auto">
                      <a href="#">
                    <div class="text-center fas fa-users fa-2x text-danger-300"></div>
                    </a>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

         <h4> Total Female Members: 110

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>





<!---------------ADMIN DASHBOARD-------->
<div class="col-xl-4 col-md-6 mb-4" hidden="true">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Registered Admins</div>
                      <div class="col-auto">
                    <div class="text-center fas fa-users fa-2x text-primary-300"></div>
                    </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">

                      <?php
                                  $connection = mysqli_connect("localhost","root","","assemblies_of_God");


                     // $connection = mysqli_connect("localhost","root","","mobile_app");
                      // $connection = mysqli_connect("sql206.ezyro.com","ezyro_29068185","mc3a3pix","ezyro_29068185_apply");
                     // $connection = mysqli_connect("sql205.unaux.com","unaux_28779433","90p9kz92","unaux_28779433_aiti_student_results");
                      $query = "SELECT id from members where tithe >= 1";
                      $query_run = mysqli_query($connection, $query);

                      $row = mysqli_num_rows($query_run);

                      echo '<h4>Total Tithe Paid: '.$row.'</h4>';

                      ?>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
</div>



</div>





</div>












<br><br>







<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>



          <form action="backEnd.php" method="post" enctype="multipart/form-data">

<div class="modal-body">

<div class="row">
    <div class="col">

         <div class="form-group">
             <label>FULL NAME</label>
            <input type="text" name="username" id="username" class="form-control"  placeholder="Full Name" required="required">
             <span id="username_error_message" style="color:red;"></span>
         </div>
    </div>


    <div class="col">	
        <div class="form-group">

        <label>GENDER</label> 
        <select name="gender" class="form-control" id="gender" required="require">
            <option>Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>	

        </div>
    </div>

</div>	




    <div class="form-group">

<label>EMAIL</label>
     <input type="email" name="email" id="place_of_work" class="form-control"  placeholder="Email" required>
            <span id="place_of_work_error_message" style="color:red;"></span>

    </div>


<div class="row">
<div class="col">
<div class="form-group">
<label>PHONE NUMBER</label>	
            <input  type="number" name="phone" id="" class="form-control" placeholder="0*************">
            <span class="error_phone" style="color: red;"></span><span id="phone_error_message" style="color: red;"></span>
</div>
</div>	


<div class="col">
<div class="form-group">

<label>DATE OF BIRTH</label> 
            <input  type="date" name="dob" class="form-control" id="year_baptised" placeholder="22-11-2010">
            <!-- <span id="error_year_baptised" id="date_of_birth_error_message" style="color:red;"></span> -->

</div>

</div>
</div>










    <div class="form-group">
<label>RESIDENCE</label>
<input type="text" name="residence" id="residence" class="form-control"   placeholder="Enter Residence">
            <!-- <span id="residence_error_message" style="color:red;"></span> -->
    </div>








            <div class="form-group">
               <label> ADD IMAGE  </label>
                <input type="file" name="faculty_image" id="faculty_image" class="form-control">

            </div>











<!-- 
    <div class="form-group">
    <label>Tithe</label>	
    <input type="text" name="tithe" id="tithe" class="form-control"  placeholder="Tithe" required>
            <span id="tithe_error_message" style="color:red;"></span>
        </div> -->



<input type="hidden" name="tithe" value="0">


<input type="hidden" name="usertype" value="member">

</div>




    <div class="modal-footer">
        <button type="submit" name="register_btn" onclick="return validated()"  class="btn btn-primary">Add</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</div>

</form>
        </div>
    </div>
</div>





<style>


h4{
    color: #3060f0;
}



</style>





<div class="container-fluid">

<!----DataTales Examples-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
        </h6>
    </div>








    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">

        <!-- <form action="try.php" method="POST">
                <button type="submit" name="delete_multiple_register_atebubu/amantin_data" class="btn btn-danger">Delete Multiple Data</button>
            </form> -->


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
                Add New Member
            </button>
        </h6>
    </div>




        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header text-center py-3">
          <h6 class="m-0 font-weight-bold text-primary">ALL MEMBERS DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","assemblies_of_God");

            $query = "SELECT * FROM `members` GROUP by username ORDER by username;";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>

                        <th>Full Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Residence</th>
                        <th>Date of Birth</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                if (mysqli_num_rows($query_run) > 0)
                 {
                    while ($row = mysqli_fetch_assoc($query_run))
                     {
                ?>
                      


                    <?php
                    }

                 }
                 else
                 {
                     echo "No Record Found";
                 }

                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

 


>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>



