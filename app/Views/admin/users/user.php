<html>
    <head>
    <title>User</title>
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

.btn1{
background: teal;
color: #fff;
display: inline-block;
border-radius: 5px;
cursor: pointer;
height: 100px;
width: 200px;
font-size: 14px;
text-align: center;
text-overflow: ellipsis;
transition: 0.2s box-shadow ease-in-out, 0.2s background-color ease-in-out;
white-space: nowrap;
padding: 1.4em 2em;
}
.nt{
  position: absolute;
  margin-left:15%;
}
td {
    text-align:left;
    border: 1px solid #ddd;
    
  
}
.table {
  border: 4px solid #ddd;
 
}
th {
  border: 1px solid #ddd;
}
.topic{
  color:green;
  margin-left:25%;
  
}

.table {
	/* border-width: 5px; */
  	/* Or use shorthand border property */
  	/* width style colour */
  	/* border: 2px solid black; */
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
                          <a class="nav-link nl " href='<?php echo base_url(); ?>/admin_login'>MY PROFILE</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/d_board'>DASHBOARD</a>
                          </li>
                            <!-- <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/user'>USERS</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/notice'>NOTICES</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/gallery'>GALLERY</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link nl"href='<?php echo base_url(); ?>/complaints'>COMPLAINTS</a>
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
        
            <div class="col-md-8">
                <h1 class="topic">
                <p align="left">
                      <a href="<?= base_url("d_board")?>" class ="btn btn-danger btn-12m float-end"><i class="fa fa-hand-o-left" aria-hidden="true">&nbsp;&nbsp;Back</i></a>                       
          </p>
           <b>USERS  </b>

                    <!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle of elements</button> -->

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
          
       
             <input type="file" name="file" onchange="displayImage(this)" id="file" class="form-control" accept="image/*" style="display:none;">
                          
                                        <p>
                                          <p>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" id="dean" aria-expanded="false" aria-controls="multiCollapseExample2"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of Dean</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2" id="warden"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of Warden</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample3" id="subwarden"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of sub_warden</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample4" id="security"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of Security</button>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn1" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample5" id="student"><i class="fa fa-user" aria-hidden="true" style='font-size:24px'></i> Details of Students</button>
  


</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      <script>
              $('.btn1').click(function(){
                var id = this.id;
                $.ajax({
                  url:"admin_Dashboard/getData",
                  data:{
                    user:id
                  },
                  success:function(data){
                    //alert(data);
                    $('#tableData').html(data);
                  },
                  error:function(data){
                    alert("Cannot run");
                  }
                });
              });
              </script>
      <div class ="card-body">
          <table class="table table_bordered" id="tableData">
          
           
      
        <tbody>

        </tbody>
   </table>  
          


       
        <!-- Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. -->
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
                <?php 
                            } ?>
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