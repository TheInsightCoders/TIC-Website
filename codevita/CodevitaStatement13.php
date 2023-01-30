  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Minimum Combinations</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/4GgKTRR9Iu8" target="_blank">Minimum Combinations</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 13 - <strong>Minimum Combinations</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Alexander The great, while roaming the stretch of Turkey, came across a wise man. He asked the wise man, “Who is the greatest conqueror of all?”. The wise man replied, “A person with great strength and intelligence. Whosoever can solve my puzzle will go on to become the greatest!”.
								<br><br>
								The puzzle is as follows: Given two integers ‘n1’ and ‘n2’, select two integers ‘a’ and ‘b’, such as to solve the equation (n1 * a + n2 * b = x). But there is a catch, ‘x’ is the smallest positive integer which satisfies the equation. Can you help Alexander become the greatest?
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
								1 <= T <= 1000
								<br>
                                -10^7 <= a
								<br>
								b <= 10^7
								<br>
								0 <= n1
                                <br>
                                n2 <= 10^7
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								The first line contains the number of Test cases T. Next T lines contains two space-separated integers, n1 and n2
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Print the value of x
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/4GgKTRR9Iu8"  allowfullscreen>
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
									1<br>
									34818 45632
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									2
                                <br><br>
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation: </strong>
                                <br>
                                    Given n1 = 34818 and n2 = 45632,<br>

if we choose a = 3553 and b = -2711, we get <br>
n1 * a + n2 * b = x <br>
34818 * 3553 + 45632 * (-2711) <br>
2
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
def gcd(a, b):
	# Everything divides 0
	if (b == 0):
		return a
	return gcd(b, a % b)

t = int(input())
result = []
for i in range (t):
	a,b = [int(x) for x in input().split()]
	result.append(gcd(a,b))

for i in result:
    print(i, end =' ')
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