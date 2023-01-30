  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Kth Largest Factor</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python, C</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/SAC-Cj4JcAM" target="_blank">Kth Largest Factor</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 5 - <strong>Kth Largest Factor</strong></h2>

							   <p style="text-align: justify; text-justify: inter-word; font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								A positive integer d is said to be a factor of another positive integer N if when N is divided by d, the remainder obtained is zero. For example, for number 12, there are 6 factors 1, 2, 3, 4, 6, 12. Every positive integer k has at least two factors, 1 and the number k itself.
								<br>
								Given two positive integers N and k, write a program to print the kth largest factor of N.
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
							<p style="text-align: justify; text-justify: inter-word; font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Constraints</strong>
								<br>
								1 <= N <= 10000000000
                                <br>
								1 < k <600
                                <br>
                                You can assume that N will have no prime factors which are larger than 13.
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								 The input is a comma-separated list of positive integer pairs (N, k)
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
                                The kth highest factor of N. If N does not have k factors, the output should be 1
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/SAC-Cj4JcAM"  allowfullscreen>
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
									12 3
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									4
									<br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation: </strong>
                                <br>
                                N is 12, k is 3. The factors of 12 are (1,2,3,4,6,12). The highest factor is 12 and the third largest factor is 4. The output must be 4
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
									30 9
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									1
									<br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation: </strong>
                                <br>
                                N is 30, k is 9. The factors of 30 are (1,2,3,5,6,10,15,30). There are only 8 factors. As k is more than the number of factors, the output is 1
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
                        <li><a data-toggle="tab" href="#c">C</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
from math import sqrt
n,k = [int(x) for x in input().split()]
cnt = 0
fact = []

for i in range(1, int(sqrt(n)+1)):
    if n%i==0:
        if i**2 != n:        # This case needed for perfect squares example 16, 64 etc.
            fact.append(i)
            fact.append(n//i)
            cnt += 2
        else:
            fact.append(i)
            cnt += 1

fact.sort()
print(fact)

if cnt > k :
    print(fact[-k])
else:
    print(1)
</code>
</pre>
						</div>
                            <div id="c" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
#include &lt;stdio.h&gt;
#include&lt;math.h&gt;
int main()
{
	long long n,k,i,flag=0, c=0;
	scanf("%ld",&n);
	scanf("%ld",&k);

	for(i=1; i <= sqrt(n); i++)
	{
	  if(n%i==0)
	  {
	  	 c++;
	  	 if (c==k)
	  	 {
	  	 	printf("%ld", n/i );
	  	 	flag = 1;
	  	 	break;
		 }
	  }
	}
	if (flag == 0)
		printf("1");
	return 0;
}
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