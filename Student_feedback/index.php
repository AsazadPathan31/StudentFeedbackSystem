<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>

<head>


	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#7a58a6">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="navbar-header">
            
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF;font-size:40px;"> Student Feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-bottom:10px;">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF;font-size:16px;" href="index.php"><i class="fa fa-home fa-fw"></i>Home</a>
                    </li>
					
					
					<li><a style="color:#FFFFFF;font-size:16px;" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Registration</a></li>
												
	<li class="dropdown">
        <a style="color:#FFFFFF;font-size:16px;" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="index.php?info=login">Student</a></li>
		  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
          <li><a href="admin">Admin</a></li> 
        </ul>
      </li>   	  
	  
	 <li>
                        <a style="color:#FFFFFF;font-size:16px;" href="index.php?info=contact">	<i class="fa fa-phone fa-fw"></i>Contact</a>
                    </li>
					 	
					
                   

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						
						

						 
						if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/feedbacknew3.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/feedbacknew2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('images/feedbacknew1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
           				
				
			<div class="col-md-12" style="margin-top:60px;margin-bottom:80px;font-family:Roboto;font-size:18px; line-height:35px;">
				<h2>About Faculty feedback System</h2>
				Student Feedback System for<b> Sanjeevan Engineering And Technology Institute Panhala.</b> 
Here I have developed the a faculty feedback system, which is generally used in the college to rate the faculty based on the performance...Here we have 2 modules such as administrator, student.

Administrator is the one who creates the student account by adding all student info and assigning the username and password. 
Admin also checks the result once all students entered the feedback..
We can start the development from the login page, where we have given the option to login as admin and student...Here since we have only one admin account, so no need to create the a database to store admin info...so the admin username is "admin@gmail.com" and password is "admin"...select admin.

You can perform all admin actions such as login to the account and check result , Update the details  , Add Faculty etc.



	
			</div>
			
			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding-bottom:15px;height:40px; background:#7a3666
	">
		<span style="color:#FFFFFF;font-family:roboto;font-size:20px;">Developed By @Asazad Pathan</span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
