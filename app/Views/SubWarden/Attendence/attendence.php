<html>
    <head>
      <!--Title logo-->
        <link rel="icon" href="<?=base_url()?>/assets/images/Header/logo.png">
        <title>Attendence-Subwarden</title>
        <!--Bootstrap Connection-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js">
        </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--crypto-->
    <script src="http://crypto-js.googlecode.com/svn/tags/3.0.2/build/rollups/md5.js"></script>
		<!--CSS Connection-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
 	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/profile.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/chat.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/attendence.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Footer/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/modes.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/common.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/profile.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <!--New-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/jquery-confirm.min.css" rel="stylesheet" type="text/css">
        
        <link href="<?=base_url()?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
        
        
        <script src="<?=base_url()?>/assets/js/formValidation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap_validation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/toastr.min.js"></script>
        <script src="<?=base_url()?>/assets/js/jquery-confirm.min.js"></script>
		<style>
      .headBG{
            background-image: url("<?=base_url()?>/assets/images/Header/att.svg");
          }
         *{
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          }
        .darkbtn{
          position: absolute;
          margin-left: 10px;
        }
        .eyebtn{
          margin-right: 10px;
        }
        .tbl{
          background-color: #e6e6e6;
        }
        .topicPg{
            padding-top: 10%;
            font-family: Clip;
            text-transform: uppercase;
            font-size:4em;
        }
        body{
    background-color: white;
    color: black;
}
			</style>
    </head>
    <body>
      <!--Bring me into top-->
      <button onclick="topFunction()" id="myBtn" title="Go to top">
                <div class="goUpBtn" onmouseover="myFunctionShowWord()" onmouseout="myFunctionHideWord()"><i class="fas fa-arrow-circle-up angleTop"></i>&nbsp;<span class="gotoTopCls" style="display:none">Go Top</span></div>                
                </button>
                
                

                <script type="text/javascript">
                    window.onscroll = function()
                    {
                        scrollFunction()
                    };

                    function scrollFunction(){
                        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("myBtn").style.display = "block";
                        
                        } else {
                        document.getElementById("myBtn").style.display = "none";
                       
                        
                        }
                    }

                    function topFunction() {
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    }
                    
                    
                </script>
      
         <?php
            $session = \Config\Services::session();  
            $session=session();
             $user=$_SESSION["user_id"];
             foreach ($user as $d){
              $us_id=$d['user_id'];
        ?>
          <div class="row headerPart">
        <nav class="navbar navbar-custom navbar-expand-lg fixed-top" style="position:fixed;">
                  <div > 
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                      </button>
                      
                      <div class="row ">
                        <div class="col-md-12 test">
                          <div class="navbar-header headingPage" >
                            <h1 class="navbar-brand d-none d-sm-none d-md-block texthead1" id="texthead1" >HOSTEL MANAGEMENT SYSTEM</h1> 
                            
                            <h1 class="navbar-brand d-block d-sm-block d-md-none textheadTwo" id="texthead2" >HOSTEL MANAGEMENT SYSTEM</h1> 
                          </div>
                        </div>
                      </div> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <a class="navbar-brand abrand" href="#"><img src="<?=base_url()?>/assets/images/Header/logo.png" class="proimg"></a>
                        <div class="row" style="padding-top: 50px;">
                        <ul class="navbar-nav nt">
                         
                          
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRooms'>ROOMS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl active" href='#'>ATTENDENCE</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubChat'>CHATS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/'>HOSTEL FEES</a>
                       </li>
                         
                       <li class="nav-item">
                       
                     </li>
                     </ul>  
                        </div>
                        
                          <img src="<?=base_url()?>/assets/images/Profiles/SubWarden/<?php echo $d['pro_pic'];  ?>"" class="logoT"  href="#" id="dropDownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div class="dropdown-menu proMenu" aria-labelledby="dropDownUser">
                                <a class="dropdown-item active" href='<?php echo base_url(); ?>/SubProf'>MY PROFILE</a>
                                <a class="dropdown-item " href='<?php echo base_url(); ?>/SubExp'>EXPENCES</a>
                                <a class="dropdown-item" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>
                                
                               
                        </div>
                          <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
                              <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
                        </div>
        </nav>
          <div class="container " style="padding-top:5%;padding-left:5%">
            <div class="row" >
              <div class="col-md-3 intro">
              <h3 class="myRoomHead">PROFILE</h3>
            <p>
              Welcome to hostel management system to manage your personal data
            </p>
              </div>
              <div class="col-md-7 headBG" >
                <!--<img src="assets/images/Header/room.webp" class="imgHeader">-->
                
              </div>
            </div>
            <div class="row" style="position:absolute;top:86%;left:29%;">
              <i class="fas fa-arrow-circle-down downBtn" type="button" onclick="functionScrollMe()"></i>
            </div>
          </div><br>
          <svg xmlns="http://www.w3.org/2000/svg" class="svgBG" viewBox="0 0 1440 200">
            <path class="pathsvg" fill="#fff" fill-opacity="1" d="M0,96L80,122.7C160,149,320,203,480,186.7C640,171,800,85,960,48C1120,11,1280,21,1360,26.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
          
          </svg>
          
        </div>
         <!--Mobile view interface-->
         <div class="mobInterface  d-block d-sm-block d-md-none " style="padding-bottom:20%;">
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
                  <div > 
                  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Hostel Management System</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="row">
      <div class="col-md-4">
        <a class="navbar-brand abrand" href="#"><img src="<?=base_url()?>/assets/images/Header/logo.png" class="proimgMob"></a>
      </div>
      <div class="col-md-5" style="position:absolute;font-size:12px;left:17%;top:25%;color:white">
        <div class="row">Faculty of Technology</div>
        <div class="row">University of Ruhuna</div>
      </div>
    </div>
                        <div class="row" >
                        <ul class="nav nav-tabs">
                        <li class="nav-item" >
                         <a class="nav-link nl active" href='#'>MY PROFILE</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRooms'>ROOMS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubAttendance'>ATTENDENCE</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubChat'>CHATS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubComplaints'>COMPLAINTS</a>
                       </li>
                         <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubNotices'>NOTICES</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubRequests'>REQUESTS</a>
                       </li>
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/'>HOSTEL FEES</a>
                       </li>
                       
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/SubExp'>EXPENSES</a>
                       </li>  
                       <li class="nav-item">
                         <a class="nav-link nl" href='<?php echo base_url(); ?>/logout'>LOGOUT</a>
                       </li>  
                       <li class="nav-item">
                       
                     </li>
                     </ul>  
                        </div>
                        
                          
                          <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
                              <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
                        </div>
        </nav>
        </div>
        <?php } ?>
        <script>
          function functionScrollMe(){
            var map = document.getElementById('stuDetails');
            //alert("s");
            map.scrollIntoView({behavior: "smooth"});
          }
        //navbar
            $(function () {
              $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
              });
            }); 
        </script>
   
        
        <script>
          function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
          }
          function myFunctionEye() {
            var element = document.body;
            element.classList.toggle("read_mode");
          }
          function myFunctionS(){
              var input = document.getElementById("myInput").value;
              //alert(input);
              $.ajax({
                  url:"SubWarden_Attendance/searchStudent",
                  type:"POST",
                data:{
                  input:input
                },
                success:function(data){
                    //alert(data);
                    $('#tableBody').html(data);
                },
                error: function (data) {
                    alert("Something went wrong");
                }
                  
              });
              $.ajax({
                  url:"SubWarden_Attendance/studentStatus",
                  type:"POST",
                data:{
                  input:input
                },
                success:function(data){
                    //alert(data);
                    $('#status').html(data);
                },
                error: function (data) {
                    alert("Something went wrong");
                }
                  
              });
          }
          </script>
        <div class="container" id="stuDetails" >
            <div class="row" style="padding-top:5%;">
                <div class="col-md-4 text-center searchArea">
                    <h4 style="padding-top:5%;">SERACH BY STUDENT</h4>
                    <form>
                        <input type="text" class="form-control" placeholder="Enter Student ID..." id="myInput" onkeyup="myFunctionS()">
                    </form>
                    <div class="row">
                        <div class="col-md-12 text-center " style="padding:5% 5% 5% 5%" id="status"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <table style="width:100%;" class="table table-hover" id="tblMed">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Entry Date</th>
                                <th scope="col">Entry Time</th>
                                <th scope="col">Exit Date</th>
                                <th scope="col">Exit Time</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody"></tbody>
                    </table>
                </div>
            </div>
            
            
        </div>
        <div class="footer topFooter" style="margin-top:10%;">
            <div class="row">
              <div class="container">
                <div class="row">
                <div class="col-md-3">
                  <h3>About</h3>
                  <p>This is the system for the hostel management for the faculty of technology, University of Ruhuna</p>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-2">
                <h3>Useful Links</h3>
                <div><a href="" class="link">TECMIS</a></div>
                <div><a href="" class="link">TECLMS</a></div>
                <div><a href="" class="link">TECWEB</a></div>
                <div><a href="" class="link">Faculty of Technology</a></div>
                <div><a href="" class="link">University of Ruhuna</a></div>
                </div>
                <div class="col-md-3">
                <img src="<?=base_url()?>/assets/images/Header/logo.png" class="logoT">

                </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="fixedFooter">
              FACULTY OF TECHNNOLOGY - UNIVERSITY OF RUHUNA
          </footer>
    </body>
</html>