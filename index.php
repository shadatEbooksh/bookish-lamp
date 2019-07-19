<?php include 'config/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SMS | STUDENT MANAGEMENT SYSTEM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="icon" href="1.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="main/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="main/css/animate.css">
    
    <link rel="stylesheet" href="main/css/owl.carousel.min.css">
    <link rel="stylesheet" href="main/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="main/css/magnific-popup.css">

    <link rel="stylesheet" href="main/css/aos.css">

    <link rel="stylesheet" href="main/css/ionicons.min.css">
    
    <link rel="stylesheet" href="main/css/flaticon.css">
    <link rel="stylesheet" href="main/css/icomoon.css">
    <link rel="stylesheet" href="main/css/style.css">
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/"><span>SMS</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>Team</span></a></li>
	          <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Notice</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Sign In</span></a>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	          </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
	  	<h3 class="vr">Welcome to SMS</h3>
		  <div class="home-slider js-fullheight owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(main/images/bg_1.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to the digilab</span>
			            <h1 class="mb-4 mt-3">About <span>SMS</span>  System</h1>
			            <p> A student management system (also known as a student information system or SIS) helps a school manage data, communications, and scheduling.</p>
			            
			            <p><a href="Student-login.php" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img js-fullheight" style="background-image:url(main/images/bg_2.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Welcome to the SMS</span>
			            <h1 class="mb-4 mt-3"><span>Strategic</span> Design And <span>Technology</span> Agency</h1>
			            <p>A school system generates and uses a large amount of data. This data must be communicated appropriately to <b>students</b>, faculty, and parents.</p>
			            
			            <p><a href="User-Login.php" class="btn btn-primary px-5 py-3 mt-3">Get in touch</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
		

    <section class="ftco-section ftco-no-pb ftco-no-pt ftco-services bg-light" id="services-section">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-ideas"></span> System Portal</a>

              <a class="nav-link px-4" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> Dashboard</a>

              <a class="nav-link px-4" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span> Department Section</a>

              <a class="nav-link px-4" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-web-design"></span> Teacher Section</a>

              <a class="nav-link px-4" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 flaticon-ux-design"></span> Student Section</a>

              <a class="nav-link px-4" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><span class="mr-3 flaticon-innovation"></span> Technology</a>

              <a class="nav-link px-4" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><span class="mr-3 flaticon-idea"></span> CGPA System</a>
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-md-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active py-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <span class="icon mb-3 d-block flaticon-ideas"></span>
                <h2 class="mb-4">Portal System</h2>
                <ul>                
                	<li>Homepage Portal</li>
                	<li>Student Portal</li>
                	<li>User Portal</li>
                	<li>Admin Portal</li>
                </ul>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <span class="icon mb-3 d-block flaticon-flasks"></span>
                <h2 class="mb-4">Dashboard</h2>
                <p>
                	<ul>
                		<li>Server Time</li>
                		<li>Active Department</li>
                		<li>Faculty Members</li>
                		<li>Registrated User</li>
                		<li>Active User</li>
                		<li>Department Wise Student</li>
                		<li>Chart Report</li>
                	</ul>
                </p>
                
              </div>

              <div class="tab-pane fade py-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
				  <span class="icon mb-3 d-block flaticon-analysis"></span>
                <h2 class="mb-4">Department Section</h2>
                <ul>
                	<li>Department Fields</li>
                	<ul>
                		<li>Curriculam Code</li>
                		<li>Technology Name</li>
                		<li>Technology Code</li>
                	</ul>
                	<li>Add New Department</li>
                	<li>Edit Department Information (Admin Only)</li>
                	<li>Delete Department (Admin Only)</li>
                	<li>View All Department</li>
                	<li>Search Department Information with Specific Information</li>
                	<li>Import Department Information via Excel, CSV and PDF Format</li>
                	<li>Export Department list via Excel, CSV and PDF Format</li>
                </ul>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <span class="icon mb-3 d-block flaticon-web-design"></span>
                <h2 class="mb-4">Teacher Section</h2>
                <ul>
                	<li>Teacher Fields</li>
                	<ul>
                		<li>Teacher Name</li>
                		<li>Teacher Postition</li>
                		<li>Teacher Qualification</li>
                		<li>Teacher Age</li>
                		<li>Teacher Joining Date</li>
                		<li>Teacher Salary</li>
                	</ul>
                	<li>Add Teacher</li>
                	<li>Edit Teacher Information (Admin Only)</li>
                	<li>Delete Teacher(Admin Only)</li>
                	<li>View All Teacher</li>
                	<li>Search Teacher Information With Specific Information</li>
                	<li>Import Teacher List via EXCEL, CSV & PDF Format</li>
                	<li></li>
                </ul>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                <span class="icon mb-3 d-block flaticon-ux-design"></span>
                <h2 class="mb-4">Student Section</h2>
                <ul>
                	<li>Add New Student in Simple Form</li>
                	<li>Import All Student Data via EXCEL || CSV Format</li>
                	<li>Import (Specific Department) (Specific Session) (Specific Semester) Data via EXCEL || CSV Format</li>
                	<li>Student Can Upload His Own Data</li>
                	<li>Edit Student Data (Student Only)</li>
                	<li>Edit Student Data (Admin Only)</li>
                	<li>Delete Student Data (Admin Only)</li>
                	<li>Search Student information with specifiic Information</li>
                	<li>Export Student list via EXCEL & CSV and PDF Format</li>
                	<li>Export Studnet data with Specific Information via EXCEL & CSV & PDF Format <br>
                	LIKW (Session, Technology Name, Semester)
                	</li>
                </ul>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                <span class="icon mb-3 d-block flaticon-innovation"></span>
                <h2 class="mb-4">Technology</h2>
                <Ul>
                	<li>Browser</li>
                	<ul>
                		<li>Firefox Developer Edition</li>
                		<li>Google Chrome</li>
                		<li>Internet Explorer</li>
                		<li>Safary</li>
                	</ul>
                	<li>
                		HTML & CSS
                	</li>
                	<LI>
                		Web Development Framework
                	</LI>
                	<ul>
                		<li>Bootstrap</li>
                		<li>CakePHP</li>
                		<li>jQuery</li>
                	</ul>
                	<li>Programming Language</li>
                	<ul>
                		<li>PHP</li>
                		<li>MYSQL</li>
                		<li>JAVASCRIPT</li>
                		<li>AJAX</li>
                	</ul>
                	<li>Protocol</li>
                	<ul>
                		<li>HTTP</li>
                		<li>HTTPS</li>
                	</ul>
                	<li>API (Application Programming Interface)</li>
                	<li>Data Formats</li>
                	<ul>
                		<li>JSON</li>
                		<LI>CSV</LI>
                		<LI>EXCEL</LI>
                	</ul>
                	<LI>Client (or Client-side)</LI>
                	<ul>
                		<li>Each user of an application is called a client. Clients can be computers, mobile devices, tablets etc. Usually, multiple clients are interacting with the same app stored on a server.</li>
                	</ul>
					<li>Server (or Server-side)</li>
               		<ul>
               			<li>The application code is usually stored on the server. The clients make requests to the servers. The servers then respond to those requests after gathering the requested information.</li>
               		</ul>
                </Ul>
              </div>

              <div class="tab-pane fade py-5" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                <span class="icon mb-3 d-block flaticon-idea"></span>
                <h2 class="mb-4">CGPA System</h2>
                <ul>
                	<li>CGPA Fields</li>
                	<UL>
                		<li>Semester</li>
                		<li>GPA</li>
                	</UL>
                	<li>
When a student is added into this system then this time he gets a unique table row for his gpa</li>
               <li>Add Every Semester GPA in Simple Form System</li>
               <li>Import One Student One Semester GPA Via EXCEL || CSV Format</li>
               <li>Import One Student Tow Semester GPA Via EXCEL || CSV Format <br>|________ LIKE (1st Semester, 2nd Semester) Together</li>
               <li>Import One Student Multiple Semester GPA VEXCEL || CSV Format<br>
	|________ LIKE (3rd Semester,  4th Semester, 5th Semester) etc Together </li>
               <li>Import All Studnet of One Semester and One Departmetn GPA  Via EXCEL || CSV Format <br> |________ LIKE (1st Semester & Computer Department)</li>
               <li>Import All Studnt of All Semester and One Department GPA Via EXCEL || CSV Format<br>|________ LIKE (All Semester & Computer Department)</li>
               <li>Import All Student of All Semester and All Department GPA Via EXCEL || CSV Format <br>|________ LIKW (All Semester & All Department)</li>
               <li>HERE STUDENT GPA IS MARGRED BY 2 PROBIDHAN - 2010 & 2016 <br>
    IF STUDENT ADMISSION YEAR IS LESS THEN 2016 THEN HIS PROBIDHAN IS 2010</li>
               <li>Edit Each Student GPA (Admin Only)</li>
               <li>Delete Each Studnet GPA (Admin Only)</li>
               <li>View Student CGPA (Studnt Only)</li>
               <li>View Student CGPA (User & Admin)</li>
               <li>Export One Studnet One Semester GPA Via  EXCEL & CSV & PDF Format<br> |_______ LIKE (1st Semester)</li>
               <li>Export One Studnet All Semester CGPA Via EXCEL & CSV & PDF Format<br>|_______ LIKE (One Student & All Semester with CGPA)</li>
               <li>Export All Studnet of One Semester and One Departmetn GPA  Via  EXCEL & CSV & PDF Format <br>
	|________ LIKE (1st Semester & Computer Department)</li>
               <li>Export All Student of All Semester and One Department GPA Via EXCEL & CSV & PDF Format <br>
	|________ LIKE (All Semester & Computer Department)</li>
               <li>Export All Student of All Semester and All Department GPA Via EXCEL & CSV & PDF Format <br>
	|________ LIKW (All Semester & All Department)</li>
                </ul>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-2 img" style="background-image: url(main/images/bg_3.jpg);">
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-12">
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Huge Functionality</h2>
    							<p>Thus this is an educational purpost system, althrough it has a huge functionality.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Institute Friendly</h2>
    							<p>This system can easily use for Polytechnic Institutes in Bangladesh.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>Large Controlling System</h2>
    							<p>All of the working sysem can be import & export easily by just clicking.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>System Security</h2>
    							<p>This system is made by highly configured PHP & MYSQL. System has largee integration whick make this system not hackable.</p>
    						</a>
    						<a href="#" class="services-wrap ftco-animate">
    							<div class="icon d-flex justify-content-center align-items-center">
    								<span class="ion-ios-arrow-back"></span>
    								<span class="ion-ios-arrow-forward"></span>
    							</div>
    							<h2>24/7 Help &amp; Support</h2>
    							<p>Even the all-powerful Pointing has no control about the blind.</p>
    						</a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
	<section class="ftco-section testimony-section" id="about-section">
      <div class="container">
        <div class="row justify-content-center pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Our Team</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(main/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">MD SHADAT HOSSAIN</p>
                    <span class="position">Idea Creator, Designer & Project Management</span>
                    <ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(main/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                    <ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(main/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                    <ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(main/images/person_4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                    <ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img" style="background-image: url(main/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text px-4 pb-5">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">John Fox</p>
                    <span class="position">Businessman</span>
                    <ul class="ftco-social text-center">
			                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
			                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
			              </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Notice</span>
            <h2 class="mb-4">Our Notice</h2>
            <p>This notice is coming from the admin panel where admin & user make this notice</p>
          </div>
        </div>
        
        <div class="row d-flex">
		<?php 
		$query = mysqli_query($conn, "SELECT * FROM notice ORDER BY id DESC LIMIT 3");
		while($row = mysqli_fetch_array($query)) {
			echo '
		   <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text mt-3 float-right d-block">
                <h3 class="heading"><a href="single.html">'.$row["title"].'</a></h3>
				<br>'.$row["dates"].'
				<br>'.$row["name"].'
                <p>';
				$post = $row['post'];
				echo substr($post,0, 100);
				echo '...</p>
              </div>
            </div>
          </div>
			';
		}
		?>
          
        </div>
       </div>
    </section>
    
        <section class="ftco-section ftco-project bg-light" id="projects-section">
    	<div class="container px-md-5">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Go Throuth</span>
            <h2 class="mb-4">Portal System</h2>
            <p>Go and sign up for use this system for a demo time & when its donw create a comment. Our team is working on it, We are more interested if your best wishes with us.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 testimonial">
            <div class="carousel-project owl-carousel">
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="main/images/project-1.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="Student-login.php">Student Portal</a></h3>
				    					<span>For Student Only</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="main/images/project-2.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="User-Login.php">User Portal</a></h3>
				    					<span>For User Only</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            	<div class="item">
            		<div class="project">
		    					<div class="img">
				    				<img src="main/images/project-3.jpg" class="img-fluid" alt="Colorlib Template">
				    				<div class="text px-4">
				    					<h3><a href="admin">Admin Portal</a></h3>
				    					<span>For Admin only</span>
				    				</div>
			    				</div>
		    				</div>
            	</div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>For more information on any type of query, please feel free to contact us. We are happily consider this</p>
          </div>
        </div>
        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Mojaffor Nagar, 3 no goli, Technical More, Nasirabad, Chittagong</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://01880022220">+ 880 1880 022220</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:shadat0607@gmail.com">shadat0607@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="https://www.wearethehero.com">https://www.wearethehero.com</a></p>
	          </div>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input id="name" type="text" class="form-control" placeholder="Your Name"><small style="color:red;" id="errorname">Name is Required</small>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" placeholder="Your Email">
                <small style="color:red;" id="errormail">Email is Required</small>
              </div>
              <div class="form-group">
               <input type="text" class="form-control" id="subject" placeholder="Subject">
                 <small style="color:red;" id="errorsub">Subject is Required</small>
              </div>
              <div class="form-group">
                <textarea name="" id="msg" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                <small style="color:red;" id="errormsg">Message is Required</small>
              </div>
              <div class="form-group">
                <input type="button" id="contact" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
<script>
	  $(function() {
		  $('#errorname').hide();
		  $('#errormail').hide();
		  $('#errorsub').hide();
		  $('#errormsg').hide();
		  $('#contact').click(function() {
			  var name = $('#name').val();
			  var email = $('#email').val();
			  var subject = $('#subject').val();
			  var msg = $('#msg').val();
			  if(name == "") {
				  $('#errorname').show();
			  }
			  if(email == ""){
				  $('#errormail').show();
			  }
			  if(subject == "") {
				  $('#errorsub').show();
			  }
			  if(msg == "") {
				  $('#errormsg').show();
				  
			  }
			  
			  if(name != "" && email != "" && subject != "" && msg != ""){
				  $.ajax({
						url: 'sendmessage.php',
						type: 'POST',
						data: {
							name: name,
							email: email,
							subject: subject,
							msg: msg
						},

						success: function(result){
							$('#name').val("");
				  $('#email').val("");
				  $('#subject').val("");
				  $('#msg').val("");
							$('#res1').html(result);
						}
					});
			  }
			  
		  })
	  })
</script>
<div id="res1"></div>
          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About DigiLab</h2>
              <p>We are the team of believe. We thing if we dont't try then how we get the goal. So try hard oneday we get better.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a target="blank" href="https://twitter.com/Sadik_ComputerE"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a target="blank" href="https://web.facebook.com/shadat.bot"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a target="blank" href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Student login</a></li>
                <li><a href="User-Login"><span class="icon-long-arrow-right mr-2"></span>User Login</a></li>
                <li><a href="admin"><span class="icon-long-arrow-right mr-2"></span>Admin Login</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li>
                	<a href="#v-pills-1"><span class="icon-long-arrow-right mr-2"></span> System Portal</a>
				</li>
                <li><a href="#v-pills-3" role="tab" aria-controls="v-pills-3" ><span class="icon-long-arrow-right mr-2"></span>Department Section</a></li>
                <li><a href="#v-pills-4"><span class="icon-long-arrow-right mr-2"></span>Teacher Section</a></li>
                <li><a href="#v-pills-5"><span class="icon-long-arrow-right mr-2"></span>Student Section</a></li>
                <li><a href="#v-pills-7"><span class="icon-long-arrow-right mr-2"></span>CGPA System</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">3 no goli, Mozaffor Nagar, Technical More,Nasirabed, Chittagong</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+880 1880 022220 </span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">shadat0607@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Develop by <a href="">Sadik</a>.
          </div>
        </div>
      </div>
    </footer>
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="main/js/jquery.min.js"></script>
  <script src="main/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="main/js/popper.min.js"></script>
  <script src="main/js/bootstrap.min.js"></script>
  <script src="main/js/jquery.easing.1.3.js"></script>
  <script src="main/js/jquery.waypoints.min.js"></script>
  <script src="main/js/jquery.stellar.min.js"></script>
  <script src="main/js/owl.carousel.min.js"></script>
  <script src="main/js/jquery.magnific-popup.min.js"></script>
  <script src="main/js/aos.js"></script>
  <script src="main/js/jquery.animateNumber.min.js"></script>
  <script src="main/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="main/js/google-map.js"></script>
  
  <script src="main/js/main.js"></script>
    
  </body>
</html>