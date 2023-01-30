  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Bank Compare</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/yYaDPZbRRTk" target="_blank">Bank Compare</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 8 - <strong>Bank Compare</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								There are two banks – Bank A and Bank B. Their interest rates vary. You have received offers from both banks in terms of the annual rate of interest, tenure, and variations of the rate of interest over the entire tenure. You have to choose the offer which costs you least interest and reject the other. Do the computation and make a wise choice.
								<br><br>
								The loan repayment happens at a monthly frequency and Equated Monthly Installment (EMI) is calculated using the formula given below :
								<br>
								EMI = loanAmount * monthlyInterestRate / ( 1 – 1 / (1 + monthlyInterestRate)^(numberOfYears * 12))
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
								1 <= P <= 1000000
								<br>
								1 <=T <= 50
								<br>
								1<= N1 <= 30
								<br>
								1<= N2 <= 30
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<ul style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
							<li>First line: P principal (Loan Amount)</li>
							<li>Second line: T Total Tenure (in years).</li>
							<li>Third Line: N1 is the number of slabs of interest rates for a given period by Bank A. First slab starts from the first year and the second slab starts from the end of the first slab and so on.</li>
							<li>Next N1 line will contain the interest rate and their period.</li>
							<li>After N1 lines we will receive N2 viz. the number of slabs offered by the second bank.</li>
							<li>Next N2 lines are the number of slabs of interest rates for a given period by Bank B. The first slab starts from the first year and the second slab starts from the end of the first slab and so on.</li>
							<li>The period and rate will be delimited by single white space.</li>
								</ul>
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
							<p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">Your decision either Bank A or Bank B.</p>
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/yYaDPZbRRTk"  allowfullscreen>
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
									10000<br>
									20<br>
									3<br>
									5 9.5
								    <br>
									10 9.6
									<br>
									5 8.5
									<br>
									3
									<br>
									10 6.9
									<br>
									5 8.5
									<br>
								    5 7.9
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									Bank B<br>
									<br>
							</p>
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
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Example 2:</strong>
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input</strong><br>
									500000<br>
									26<br>
									3<br>
									13 9.5
								    <br>
									3 6.9
									<br>
									10 5.6
									<br>
									3
									<br>
									14 8.5
									<br>
									6 7.4
									<br>
								    6 9.6
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									Bank A<br>
									<br>
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
p = int(input())
t = int(input())
bank =[]

for k in range (2):
	n = int(input())
	sum1 = 0

    for i in range (n):
		yrs, slab = [float(x) for x in input().split()]
        yrs = int(yrs)
        sq=(1+slab)**(yrs * 12)
		emi= (p * (slab)) / (1-1 / sq)
		sum1= sum1 + emi
	bank.append(sum1)

	if (bank[0] < bank[1]):
		print("Bank A",end='')
	else:
		print("Bank B",end='')
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