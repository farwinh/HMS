<html>
    <head>
    <title>Gallery</title>
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
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

input[name="size"]{
  width: 50%;
  align: center;
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
                            <a class="nav-link nl" href='<?php echo base_url(); ?>/complaints'>COMPLAINTS</a>
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
            <div class="col-md-12">
                
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

                  <br>
                  <br>
                  <br><br>   
                  
                 
               
                <div class ="container mt-5">
                  <div class ="row">
                    <div class ="col-md-12">
                      <?php
                      if(session()->getFlashdata('status'))
                      {
                        echo "<script>alert('".session()->getFlashdata('status')."')</script>";
                      }

                      ?>
                       <p align="left">
                      <a href="<?= base_url("d_board")?>" class ="btn btn-danger btn-12m float-end"><i class="fa fa-hand-o-left" aria-hidden="true">&nbsp;&nbsp;Back</i></a>                       

                    <div class ="card">
                    <!-- <input type="text"  placeholder="Search subject here"  onkeyup="myFunctionS()" class="form-control" id="myAction"> -->

                      <div class = "card-header">

                        <h5>Image Data

                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?= base_url("products")?>" class ="btn btn-primary btn-5n float-end"><i class="fa fa-plus" aria-hidden="true"> Add</i></a>                       
                         </h5>
                         <form class="form" method = "POST" >

        
        <div class="line-separator"></div>

            <div class="container-fluid form-inline">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                         <input type="text"  placeholder="Search id here"  onkeyup="myFunctionS()" class="form-control" id="myAction">

                         
                         </div>

</form>     
        </div>
        <div class ="card-body">
          <table class="table table_bordered" id="gallery">

                      <thead>
                        <tr>
                        <th>Image_id</th>
                      <th>Image_name</th>
                        <th>Date</th>
                        <th>time</th>
                        <th>image</th>
                        <th>Action</th>
                  
                      </tr>
                    </thead>
                    <tbody id="tblBody">
                      <?php
                      foreach($products as $item) :
                      ?>
                      <tr>
                        <td><?= $item['Image_id']?></td>
                        <td><?= $item['Image_name']?></td>
                        <td><?= $item['Date']?></td>
                        <td><?= $item['time']?></td>
                        <td><?= $item['image']?></td>
                        
                        <td>
                        <button type ="button" id="<?= $item['Image_id']?>" onclick="myFunctionEdit(this.id)" class="btn btn-success btn-sm bditbtn" data-toggle="modal" data-target="#Modeledit">Edit&nbsp;&nbsp;&nbsp;<i class='fas fa-edit' style='font-size:15px'></i></button>

                          <!-- <a href="?= base_url('gallery/edit/'.$item['Image_id']) ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o">edit</i></a> -->
                          <a href="<?= base_url('gallery/delete/'.$item['Image_id']) ?>" class="btn btn-danger btn-sm"> Delete<i class='fas fa-trash-alt' style='font-size:15px'></i></a>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>


          </table>
        </div>
        </div>
        </div>

        </div>
        </div>

                      <script>
                        function myFunctionEdit(x){
                          
                          $.ajax({
                            url:"admin_Dashboard/EditImage",
                            data:{
                              id:x
                            },
                            success:function(data){
                              $('#modelBody').html(data);
                            },
                            error:function(data){
                              alert("Something went wrong");
                            }
                          });
                        }

                        function updateImages(x){ 
                          var imageName=document.getElementById("Image_namee").value;
                          var date=document.getElementById("Date").value;
                          var time=document.getElementById("time").value;
                          var image=document.getElementById("image").value;
                          var id=x;
                          
                          $.ajax({
                            url:"admin_Dashboard/updateImage",
                            data:{
                              id:id,
                              imageName:imageName,
                              date:date,
                              time:time,
                              image:image
                            },
                            success:function(data){
                              //$('#updateImages').html(data);
                              alert("OK");
                              alert(data);
                            },
                            error:function(data){
                              alert("Something went wrong")
                            }
                          });
                        }

                       
                      </script>
                                        
                                        
                                        <script>
   function myFunctionS() {
            var input, filter, table, tr, td, i, txtValue,txtValueD;
            input = document.getElementById("myAction");
            filter = input.value.toUpperCase();
            table = document.getElementById("gallery");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }
                    
            }
            
          }
          </script>             
                                        
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                            } ?>
            </div>
            <!-- Modal -->

<div class="modal fade" id="Modeledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
      <form class="row g-3 needs-validation" novalidate>
      <div class="modal-body" id="modelBody">
       
         
          
        
                          </div>
      
      </form>
      </div>
    </div>
  </div>
</div>  
        <script>
           



          $(document).ready(function(){
              $('.editbtn').on('click',function(){
                  $('#edit').modal('show');
                  $tr = $(this).closet('tr');

                  var data= $tr.gallery("td").map(function(){
                    return $(this).text(); 
                  }).get();
                    console.log(data);
                    $('#update_id').val(data[0]);
                    $('#Image_name').val(data[1]);
                    $('#Date').val(data[2]);
                    $('#time').val(data[3]);
                    $('#image').val(data4]);
              
              });
          });
          </script>
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