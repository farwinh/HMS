<html>
<head>
<title>Student Request</title>
 <!--Title logo-->
 <link rel="icon" href="<?=base_url()?>/assets/images/Header/logo.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Footer/style.css">
        <!--Bootstrap Connection-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
		 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js">
        </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<!--CSS Connection-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
 	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/profile.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Student/complaint_style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Student/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Student/request.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/modes.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/common.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/chat.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/profile.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <!--New-->
        
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
        .topic{
				padding-top:15%;
			}
      .proimg2{
    width: 8%;
    border-radius: 50%;
    position: relative;
    
}
.nt{
  position: absolute;
  margin-left:15%;
}

.button {
  background-color: #006666; /* Green */
  border: none;
  color: white;
  padding: 6px 150px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.button2:hover {
  box-shadow: 0 12px 16px 0 rgb(0, 102, 102),0 17px 50px 0 rgb(0, 179, 179);
}


      </style>
    </head>
    <body>
       
        
    <?php
            $session = \Config\Services::session();  
            $session=session();
             $user=$_SESSION["user_id"];
             foreach ($user as $d){
              
        ?>
        
        <nav class="navbar navbar-custom navbar-expand-lg fixed-top">
                    <div> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                   <!-- <img src="<?=base_url()?>/assets/images/Header/logo.png" class="imglogo">  -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                       
                         <a class="navbar-brand" href="#"><img src="<?=base_url()?>/assets/images/Profiles/Student/<?php echo $d['pro_pic']; ?>" class="proimg2"></a>
                        <ul class="navbar-nav p">
                            <li class="nav-item">
                                <h1 class="n">HOSTEL MANAGEMENT SYSTEM</h1></li>
                        </ul>
                        <ul class="navbar-nav nt" >
                         
                          <li class="nav-item">
                            <a class="nav-link nl " href='<?php echo base_url(); ?>/profile'>MY PROFILE</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl active" href='<?php echo base_url(); ?>/request'>REQUEST</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/register'>REGISTER</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nl" href="" data-target="#myModal" class="btn4" data-toggle="modal">COMPLAINTS</a>
                          </li>
                          <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            VIEW
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_attendance'>ATTENDANCE</a></li>
                          <li class="navbar-custom d"><a class="dropdown-item d" href='<?php echo base_url(); ?>/stu_notice'>NOTICE</a></li>
                        
                        </ul>
             </li>
                          <!-- <li class="nav-item dropdown" >
                          <a class="nav-link nl"  href='<?php echo base_url(); ?>/stu_attendance'>ATTENDANCE</a>
                          
                          </li> -->
                          <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_chat'>CHAT</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nl" href=""  data-toggle="modal" data-target="#paidfees1">FEES</a>
                          </li>
<!--                         
                          <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/stu_notice'>NOTICES</a>
                          </li> -->
                            <li class="nav-item">
                            <a class="nav-link nl" href="HOME/logout">LOGOUT</a>
                          </li>
                          <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle nl" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MODES
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <button class="btn btn-default darkbtn " onclick="myFunction()"><i class="fas fa-moon moonn"></i><i class="fas fa-sun sunn"></i></button>
                          <button class="btn btn-default eyebtn" onclick="myFunctionEye()"><i class="fas fa-eye eyee"></i><i class="fas fa-eye-slash eyeeNo"></i></button>
                            
                          </div>
                        </li>
                        </ul>  
                  </div>
                </div>
                
                
                <img src="<?=base_url()?>/assets/images/Header/logo.png" class="logoT">
                
        </nav>

        <!-- request nav -->
      <div class="row" >
        <div class="col-md-3" >
        <nav id="sidebar" style="position:relative;padding-top:20%;padding-bottom:10%;">
        <div class="sidebar-header">
            <h3>Requests</h3>
        </div>

        <br>
        <br>
        <ul class="list-unstyled components">
           <li>
            
                <a href='<?php echo base_url(); ?>/leave_request' style="color:white"   aria-hidden="true"   >LEAVE </a>
            </li>
            <li>
			 
                 <a onclick="myFunShowRoom1()"  style="color:white"   aria-hidden="true" class="linkme" class="wardenn" >ROOM CHANGE</a>
            </li>
            <li>
			
                <a onclick="myMedicalRequest()"  style="color:white"   aria-hidden="true" class="linkme">MEDICAL</a>
				  </li>
            <li> 
			
            <a onclick="myRepairRequest()"  style="color:white"   aria-hidden="true" class="linkme">REPAIR</a>
            </li>
        </ul>
    </nav>
             </div>
             
        
             
             
   <!-- Leave request           -->
              <div class="col-md-9">
              <div class="myFormRoom" style="display:none">
<div class="container" style="margin-top:5%;"> <div class=" text-center mt-5 ">
        <br><br><br><br> <h3>Leave Request</h3>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light" >
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="<?= base_url() ?>/Student_leave_request/leave_req">
                            <div class="controls">
                            <div class="row">
                            <div class="col-md-12">
                              <?php
                              if(session()->getFlashdata('status')){
                                echo "<h4>".session()->getFlashdata('status')."</h4>";
                              }
                              ?>
                           
                              </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input id="form_name" type="text" name="reg_no" class="form-control" placeholder="Enter your RegistrationNo " required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Enter your Name " required="required"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input id="form_email" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="leave_date" class="form-control" placeholder="LeaveDate" required="required" > </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <input id="form_email" type="text" onfocus="(this.type='time')" onblur="(this.type='text')"  name="leave_time" class="form-control" placeholder="LeaveTime" required="required" ></div>
                                    </div>
                                </div>
		
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><textarea id="form_message" name="reason" class="form-control" placeholder="Write your reason here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
									</div>
						
						<div class="col-md-12">
								<div class="form-group"><input type="submit"  class="button button2" value="Send Message" name="submit"  > </div>   
                            </div>
							</div>
							</div>
				 </form>
				 </div>
            </div> 
        </div> 
    </div>
</div>
                            </div>
                            </div>
                          
                            
                        
                          
                  
                                  
                           

             

             <!-- sample -->
             <div class="col-md-9">
              <div class="myFormRoom1" style="display:none">
<div class="container" style="margin-top:5%;"> <div class=" text-center mt-5 ">
        <br><br><br><br> <h3>Leave Request</h3>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light" >
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="<?= base_url() ?>/Student_leave_request/leave_req">
                            <div class="controls">
                            <div class="row">
                            <div class="col-md-12">
                              <?php
                              if(session()->getFlashdata('status')){
                                echo "<h4>".session()->getFlashdata('status')."</h4>";
                              }
                              ?>
                           
                              </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input id="form_name" type="text" name="reg_no" class="form-control" placeholder="Enter your RegistrationNo " required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Enter your Name " required="required"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input id="form_email" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="leave_date" class="form-control" placeholder="LeaveDate" required="required" > </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <input id="form_email" type="text" onfocus="(this.type='time')" onblur="(this.type='text')"  name="leave_time" class="form-control" placeholder="LeaveTime" required="required" ></div>
                                    </div>
                                </div>
		
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><textarea id="form_message" name="reason" class="form-control" placeholder="Write your reason here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
									</div>
						
						<div class="col-md-12">
								<div class="form-group"><input type="submit"  class="button button2" value="Send Message" name="submit"  > </div>   
                            </div>
							</div>
							</div>
				 </form>
				 </div>
            </div> 
        </div> 
    </div>
</div>

             </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            
                            
            
                            
                            


             

             <!-- Room Change
<div class="col-md-9">
              <div class="mychange" style="display:none;">
<div class="container" style="margin-top:10%; "> <div class=" text-center mt-5 ">
        <br><br><br><br> <h3>Room Change Request</h3>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light" >
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="<?= base_url() ?>/">
                            <div class="controls">
                            <div class="row">
                            <div class="col-md-12">
                              <?php
                              if(session()->getFlashdata('status')){
                                echo "<h4>".session()->getFlashdata('status')."</h4>";
                              }
                              ?>
                           
                              </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input id="form_name" type="text" name="reg_no" class="form-control" placeholder="Enter your RegistrationNo " required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Enter your Room no " required="required"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Enter your Floor no " required="required"> </div>
                                    </div>
                                </div>
                       
		
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><textarea id="form_message" name="reason" class="form-control" placeholder="Write your reason here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
									                
                                  </div>
						
						<div class="col-md-12">
								<div class="form-group"><input type="submit"  class="button button2" value="Send Message" name="submit"  > </div>   
                            </div>
							</div>
							</div>
				 </form>
				 </div>
            </div> 
        </div> 
    </div>
</div>

             </div> -->

                          <!-- Repair request -->
<!-- <div class="col-md-9">
              <div class="myrepair" style="display:none;">
<div class="container" style="margin-top:10%; "> <div class=" text-center mt-5 ">
        <br><br><br><br> <h3>Repair Request</h3>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light" >
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="<?= base_url() ?>/">
                            <div class="controls">
                            <div class="row">
                            <div class="col-md-12">
                              <?php
                              if(session()->getFlashdata('status')){
                                echo "<h4>".session()->getFlashdata('status')."</h4>";
                              }
                              ?>
                           
                              </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input id="form_name" type="text" name="reg_no" class="form-control" placeholder="Enter your RegistrationNo " required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Enter your Room no " required="required"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Enter your Floor no " required="required"> </div>
                                    </div>
                                </div>
                       
		
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><textarea id="form_message" name="reason" class="form-control" placeholder="Write your reason here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
									</div>
						
						<div class="col-md-12">
								<div class="form-group"><input type="submit"  class="button button2" value="Send Message" name="submit"  > </div>   
                            </div>
							</div>
							</div>
				 </form>
				 </div>
            </div> 
        </div> 
    </div>
</div>

             </div> -->


                            
                            

  <!-- Medical request -->
  <!-- <div class="col-md-9">
              <div class="mymedical" style="display:none;">
<div class="container" style="margin-top:10%; "> <div class=" text-center mt-5 ">
        <br><br><br><br> <h3>Medical Request</h3>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light" >
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="<?= base_url() ?>/">
                            <div class="controls">
                            <div class="row">
                            <div class="col-md-12">
                              <?php
                              if(session()->getFlashdata('status')){
                                echo "<h4>".session()->getFlashdata('status')."</h4>";
                              }
                              ?>
                           
                              </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><input id="form_name" type="text" name="reg_no" class="form-control" placeholder="Enter your RegistrationNo " required="required"> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Enter your Room no " required="required"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Blood group " required="required"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="form-group"> <input id="form_lastname" type="text" name="name" class="form-control" placeholder="Emergency conduct no " required="required"> </div>
                                    </div>
                                </div>
                       
		
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"><textarea id="form_message" name="reason" class="form-control" placeholder="Medical issue" rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
									</div>
						
						<div class="col-md-12">
								<div class="form-group"><input type="submit"  class="button button2" value="Send Message" name="submit"  > </div>   
                            </div>
							</div>
							</div>
				 </form>
				 </div>
            </div> 
        </div> 
    </div>
</div>

             </div>
                            </div> -->
                            

                            



    <script>

   
        function myFunShowRoom(){
       $('.myFormRoom').toggle(1000);
       
     }

     
     function myFunShowRoom1(){
       $('.myFormRoom1').toggle(1000);
       
     }
     
     
     function myChangeRoom(){
       $('.mychange').toggle(1000);
       
     }
      

     function myMedicalRequest(){
       $('.mymedical').toggle(1000);
       
     }
     

     function myRepairRequest(){
       $('.myrepair').toggle(1000);
       
     }

     VanillaTilt.init(document.querySelectorAll(".secu , .wardenn"), {
                    max: 10,
                    speed: 700,
                        glare: false,
                         maxGlare: .2,
                        scale: 1.05
            });    
            
        
      </script>



    <!-- <div class= 'container'> 
  <section id= 'first'>
    <h1>First</h1>
  </section> -->



        
    <!-- complaint model -->
                                       
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document"> 
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      
      <div class="modal1-header d-flex justify-content-center" >
   
      <h4 class="heading" >Send Complaints</h4>
      <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                                  <span aria-hidden="true">&times;</span>
                                                </button> -->
                                              
     
   </div>
   
   
                              
   <form  method="post" action="<?= base_url() ?>/Student_Complaint/complaint"  autocomplete="off">
   <div class="modal1-body">

    <select class="form-control " name="rec" required>
    <option selected >Choose to send</option>
    <option value="warden">Warden</option>
    <option value="sub_warden">Sub-Warden</option>
    <option value="dean">Dean</option>
    </select><br>

        
       <!-- <input name="date" id="date" class="form-control" type="date" placeholder="Enter Date"><br>
       <input name="time" id="time" class="form-control" type="time" placeholder="Enter Time"><br> -->
       <input name="subject" id="sub" class="form-control" type="text" placeholder="Subject" required><br>
       <textarea name="complaint" id="comp" class="form-control" type="text" placeholder="Enter your complaints" required></textarea>
        <br>  
   </div>
   <div class="modal-footer">
   <button name="insert" id="insert"  class="btn btn-info" style="background-color:#006666;" > Send </button>
   <button class="btn btn-outline-info waves-effect"  style="background-color:#006666;" data-dismiss="modal">Close</button>
  
   </div>
   </form>
  </div>
 </div>
</div>


          

         
   
       
        <script>
        //navbar
            $(function () {
              $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
              });
            }); 
        </script>.
        <script>
          function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
          }
          function myFunctionEye() {
            var element = document.body;
            element.classList.toggle("read_mode");
          }
          </script>



  


  <!-- footer -->
<div class="footer topFooter" style="margin-top:0%;">
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

  

 
  <?php 
                            } ?>
            </div>
</body>
</html>
        
           
