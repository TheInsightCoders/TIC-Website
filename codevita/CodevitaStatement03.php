  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Consecutive Prime Sum</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python, C++</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/zuvYZIcqXqg" target="_blank">Consecutive Prime Sum</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 3 - <strong>Consecutive Prime Sum</strong></h2>

							   <p style="text-align: justify; text-justify: inter-word; font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Some prime numbers can be expressed as Sum of other consecutive prime numbers. For example
								<br>
								5 = 2 + 3
                                   <br>
                                17 = 2 + 3 + 5 + 7
                                   <br>
                                41 = 2 + 3 + 5 + 7 + 11 + 13
                                   <br><br>
                                Your task is to find out how many prime numbers which satisfy this property are present in the range 3 to N subject to a constraint that summation should always start with number 2.
                                <br><br>
                                Write code to find out number of prime numbers that satisfy the above mentioned property in a given range.
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
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								 First line contains a number N
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
                                Print the total number of all such prime numbers which are less than or equal to N.
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/zuvYZIcqXqg"  allowfullscreen>
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
									20
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									2
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
									1000
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									5
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
                        <li><a data-toggle="tab" href="#c">C</a></li>
                      </ul>
                        <div class="tab-content">
                            <div id="python" class="tab-pane fade in active">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
n = int(input())
arr = []
count = 0

primes = [i for i in range(2,n+1) if all(i%j !=0 for j in range(2,int(i**0.5) + 1))]


for i in range(2, len(primes)):
    sum = 0
    for j in primes:
        sum += j
        if sum == primes[i]:
            count +=1
            break
        if sum > primes[i]:
            break
print(count)
</code>
</pre>
						</div>
                            <div id="c" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
#include&lt;stdio.h&gt;
#include&lt;conio.h&gt;
main()
{
	int n, i, j, check, A[1000], k=0, count =0;
//	printf("\n Upto How many prime no. you want to print :");
	scanf("%d", &n );

	// Prime No. Logic
	for (i=2; i<=n; i++)
    {
	 check=1;     // Set flag true

	 for(j=2; j<=i/2; j++)
      if (i%j==0)
	    { check = 0;     // Set flag false ( Not a prime number
	       break;        // go for next number
	    }

	 if (check ==1)
	 {
	   A[k] =i;
	   k++;
//	   printf("  %d ", i);
     }
	}

//	printf("\n%d", k);

	for(i=2; i < k; i++)
	{
		int sum = 0;
		for (j = 0; j < k; j++)
		{
			sum = sum + A[j];
			if (sum == A[i])
			{
				count++;
				break;
			}
			if (sum > A[i])
			{
				break;
			 }
		}
	}
	printf("%d", count);
    getch();
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