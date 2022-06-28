<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
 <!--Title logo-->
 <link rel="icon" href="<?=base_url()?>/assets/images/Header/logo.png">
 <title>TECHMS</title>
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
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/Header/style.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/index/myStyle.css">
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
        <script src="https://unpkg.com/scrollreveal"></script>

        <style>

          </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg mynavCustom">
  <a class="navbar-brand " href="#"><img src="<?=base_url()?>/assets/images/Header/logo.png" class="theLogo"></a>
    <a class="navbar-brand nbr" href="#">TECHMS</a>
    <button class="navbar-toggler theBtnMob" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="background:white"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link nlink" href="#">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link nlink" href="#">GALLERY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nlink" href="#">CONTACT US</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        
        <button class="btn btn-outline-success my-2 my-sm-0" id="modalActivate" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalPreview">LOGIN</button>
      </form>
    </div>
  </nav>
  <div class="vidMain"> 
    <video src="<?=base_url()?>/assets/videos/vid.mp4" type="Video/mp4" class="myvid" autoplay loop muted></video>
  </div>
  <div class="row welMsg">
    <div class="col-md-12 ">
    <h2 class="">Welcome to TECHMS</h2>
    </div>
   
  </div>
 
  <!-- Modal -->
  <div class="modal fade right" id="exampleModalPreview" tabindex="-1" role="dialog" aria-labelledby="exampleModalPreviewLabel" aria-hidden="true">
    <div class="modal-dialog-full-width modal-dialog momodel modal-fluid" role="document">
      <div class="modal-content-full-width modal-content ">
        <div class=" modal-header-full-width   modal-header text-center">
          <h5 class="modal-title w-100" id="exampleModalPreviewLabel">TECHMS - LOGIN</h5>
          <button type="button" class="close " data-dismiss="modal" aria-label="Close">
            <span style="font-size: 1.3em;" aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <h1 class="section-heading text-center wow fadeIn my-5 pt-3">LOGIN</h1>
          <div class="row  ">
            <div class="col-md-12 text-center" style="padding-left:30%;padding-right:30%">
              <form method="post" action="home/check_user" id="formData" autocomplete="off">
                <div class="form-group text-left">
                  <label for="username">USER NAME</label>
                  <input class="form-control" name="user" id="name" aria-describedby="nameHelp" placeholder="User">
                  <small id="emailHelp" class="form-text text-muted">Please enter your user name</small>
                </div>
                <div class="form-group text-left">
                  <label for="exampleInputPassword1">Password</label>
                  <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-check">
                  <i> forgot password?</i>
                  <a href="" type="button" data-toggle="modal" data-target="#exampleModal" ><label class="form-check-label labelReset" for="exampleCheck1" >RESET</label></a>
                </div>
                <div class="row">
                  <div class="col-md-12">
                  <button type="reset" class="btn btn-danger">CLEAR</button>
                  <button type="submit" class="btn btn-primary">LOGIN</button>
                  </div>
                </div>
                
              </form>
            </div>
          </div>
        </div>
        <div class="row modal-footer-full-width  modal-footer">
        
          <div class="col-md-12">
        <div class="row">
          <div class="col-md-10 text-center">
            Faculty of Technology - University of Ruhuna
          </div>
          <div class="col-md-2 text-right">
            <button type="button" class="btn btn-danger btn-md btn-rounded" data-dismiss="modal">Close</button>
          </div>
        </div>
            
          </div>
        
          
          
        </div>
      </div>
    </div>
  </div>

  <!-- Modal RESET-->
