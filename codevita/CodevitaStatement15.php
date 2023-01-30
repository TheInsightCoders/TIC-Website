  
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
            <h3 style="font-size:30px; color: #fe350d;"><strong><center>Marathon Winner</center></strong></h3>
            <ul>
              <li style="font-size:18px; color: #ff7000;"><strong>Solution</strong>: Python</li>
              <li style="font-size:17px; color:  #28ca36;"><strong>Difficulty Level</strong>: Medium</li>
              <li style="font-size:18px;"><strong>Youtube</strong>: <a href="https://youtu.be/PMV_kVdE4xo" target="_blank">Marathon Winner</a></li>
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
							<h2 style="color:  #FF5733;">Codevita Problem 15 - <strong>Marathon Winner</strong></h2>

							   <p style="font-family:'Calibri'; font-size:18px; color:black; line-height:'1.4';">
								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Statement</strong>
								<br>
								Race is generally organized by distance but this race will be organized by time. In order to predict the winner we will check every 2 seconds
                                <br>
                                Let’s say total race time is 7 seconds we will check for (7-1) seconds.<br>
                                   For 7 sec : we will check who is leading at 2 sec, 4 sec, and 6 sec.<br>
                                   Participant who is leading more number of times is winner from prediction perspective.
                                <br>
                                Now our task is to predict a winner in this marathon.
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
                                1 <= N <= 100
								<br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Input Format</strong>
								<br>
								First line contains a single integer N denoting the number of participants.
                                <br>
                                Second line contains a single integer T denoting the total time in seconds of this Marathon
                                <br>
                                Next N lines (for each participant) are as follows :
                                <br>
                                We have T+1 integers seperated by space
                                <br>
                                First T integers are as follows :
                                <br>
                                ith integer denotes number of steps taken by the participant at the i-th second.
                                <br>
                                T+1st integer denotes the distance (in meters) of each step
                                <br><br>

								<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output Format</strong>
								<br>
								Index of Marathon winner, where index starts with 1
								<br><br>
							</p>
						</div>
					  </div>
					  <div class="col-lg-6 col-md-3 text-left" data-aos="fade-up">
						  <section class="about">
							  <div class="container">
								<div class="row no-gutters">
								  <div class="col-lg-5 video-box">
									<iframe style="margin-top:8px; width:100%; height:300px;" src="https://www.youtube.com/embed/PMV_kVdE4xo"  allowfullscreen>
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
									3<br>
                                    8<br>
                                    2 2 4 3 5 2 6 2 3
                                    <br>
                                    3 5 7 4 3 9 3 2 2
                                    <br>
                                    1 2 4 2 7 5 3 2 4
									<br><br>

									<strong style=" font-family:'Calibri'; font-size:20px; color:black;">Output</strong><br>
									2
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
from collections import Counter

n = int(input())
t = int(input())
participant = []
l = []
g = []

for i in range(n):
    k = list(map(int, input().split()))
    d = k[-1]
    k.pop()
    w = []
    sum1 = 0
    for i in k:
        q = i * d
        sum1 += q
        w.append(sum1)

    l.append(w)

for i in range(t):
    g.append(list(list(zip(*l))[i]))

for i in range(1, len(g), 2):
    m = max(g[i])
    for j in range(len(g[i])):
        if m == g[i][j]:
            participant.append(j + 1)

res = dict(Counter(participant))
l1 = list(res.values())
l2 = list(res.keys())

print(l2[l1.index(max(l1))])
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