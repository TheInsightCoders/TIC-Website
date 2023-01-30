  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Counting Rock Samples</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/ks3nei0Qv94" target="_blank">Counting Rock Samples</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 9 - <strong>Counting Rock Samples</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Juan Marquinho is a geologist and he needs to count rock samples in order to send it to a chemical laboratory. He has a problem: The laboratory only accepts rock samples by a range of its size in ppm (parts per million).
								<br><br>
								Juan Marquinho receives the rock samples one by one and he classifies the rock samples according to the range of the laboratory. This process is very hard because the number of rock samples may be in millions.
								<br><br>
								Juan Marquinho needs your help, your task is to develop a program to get the number of rocks in each of the ranges accepted by the laboratory.
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
								10 <= S <= 10000
								<br>
								   1 <= R <= 1000000
								<br>
								1 <= size of Sample <= 1000
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								An positive integer S (the number of rock samples) separated by a blank space, and a positive integer R (the number of ranges of the laboratory); A list of the sizes of S samples (in ppm), as positive integers separated by space R lines where the ith line containing two positive integers, space separated, indicating the minimum size and maximum size respectively of the ith range.
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								BR lines where the ith line contains a single non-negative integer indicating the number of the samples which lie in the ith range.
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/ks3nei0Qv94"  allowfullscreen>
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
									10 2<br>
									345 604 321 433 704 470 808 718 517 811<br>
									300 350<br>
									400 700
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									2 4<br>
									<br>
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation: </strong>
                                <br>
                                There are 10 samples (S) and 2 ranges ( R ). The samples are 345, 604,811. The ranges are 300-350 and 400-700. There are 2 samples in the first range (345 and 321) and 4 samples in the second range (604, 433, 470, 517). Hence the two lines of the output are 2 and 4
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
									20 3<br>
									921 107 270 631 926 543 589 520 595 93 873 424 759 537 458 614 725 842 575 195 <br>
									1 100<br>
									50 600<br>
                                    1 1000
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									1  12  20<br>
									<br>
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation: </strong>
                                <br>
                                There are 20 samples and 3 ranges. The samples are 921, 107 195. The ranges are 1-100, 50-600 and 1-1000. Note that the ranges are overlapping. The number of samples in each of the three ranges are 1, 12 and 20 respectively. Hence the three lines of the output are 1, 12 and 20.
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
s, t = [int(x) for x in input().split()]
c = 0
result = []

Samples = [int(x) for x in input().split()]

for i in range (t):    # Input range1 and range2
    r1, r2 = [int(x) for x in input().split()]
    for j in Samples:
        if ((j >= r1) and (j <= r2)):
            c +=1

    result.append(c)
    c=0
for i in result:
    print(i, end =' ')
</code>
</pre>
						</div>

                            <div id="c" class="tab-pane fade">
<pre style="font-family:'Calibri'; font-size:16px; color:black; line-height:'1.4';">
<code>
#include &lt;stdio.h&gt;
int main()
{
	int samples[1000], result[100]
    int s,i,j,t,l1,l2,c=0, cnt =0;

	scanf("%d",&s);
	scanf("%d",&t);
	for(i=0;i&lt;s;i++)
        scanf("%d",&samples[i]);

	for(i=0;i&lt;t;i++)
	{
		scanf("%d %d",&l1,&l2);
		for(j=0;j&lt;s;j++)
		{
                 if((samples[j]>=l1)&&(samples[j]<=l2))
                     c++;
		}
		result[cnt++] = c;
		c=0;
	}
	for(i=0; i&lt;t; i++)
        printf("%d ", result[i]);
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