<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RESET PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" class="">
          <div class="col-md-12 text-center theOtpForm">
            Conform the Password Reset<br>
            The OTP is sent to 077****934<br>
            Enter 6 Numbers OTP
            <form >
              <div class="form-group">
              
                <input type="number" class="form-control" id="otp" aria-describedby="otpHelp" placeholder="######">
                <small id="otphelp" class="form-text text-muted">You must enter the OTP to continue</small>
              </div>
              <label type="button" onclick="otpConform()" class="btn btn-default">Sub</label>
              
              </form>
          </div>
        </div>
        <div class="wrongOTP" style="display:none;color:red">The OTP is wrong</div>
        <div class="chanePw" style="display:none;">

          <form>
              <div class="form-group">
                
                <input type="password" class="form-control" id="otp" aria-describedby="otphelp" placeholder="######">
                <small id="otphelp" class="form-text text-muted">Enter New Password</small>
              </div>
              <div class="form-group">
                
                <input type="password" class="form-control" id="otp" aria-describedby="otphelp" placeholder="######">
                <small id="otphelp" class="form-text text-muted">Re-Enter New Password</small>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <button type="reset" class="btn btn-primary">CLEAR</button>
                  <button type="submit" class="btn btn-primary">CHANGE</button>
                </div>
              </div>
              
            </div>
        
            </form>
          </div>
    </div>
      </div>
      <div class="modal-footer">
        <button type="" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  function otpConform(){
    $('.theOtpForm').hide(2000);
    $('.chanePw').show(2000);
  }
  setTimeout( function() { $( "#exampleModal" ).modal( "hide" ) }, 3000 );
</script>
<!-- Modal Chane pw-->
<div class="modal fade " id="modelChange" tabindex="-1" role="dialog" aria-labelledby="modelChange" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modelChange">RESET PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-md-12 text-center">
          
         
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<!--Aboutus-->
<section id="aboutUs">
<div class="inner_wrapper">
  <div class="container">
    <h2>About Us</h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/about-img.jpg" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
			<h3>Welcome to Hostel Managment System Web-page of the Faculty of Technology</h3><br/> 
            <p>The Faculty of Technology was officially established under the gazette notification issued on 26.04.2016 with four Departments, namely, Engineering Technology, Information and Communication Technology, Biosystems Technology and Multidisciplinary Studies. The premises for the Faculty is located at Karagoda Uyangoda, Kamburupitiya, close to the Faculty of Agriculture. The first phase of the new building and student hostels are currently under construction and they are expected to be completed by end of 2017. Until then the classes will be conducted at the premises of Faculty of Science, Wellamadama. The Faculty offers two degree programmes for the first batch of students entering in 2016, namely, Bachelor of Engineering Technology Honours - BET(Hons) focusing on Electromechanical Technology and Bachelor of Information and Communication Technology Honours - BICT(Hons) focusing on Application Development. BET(Hons) and BICT(Hons) degree programmes have been constructed to satisfy the accreditation guidelines of Sydney Accord as well as Institute of Engineers, Sri Lanka (IESL) and Computer Society of Sri Lanka (CSSL), respectively. The Faculty plans to produce internationally accredited Technologists. The Department of Multidisciplinary Studies will offer additional Complementary Subjects, which are required for carrier development as well as for the accreditation. The Bachelor of Biosystems Technology, expected to be offered from the second batch of students entering in 2017, is in preparation.</p> <br/>

</div>
  <div class="work_bottom"> <span>Want to know more..</span> <a href="#contact" class="contact_btn">Contact Us</a> </div>       
	   </div>
      	
      </div>
	  
      
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 

<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		         <div class="contact_info">
                                <div class="detail">
                                <h4>Faculty of Technology
                                  University of Ruhuna</h4>
                               <p>
                                Karagoda Uyangoda
                                Kamburupitiya,Matara
                                Sri Lanka. 81000</p>
                                </div>
                            
                            <div class="detail">
                                <h4>call us</h4>
                                <p>041-2294750</p>
                            </div>
                            <div class="detail">
                                <h4>Email us</h4>
                                <p>dean@tec.ruh.ac.lk</p>
                            </div> 
                        </div>
       		  
			  
          
          
            
         
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
            <input class="input-text" type="text" name="" value="Your Name *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text" type="text" name="" value="Your E-mail *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
            <input class="input-btn" type="submit" value="send message">
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2022,PTN</a>. </span> </div>
  </div>
</footer>

<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery.nav.js"></script> 
<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/jquery.isotope.js"></script>
<script type="text/javascript" src="<?=base_url()?>/assets/js/wow.js"></script> 
<script type="text/javascript" src="<?=base_url()?>/assets/js/custom.js"></script>

</body>
</html>