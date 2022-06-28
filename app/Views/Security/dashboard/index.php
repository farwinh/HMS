<html>
    <head>
        <!--Bootstrap Connection-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
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
        
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Warden/style.css">
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

.navbar-custom{
    background-color: rgb(102, 0, 34);
    height: 20%;
}
.imglogo{
    position: fixed;
    width: 5%;
    display: none;
}


.navbar.scrolled{
    height: 10%;
    transition: 2s all ease;
    z-index: 1;
}
.navbar.scrolled .proimg{
    display: none;
}
.navbar.scrolled .p{
    padding-left: 27%;
   
}
.navbar.scrolled .sp{
    display: none;
   
}
.navbar.scrolled .nt{
    display: none;
}
.navbar.scrolled .logoT{
    display: none;
    transition: 10s all ease;
}
.navbar.scrolled .imglogo{
    padding-top: 10;
    width: 55px;
    z-index: -99;
    position: relative;
    display: block;
}

.p{
    position: absolute;
    z-index: -1;
    padding-left: 15%;
    padding-bottom: 5%;
    color: white;
    
}
.logoT{
    width: 100px;
    margin-left:90%;
    position: absolute;
}

.nl{
    color: white;
    font-weight: bold;  
   
}

.active{
    text-decoration: underline;
}







      .dark-mode {
        background-color: Gray;
        color: white;
        opacity: 0.8;
      }
      .dark-mode .darkbtn{
        color:white;
        border: 1px solid black;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(186,186,186,1) 0%, rgba(172,172,172,1) 31%, rgba(121,121,121,1) 100%);
      }
      .dark-mode .navbar{
        background-color: darkgray;
        color:white
      }
			.topic{
				padding-top:15%;
			}
      .darkbtn{
        background: radial-gradient(circle, rgba(186,186,186,1) 0%, rgba(181,85,85,1) 36%, rgba(102,0,34,1) 82%);
        color:black;
        border: 1px solid black;
        border-radius: 50%;
        margin-left: 430px;
      }
      .proimg{
        width: 100px;
        border-radius: 20%;
  
      }
      .nt{
      padding-top: 5%;
      margin-left: 10%;
      position: absolute;
      padding-left: 5%;
     
    }
			</style>
    </head>
    <body>
       <?php
	   use App\Controllers\Dashboard; 
          
        ?>
        
        <?php
            $session = \Config\Services::session();  
            $session=session();
             $user_ar=$_SESSION["user_ar"];
             $_SESSION["se_student"]=null;
             foreach ($user_ar as $us){
              
        ?>
        <nav class="navbar navbar-custom navbar-expand-lg fixed-top">
                    <div> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                   <img src="<?=base_url()?>/assets/images/Header/logo.png" class="imglogo"> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <a class="navbar-brand" href="#"><img src="<?=base_url()?>/assets/images/Profiles/Security/<?php echo $us['pro_pic'];?>" class="proimg"></a>
                        
                        <ul class="navbar-nav p">
                            <li class="nav-item">
                                <h1 class="n">HOSTEL MANAGEMENT SYSTEM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="sp">WELCOME </span></h1></li>
                        </ul>
                        <ul class="navbar-nav nt" >
                         
                          <li class="nav-item">
                            <a class="nav-link nl" href="">MY PROFILE</a>
                          </li>
                            
                            <li class="nav-item">
                            <a class="nav-link nl" href="<?=base_url()?>/Send_sms_student">SEND SMS TO STUDENT</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href="">STUDENT_ENTER_LOG</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href="HOME/logout">LOGOUT</a>
                          </li>
                          <button class="btn btn-default darkbtn" onclick="myFunction()"><i class="fas fa-moon"></i></button>
                        </ul>
                  </div>
                </div>
                
                
                <img src="<?=base_url()?>/assets/images/Header/logo.png" class="logoT">
                
        </nav>
        
        <script>
        //navbar
            $(function () {
              $(document).scroll(function () {
                var $nav = $(".navbar");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
              });
            }); 
        </script>
        <div class="row">
            <div class="col-md-12">
                <h2 class="topic">PROFILE</h2>
            </div>
        </div>
        
        <script>
          function myFunction() {
            var element = document.body;
            element.classList.toggle("dark-mode");
          }
          </script>
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                
                                <form method="post" action="update_propic" enctype="multipart/form-data">
                                
                                    <img src="<?=base_url()?>/assets/images/Profiles/Security/<?php echo $us['pro_pic']?>"; onclick="triggerClick()" id="displayProfile" class="propic" style="width:75%;border-radius:50%;">
                                   
                                        <input type="file" name="file" onchange="displayImage(this)" id="file" class="form-control" accept="image/*" style="display:none;">
                          
                                        <div class="container cn">
                                        <input type="submit" name="submit" class="btn btn-primary btn-block custom_btn" style="color:black;margin:5% 0% 0% 10%;" id="sub">
                                            </div>
                                <script>
                                    $('#displayProfile').click(function(){ $('#file').trigger('click'); });
                                </script>
                                    
                                    </form> 
                            </div>
                            <div class="col-md-7">
                                <table border="0" class="table table-borderless table-light tbl">
                                
                              
                                
                                    <tr>
                                        <th>
                                            FIRST NAME:  
                                        </th>
                                        <td>
                                        <?php echo $us["first_name"];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            LAST NAME: 
                                        </th>
                                        <td>
                                        <?php echo $us["last_name"];?>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <th>
                                            MOBILE: 
                                        </th>
                                        <td>
                                        <?php echo $us["contact_no"];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            EMAIL: 
                                        </th>
                                        <td>
                                        <?php echo $us["email"];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            ADDRESS: 
                                        </th>
                                        <td>
                                        <?php echo $us["address"];?>
                                        </td>
                                    </tr>
                                    
                                </table>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">
                                          CHANGE PASSWORD
                                        </button>
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                          EDIT
                                        </button>

                                        <!-- Modal2 -->
                                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">CHANGE PASSWORD</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                 <table border="0" class="table table-borderless table-light tbl ">
                                                    
                                                      <form class="form-group" action="changePassword" method="post">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">CURRENT PASSWORD</label>
                                                                    <input type="password" class="form-control" id="validationCustom01" name="oldPW" required>
                                                                    <small class="form-text text-muted">You must enter the old password here</small>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                     <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">NEW PASSWORD</label>
                                                                    <input type="password" class="form-control" name="newPw" id="newPw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                                                    <small class="form-text text-muted">Password must contain Numbers,Letters and Special Characters</small>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                     <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">RE_ENTER PASSWORD</label>
                                                                    <input type="password" class="form-control" id="validationCustom01"  name="newPwRe" id="newPwConform" required>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                     
                                                  </table>
                                              </div>
                                                
                                                <div class="form-group"><span id="message"></span></div> 
                                                
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                                                <input type="submit" class="btn btn-primary">
                                              </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        
                                        <script>
                                            $('#newPw, #newPwConform').on('keyup', function () {
                                              if ($('#newPw').val() == $('#newPwConform').val()) {
                                                $('#message').html('Matching').css('color','green');
                                                  $("#sub").removeAttr('disabled');
                                              } else {
                                                $('#message').html('Not Matching').css('color', 'red');
                                                $("#sub").attr("disabled", "disabled");
                                              } 
                                            });


                                           //Ignore Resubmission on refresh-->
                                            if ( window.history.replaceState ) {
                                                window.history.replaceState( null, null, window.location.href );
                                            }
                                        </script>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">EDIT BASIC DETAILS</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>

                                              <!-- update security user   -->


                                                <form class="row g-3 needs-validation" action="se_update_user" method="post" novalidate>

                                              <div class="modal-body">
                                                  
                                                  
                                                <table border="0" class="table table-borderless table-light tbl ">
                                                    
                                                      <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">FIRST NAME</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $us['first_name']?>" name="fname" required>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                      <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">LAST NAME</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $us['last_name']?>" name="lname" required>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                      <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">MOBILE</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $us['contact_no']?>" name="mobile" required>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                    <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">EMAIL</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $us['email']?>" name="email" required>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                    <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                    <label for="validationCustom01" class="form-label">ADDRESS</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $us['address']?>" name="address" required>
                                                                    <div class="valid-feedback">
                                                                      Looks good!
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                                                                          
                                                    
                                            </table>
                                                      
                                              
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                                                <button class="btn btn-primary" type="submit" name="update">UPDATE</button>
                                                  
                                                      </div>
                                                  
                                              </div>
                                            </form>
                                               
                                            </div>
                                          </div>
                                        </div>
                                        <script>
                                    (function () {
                                      'use strict'

                                      // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                      var forms = document.querySelectorAll('.needs-validation')

                                      // Loop over them and prevent submission
                                      Array.prototype.slice.call(forms)
                                        .forEach(function (form) {
                                          form.addEventListener('submit', function (event) {
                                            if (!form.checkValidity()) {
                                              event.preventDefault()
                                              event.stopPropagation()
                                            }

                                            form.classList.add('was-validated')
                                          }, false)
                                        })
                                    })()
                                </script>
                                        
                                        
                                        
                                        
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <table border="0" class="table table-borderless table-light tbl ">
                                        <tr>
                                            <th>
                                                GENDER
                                            </th>
                                            <td>
                                            <?php echo $us["gender"];?> 
                                            </td>
                                            <td>
                                               
                                            </td>
                                       
                                        <tr>
                                            <th>
                                                DOB
                                            </th>
                                            <td>
                                            <?php echo $us["DOB"];?>
                                            </td>
                                        </tr>
                                        
                                        <tr >
                                            <th>
                                                JOINED DATE                                     
                                            </th>
                                            <td> <?php echo $us["Date_Joined"];?></td>
                                            <!-- <th class="bClass">
                                                DAYS WORKING                                     
                                            </th> -->
                                        </tr>
                                        <tr>
                                            <td>
                                                          
                                            </td>
                                            <td class="bClass" id="daysWorked">
                                               
                                            </td>
                                            <script>
                                            function animateValue(obj, start, end, duration) {
                                              let startTimestamp = null;
                                              const step = (timestamp) => {
                                                if (!startTimestamp) startTimestamp = timestamp;
                                                const progress = Math.min((timestamp-startTimestamp) / duration, 1);
                                                obj.innerHTML = Math.floor(progress * (end - start) + start);
                                                if (progress < 1) {
                                                  window.requestAnimationFrame(step);
                                                }
                                              };
                                              window.requestAnimationFrame(step);
                                            }

                                            const obj = document.getElementById("daysWorked");
                                            animateValue(obj, 0, <?php //echo $w_d;?>, 2000);
                                        </script>
                                        </tr>
                                    </table>
                                    <?php // } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                       
                         } ?>
            </div>
            <div class="col-md-4">
                <h2>QUICK LINKS</h2>
                <table class="table table-dark">
                    <tr>
                        <td><a href="http://www.tec.ruh.ac.lk/" class="impLink">Faculty Of Technology</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://paravi.ruh.ac.lk/tecmis/" class="impLink">TECMIS</a></td>
                    </tr>
                    <tr>
                        <td><a href="https://paravi.ruh.ac.lk/tecmis/" class="impLink">TECMIS</a></td>
                    </tr>
                </table>
            </div>
        </div>
        
    </body>
</html>