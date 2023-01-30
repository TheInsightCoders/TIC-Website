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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Philaland Coins</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python, C++</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/XyBqVV6Xl8o" target="_blank">Philaland Coins</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 2 - <strong>Philaland Coins</strong></h2>

							   <p style="text-align: justify; text-justify: inter-word; font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								The problem solvers have found a new Island for coding and named it as Philaland. These smart people were given a task to make the purchase of items at the Island easier by distributing various coins with different values.
								<br><br>
								Manish has come up with a solution that if we make coins category starting from $1 till the maximum price of the item present on Island, then we can purchase any item easily. He added following example to prove his point. Let's suppose the maximum price of an item is 5$ then we can make coins of {$1, $2, $3, $4, $5} to purchase any item ranging from $1 to $5. Now Manisha, being a keen observer suggested that we could actually minimize the number of coins required and gave following distribution {$1, $2, $3}.
								<br><br>
								According to him, any item can be purchased one time ranging from $1 to $5. Everyone was impressed with both of them. Your task is to help Manisha come up with the minimum number of denominations for any arbitrary max price in Philaland.
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
								1 <= T <= 100
                                <br>
								1 <= N <= 5000
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								 First line contains an integer T denoting the number of test cases
                                <br>
                                Next T lines contains an integer N denoting the maximum price of the item present on Philaland.
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
                                For each test case print a single line denoting the minimum number of denominations of coins required
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/XyBqVV6Xl8o"  allowfullscreen>
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
									2
                                    <br>
                                    10
                                    <br>
                                    5
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									4<br>
                                    3<br>
									<br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation for Test Case 1, N=10: </strong>
                                <br>
                                According to Manish {$1, $2, $3,??? $10} must be  distributed. But as per Manisha only {$1, $2, $3, $4} coins are enough to purchase any item ranging from $1 to $10. Hence minimum is 4. Likewise denominations could also be {$1, $2, $3, $5}. Hence answer is still 4
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
									3
                                    <br>
                                    1
                                    <br>
                                    5
                                    <br>
                                    7
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									1<br>
                                    3<br>
                                    3<br>
									<br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation for Test Case 2, N=5: </strong>
                                <br>
                                According to Manish {$1, $2, $3, $4, $5} must be distributed. But as per Manisha only {$1, $2, $3} coins are enough to purchase any item ranging from $1 to $5. Hence minimum is 3. Likewise denominations could also be {$1, $2, $4}. Hence answer is still 3
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
                        <li><a data-toggle="tab" href="#menu1">C++</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
t = int(input())
arr = []

for i in range(t):
    n = int(input())
    cnt = 0
    while(n>0):
        n = n//2
        cnt +=1
    arr.append(cnt)

for j in range(len(arr)-1):
    print(arr[j])

print(arr[-1], end ='')
</code>
</pre>
						</div>
                            <div id="menu1" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
#include&lt;iostream&gt;
using namespace std;
int main()
{
   long int t, a[100], k=1;
   cin>>t;
   for(int j =1; j<=t; j++)
   {
   	  int n;
   	  cin>>n;
   	  int cnt=0;
   	  while(n>0)
   	  {
   	  	n = n/2;
		cnt++;
	  }
	  a[k]=cnt;
	  k++;
   }
   for (int i=1; i < k; i++)
   		printf("\n%d", a[i]);
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