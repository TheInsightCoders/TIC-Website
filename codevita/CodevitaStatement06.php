  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Collecting Candies</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/M-4fVVzNAPo" target="_blank">Collecting Candies</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 6 - <strong>Collecting Candies</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Krishna loves candies a lot, so whenever he gets them, he stores them so that he can eat them later whenever he wants to.
								<br><br>
								He has recently received N boxes of candies each containing Ci candies where Ci represents the total number of candies in the ith box. Krishna wants to store them in a single box. The only constraint is that he can choose any two boxes and store their joint contents in an empty box only. Assume that there are an infinite number of empty boxes available.
								<br><br>
								At a time he can pick up any two boxes for transferring and if both the boxes contain X and Y number of candies respectively, then it takes him exactly X+Y seconds of time. As he is too eager to collect all of them he has approached you to tell him the minimum time in which all the candies can be collected.
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
								1 < T < 10
                                <br>
								1 < N < 10000
                                <br>
								1 < [Candies in each box] <100009
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
                                <ul style=" font-family:'Calibri'; font-size:18px; color:black;">
                                    <li>The first line of input is the number of test case T</li>
                                    <li>Each test case is comprised of two inputs</li>
                                    <li>The first input of a test case is the number of boxes N</li>
                                    <li>The second input is N integers delimited by whitespace denoting the number of candies in each box</li>
                                </ul>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
                            <p style=" font-family:'Calibri'; font-size:18px; color:black;">Print minimum time required, in seconds, for each of the test cases. Print each output on a new line</p>
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/M-4fVVzNAPo"  allowfullscreen>
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
									1
                                    <br>
                                    4
                                    <br>
                                    1 2 3 4
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									19<br>
									<br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation: </strong>
                                <br>
                                4 boxes, each containing 1, 2, 3 and 4 candies respectively. Adding 1 + 2 in a new box takes 3 seconds. Adding 3 + 3 in a new box takes 6 seconds. Adding 4 + 6 in a new box takes 10 seconds. Hence total time taken is 19 seconds. There could be other combinations also, but overall time does not go below 19 seconds.
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
									1
                                    <br>
                                    5
                                    <br>
                                    1 2 3 4 5
									<br><br>
									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									34<br>
									<br>
                                <strong style=" font-family:'Calibri'; font-size:20px; color:black;">Explanation: </strong>
                                <br>
                                5 boxes, each containing 1, 2, 3, 4 and 5 candies respectively. Adding 1 + 2 in a new box takes 3 seconds. Adding 3 + 3 in a new box takes 6 seconds. Adding 4 + 5 in a new box takes 9 seconds. Adding 6 + 9 in a new box takes 15 seconds. Hence total time taken is 33 seconds. There could be other combinations also, but overall time does not go below 33 seconds.
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
T = int(input())
res = []
for i in range(0, T):
    arr = []
    N = int(input())

    candy = [int(x) for x in input().split()]
    candy.sort()

    while (len(candy)>=2):
        candy.sort()
        sum1 = candy[0] + candy[1]
        arr.append(sum1)
        candy.pop(0)
        candy.pop(0)
        candy.append(arr[-1])
    res.append(sum(arr))

    for r in res:
        print(r)
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