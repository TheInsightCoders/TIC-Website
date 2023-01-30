  
  <!-- ======= Header Section ======= -->
  <?php
    include "../includes/header.php";
  ?>
  <!----------------------------------->


  <main id="main">	
    <!-- ======= Introduction Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div>
            <img src="../assets/img/Codevita/TCSCodeVita2020.png" style="margin-left:5px; height:auto; width:100%" alt="">
          </div>

          <div class="portfolio-info">
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Prime Time Again</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/ewfcQCWCUQQ" target="_blank">Prime Time Again</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 26 - <strong>Prime Time Again</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								    <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
                                    <br>
                                    Here on earth, our 24-hour day is composed of two parts, each of 12 hours. Each hour in each part has a corresponding hour in the other part separated by 12 hours: the hour essentially measures the duration since the start of the day part. For example, 1 hour in the first part of the day is equivalent to 13, which is 1 hour into the second part of the day.
                                    <br><br>
                                    Now, consider the equivalent hours that are both prime numbers. We have 3 such instances for a 24-hour 2-part day:
                                    <br><br>
                                   5~17
                                   <br>
                                   7~19
                                   <br>
                                   11~23
                                   <br><br>
                                   Accept two natural numbers D, P >1 corresponding respectively to number of hours per day and number of parts in a day separated by a space. D should be divisible by P, meaning that the number of hours per part (D/P) should be a natural number. Calculate the number of instances of equivalent prime hours. Output zero if there is no such instance. Note that we require each equivalent hour in each part in a day to be a prime number.
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
								10 <= D < 500
								<br>
                                2 <= P < 50
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								Single line consists of two space separated integers, D and P corresponding to number of hours per day and number of parts in a day respectively
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Output must be a single number, corresponding to the number of instances of equivalent prime number, as described above
								<br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Time Limit </strong>
								<br>
								1
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ewfcQCWCUQQ"  allowfullscreen>
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
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example 1:</strong>
                                <br><br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
                                36 3
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
                                2
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation</strong><br>
                                In the given test case D = 36 and P = 3
                                <br>
                                Duration of each day part = 12
                                <br>
                                2~14~X
                                <br>
                                3~15~X
                                <br>
                                5~17~29 - instance of equivalent prime hours
                                <br>
                                7~19~31 - instance of equivalent prime hours
                                <br>
                                11~23~X
                                <br>
                                Hence the answers is 2.
                                <br><br>
							</p>
                            <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example 2:</strong>
                                <br><br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
                                49 7
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
                                0
                                <br><br>

                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation</strong><br>
                                Duration of each day part = 7
                                <br>
                                2~9~X~23~X~37~X
                                <br>
                                3~X~17~X~31~X~X
                                <br>
                                5~X~19~X~X~X~47
                                <br>
                                7~X~X~X~X~X~X
                                <br>
                                Hence there are no equivalent prime hours.
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
def checkPrime(n):
    if n <=1 :
        return False
    if n <=3:
        return True
    else:
        for i in range(3,n):
            if(n%i == 0):
                return False
        return True

############## Driver Code ##############
D,P = map(int,input().split())
H = D/P
N = H
res = 0

while N>1:
    i = 0
    cnt = 0
    while True:
        k = (i * H) + N
        # print(int(k))

        if checkPrime(int(k)) and k <= D:
            cnt = cnt+1

        if i == (P-1):
            break
        i += 1
    if cnt == P:
        res+=1
    N -=1
print(res, end = '')
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

   <!-- ======= Footer Section ======= -->
   <?php
    include "../includes/footer.php";
  ?>
  <!----------------------------------->