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
				padding-top:12%;
			}
      .topic2{
				padding-top:15%;
			}

      .topic3{
				padding-top:6%;
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
          $session=session();
            
            $userm=$_SESSION["user_ar"];
           
           if($_SESSION["se_student"]==null){
            
                $user['data_array'] = array(
                  'first_name' => "null",
                  'last_name'   => "null",
                  'contact_no'    => "null",
                  'batch'    => "null",
                  'address'    => "null");
            }
            else{
                $user=$_SESSION["se_student"];
            }
             foreach ($userm as $usm){
            
              
        ?>
        <nav class="navbar navbar-custom navbar-expand-lg fixed-top">
                    <div> 
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                   <img src="<?=base_url()?>/assets/images/Header/logo.png" class="imglogo"> 
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <a class="navbar-brand" href="#"><img src="<?=base_url()?>/assets/images/Profiles/Security/<?php echo $usm['pro_pic']; }?> " class="proimg"></a>
                        
                        <ul class="navbar-nav p">
                            <li class="nav-item">
                                <h1 class="n">HOSTEL MANAGEMENT SYSTEM &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span class="sp">WELCOME </span></h1></li>
                        </ul>
                        <ul class="navbar-nav nt" >
                         
                          <li class="nav-item">
                            <a class="nav-link nl" href="<?=base_url()?>/Security_login"> MY PROFILE</a>
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
        
       <!-- body part ---------------------------->
      
       <div class="container-fluid well">  
        <div class="row"> 
              <div class="col-md-12">
                <h3 class="topic2"> <center>SEND MESSAGE TO STUDENT</center>  </h2>
              </div>
          </div>
    
        
       
        <div class="row">

              <!-- search details of a student -->
                      <div class="col-md-3">
                            <h4 class="topic"> <center> <b> Search student </b></h4><br>
                          <form action="Se_search" method="post">
                            <input type="text" class="text-upper case" placeholder="Kumar" name="name"> Name<br><br>
                            <input type="text" placeholder="tg410" name="tg"> TG Number<br><br>
                            <input type="text" placeholder="0756877873" name="mobile"> Mobile number<br><br>   
                            <input type="submit" name="search" value="search" class="btn btn-primary"> 
                          </form>
                            </center>                
                          </div>
              <!-- student deatails -->
                        <div class="col-md-4">
                              <h4 class="topic3"> <center><b>Student details</b> </h4>
                              <table border="0" class="table table-borderless table-light tbl ">
                                <tr>
                                  <?php foreach ($user as $us){?>
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
                                    <!-- <tr>
                                        <th>
                                            batch: 
                                        </th>
                                        <td>
                                        <?php // echo $us["batch"];?>
                                        </td>
                                    </tr>
                                    <tr> -->
                                        <th>
                                            ADDRESS: 
                                        </th>
                                        <td>
                                        <?php echo $us["address"];?>
                                        </td>
                                    </tr>
                                    
                                </table></center>
                        </div>
              <!-- send message -->
                      <div class="col-md-4"><center>
                            <h4 class="topic"><b> Send message </b> </h4>
                            <form action="security_send_Message" method="post">
                            <table class="table table-borderless table-light tbl ">
                              <tr>
                                <td> To </td>
                                  <td> <input type="text" name="moblieA" value="<?php echo $us["contact_no"];?>"></td>
                              </tr>

                              <tr>
                                <td> Message </td>
                                  <td>  <textarea name="messageA"></textarea></td>
                              </tr>
                              <tr><td></td>
                                <td>
                                  <input type="submit" value="Send Message" class="btn btn-primary">
                                </td>
                              </tr>
                            </table>
                            </form>
                            </center>
                      </div>
           
            </div>
             </div>       
          </div>                         
                                        
                                       
    <?php  }?> 
    </body>
</html>