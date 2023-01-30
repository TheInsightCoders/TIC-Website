<?php
include "includes/header.php";
?>

  <main id="main">	
    <!-- ======= Introduction Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div>
            <img src="../assets/img/Codevita/TCSCodeVita2020.png" style="margin-left:5px; height:auto; width:100%" alt="">
          </div>

          <div class="portfolio-info">
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Collision Course</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/OYc9U8uO3Zo" target="_blank">Collision Course</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
		   <!-- Statement Section -->	
		   <section class="counts section-bg">
				<div class="container">
					<div class="row">
					  <div class="col-lg-12 col-md-3 text-left" data-aos="fade-up">
						<div class="count-box">
							<h2 style="color:  #FF5733;">Codevita Problem 16 - <strong>Collision Course</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								On a busy road, multiple cars are passing by. A simulation is run to see what happens if brakes fail for all cars on the road. The only way for them to be safe is if they don’t collide and pass by each other. The goal is to identify whether any of the given cars would collide or pass by each other safely around a Roundabout. Think of this as a reference point O ( Origin with coordinates (0,0) ), but instead of going around it, cars pass through it.
                                <br>
                                Considering that each car is moving in a straight line towards the origin with individual uniform speed. Cars will continue to travel in that same straight line even after crossing origin. Calculate the number of collisions that will happen in such a scenario.
                                <br>
                                Note : –Calculate collisions only at origin. Ignore the other collisions. Assume that each car continues on its respective path even after the collision without change of direction or speed for an infinite distance
								<br><br>
						</div>
					  </div>
					</div>
				</div>
			</section>		
			<section class="counts section-bg">
				<div class="container">
					<div class="row">
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						<div class="count-box">
							<p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Constraints</strong>
								<br>
								1 <= T <= 100
								<br>
                                1 <=N <= 5000
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								Input Test cases, then
                                <br>
                                Space separated x co-ordinate, y co-ordinate and speed
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								A single integer Q denoting the number of collisions at origin possible for given set of cars
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/OYc9U8uO3Zo"  allowfullscreen>
									</iframe>
								  </div>
								</div>
							  </div>
						  </section>
					  </div>
					</div>
				</div>
			</section>		
          <section class="counts section-bg">
				<div class="container">
					<div class="row">
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						<div class="count-box">
							<p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example:</strong>
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
									5<br>
                                    5 12 1
                                    <br>
                                    16 63 5
                                    <br>
                                    -10 24 2
                                    <br>
                                    7 24 2
                                    <br>
                                    -24 7 2
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									4
                                <br><br>
							</p>
						</div>
					  </div>
					</div>
				</div>
			</section>	
			<!-- End Statement Section -- >

			<!-- Code Section -->
			<br><br>
			<section class="counts section-bg">
				<div class="container">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#python">Python</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
C = int(input())

D = {}
collision = 0

for i in range(C):
    x,y,speed=list(map(int,input().split()))

    sq_time=(x**2+y**2)/(speed**2)
    # print(sq_time)

    if(D.get(sq_time)==None):
        D[sq_time]=1
    else:
        D[sq_time]=D[sq_time]+1

# print(D)
for keys in D:
    if(D[keys]!=1):
        collision=collision+(D[keys]*(D[keys]-1))/2
print(int(collision))
</code>
</pre>
						</div>
                      </div>
            </div>
        </section><!-- End Code Section -->
			
		  </p>
        </div>
      </div>
    </section><!-- End Introduction Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>The Insight Coders</h3>
            <p>
              <br>
              <strong style="color:orange;">Email:</strong> theinsightcoders@gmail.com<br>
			  <strong style="color:orange;">Telegram:</strong> The Insight Coders<br>
			  <strong style="color:orange;">Instagram:</strong> The Insight Coders<br>
			  <strong style="color:orange;">Facebook:</strong> The Insight Coders<br>
			  <strong style="color:orange;">Twitter:</strong> The Insight Coders<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color:orange;">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="../Codevita/CodevitaIntroduction.html">Codevita</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="../Infytq/InfytqIntroduction.html">Infytq</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="../nqt/NqtIntroduction.html">NQT</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="../patterns/PatternIntroduction.html">Patterns</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="https://www.youtube.com/watch?v=5E_RAclcqRs&list=PLgjc0A1c-mohYQ8qmW_4GaX6_L8wpzOUJ" target="_blank">Logic Building</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color:orange;">Study Material</h4>
            <ul>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="../python/PythonIntroduction.html">Python</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="../java/JavaIntroduction.html">Java</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="https://www.youtube.com/watch?v=f_YnTvBlwTg&list=PLgjc0A1c-mogWcbcyDzq_qYWc-MmEIDFv" target="_blank">Data Structures</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="https://www.youtube.com/watch?v=atQyiJQf3gk&list=PLgjc0A1c-mohs7cCIJLk9rB8qTkLb8n-j" target="_blank">DAA/ ADA</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="https://www.youtube.com/watch?v=Usy7-IXSqV0&list=PLgjc0A1c-moh65eBz1Q7bYCVMbxJHU-Qk" target="_blank">Essential of Information Technology</a></li>
              <li><i class="bx bx-chevron-right" style="color:orange;"></i> <a href="https://www.youtube.com/watch?v=bE_MYkWukwI&list=PLgjc0A1c-mogMbecoTJWWSRL450glE6aw" target="_blank">Searching & Sorting</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span style="color: orange;"> The Insight Coders</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>
<!-- End Footer -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- JS Files -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/jquery.easing.min.js"></script>
  <script src="../assets/js/validate.js"></script>
  <script src="../assets/js/jquery.sticky.js"></script>
  <script src="../assets/js/venobox.min.js"></script>
  <script src="../assets/js/jquery.waypoints.min.js"></script>
  <script src="../assets/js/counterup.min.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/isotope.pkgd.min.js"></script>
  <script src="../assets/js/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>