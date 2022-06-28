<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Home Page</title>
<!-- <link rel="icon" href="favicon.png" type="image/png"> -->
<link href="<?=base_url()?>/assets/css/index/bootstrap1.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url()?>/assets/css/index/style.css" rel="stylesheet" type="text/css"> 
<link href="<?=base_url()?>/assets/css/index/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="<?=base_url()?>/assets/css/index/animate.css" rel="stylesheet" type="text/css">
 

 
</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="<?=base_url()?>/assets/Source/logo/logo.png" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
			  
			  <li><a href="<?=base_url()?>/gallery" class="scroll-link">Gallery</a></li>
			  
			  
			  <li><a href="#contact" class="scroll-link">Contact</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Hostel Managment System </h2>
              <p>Welcome to Hostel Managment System </p>
              <a href="<?=base_url()?>/assets/lgg/login.html" class="read_more2">Login</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
			<img src="<?=base_url()?>/assets/Source/logo/logo1.png" class="zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

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