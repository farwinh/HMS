<html>
    <head>
    <title>Profile</title>
 <!--Title logo-->
 <link rel="icon" href="<?=base_url()?>/assets/images/Header/logo.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Footer/style.css">
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
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/modes.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/common.css">
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
			</style>
    </head>
    <body>
       <?php
	   use App\Controllers\Dashboard; 
            //session_start();
            //$condition="";
            //$user_name= $_SESSION['user_n'];
            //$condition= $_SESSION['logged'];
            //$u_id=$_SESSION['user_id'];
        ?>
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
                   <img src="<?=base_url()?>/assets/images/Header/logo.png" class="imglogo"> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <a class="navbar-brand" href="#"><img src="<?=base_url()?>/assets/images/Profiles/Admin/<?php echo $d['pro_pic']; ?>" class="proimg2"></a>
                        
                        <ul class="navbar-nav p">
                            <li class="nav-item">
                                <h1 class="n">HOSTEL MANAGEMENT SYSTEM</h1></li>
                        </ul>
                        <ul class="navbar-nav nt" >
                         
                          <li class="nav-item">
                            <a class="nav-link nl active" href='<?php echo base_url(); ?>/admin_login'>MY PROFILE</a>
                          </li>
                        
                          <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/d_board'>DASHBOARD</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/user'>USERS</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/notice'>NOTICES</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/gallery'>GALLERY</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/complaints'>COMPLAINTS</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/chatbot'>CHATBOT</a>
                          </li>
                         
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
          function myFunctionEye() {
            var element = document.body;
            element.classList.toggle("read_mode");
          }
          </script>
        
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                
                                <form method="post" action="<?php echo base_url('admin_Dashboard/update_propic');?>" enctype="multipart/form-data">
                                
                               <img src="<?=base_url()?>/assets/images/Profiles/Admin/<?php echo $d['pro_pic']; ?>" onclick="triggerClick()" id="displayProfile" class="propic" style="width:75%;border-radius:50%;">

                                        <input type="file" name="file" onchange="displayImage(this)" id="file" class="form-control" accept="image/*" style="display:none;">
                          
                                        <div class="container cn">
                                        <button type="submit" name="submit" class="btn btn-primary btn-block custom_btn" style="color:black;margin:5% 0% 0% 10%;" id="sub">UPDATE</button>
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
                                           name: 
                                        </th>
                                        <td>
                                            <?php echo $d['name']; ?>
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <th>
                                            gender: 
                                        </th>
                                        <td>
                                            <?php echo $d['gender']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                         password: 
                                        </th>
                                        <td>
                                            <?php echo $d['password']?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                           email: 
                                        </th>
                                        <td>
                                            <?php echo $d['email']?>
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
                                                    
                                                      <div class="form-group">
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
                                                                    <label form="validationCustom01" class="form-label">RE_ENTER PASSWORD</label>
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
                                                <button type="button" class="btn btn-primary">CHANGE PASSWORD</button>
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
                                                <form class="row g-3 needs-validation" action="admin_Dashboard/update_user" method="post" novalidate>
                                              <div class="modal-body">
                                                  
                                                  
                                                <table border="0" class="table table-borderless table-light tbl ">
                                               
                                                      
                                                <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                <label for="validationCustom01" class="form-label">name</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $d['name']?>" name="name" required>
                                                                    
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                      <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                <label for="validationCustom01" class="form-label">gender</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $d['gender']?>" name="gender" required>
                                                                    
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                     
                                                      <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                <label for="validationCustom01" class="form-label">email</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $d['email']?>" name="email" required>
                                                                    
                                                                
                                                                    </div>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                      </div>
                                                    <div class="form-group">
                                                        <tr> 
                                                            <td>
                                                                <div class="form-group">
                                                                
                                                                <label for="validationCustom01" class="form-label">password</label>
                                                                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $d['password']?>" name="password" required>
                                                                    
                                                                   
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
                                                                    <label for="validationCustom01" class="form-label">pro_pic</label>
                                                                    <input type="varchar" class="form-control" id="validationCustom01" value="<?php echo $d['pro_pic']?>" name="pro_pic" required>
                                                                    
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
                                        
                                        
                                            <script>
                                              /*
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
                                            animateValue(obj, 0, <?php // echo $w_d;?>, 2000);
                                            */
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